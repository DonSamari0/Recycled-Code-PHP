
<?php
$server = 'localhost';
$username = 'xxx';
$password = 'xxx';
$database = 'xxx_database';
try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage('Falla en conexion'));
}
?>
