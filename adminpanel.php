<?php
include("config.php");
include("queries/homeElements.php");
//require "security/admin.php";
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@600&display=swap" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>RKGR Editing</title>
  </head>

  <body>

    <!--Navigation Bar-->

    <nav id=navbar class="grey darken-4">
      <div class="nav-wrapper">
        <a href="index.php" class="hide-on-small-only">
          <img src="img/logo_small.png" alt="Logo RKGR">
        </a>
      </div>
    </nav>

    <div class="parallax-container">
      <div class="parallax"><img src="img/videoeditor.webp" alt="Video Editor Picture"></div>
    </div>

    <h1 class="title center secondary no-space">RKGR ADMIN PANEL</h1>

    <!--User Gestion section-->

    <div id="about-us" class="about-us primary">
      <div class="row">
        <div class="col l4 m4 s10 offset-l4 offset-m2 offset-s2">
          <h2 class="title">User Gestion</h2>
          <div>
            <?php
              $sql = "SELECT * FROM user";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $data = $pre->fetchAll(PDO::FETCH_ASSOC);

              foreach($data as $user){ ?>
            <div class="bloc_user">
              <p><?php echo $user['first_name']." ".$user['last_name']." aka ".$user['username']." admin = ".$user['admin'] ?></p>
              <form action="action\toogle-admin.php" method="post">
                <input type="hidden" name="user" value="<?php echo $user['username'];?>">
                <input type="hidden" name="rank" value="<?php echo $user['admin'];?>">
                <input class="btn secondary" type="submit" name="Toogle Admin" value="Toogle Admin">
              </form>
              <br>
              <form action="action\delete-user.php" method="post">
                <input type="hidden" name="user" value="<?php echo $user['username'];?>">
                <input class="btn secondary" type='submit' name="Delete User" value="delete User">
              </form>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="row primary">
        <div class="col l4 m4 s10 offset-l4 offset-m2 offset-s2">
          <h2 class="title">Project Gestion</h2>
          <div>
            <?php
              $sql = "SELECT * FROM projets";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $projets = $pre->fetchAll(PDO::FETCH_ASSOC);
              foreach($projets as $proj){

                $sql = "SELECT * FROM textes WHERE id_projet ='".$proj['id_projet']."'";
                $pre = $pdo->prepare($sql);
                $pre->execute();
                $textes = $pre->fetchAll(PDO::FETCH_ASSOC);

                $sql = "SELECT * FROM paragraphes WHERE id_projet ='".$proj['id_projet']."'";
                $pre = $pdo->prepare($sql);
                $pre->execute();
                $paragraphes = $pre->fetchAll(PDO::FETCH_ASSOC);

                $sql = "SELECT * FROM images WHERE id_projet ='".$proj['id_projet']."'";
                $pre = $pdo->prepare($sql);
                $pre->execute();
                $images = $pre->fetchAll(PDO::FETCH_ASSOC);

                $sql = "SELECT * FROM carousel WHERE project_id ='".$proj['id_projet']."'";
                $pre = $pdo->prepare($sql);
                $pre->execute();
                $carousel = $pre->fetchAll(PDO::FETCH_ASSOC);
                ?>

                <div class="bloc_projets">
                  <p><?php echo $proj['name']?></p>
                  <form action="action\projectAuto.php" method="post">
                    <p>Titre</p>
                    <textarea name="titreProj" class="primary"><?php echo $textes[0]['text'] ?></textarea>
                    <p>Chiffre 1</p>
                    <textarea name="c1" class="primary"><?php echo $textes[1]['text'] ?></textarea>
                    <p>Chiffre 2</p>
                    <textarea name="c2" class="primary"><?php echo $textes[2]['text'] ?></textarea>
                    <p>Chiffre 3</p>
                    <textarea name="c3" class="primary"><?php echo $textes[3]['text'] ?></textarea>
                    <p>Chiffre 4</p>
                    <textarea name="c4" class="primary"><?php echo $textes[4]['text'] ?></textarea>
                    <p>Role</p>
                    <textarea name="titreRole" class="primary"><?php echo $textes[5]['text'] ?></textarea>
                    <p>Compétence 1</p>
                    <textarea name="compet1" class="primary"><?php echo $textes[6]['text'] ?></textarea>
                    <p>Compétence 2</p>
                    <textarea name="compet2" class="primary"><?php echo $textes[7]['text'] ?></textarea>
                    <p>Présentation Client</p>
                    <textarea name="descClient" class="primary"><?php echo $paragraphes[0]['paragraphe'] ?></textarea>
                    <p>Présentation Rôle</p>
                    <textarea name="descRole" class="primary"><?php echo $paragraphes[1]['paragraphe'] ?></textarea>
                    <p>Présentation Compétence 1</p>
                    <textarea name="descCompet1" class="primary"><?php echo $paragraphes[2]['paragraphe'] ?></textarea>
                    <p>Présentation Compétence 2</p>
                    <textarea name="descCompet2" class="primary"><?php echo $paragraphes[3]['paragraphe'] ?></textarea>
                    <p>Image Carrousel</p>
                    <textarea name="imgCarousel" class="primary"><?php echo $carousel[0]['img_url'] ?></textarea>
                    <p>Image Client</p>
                    <textarea name="imgClient" class="primary"><?php echo $images[0]['img_url'] ?></textarea>
                    <p>Image Compétence 1</p>
                    <textarea name="imgComp1" class="primary"><?php echo $images[1]['img_url'] ?></textarea>
                    <p>Image Compétence 2</p>
                    <textarea name="imgComp2" class="primary"><?php echo $images[2]['img_url'] ?></textarea>
                    <input class="btn secondary" type="submit" name="Valider" value="Valider">
                  </form>
                  <form action="action\delete-project.php" method="post">
                    <input type="hidden" name="project" value="<?php echo $proj['id_projet'];?>">
                    <input class="btn secondary" type='submit' name="Delete Project" value="Delete Project">
                  </form>
                </div>
                <?php } ?>
                <a href="newprojet.php" class="btw secondary">Create</a>
              </div>
          </div>
        </div>
      </div>
      <div class="row primary">
        <div class="col l4 m4 s10 offset-l4 offset-m2 offset-s2">
          <h2 class="title">Main Page Change</h2>
          <div>
            <?php

            $sql = "SELECT * FROM home";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $data = $pre->fetch(PDO::FETCH_ASSOC);

            ?>
            <form class="primary" action="action\firstpage.php" method="post" enctype="multipart/form-data">
              <p>Title page</p>
              <textarea class="primary" name="title"><?php echo $home['title'] ?></textarea>
              <p>Navbar partie 1</p>
              <textarea class="primary" name="navbarsec1"><?php echo $home['navbarsec1'] ?></textarea>
              <p>Navbar parti 2</p>
              <textarea class="primary" name="navbarsec2"><?php echo $home['navbarsec2'] ?></textarea>
              <p>Title</p>
              <textarea class="primary" name="h1"><?php echo $home['h1'] ?></textarea>
              <p>partie 1</p>
              <textarea class="primary" name="sec1"><?php echo $home['sec1'] ?></textarea>
              <p>nom premiere personne</p>
              <textarea class="primary" name="nom1"><?php echo $home['nom1'] ?></textarea>
              <p>competence premiere personne</p>
              <textarea class="primary" name="comp1"><?php echo $home['comp1'] ?></textarea>
              <p>description premiere personne</p>
              <textarea class="primary" name="desc1"><?php echo $home['desc1'] ?></textarea>
              <p>nom deuxieme personne</p>
              <textarea class="primary" name="nom2"><?php echo $home['nom2'] ?></textarea>
              <p>competence deuxieme personne</p>
              <textarea class="primary" name="comp2"><?php echo $home['comp2'] ?></textarea>
              <p>description deuxieme personne</p>
              <textarea class="primary" name="desc2"><?php echo $home['desc2'] ?></textarea>
              <p>partie 2</p>
              <textarea class="primary" name="sec2"><?php echo $home['sec2'] ?></textarea>
              <p>text partie 2</p>
              <textarea class="primary" name="txtsec2"><?php echo $home['txtsec2'] ?></textarea>
              <p>text footer</p>
              <textarea class="primary" name="footertxt"><?php echo $home['footertxt'] ?></textarea>
              <img src="<?php echo $data['logo'] ?>" width="50px">
              <input type="file" name="logo">
              <br>
              <img src="<?php echo $data['parallax'] ?>" width="50px">
              <input type="file" name="parallax">
              <br>
              <img src="<?php echo $data['img1'] ?>" width="50px">
              <input type="file" name="img1">
              <br>
              <img src="<?php echo $data['img2'] ?>" width="50px">
              <input type="file" name="img2">
              <br>
              <input type="submit" name="Valider" value="Valider">
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--Footer-->

    <footer id=contact class="page-footer primary">
      <div class="footer-copyright">
        <div class="container">
          © 2022 Copyright Text
          <p class="right hide-on-small-only">All Rights Reserved</p>
        </div>
      </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </body>

</html>