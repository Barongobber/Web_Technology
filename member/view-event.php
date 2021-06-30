<!DOCTYPE html>
<html>

<head>
  <title>Elegant Event</title>
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
          <li class="nav-item">
            <a class="nav-link" href="#news">News</a>
          </li>
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
<!-- Header -->
<section id="header">
  <div class="container-fluid header-container">
    <div class="header-head">
      <h1 class="header-title">Elegant Event</h1>
    </div>
  </div>
</section>
<!--
    CONTENT
--->
<section id="stdContent">
  <div class="container-fluid list-container">
    <div class="row justify-content-center">
      <!-- Event Cards-->
      <div class="col-lg-12 col-md-12 col-12 card-column">
        <div class="card mb-3 list-card view-event-card">
          <div class="row no-gutters event-card">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <img class="img-fluid event-card-img text-left" src="events/img/event.jpg" class="card-img-right" alt="">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="card-body event-card-body">
                <h4 class="event-title">Elegant Event</h4>
                <div class="event-card-details">
                      <span class="post-details"> Category: <p class="event-category">Volunteer</p></span>
                </div>
                <div class="row event-description justify-content-center">
                  <div class="col-lg-6 col-sm-6 col-md-6 mb-2 event-subheading">
                    <span style="font-weight:bold;">Date: </span>
                    <span style="display:block;">The date</span>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6 event-subheading">
                    <span style="font-weight:bold;">Venue:</span>
                    <span style="display:block;">The venue</span>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6 mb-2 event-subheading">
                    <span style="font-weight:bold;">Time: </span>
                    <span style="display:block;">The time</span>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6 mb-2 event-subheading">
                    <span style="font-weight:bold;">Link:</span>
                    <span style="display:block;">The link if any</span>
                  </div>

                  <div class="col-lg-12 col-md-12 col-md-12">
                    <h6>Event Description</h6>
                    <p class="card-text event-desc">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="text-right event-button">
            <a class="btn btn-red typeform-share button" href="https://form.typeform.com/to/kX2o9C6n?typeform-medium=embed-snippet" data-mode="popup" data-size="100" target="_blank">Apply as participant </a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
            <a class="btn btn-red typeform-share button" href="https://form.typeform.com/to/kX2o9C6n?typeform-medium=embed-snippet" data-mode="popup" data-size="100" target="_blank">Apply as committee </a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
          </div>
        </div>
      </div>
<!-- For past events- Documentation and Feedback -->
      <div class="container-fluid list-container">
      <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mb-3 list-card view-event-card">
              <h4 class="text-align-left mt-3">Documentation</h4>
              <hr class="mt-1 dotted-ruler width-1">
              <div id="imgCarousel" class="carousel slide event-slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      class="event-slide-img"
                      src="news/img/1.jpg"
                      alt="news"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      class="event-slide-img"
                      src="news/img/2.jpg"
                      alt="news"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      class="event-slide-img"
                      src="news/img/3.jpg"
                      alt="news"
                    />
                  </div>
                </div>
                <ol class="carousel-indicators list-inline">
                  <li class="list-inline-item active">
                    <a
                      id="carousel-selector-0"
                      class="selected"
                      data-slide-to="0"
                      data-target="#imgCarousel"
                      ><img class="img-fluid" src="news/img/1.jpg" alt=""
                    /></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      id="carousel-selector-1"
                      data-slide-to="1"
                      data-target="#imgCarousel"
                      ><img class="img-fluid" src="news/img/2.jpg" alt=""
                    /></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      id="carousel-selector-2"
                      data-slide-to="2"
                      data-target="#imgCarousel"
                      ><img class="img-fluid" src="news/img/3.jpg" alt=""
                    /></a>
                  </li>
                </ol>
              </div>
              <div class="spacer mt-1"> </div>
              <h4 class="mb-0">Feedback</h4>
              <hr class="mt-1 dotted-ruler width-1">
              <div class="px-5 mb-3">
                <button class="btn btn-red btn-md mt-2" data-toggle="modal" data-target="#feedbackModal">Submit your feedback</button>
              </div>
              <div class="feedback-list" id="comments-logout"> 
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3 feedback-profile">
                        <span class="d-block text-gray-600 small mx-auto mb-2" >Udin Saleh</span>
                        <img class="border rounded-circle img-profile avatar mx-auto" src="assets/img/profile.jpg"></a>
                      </div>
                      <div class="col-9">
                        <div class="d-block">
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <p class="feedback-content mx-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim.</p>
                          <span class="d-block text-gray-600 small text-right mr-3 mt-2">Posted on: 31 - 02 - 2069</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>               
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3 feedback-profile">
                        <span class="d-block text-gray-600 small mx-auto mb-2" >Udin Saleh</span>
                        <img class="border rounded-circle img-profile avatar mx-auto" src="assets/img/profile.jpg"></a>
                      </div>
                      <div class="col-9">
                        <div class="d-block">
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <p class="feedback-content mx-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim.</p>
                          <span class="d-block text-gray-600 small text-right mr-3 mt-2">Posted on: 31 - 02 - 2069</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>               
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3 feedback-profile">
                        <span class="d-block text-gray-600 small mx-auto mb-2" >Udin Saleh</span>
                        <img class="border rounded-circle img-profile avatar mx-auto" src="assets/img/profile.jpg"></a>
                      </div>
                      <div class="col-9">
                        <div class="d-block">
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <span class="d-inline star">★</span>
                          <p class="feedback-content mx-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Enim sed faucibus turpis in eu mi bibendum.
                      Habitasse platea dictumst vestibulum rhoncus est.
                      Amet purus gravida quis blandit turpis cursus in hac habitasse.
                      Viverra ipsum nunc aliquet bibendum enim.</p>
                          <span class="d-block text-gray-600 small text-right mr-3 mt-2">Posted on: 31 - 02 - 2069</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
        </div>
      </div>
    </div>
</section>

<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-title text-center">
            <h4>Give your feedback</h4>
          </div>
          <div class="d-flex flex-column text-center">
            <form action="">
              <div class="rate">
                <input type="radio" name="rate" value="5" id="star5">
                <label for="star5" title="text"></label>
                <input type="radio" name="rate" value="4" id="star4">
                <label for="star4" title="text"></label>
                <input type="radio" name="rate" value="3" id="star3">
                <label for="star3" title="text"></label>
                <input type="radio" name="rate" value="2" id="star2">
                <label for="star2" title="text"></label>
                <input type="radio" name="rate" value="1" id="star1">
                <label for="star1" title="text"></label>
              </div>
              <div class="form-group">
                <textarea name="feedback" cols="30" rows="10" placeholder="Enter your feedback here"></textarea>
              </div>
              <input type="submit" class="btn btn-std btn-block btn-round" value="Submit">
            </form>
          </div>
        </div>
    </div>
  </div>
</div>

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
        </di>
      </div>
    </div>
  </div>
    <div class="modal-footer d-flex justify-content-center">
      <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>

</html>
