<?php require_once "../config.php";

  $sql = "UPDATE home SET title=:title, navbarsec1=:navbarsec1, navbarsec2 =:navbarsec2, h1 =:h1, sec1 =:sec1, nom1 =:nom1, comp1 =:comp1, desc1 =:desc1, nom2 =:nom2, comp2 =:comp2, desc2 =:desc2, sec2 =:sec2, txtsec2 =:txtsec2, footertxt =:footertxt";
  $dataBinded=array(
    ':title'=>$_POST['title'],
    ':navbarsec1'=>$_POST['navbarsec1'],
    ':navbarsec2'=>$_POST['navbarsec2'],
    ':h1'=>$_POST['h1'],
    ':sec1'=>$_POST['sec1'],
    ':nom1'=>$_POST['nom1'],
    ':comp1'=>$_POST['comp1'],
    ':desc1'=>$_POST['desc1'],
    ':nom2'=>$_POST['nom2'],
    ':comp2'=>$_POST['comp2'],
    ':desc2'=>$_POST['desc2'],
    ':sec2'=>$_POST['sec2'],
    ':txtsec2'=>$_POST['txtsec2'],
    ':footertxt'=>$_POST['footertxt'],

  );
if (!empty($_FILES['logo']['name'])){
  $destination = "img/".$_FILES['logo']['name']; //dossier "upload"
  move_uploaded_file($_FILES['logo']['tmp_name'],"../".$destination);
  $sql=$sql.", logo=:logo";
  $dataBinded[':logo']=$destination;
}

if (!empty($_FILES['parallax']['name'])){
  $destination = "img/".$_FILES['parallax']['name']; //dossier "upload"
  move_uploaded_file($_FILES['parallax']['tmp_name'],"../".$destination);
  $sql=$sql.", parallax=:parallax";
  $dataBinded[':parallax']=$destination;
}
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

  $sql = $sql.";";
  $pre = $pdo->prepare($sql); 
    $pre->execute($dataBinded);

  header('Location:..\adminpanel.php');
  exit();
?>

       