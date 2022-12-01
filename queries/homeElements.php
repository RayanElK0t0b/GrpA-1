<?php
$sql = "SELECT * FROM home"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$home = $pre->fetch(PDO::FETCH_ASSOC);
?>