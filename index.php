<?php
include("config.php");
include("queries/elements.php");
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
    <title><?php echo $home['title'] ?></title>
  </head>

  <body>

    <!--Navigation Bar-->

    <nav id=navbar class="grey darken-4">
      <div class="nav-wrapper">
        <a href="#" class="hide-on-small-only">
          <img src="<?php echo $home['logo'] ?>" alt="Logo RKGR">
        </a>
        <ul class="right">
          <li><a href="#about-us"><?php echo $home['navbarsec1'] ?></a></li>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo $home['navbarsec2'] ?><i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="#contact">Contact</a></li>
          <li>
            <a class="waves-effect waves-light btn modal-trigger secondary" href="#modal2">Connexion</a>
            <div id="modal2" class="modal secondary">
              <div class="modal-content">
                <p class="center-align no-space">You can login :
                  <a href="popup-login.php" class="center btn">Login</a>
                  <br>Create an account :
                  <a href="popup-signup.php" class="center btn">Sign Up</a>
                </p>
              </div>
            </div>
          </li>
        </ul>
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="projects.php?id=1">Canal+</a></li>
          <li><a href="projects.php?id=2">Marvel</a></li>
          <li><a href="projects.php?id=3">Mr.Beast</a></li>
        </ul>
      </div>
    </nav>

    <div class="parallax-container">
      <div class="parallax"><img src="img/videoeditor.webp" alt="Video Editor Picture"></div>
    </div>

    <h1 class="title center secondary no-space"><?php echo $home['h1'] ?></h1>

    <!--About us section-->

    <div id="about-us" class="about-us primary">
      <div class="row">
        <div class="col l4 m4 s10 offset-l4 offset-m2 offset-s2">
          <h2 class="title"><?php echo $home['sec2'] ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col l6 m12 s12">
          <div class="row">
            <div class="col l4 m4 s8 offset-l2 offset-m2 offset-s2">
              <img src="img/mudkip.jfif" class="rayanimg responsive-img" alt="Rayan Profile Picture">
            </div>
            <div class="col l4 m4 s8 offset-m1 offset-s2">
              <h2 class="primary"><?php echo $home['nom1'] ?></h2>
            </div>
            <div class="col l8 m8 s8 offset-l2 offset-m2 offset-s2">
              <h3><?php echo $home['comp1'] ?></h3>
              <p>
                <?php echo $home['desc1'] ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col l6 m12 s12">
          <div class="row">
            <div class="col l4 m4 s8 offset-l2 offset-m2 offset-s2 ">
              <img src="img/Gwendal.jfif" class="gwenimg responsive-img" alt="Gwendal Profile Picture">
            </div>
            <div class="col l4 m4 s8 offset-m1 offset-s2">
              <h2 class="primary"><?php echo $home['nom2'] ?></h2>
            </div>
            <div class="col l8 m8 s8 offset-l2 offset-m2 offset-s2">
              <h3 class="col l12"><?php echo $home['comp2'] ?></h3>
              <p class="col l12">
                <?php echo $home['desc2'] ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <!--Our Projects-->

      <div class="row no-space">
        <div class="projects-title title col l12 m12 s12 secondary">
          <h3><?php echo $home['sec2'] ?></h3>
          <h4><?php echo $home['txtsec2'] ?></h4>
        </div>
      </div>
    </div>
    <div class="row no-space primary">
      <i class="material-icons col l1 hide-on-med-and-down primary carousel-arrow-left center">arrow_back</i>
      <div class="carousel carousel-slider col l10 m12 s12">
        <a class="carousel-item" href="projects.php?id=1"><img src="img/mrbeastcarousel.jpg" alt="Banner of MrBeast"></a>
        <a class="carousel-item" href="projects.php?id=2"><img src="img/endgamecarousel.jpg" alt="EndGame Banner"></a>
        <a class="carousel-item" href="projects.php?id=3"><img src="img/canalcarousel.jpg" alt="Canal+ Banner"></a>
      </div>
      <i class="material-icons col l1 hide-on-med-and-down primary carousel-arrow-right center">arrow_forward</i>
    </div>

    <!--Contact Form & Footer-->

    <footer id=contact class="page-footer primary">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h4 class="white-text">Contact Form</h4>
            <a class="waves-effect waves-light btn modal-trigger secondary" href="#modal1">Contact</a>
            <div id="modal1" class="modal">
              <div class="modal-content secondary">
                <h4>Contact Form :</h4>
                <div class="row">
                  <form class="col l12 m12 s12" method="post" action="contact.php">
                    <div class="row">
                      <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="fname" name="fname" type="text" class="validate">
                        <label for="fname">First Name</label>
                      </div>
                      <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">account_box</i>
                        <input id="lname" name="lname" type="text" class="validate">
                        <label for="lname">Last Name</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="email" class="validate">
                        <label for="email">Email</label>
                      </div>
                      <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" name="phone" type="tel" class="validate">
                        <label for="icon_telephone">Phone Number</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">short_text</i>
                        <textarea id="textarea1" name="object" class="materialize-textarea"></textarea>
                        <label for="textarea1">Object</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col l12 m12 s12">
                        <i class="material-icons prefix">text_fields</i>
                        <textarea id="textarea2" name="message" class="materialize-textarea"></textarea>
                        <label for="textarea2">Textarea</label>
                      </div>
                    </div>
                    <div>
                      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                      </button>
                      <a href="#!" class="modal-close waves-effect waves-green btn-flat right-align">Cancel</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <a class="btn blankk">BLANK ?</a>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          <?php echo $home['footertxt'] ?>
        </div>
      </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </body>

</html>