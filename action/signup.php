<?php

require_once "../config.php";
$sql = "INSERT INTO user(username,email,password,first_name,last_name,admin) VALUES(:username,:email,:password,:first_name,:last_name,0)";
$dataBinded=array(
    ':username'=> $_POST['username'],
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':fname'   => $_POST['fname'],
    ':lname'   => $_POST['lname']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');

?>