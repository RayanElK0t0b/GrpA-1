<?php 

$sql = "SELECT * FROM textes WHERE id_projet='".$_GET['id']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$textes = $pre->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM images WHERE id_projet='".$_GET['id']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$images = $pre->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM paragraphes WHERE id_projet='".$_GET['id']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$paragraphes = $pre->fetchAll(PDO::FETCH_ASSOC);
?>
