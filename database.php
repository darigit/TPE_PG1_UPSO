<?php

$server = 'localhost';
$username = 'root';
$password = '1234';
$database = 'php_login';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
