<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'voyage';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("impossible de se connecter " . mysqli_connect_error());
}
