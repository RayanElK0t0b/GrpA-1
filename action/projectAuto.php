<?php
include("../config.php");
print_r($_SESSION['oui']);
$sql = "UPDATE textes SET text=:text WHERE id_projet ='".$_SESSION['oui']['id_projet']."'";
$dataBinded=array(
    ':text'   => $_POST['titreProj']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
?>