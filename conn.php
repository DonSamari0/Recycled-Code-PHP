
<?php
$server = 'localhost';
$username = 'siraem';
$password = 'siraem';
$database = 'siraem_database';
try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage('Falla en conexion'));
}
?>