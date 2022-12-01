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
              <p><?php echo $user['first_name']." ".$user['last_name']." aka ".$user['username'] ?></p>
              <input type='button' name="Toogle Admin" value="<?php $sql = "UPDATE user SET 'admin' =". $user['admin'] == 1 ? "0" : "1" ." WHERE 'username' =". $user['username'] ?>" >
              <input type='button' name="Delete User" value="delete" action="action/deleteuser.php">
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
              <span class="email"><?php echo $user['email'] ?></span>
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
            <form>
              <textarea name="title"><?php echo $home['title'] ?></textarea>
              <textarea name="navbarsec1"><?php echo $home['navbarsec1'] ?></textarea>
              <textarea name="navbarsec2"><?php echo $home['navbarsec2'] ?></textarea>
              <textarea name="parallax"><?php echo $home['parallax'] ?></textarea>
              <textarea name="h1"><?php echo $home['h1'] ?></textarea>
              <textarea name="sec1"><?php echo $home['sec1'] ?></textarea>
              <textarea name="nom1"><?php echo $home['nom1'] ?></textarea>
              <textarea name="comp1"><?php echo $home['comp1'] ?></textarea>
              <textarea name="desc1"><?php echo $home['desc1'] ?></textarea>
              <textarea name="nom2"><?php echo $home['nom2'] ?></textarea>
              <textarea name="comp2"><?php echo $home['comp2'] ?></textarea>
              <textarea name="desc2"><?php echo $home['desc2'] ?></textarea>
              <textarea name="sec2"><?php echo $home['sec2'] ?></textarea>
              <textarea name="txtsec2"><?php echo $home['txtsec2'] ?></textarea>
              <textarea name="footertxt"><?php echo $home['footertxt'] ?></textarea>
              <textarea name="logo"><?php echo $home['logo'] ?></textarea>
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