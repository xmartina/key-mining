<?php
$serverUrl = "REQUEST_URI";
$uri = $_SERVER[$serverUrl];

if ( $uri = $_SERVER[$serverUrl] == $uri) {
    echo require_once ($serverUrl);
} elseif ( $uri = $_SERVER[$serverUrl] == in_array($uri, [$uri,'/about-us','aboutus'],true)) {
    echo require_once ('about.php');
} elseif ( $uri = $_SERVER[$serverUrl] == in_array($uri, [$uri,'/','aboutus'],true)) {
    echo require_once ('about.php');
} else{
    echo require_once ('index.php');
}


?>