<?php 
if(isset($_COOKIE['fiToken'])) {
    header('Location: http://emediaptuk.com/finder/comPage.php');
        exit;
} else {
?>
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
        <div class="container hero">
            <div class="row">
                <div class="col-12 col-lg-5 col-xl-5 offset-xl-1">
                    <h1>What Is finder</h1>
                    <p>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown&nbsp;<br></p>
                </div>
                <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                    <div class="iphone-mockup" style="margin-right:88px;margin-top:-23px;"><img src="assets/img/claim-form-flat-illustration-concept-group-businessman-analysing-giant-document-ready-to-sign-114443861.jpg" width="300" style="margin-top:85px;margin-right:0px;margin-left:0px;width:382px;"></div>
                </div>
            </div>
            <div class="row" style="height:178px;"></div>
            <div class="intro">
                <h2 class="text-center">Features</h2>
                <p class="text-center">bootstrap studio vs google web designerووووووووووووووووووووووووووووووووووووووووو</p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-md-4 col-lg-3 item" style="background-color:rgba(255,255,255,0.15);"><i class="fa  fa-line-chart  icon"></i>
                    <h3 class="name">Self Learning&nbsp;</h3>
                    <p class="description">Has a high efficiency to learn from each new prediction and improve its skills to classify CV's job title.</p>
                </div>
                <div class="col-sm-6 col-md-4 item" style="background-color:rgba(255,255,255,0.09);margin-right:80px;margin-left:80px;"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Fast</h3>
                    <p class="description">
Finder can detect and classify CVs with a X120 fast than the humanity.</p>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item" style="background-color:rgba(255,255,255,0.18);margin-left:0px;"><i class="fa  fa-expand  icon"></i>
                    <h3 class="name">Flexible</h3>
                    <p class="description"> 
Finder can be improved with add any custom job title that the client company needed.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="team-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Team </h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row people" style="padding:0px;padding-left:102px;">
                <div class="col-md-6 col-lg-2 item"><img class="rounded-circle" src="assets/img/akram.jpg">
                    <h3 class="name">Akram Yamin</h3>
                    <p class="title">ML Model Trainer & Builder</p>
                    <p class="description"></p>
                </div>
                <div class="col-md-6 col-lg-2 item"><img class="rounded-circle" src="assets/img/ayman.png">
                    <h3 class="name">Ayman Khalaf</h3>
                    <p class="title">ML as API</p>
                    <p class="description"></p>
                </div>
                <div class="col-md-6 col-lg-2 item"><img class="rounded-circle" src="assets/img/hanady.jpg">
                    <h3 class="name">Hanady Murshed</h3>
                    <p class="title">Backend Dev</p>
                    <p class="description"></p>
                </div>
                <div class="col-md-6 col-lg-2 item"><img class="rounded-circle" src="assets/img/sondos.jpeg">
                    <h3 class="name">Sondos Sadlah</h3>
                    <p class="title">Frontend Des</p>
                    <p class="description"></p>
                </div>
                <div class="col-md-6 col-lg-2 item"><img class="rounded-circle" src="assets/img/athmar.jpeg">
                    <h3 class="name">Athmar Yasin</h3>
                    <p class="title">Frontend Dev</p>
                    <p class="description"></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php 
}
?>