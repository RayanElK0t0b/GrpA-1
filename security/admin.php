<?php 
require_once "config.php";

$sql = "SELECT * FROM user WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);

if( isset($_SESSION['user'])){
    if($user['admin'] == 1 ){ //vérifie si le user est un admin
        header('Location:index.php');//on le redirige sur le panel admin

    }else{
        header('Location:index.php');//on le redirige sur la page d'accueil du site
    }
}else{
    header('Location:index.php');//on le redirige sur la page d'accueil du site
}
?>