<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>UTM - Connect | Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap//js/bootstrap.min.js"></script>
</head>

<body class="bg-gradient-primary" style="background: url(&quot;assets/img/logo-ppi-utm%20clean%20putih.png&quot;) center / contain no-repeat, rgb(230,32,43);">
    <div class="container">
        <div class="row justify-content-center swing animated">
            <div class="col-md-9 col-lg-12 col-xl-10" style="opacity: 0.95;"><br><br>
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background: url(&quot;assets/img/dogs/logo-ppi-utm.png&quot;) center / contain no-repeat;"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4"> <strong>Welcome to PPI UTM-Connect</strong></h4>
                                    </div>
                                    <form class="user">
                                        <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password"></div>
                                        <button class="btn btn-primary btn-block text-white btn-user" type="button" data-toggle="modal" data-target="#myModal" style="background: rgb(230,32,43);">Login</button>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="forget_password.php">Forgot Password?</a></div>
                                    <div class="text-center"><a class="small" href="register.php">Create an Account!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><Strong>Result</Strong></h4>
                    <button onclick="login();" type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
                            <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                            <span class="swal2-success-line-tip"></span>
                            <span class="swal2-success-line-long"></span>
                            <div class="swal2-success-ring"></div> 
                            <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                            <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                        </div>
                        <center class="success-login">Login Success!!</center>
                    </div>
                    <div class="modal-footer">
                    <button type="button" onclick="login();" class="btn btn-success" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script>
        function login(){
            location.href = '<?php echo "http://".$_SERVER['HTTP_HOST']."/utm-connect/index.php"; ?>';
        }
        // Get the modal
        var modal = document.getElementById('myModal');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                location.href = '<?php echo "http://".$_SERVER['HTTP_HOST']."/utm-connect/index.php"; ?>';
            }
        }
    </script>
</body>

</html>