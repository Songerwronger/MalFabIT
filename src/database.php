<?php

$host = "5.75.145.223";
$dbname = "login_db";
$username = "admin";
$password = "fIez7FjshC9L3Djv9ocjXt";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

