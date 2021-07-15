<?php

$server = "epiz_29140712_portfolio	";
$username = "epiz_29140712";
$password = "y0acUmV8XAetct";
$dbname = "epiz_29140712_portfolio";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}

?>