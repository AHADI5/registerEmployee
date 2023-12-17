<?php 
include("../config/config.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

$userName = $_POST['username'];
$passWord = $_POST['password'];

//Login 

$requette = 'SELECT * FROM ADMIN WHERE username = :username';
$statement = $connection -> prepare($requette);
$execution = $statement -> execute(
    [':username' => $userName]
);


$data = $execution ? $statement-> fetch(PDO::FETCH_ASSOC):  [];
if ($data['password'] == $passWord && $data['username'] == $userName) {
    session_start();
    $_SESSION['username'] = $data['Admin'];
    echo "Connection Succed";
    header("Location:../view/home.php");
} else {
    header("Location:../view/login.php");
}