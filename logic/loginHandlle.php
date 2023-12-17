<?php 
include("../config/config.php");
$userName = $_POST['username'];
$passWord = $_POST['password'];

//Login 

$requette = 'SELECT * FROM admin WHERE username = :username';
$statement = $connection -> prepare($requette);
$execution = $statement -> execute(
    [':username' => $userName]
);

$data = $execution ? $statement-> fetch(PDO::FETCH_ASSOC):  [];
if ($data['password'] == $passWord && $data['username'] == $userName) {

    echo "Connection Succed";
    header("Location:/home.php");
}