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
    <title>RKGR Login</title>
  </head>

  <body>
    <div class="row connect-boxes">
      <div class="col l8 s10 m10 offset-l2 offset-m1 offset-s1">
        <div class="card primary">
          <div class="card-content secondary">
            <span class="card-title center-align">Login</span>
          </div>
          <form class="secondary">
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
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
              <a href="#!" class="modal-close waves-effect waves-green btn-flat right-align">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>