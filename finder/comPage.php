<?php 
if(!isset($_COOKIE['fiToken'])) {
    header('Location: http://emediaptuk.com/finder/');
        exit;
} else{
?>
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
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="index.html" style="color:rgb(0,123,255);font-size:34px;">Finder 'JFA'</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1" style="font-size:20px;">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="comPage.html" style="color:rgb(255,255,255);background-color:rgb(0,123,255);">
                            <?php 
    require 'connect.php'; //Connect To Database


    $stmt   = $conn->prepare('select com_name from users where user_token=? ');
    $tok = $_COOKIE["fiToken"];
    $stmt   ->execute(array($tok));
    $count  = $stmt->rowCount();
    $row    = $stmt -> fetch();
    $com_name    = $row['com_name'];
    echo $com_name;
        ?>

                        </a></li>
                    </ul>
                    <form class="form-signin" method="POST" action="logOut.php">
                    
                    <button class="btn btn-primary" type="submit" style="margin-left:20px;height:45px;background-color:rgb(255,255,255);"><i class="fa fa-sign-out" style="font-size:21px;color:rgb(170,170,170);"></i></button></div>
                    </form>
    </div>
    </nav>
    </div>
    <div class="container" style="margin-top:40px;">
        <div class="row">
            <div class="col d-block">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><span style="margin:29px;">ACC/NOT</span><span style="margin-left:142px;">CV NAME</span><i class="material-icons float-right" style="font-size:34px;">picture_as_pdf</i></th>
                                    </tr>
                                </thead>
                                <tbody id="CVsList">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col"><input onchange="updateList()" id = "files" name="files" type="file" accept=".pdf" multiple="" style="margin:10px;"></div>
                </div>
                <div class="row">
                    <div class="col" style="margin:10px;">
                            <select id="selectedJob">
                                <option value="3">DevOps</option>
                                <option value="10">Data Scientest</option>
                                <option value="4">Java Developer</option>
                                <option value="5">Python Developer</option>
                                <option value="11">Front-end Developer</option>
                                <option value="6">Accountant</option>
                                <option value="9">Economics Teacher</option>
                                <option value="2">Mathmetics Teacher</option>
                                <option value="12">Practical Nurse</option>
                            </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="margin:10px;"><button onclick="uploadAndFilter()" class="btn btn-primary d-block" type="button" style="width:180px;"><i class="material-icons" style="font-size:17px;">find_replace</i>Filter Uploaded CV's</button></div>
                </div>
                <div class="row">
                    <div class="col"><button class="btn btn-primary" type="button" style="width:180px;margin:10px;"><i class="fa fa-arrow-circle-down"></i>Download &nbsp;Accepted</button></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script>
        function updateList(){
            var input = document.getElementById('files');
            var output = document.getElementById('CVsList');

            output.innerHTML = '<ul>';
            for (var i = 0; i < input.files.length; ++i) {
                output.innerHTML += '<tr id ="row_' + i + '"><td><span id=' + i + ' style="margin:29px;">Not evaluated</span><span style="margin-left:142px;">' + input.files.item(i).name + '</span><a href="../back-end/ahmad/'+ input.files.item(i).name + '"><i class="material-icons float-right" style="font-size:34px;">picture_as_pdf</i></a></td></tr>';
            }
            output.innerHTML += '</ul>';
        }
        
        function uploadAndFilter() {
            var form_data = new FormData();
            var length = document.getElementById('files').files.length;
            var e = document.getElementById('selectedJob');
            var selectedJob =e.options[e.selectedIndex].value;
            for (var x = 0; x < length; x++) {
                form_data.append("files[]", document.getElementById('files').files[x]);
            }
            form_data.append("selectedJob", selectedJob);

            $.ajax({
                url: 'back-end/index.php', // point to server-side PHP script 
                dataType: 'text', // what to expect back from the PHP script
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (response) {
                    alert(response);

                    var re = response.split("-_-");
                    for (var i = 0; i < re.length - 1; i++) {
                        // alert("selectedJop = " + selectedJob);
                        // alert("re[i]" + re[i]);
                        // alert(parseInt(re[i]) == selectedJob);
                        if(parseInt(re[i]) == selectedJob){
                            // alert('h ' + re[i]);
                            $("#" + i).text("ACC");
                            $("#row_" + i).css('background-color', "#55d61d");
                        }else{
                            $("#" + i).text("NOT ACC");
                            // $("#row_" + i).css('background-color', "red");
                        }
                    }

                },
                error: function (response) {
                    alert('error');
                }
            });
        }

        function downloadAccepted() {
            var form_data = new FormData();
          

            $.ajax({
                url: 'back-end/download.php', // point to server-side PHP script 
                dataType: 'text', // what to expect back from the PHP script
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (response) {
                   
                },
                error: function (response) {
                    alert('error');
                }
            });
        }
    </script>

</body>

</html>
<?php } ?>