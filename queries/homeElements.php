<?php

$sql = "SELECT * FROM home"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$home = $pre->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM carousel"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$carousel = $pre->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM textes"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$textes = $pre->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM images"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$images = $pre->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM paragraphes"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$paragraphes = $pre->fetchAll(PDO::FETCH_ASSOC);

?>