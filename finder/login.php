<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search" style="background-color:rgba(255,255,255,0.26);">
                <div class="container"><a class="navbar-brand" href="index.php">Finder 'JFA'</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="aboutUs.php">AboutUs</a></li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"></label></div>
                        </form><span class="navbar-text"> <a href="login.php" class="login">Log In</a></span><a class="btn btn-light action-button" role="button" href="signUp.php">Sign Up</a></div>
        </div>
        </nav>
        <div class="login-card"><img src="assets/img/avatar_2x.png" class="profile-img-card">
            <p class="profile-name-card"> </p>
            <p id="invalid-login" style="
                                        display: none;
                                        background-color: #ff6969;
                                        border-radius: 5px;
                                        margin-top: 5px;
                                        width: 100%;
                                        color: #FFF;
                                        border: 1px solid red;
                                        text-align: center;

                                ">اسم المستخدم او كلمة لمرور غير صحيحة</p>
            <form class="form-signin" method="POST" action="log.php" id="login-form">
                <span class="reauth-email"> </span>
                <input class="form-control" type="email" required="" placeholder="Email address" autofocus="" id='login-mail' name="login-mail">
                <input class="form-control" type="password" required="" placeholder="Password" id='login-password' name="login-password">
                <div class="checkbox">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="formCheck-7">
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
            </form>
            <a href="#" class="forgot-password">Forgot your password?</a></div>
        </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>