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

<body class="primary">
    <a href="index.php">
        <img src="img/logo_small.png" class="my-logo" alt="Logo RKGR">
    </a>
    <div class="row connect-boxes">
        <div class="col l8 s10 m10 offset-l2 offset-m1 offset-s1 secondary">
            <h1 class="center-align secondary">Sign Up</h1>
            <form class="secondary">
                <div class="row">
                    <div class="input-field col l5 m5 s10 offset-l1 offset-m1 offset-s1">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="first_name" type="text" class="validate" placeholder="First Name">
                    </div>
                    <div class="input-field col l5 m5 s10">
                        <i class="material-icons prefix">account_box</i>
                        <input id="last_name" type="text" class="validate" placeholder="Last Name">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l10 m10 s10 offset-l1 offset-m1 offset-s1">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" class="validate" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l10 m10 s10 offset-l1 offset-m1 offset-s1">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" type="password" class="validate" placeholder="Password">
                    </div>
                </div>
                <button class="btn btn-1 waves-effect waves-light center-align" type="submit" name="action">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>