<?php 

require_once "config.php"; 
$sql = "SELECT * FROM projets " 
$pre = $pdo->prepare($sql); 
$pre->execute();
$pjt = $pre->fetch(PDO::FETCH_ASSOC);

?>