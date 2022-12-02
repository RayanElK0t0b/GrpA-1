<?php
  require "../config.php";

  $a=$_POST['user'];

    $sql = "DELETE FROM user WHERE username='$a'";
    $pre = $pdo->prepare($sql);
    $pre->execute();

  header("Location:..\adminpanel.php");
  exit();

?>
