<?php 

require_once "../config.php";
     
$email = $_POST["email"];
$objet = $_POST['object'];
$content = $_POST['message'];
$headers = "From:".$_POST["email"]."\r\n Reply-To:".$_POST["email"]."\r\n X-Mailer: PHP/".phpversion();

if(mail($email,$objet,$content,$headers)){
//le mail est bien parti ! Pas d'erreur
}else{
//on a une erreur quelque part
}


//header('Location:../index.php');
exit();

?>