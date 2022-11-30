<?php 

require_once "../config.php"; 

$sql = "INSERT INTO contact(fname,lname,email,phone,object,message) VALUES(:fname,:lname,:email,:phone,:object,:message)";
$dataBinded=array(
    ':fname'   => $_POST['fname'],
    ':lname'   => $_POST['lname'],
    ':email'   => $_POST['email'],
    ':phone'   => $_POST['phone'],
    ':object'   => $_POST['object'],
    ':message'   => $_POST['message'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');

?>