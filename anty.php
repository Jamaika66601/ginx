<?php

$config = require "anty2.php";
$allowedIsps = $config['allowed_isps'];
$allowedCountries = $config['allowed_countries'];

// Check if getClientIp() function already exists to prevent redeclaration.
if (!function_exists('getClientIp')) {
    function getClientIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($ips[0]);
        } else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }
}

$visitorIp = getClientIp();

$ipApiUrl = "http://ip-api.com/json/{$visitorIp}?fields=isp,country,regionName,city";
$response = @file_get_contents($ipApiUrl);

// Check if logAccessAttempt() function already exists to prevent redeclaration.
if (!function_exists('logAccessAttempt')) {
    function logAccessAttempt($ip, $isp, $country, $region, $city, $blocked)
    {
        $logFile = 'access_log_isp.txt';
        $timestamp = date('Y-m-d H:i:s');
        $status = $blocked ? 'BLOCKED' : 'ALLOWED';
        $logEntry = "[$timestamp] IP: $ip, ISP: $isp, Country: $country, Region: $region, City: $city, Status: $status" . PHP_EOL;
        file_put_contents($logFile, $logEntry, FILE_APPEND);
    }
}

// Check if send_telegram_msg() function already exists to prevent redeclaration.
if (!function_exists('send_telegram_msg')) {
    function send_telegram_msg($message)
    {
        $telegramApiUrl = "https://api.telegram.org/bot<your-bot-token>/sendMessage";
        $chatId = "<your-chat-id>";

        $data = [
            'chat_id' => $chatId,
            'text' => $message
        ];

        $options = [
            'http' => [
                'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context  = stream_context_create($options);
        $result = file_get_contents($telegramApiUrl, false, $context);

        return $result !== false;
    }
}

if ($response !== false) {
    $data = json_decode($response, true);

    if (isset($data['isp']) && isset($data['country'])) {
        $visitorIsp = $data['isp'];
        $visitorCountry = $data['country'];
        $visitorRegion = $data['regionName'] ?? 'Unknown';
        $visitorCity = $data['city'] ?? 'Unknown';

        $ispAllowed = in_array('*', $allowedIsps) || array_filter($allowedIsps, fn ($allowedIsp) => stripos($visitorIsp, $allowedIsp) !== false);
        $countryAllowed = in_array('*', $allowedCountries) || in_array($visitorCountry, $allowedCountries);

        $accessGranted = $ispAllowed && $countryAllowed;

        logAccessAttempt($visitorIp, $visitorIsp, $visitorCountry, $visitorRegion, $visitorCity, !$accessGranted);

        if (!$accessGranted) {
            send_telegram_msg("Blocked access from IP: $visitorIp, ISP: $visitorIsp, Country: $visitorCountry");
            header('Location: error.php');
            exit;
        }
    } else {
        logAccessAttempt($visitorIp, 'Unknown', 'Unknown', 'Unknown', 'Unknown', true);
        send_telegram_msg("Blocked access from unknown location");
        header('Location: error.php');
        exit;
    }
} else {
    logAccessAttempt($visitorIp, 'Unknown', 'Unknown', 'Unknown', 'Unknown', true);
    send_telegram_msg("Blocked access - IP API failure");
    header('Location: error.php');
    exit;
}
