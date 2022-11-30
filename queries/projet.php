<?php 
 include("config.php");

$sql = "SELECT * FROM user WHERE "; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);

header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>