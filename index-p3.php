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
  <title>RKGR - MrBeast</title>
</head>

<body>

  <!--Navigation Bar-->
<?php 
 include("navbar.php");
?>
  <!--The Client-->

  <div class="client secondary">
    <div class="row hide-on-large-only no-space">
      <div class="col m12 s12">
        <img src="img/chch.jpg" class="responsive-img" alt="MrBeast Banner">
      </div>
    </div>
    <div class="no-space row">
      <div class="col l2 m10 s10 offset-l1 offset-m1 offset-s1">
        <h1 class="title center Ctitle hide-on-med-and-down">MrBeast</h1>
        <h2 class="title center hide-on-large-only">MrBeast</h2>
        <p class="center text hide-on-med-and-down">
          He is the rising star of Youtube. MrBeast is the first content creator to reach the tremendous numbers he
          has
          today in such a short period of time.
        </p>
        <p class="center hide-on-large-only">
          He is the rising star of Youtube. MrBeast is the first content creator to reach the tremendous numbers he
          has
          today in such a short period of time.
        </p>
        <div class="number row text hide-on-med-and-down">
          <div class="col l4 m4 s4 offset-l1 offset-m1 offset-s1">106M subscribers on Youtube</div>
          <div class="col l4 m4 s4 offset-l2 offset-m2 offset-s2">17B views on main Youtube channel</div>
          <div class="col l4 m4 s4 offset-l1 offset-m1 offset-s1">729 videos in total</div>
          <div class="col l4 m4 s4 offset-l2 offset-m2 offset-s2">7th world youtuber</div>
        </div>
        <div class="number row hide-on-large-only">
          <div class="col l4 m4 s4 offset-l1 offset-m1 offset-s1">106M subscribers on Youtube</div>
          <div class="col l4 m4 s4 offset-l2 offset-m2 offset-s2">17B views on main Youtube channel</div>
          <div class="col l4 m4 s4 offset-l1 offset-m1 offset-s1">729 videos in total</div>
          <div class="col l4 m4 s4 offset-l2 offset-m2 offset-s2">7th world youtuber</div>
        </div>
      </div>
      <div class="col l8 offset-l1 hide-on-med-and-down">
        <img src="img/chch.jpg" class="responsive-img" alt="MrBeast Banner">
      </div>
    </div>
  </div>

  <!--RKGR Role-->

  <div class="role row primary no-space">
    <div class="text col s12 m12 l12 center no-space">
      <h2 class="col l12 m12 s12 center">RKGR Role</h2>
      <h3 class="col l 12 m12 s12">Head of the Video Editing and the Graphic Designing Departments</h3>
      <p class="col l12 m12 s12">From May 2019 to August 2022, RKGR was in charge of the Graphic Designing Team to
        produce
        logos and assets for MrBeast as well as directing the Editing of his videos.</p>
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
        <img src="img/videoediting.jpg" alt="video editing software">
      </div>
      <div class="col l4 m8 s8 offset-l2 offset-m2 offset-s1 txt">
        <h3>Video Editing Section</h3>
        <p>As a film/video editor, you'll manage material such as camera footage, dialogue, sound effects, graphics and special effects to produce a final film or video product. This is a key role in the post-production process and your skills can determine the quality and delivery of the finished result.
        </p>
      </div>
    </div>
    <div class="row no-space">
      <div class="col m4 s4 offset-m2 offset-s1 hide-on-large-only">
        <img src="img/graphicdesigning.jfif" alt="Graphic Designing Image">
      </div>
      <div class="col l4 m8 s8 offset-l2 offset-m2 offset-s1 txt">
        <h3>Graphic Designing</h3>
        <p>The Graphic Designer job description includes the entire process of defining requirements, visualizing and creating graphics including illustrations, logos, layouts and photos. You'll be the one to shape the visual aspects of websites, books, magazines, product packaging, exhibitions and more.
        </p>
      </div>
      <div class="col l2 offset-l1 hide-on-med-and-down">
        <img src="img/graphicdesigning.jfif" alt="Graphic Designing Image">
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