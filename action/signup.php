<?php 

require_once "../config.php"; 

$sql = "SELECT * FROM user";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$users = $pre->fetchAll(PDO::FETCH_ASSOC);

$dataBinded=array(
    ':username'=> $_POST['username'],
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':fname'   => $_POST['fname'],
    ':lname'   => $_POST['lname'],
);
$sql = "INSERT INTO user(username,email,password,fname,lname) VALUES(:username,:email,:password,:fname,:lname)";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');

?>