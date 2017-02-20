<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

error_reporting(-1);

$server = "10.2.35.3";
$user = "UserLWPrint";
$pw = "nJufvYjq4W6ZYcCb";

$conn = mysqli_connect($server, $user, $pw);
var_dump($conn);

?>