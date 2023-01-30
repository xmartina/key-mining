<?php
require_once ('config.php');
$serverUrl = "REQUEST_URI";
$uri = $_SERVER[$serverUrl];
$homeURL ="/keymining";
$aboutURL = "/keymining/about-us";
$faqURL = "/keymining/faq";

if ( $uri = $_SERVER[$serverUrl] === $homeURL) {
    echo require_once ('home.php');
} elseif ( $uri = $_SERVER[$serverUrl] === $aboutURL) {
    echo require_once ('about.php');
} elseif ( $uri = $_SERVER[$serverUrl] === $faqURL) {
    echo require_once ('faq.php');
} else{
    echo "404 Not found";
}
?>