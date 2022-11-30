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
  <title>RKGR - Canal+</title>
</head>

<body>

<?php 
 include("navbar.php");
?>

  <!--The Client-->

  <div class="client secondary">
    <div class="row hide-on-large-only no-space">
      <div class="col m12 s12">
        <img src="img/canalbanner.jpg" class="responsive-img" alt="Canal+ Banner">
      </div>
    </div>
    <div class="no-space row">
      <div class="col l2 m10 s10 offset-l1 offset-m1 offset-s1">
        <h1 class="title center Ctitle hide-on-med-and-down">Canal+</h1>
        <h2 class="title center hide-on-large-only">Canal+</h2>
        <p class="text center hide-on-med-and-down">
          They are the first television company in numbers of sucribers and brand image in France.
          They offer a diversified service going from sports to series and movies.
        </p>
        <p class="center hide-on-large-only">
          They are the first television company in numbers of sucribers and brand image in France.
          They offer a diversified service going from sports to series and movies.
        </p>
        <div class="number row text hide-on-med-and-down">
          <div class="col l4 m4 s4 offset-l1 offset-m1 offset-s1">23,9m suscribers in 2022</div>
          <div class="col l4 m4 s4 offset-l2 offset-m2 offset-s2">9,6m sucribers in France</div>
          <div class="col l4 m4 s4 offset-l1 offset-m1 offset-s1">~45 channels</div>
          <div class="col l4 m4 s4 offset-l2 offset-m2 offset-s2">2873m euro in 2022</div>
        </div>
        <div class="number hide-on-large-only row">
          <div class="col l4 m4 s4 offset-l1 offset-m1 offset-s1">23,9m suscribers in 2022</div>
          <div class="col l4 m4 s4 offset-l2 offset-m2 offset-s2">9,6m sucribers in France</div>
          <div class="col l4 m4 s4 offset-l1 offset-m1 offset-s1">~45 channels</div>
          <div class="col l4 m4 s4 offset-l2 offset-m2 offset-s2">2873m euro in 2022</div>
        </div>
      </div>
      <div class="col l8 offset-l1 hide-on-med-and-down">
        <img src="img/canalbanner.jpg" class="responsive-img" alt="Canal+ Banner">
      </div>
    </div>
  </div>

  <!--RKGR Role-->

  <div class="role col l12 row primary no-space">
    <div class="text col s12 m12 l12 center no-space">
      <h2 class="col s12 m12 l12 center">RKGR Role</h2>
      <h3 class="col s12 m12 l12">Part of realisation and sound engeneering</h3>
      <p class="col s12 m12 l12">From October 2009 to August 2014 RKGR was working with the realisation and
        soundengeneering of
        Canal+
        adjusting sound of series and setting up studio for tv shows.</p>
    </div>
  </div>

  <!--Our Mission-->

  <div class="mission secondary no-space">
    <div class="row">
      <div class="col l2 m2 s6 offset-l2 offset-m2 offset-s1">
        <h2>Our Mission</h2>
      </div>
    </div>
    <div class="row">
      <div class="col l2 m4 s4 offset-l2 offset-m2 offset-s1 ">
        <img src="img/realisation.jpg" alt="Realisation Image">
      </div>
      <div class="col l4 m8 s8 offset-l2 offset-m2 offset-s1 txt">
        <h3>Realization Director</h3>
        <p>The director of realization is responsible for directing a film or television program. He has a creative, management and technical and artistic role. Realizing TV shows was pretty challenging at first, but learning those skills was very rewarding. 
        </p>
      </div>
    </div>
    <div class="row no-space">
      <div class="col m4 s4 offset-m2 offset-s1 hide-on-large-only">
        <img src="img/soundengineering.jfif" alt="Sound Engeneering Image">
      </div>
      <div class="col l4 m8 s8 offset-l2 offset-m2 offset-s1 txt">
        <h3>Leading Sound Engineering</h3>
        <p>
          A sound engineer is responsible for the technical side of a recording or live performance. The sound engineer designs and manages sound levels and outputs, and is responsible for maintaining the physical sound equipment, like amps and microphones.
        </p>
      </div>
      <div class="col l2 offset-l1 hide-on-med-and-down">
        <img src="img/soundengineering.jfif" alt="Soung Engeneering Image">
      </div>
    </div>
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
                <form class="col l12 m12 s12">
                  <div class="row">
                    <div class="input-field col l6 m6 s12">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="first_name" type="text" class="validate">
                      <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col l6 m6 s12">
                      <i class="material-icons prefix">account_box</i>
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Last Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col l6 m6 s12">
                      <i class="material-icons prefix">email</i>
                      <input id="email" type="email" class="validate">
                      <label for="email">Email</label>
                    </div>
                    <div class="input-field col l6 m6 s12">
                      <i class="material-icons prefix">phone</i>
                      <input id="icon_telephone" type="tel" class="validate">
                      <label for="icon_telephone">Phone Number</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col l6 m6 s12">
                      <i class="material-icons prefix">short_text</i>
                      <textarea id="textarea1" class="materialize-textarea"></textarea>
                      <label for="textarea1">Subject</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col l12 m12 s12">
                      <i class="material-icons prefix">text_fields</i>
                      <textarea id="textarea2" class="materialize-textarea"></textarea>
                      <label for="textarea2">Textarea</label>
                    </div>
                  </div>
                  <div>
                    <a class="waves-effect waves-light btn center-block">Submit</a>
                  </div>
                </form>

              </div>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            </div>
          </div>
          <a class="btn blankk">BLANK ?</a>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2022 Copyright Text
        <p class="right">All Rights Reserved</p>
      </div>
    </div>
  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>