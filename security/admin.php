<?php 
require_once "config.php";

if( isset($_SESSION['user'])){
    if($_SESSION['user']['admin'] == 1 ){ //vérifie si le user est un admin
        header('Location:index.php');//on le redirige sur le panel admin

    }else{
        header('Location:index.php');//on le redirige sur la page d'accueil du site
    }
}else{
    header('Location:index.php');//on le redirige sur la page d'accueil du site
}
?>