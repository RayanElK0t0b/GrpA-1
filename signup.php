<?php 
require_once "config.php"; 
$sql = "INSERT INTO user(email,password) VALUES(:email,:password)";
$dataBinded=array(
    ':username'=> $_POST['username'],
    ':fname'   => $_POST['fname'],
    ':lname'   => $_POST['lname']
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:index.php');
?>