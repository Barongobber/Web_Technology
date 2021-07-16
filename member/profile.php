<?php include_once('../assets/php/check_auth.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ICONS -->
  <link rel="icon" href="assets/icon/favicon.ico" />
  <script src="https://kit.fontawesome.com/f9c45ad44a.js" crossorigin="anonymous"></script>
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@100;200;300;400;700&family=Roboto:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- BOOTSTRAP 4.6.0 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/styles.css" />

</head>
<body>
<section id="navMenu">
    <nav class="nav-head navbar fixed-top navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php"><img src="assets/icon/android-icon-72x72.png" /> UTM CONNECT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#news">News</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="events.php">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="academic.php">Academic</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Organization</a>
            <div class="dropdown-menu animated--grow-in">
              <a href="" class="dropdown-item">Divison</a>
              <a href="" class="dropdown-item">Aspiration</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow">
                  <a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">
                    <span class="d-block d-lg-inline mr-2 text-gray-600 small" >Udin Saleh</span>
                    <div class="d-lg-none dropdown-divider"></div>
                    <img class="border rounded-circle img-profile avatar" src="assets/img/profile.jpg"></a>
                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">
                      <a class="dropdown-item" href="profile.php"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                      <a class="dropdown-item" href="../"><i class="fas fa-user-circle fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Go to Management Side</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="loggedout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                    </div>
                </div>
            </li>
        </ul>
      </div>
    </nav>
  </section>

<!---
Insert Here
--->
<section id="profile" class="pt-vh">
<div class="container-fluid">
    <div class="card bordered-col-lg px-4">
        <h1 class="mt-4 ml-4 text-left">Profile</h1>
        <hr class="mx-4 mt-0">
        <div class="card-body">
            <div class="profile-container mb-4">
                <img class="border rounded-circle profile-avatar" src="assets/img/profile.jpg">
                <div class="profile-overlay rounded-circle">
                    <span class="text-avatar-profile">Change profile picture</span>
                </div>
            </div>
                
            <div class="row profile-show">
                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5 pr-0">
                            <span class="d-inline"><i class="fas fa-user-tag mr-2"></i>Access Grant:</span>
                        </div>
                        <div class="col-7">                   
                            <span id="member_access_grant"></span>
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5">
                            <span class="d-inline 600"><i class="fas fa-user mr-2"></i>Matric No:</span>
                        </div>
                        <div class="col-7">
                            <span id="member_matrix_card"></span>
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5">
                            <span class="d-inline"><i class="fas fa-id-badge mr-2"></i>Full Name:</span>
                        </div>
                        <div class="col-7">
                            <span id="member_name"></span>
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5">
                            <span class="d-inline"><i class="fas fa-envelope mr-2"></i>Email:</span>
                        </div>
                        <div class="col-7">                   
                            <span id="member_email"></span>
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5">
                            <span class="d-inline"><i class="fas fa-calendar-alt mr-2"></i>Batch:</span>
                        </div>
                        <div class="col-7">                   
                            <span id="member_batch"></span>
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5">
                            <span class="d-inline"><i class="fas fa-university mr-2"></i>Program:</span>
                        </div>
                        <div class="col-7">                   
                            <span id="member_program_code"></span>
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 mb-2 user-data">
                    <div class="row">
                        <div class="col-5">
                            <span class="d-inline"><i class="fas fa-graduation-cap mr-2"></i>Degree</span>
                        </div>
                        <div class="col-7">                   
                            <span id="member_degree"></span>
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="col-12 mb-2 user-data">
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <span class="d-inline"><i class="fas fa-map-marker-alt mr-2"></i>Address</span>
                        </div>
                        <div class="col-lg-6">                   
                            <span id="member_address"></span>
                        </div>
                    </div>
                    <hr class="mt-0">
                </div>
                <div class="mx-auto">
                  <a href="editprofile.php"><button class="btn btn-std">Edit Profile</button></a> 
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header border-bottom-0">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="form-title text-center">
        <h4>Login</h4>
      </div>
      <div class="d-flex flex-column text-center">
        <form>
          <div class="form-group">
            <input type="email" class="form-control" id="email1"placeholder="Your email address...">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password1" placeholder="Your password...">
          </div>
          <button type="button" class="btn btn-std btn-block btn-round">Login</button>
        </form>

        <div class="text-center text-muted delimiter">or use a social network</div>
        <div class="d-flex justify-content-center social-buttons">
          <button type="button" class="btn btn-std btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
            <i class="fab fa-twitter"></i>
          </button>
          <button type="button" class="btn btn-std btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
            <i class="fab fa-facebook"></i>
          </button>
          <button type="button" class="btn btn-std btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
            <i class="fab fa-linkedin"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
    <div class="modal-footer d-flex justify-content-center">
      <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
<script>
  $(document).ready(function(){
    var user = null;
    $.ajax({
      type: "GET",
      url: "../assets/php/profile.php",
      dataType: "json",
      success: function(data, status, xhr) {
        user = data.user;
        if(data.user.access_grant == 1){
          $("#member_access_grant").html("Member");
        }if(data.user.access_grant == 2) {
          $("#member_access_grant").html("Management");
        }if(data.user.access_grant == 3) {
          $("#member_access_grant").html("Admin");
        }
        $("#member_matrix_card").html(data.user.matrix_card);
        $("#member_name").html(data.user.name);
        $("#member_email").html(data.user.email);
        $("#member_batch").html(data.user.batch);
        $("#member_program_code").html(data.user.program_code);
        $("#member_degree").html(data.user.degree);
        $("#member_address").html(data.user.address);
      },
      error: function() {
        alert(status);
      }
    })
  })
</script>
</body>

</html>
