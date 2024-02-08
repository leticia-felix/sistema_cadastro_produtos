<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
  $PDO = new PDO("mysql:host=$servername;dbname=controle_de_estoque", $username, $password);
  // set the PDO error mode to exception
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>


