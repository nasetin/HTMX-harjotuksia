<?php

$host = 'mysql_db';
$user = 'root';
$password = 'root';
$dbname = 'jackets';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>