<?php
  require "../config.php";

  $a=$_POST['user'];
  $admin_state = $_POST['rank'];

  if ($admin_state == 0)
  {
    $sql = "UPDATE user SET admin = '1' WHERE username='$a'";
    $pre = $pdo->prepare($sql);
    $pre->execute();
  }
  elseif ($admin_state == 1)
  {
    $sql = "UPDATE user SET admin = '0' WHERE username='$a'";
    $pre = $pdo->prepare($sql);
    $pre->execute();
  };

  header("Location:..\adminpanel.php");
  exit();

?>