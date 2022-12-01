<?php require_once "config.php";

  $sql = "UPDATE home SET title=:h1, navbarsec1=:h2, navbarsec2 =:p1, parallax =:p2 ";
  $dataBinded=array(

  ':h1'=>$_POST['h1'],
  ':h2'=>$_POST['h2'],
  ':p1'=>$_POST['p1'],
  ':p2'=>$_POST['p2'],


  );
  if (!empty($_FILES['img1']['name'])){
    $destination = "img/".$_FILES['img1']['name']; //dossier "upload"
    move_uploaded_file($_FILES['img1']['tmp_name'],"../".$destination);
    $sql=$sql.", img1=:img1";
    $dataBinded[':img1']=$destination;
  }

  if (!empty($_FILES['img2']['name'])){
    $destination = "img/".$_FILES['img2']['name']; //dossier "upload"
    move_uploaded_file($_FILES['img2']['tmp_name'],"../".$destination);
    $sql=$sql.", img2=:img2";
    $dataBinded[':img2']=$destination;
  }

  $pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
    $pre->execute($dataBinded);

      header('Location:..\panel_admin.php');
      exit();
?>