<?php
  require "../config.php";

  $a=$_POST['project'];
  print_r($a);

    $sql = "DELETE FROM projets WHERE id_projet='$a'";
    $pre = $pdo->prepare($sql);
    $pre->execute();

    $sql = "DELETE FROM carousel WHERE project_id='$a'";
    $pre = $pdo->prepare($sql);
    $pre->execute();

    $sql = "DELETE FROM textes WHERE id_projet='$a'";
    $pre = $pdo->prepare($sql);
    $pre->execute();

    $sql = "DELETE FROM images WHERE id_projet='$a'";
    $pre = $pdo->prepare($sql);
    $pre->execute();

    $sql = "DELETE FROM paragraphes WHERE id_projet='$a'";
    $pre = $pdo->prepare($sql);
    $pre->execute();

  header("Location:..\adminpanel.php");
  exit();

?>