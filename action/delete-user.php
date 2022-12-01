<?php
  require "../config.php";

  $a=$_POST['user'];
    
    $sql = "DELETE user SET admin = '1' WHERE username='$a'";
    $pre = $pdo->prepare($sql);
    $pre->execute();

  header("Location:..\adminpanel.php");
  exit();

?>