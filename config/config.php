<?php

$serverName = 'localhost';
$userName = 'root';
$passWord = 'root';
$databaseName = 'agents';

try {
  $connection = new PDO("mysql:host=$serverName;
  dbname=$databaseName",$userName,$passWord);
  //set the PDO error mode to exception 
  $connection -> setAttribute(PDO::ATTR_ERRMODE,
  PDO::ERRMODE_EXCEPTION);
  // echo "Connected Successfully";
} catch (PDOException $e) {
  echo "Connection failed : " . $e -> getMessage(); 
}