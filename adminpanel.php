<?php
include("config.php");
include("queries/homeElements.php");
include("queries/projectsElements.php")
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
                <input type="submit" name="Toogle Admin" value="Toogle Admin">
              </form>
              <form action="action\delete-user.php" method="post">
                <input type="hidden" name="user" value="<?php echo $user['username'];?>">
                <input type='submit' name="Delete User" value="delete User">
              </form>
            </div>
            <?php } ?>
          </div>   
        </div>
      </div>
      <div class="row">
        <div class="col l4 m4 s10 offset-l4 offset-m2 offset-s2">
          <h2 class="title">Project Gestion</h2>
          <div>
            <?php
              $sql = "SELECT * FROM projets"; 
              $pre = $pdo->prepare($sql); 
              $pre->execute();
              $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    
              foreach($data as $user){ ?>
            <div class="bloc_projets">
              <p><?php echo $user['name']?></p>
              <form action="action\firstpage.php" method="post">
                <p>Nom du projet</p>
                <textarea name="nomProj"><?php echo $home['title'] ?></textarea>
                <p>Titre</p>
                <textarea name="titreProj"><?php echo $home['navbarsec1'] ?></textarea>
                <p>Chiffre 1</p>
                <textarea name="c1"><?php echo $home['navbarsec2'] ?></textarea>
                <p>Chiffre 2</p>
                <textarea name="c2"><?php echo $home['parallax'] ?></textarea>
                <p>Chiffre 3</p>
                <textarea name="c3"><?php echo $home['h1'] ?></textarea>
                <p>Chiffre 4</p>
                <textarea name="c4"><?php echo $home['sec1'] ?></textarea>
                <p>Role</p>
                <textarea name="titreRole"><?php echo $home['nom1'] ?></textarea>
                <p>Compétence 1</p>
                <textarea name="compet1"><?php echo $home['comp1'] ?></textarea>
                <p>Compétence 2</p>
                <textarea name="compet2"><?php echo $home['desc1'] ?></textarea>
                <p>Présentation Client</p>
                <textarea name="descClient"><?php echo $home['nom2'] ?></textarea>
                <p>Présentation Rôle</p>
                <textarea name="descRole"><?php echo $home['comp2'] ?></textarea>
                <p>Présentation Compétence 1</p>
                <textarea name="descCompet1"><?php echo $home['desc2'] ?></textarea>
                <p>Présentation Compétence 2</p>
                <textarea name="descCompet2"><?php echo $home['sec2'] ?></textarea>
                <p>Image Carrousel</p>
                <textarea name="imgCarousel"><?php echo $home['txtsec2'] ?></textarea>
                <p>Image Client</p>
                <textarea name="imgClient"><?php echo $home['footertxt'] ?></textarea>
                <p>Image Compétence 1</p>
                <textarea name="imgComp1"><?php echo $home['logo'] ?></textarea>
                <p>Image Compétence 2</p>
                <textarea name="imgComp2"><?php echo $home['logo'] ?></textarea>
                <input type="submit" name="Valider" value="Valider">
              </form>
            </div>
            <?php } ?>
          </div> 
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col l4 m4 s10 offset-l4 offset-m2 offset-s2">
          <h2 class="title">Main Page Change</h2>
          <div>
            <?php
            
            $sql = "SELECT * FROM home";     
            $pre = $pdo->prepare($sql);     
            $pre->execute();     
            $data = $pre->fetch(PDO::FETCH_ASSOC);        

            ?> 
            <form action="action\firstpage.php" method="post" enctype="multipart/form-data">
              <p>Title page</p>
              <textarea name="title"><?php echo $home['title'] ?></textarea>
              <p>Navbar partie 1</p>
              <textarea name="navbarsec1"><?php echo $home['navbarsec1'] ?></textarea>
              <p>Navbar parti 2</p>
              <textarea name="navbarsec2"><?php echo $home['navbarsec2'] ?></textarea>
              <p>Parallax</p>
              <textarea name="parallax"><?php echo $home['parallax'] ?></textarea>
              <p>Title</p>
              <textarea name="h1"><?php echo $home['h1'] ?></textarea>
              <p>partie 1</p>
              <textarea name="sec1"><?php echo $home['sec1'] ?></textarea>
              <p>nom premiere personne</p>
              <textarea name="nom1"><?php echo $home['nom1'] ?></textarea>
              <p>competence premiere personne</p>
              <textarea name="comp1"><?php echo $home['comp1'] ?></textarea>
              <p>description premiere personne</p>
              <textarea name="desc1"><?php echo $home['desc1'] ?></textarea>
              <p>nom deuxieme personne</p>
              <textarea name="nom2"><?php echo $home['nom2'] ?></textarea>
              <p>competence deuxieme personne</p>
              <textarea name="comp2"><?php echo $home['comp2'] ?></textarea>
              <p>description deuxieme personne</p>
              <textarea name="desc2"><?php echo $home['desc2'] ?></textarea>
              <p>partie 2</p>
              <textarea name="sec2"><?php echo $home['sec2'] ?></textarea>
              <p>text partie 2</p>
              <textarea name="txtsec2"><?php echo $home['txtsec2'] ?></textarea>
              <p>text footer</p>
              <textarea name="footertxt"><?php echo $home['footertxt'] ?></textarea>
              <p>Logo</p>
              <textarea name="logo"><?php echo $home['logo'] ?></textarea>  
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