<?php

require_once "../config.php";
$sql = "INSERT INTO projets(name) VALUES(:nomProj)";
$dataBinded=array(
    ':nomProj'=> $_POST['nomProj']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

$sql = "INSERT INTO carousel(img_url) VALUES(:imgCarousel)";
$dataBinded=array(
    ':imgCarousel'=> $_POST['imgCarousel']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../adminpanel.php');
exit();

?>