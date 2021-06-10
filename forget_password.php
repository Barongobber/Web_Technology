<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>UTM - Connect | Forgot Password</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap//js/bootstrap.min.js"></script>
</head>

<body class="bg-gradient-primary" style="background: url(&quot;assets/img/logo-ppi-utm%20clean%20putih.png&quot;) center / contain no-repeat, rgb(230,32,43);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10" style="opacity: 0.95;"><br><br>
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row" style="background: rgb(95,99,128);">
                            <div class="col-lg-6 d-none d-lg-flex" >
                                <div class="flex-grow-1 bg-login-image" style="background: url(&quot;assets/img/logo-ppi-utm%20clean%20putih.png&quot;) center / contain no-repeat rgb(95,99,128); "></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5" style="background: rgb(95,99,128);">
                                    <div class="text-center">
                                        <h1 class="h4 mb-2" style="color: white;">Forgot Your Password?</h1>
                                        <p class="mb-4" style="color: white;">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a random password via email!</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <a href="login.html" data-toggle="modal" data-target="#forgetModal" class="btn btn-primary btn-user btn-block" style="background: rgb(230,32,43); border-color:white;">
                                            Reset Password
                                        </a>
                                    </form>
                                    <hr color="white">
                                    <div class="text-center">
                                        <a class="small" href="register.php" style="color: turquoise">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php" style="color: turquoise">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="forgetModal" role="dialog">
            <div class="modal-dialog">
            
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><Strong>Result</Strong></h4>
                    <button onclick="fotget();" type="button" class="close" data-dismiss="modal">&times;</button>
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
                        <center class="success-login">Email for reset password has been sent. Please check your email and use that password to login</center>
                    </div>
                    <div class="modal-footer">
                    <button type="button" onclick="forget();" class="btn btn-success" data-dismiss="modal">Ok</button>
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
        function forget(){
            location.href = '<?php echo "http://".$_SERVER['HTTP_HOST']."/utm-connect/login.php"; ?>';
        }
        // Get the modal
        var modal = document.getElementById('forgetModal');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                location.href = '<?php echo "http://".$_SERVER['HTTP_HOST']."/utm-connect/login.php"; ?>';
            }
        }
    </script>
</body>

</html>