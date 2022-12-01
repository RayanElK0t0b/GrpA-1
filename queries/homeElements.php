<?php

$sql = "SELECT * FROM home"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$home = $pre->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM carousel"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$carousel = $pre->fetchAll(PDO::FETCH_ASSOC);

?>