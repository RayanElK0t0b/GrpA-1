<?php
require_once "../config.php";
$sql = "UPDATE textes SET text=:text WHERE id_projet = :oui AND type = 1";
$dataBinded=array(
    ':text'   => $_POST['titreProj'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE textes SET text=:text WHERE id_projet = :oui AND type = 2";
$dataBinded=array(
    ':text'   => $_POST['c1'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE textes SET text=:text WHERE id_projet = :oui AND type = 3";
$dataBinded=array(
    ':text'   => $_POST['c2'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE textes SET text=:text WHERE id_projet = :oui AND type = 4";
$dataBinded=array(
    ':text'   => $_POST['c3'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE textes SET text=:text WHERE id_projet = :oui AND type = 5";
$dataBinded=array(
    ':text'   => $_POST['c4'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE textes SET text=:text WHERE id_projet = :oui AND type = 6";
$dataBinded=array(
    ':text'   => $_POST['titreRole'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE textes SET text=:text WHERE id_projet = :oui AND type = 7";
$dataBinded=array(
    ':text'   => $_POST['compet1'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE textes SET text=:text WHERE id_projet = :oui AND type = 8";
$dataBinded=array(
    ':text'   => $_POST['compet2'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE paragraphes SET paragraphe=:text WHERE id_projet = :oui AND type = 1";
$dataBinded=array(
    ':text'   => $_POST['descClient'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE paragraphes SET paragraphe=:text WHERE id_projet = :oui AND type = 2";
$dataBinded=array(
    ':text'   => $_POST['descRole'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE paragraphes SET paragraphe=:text WHERE id_projet = :oui AND type = 3";
$dataBinded=array(
    ':text'   => $_POST['descCompet1'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE paragraphes SET paragraphe=:text WHERE id_projet = :oui AND type = 4";
$dataBinded=array(
    ':text'   => $_POST['descCompet2'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE images SET img_url=:text WHERE id_projet = :oui AND type = 4";
$dataBinded=array(
    ':text'   => $_POST['imgClient'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE images SET img_url=:text WHERE id_projet = :oui AND type = 4";
$dataBinded=array(
    ':text'   => $_POST['imgComp1'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "UPDATE images SET img_url=:text WHERE id_projet = :oui AND type = 4";
$dataBinded=array(
    ':text'   => $_POST['imgComp2'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

$sql = "UPDATE carousel SET img_url=:text WHERE id_projet = :oui";
$dataBinded=array(
    ':text'   => $_POST['imgCarousel'],
    ':oui'    => $_POST['project']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


header("Location: ../adminpanel.php");
?>