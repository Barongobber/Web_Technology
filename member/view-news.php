<!DOCTYPE html>
<html>
  <head>
    <title>News Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ICONS -->
    <link rel="icon" href="assets/icon/favicon.ico" />
    <script
      src="https://kit.fontawesome.com/f9c45ad44a.js"
      crossorigin="anonymous"
    ></script>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Arvo:wght@100;200;300;400;700&family=Roboto:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- BOOTSTRAP 4.6.0 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <section id="navMenu">
      <nav class="nav-head navbar fixed-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php"
          ><img src="assets/icon/android-icon-72x72.png" /> UTM CONNECT</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
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
              <a class="nav-link" href="">Academic</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                href="#"
                >Organization</a
              >
              <div class="dropdown-menu animated--grow-in">
                <a href="" class="dropdown-item">Divison</a>
                <a href="" class="dropdown-item">Aspiration</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item dropdown no-arrow">
              <div class="nav-item dropdown no-arrow">
                <a
                  class="dropdown-toggle nav-link"
                  aria-expanded="false"
                  data-toggle="dropdown"
                  href="#"
                >
                  <span class="d-block d-lg-inline mr-2 text-gray-600 small"
                    >Udin Saleh</span
                  >
                  <div class="d-lg-none dropdown-divider"></div>
                  <img
                    class="border rounded-circle img-profile avatar"
                    src="assets/img/profile.jpg"
                /></a>
                <div
                  class="dropdown-menu shadow dropdown-menu-right animated--grow-in"
                >
                  <a class="dropdown-item" href="#"
                    ><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i
                    >&nbsp;Profile</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i
                    >&nbsp;Settings</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i
                    >&nbsp;Activity log</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="loggedout.php"
                    ><i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i
                    >&nbsp;Logout</a
                  >
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
    <div class="nav-spacer"></div>
    <!-- News Navbar -->
    <nav class="navbar bg-light navbar-expand-lg news-nav view-nav">
      <button
        class="navbar-toggler news-nav-toggle mr-auto float-right mt-2"
        type="button"
        data-toggle="collapse"
        data-target="#navbarCategory"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon news-bars">Categories</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCategory">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link" href="">All</a></li>
          <li class="nav-item"><a class="nav-link" href="">Sports</a></li>
          <li class="nav-item"><a class="nav-link" href="">Academic</a></li>
          <li class="nav-item"><a class="nav-link" href="">Arts</a></li>
          <li class="nav-item"><a class="nav-link" href="">Music</a></li>
          <li class="nav-item">
            <a class="nav-link" href="">Strategic Studies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Human Development</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- News Content -->
    <section id="newsContent">
      <div class="container-fluid pt-5">
        <div class="row mx-auto">
          <div class="col-12">
            <div class="card news-card mx-auto">
              <div id="imgCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      class="news-view-img"
                      src="news/img/1.jpg"
                      alt="news"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      class="news-view-img"
                      src="news/img/2.jpg"
                      alt="news"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      class="news-view-img"
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

              <!-- <img class="news-view-img" src="news/img/1.jpg" alt="news"/> -->
              <div class="card-body mt-3">
                <h3>Lorem Ipsum Dolor Sit Amet</h3>
                <div class="news-view-details mx-auto">
                  <span class="post-details">
                    Posted by <a class="author-link" href="">Lorem Ipsum</a> on
                    31 - 02 - 2069</span
                  >
                  <span class="post-details">
                    Category:
                    <a class="category-anchor" href="">Academic</a></span
                  >
                </div>
                <hr />

                <p class="view-para">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Enim sed faucibus turpis in eu mi bibendum. Habitasse platea
                  dictumst vestibulum rhoncus est. Amet purus gravida quis
                  blandit turpis cursus in hac habitasse. Viverra ipsum nunc
                  aliquet bibendum enim.
                </p>
                <p class="view-para">
                  In fermentum posuere urna nec tincidunt praesent. Id cursus
                  metus aliquam eleifend mi in nulla posuere sollicitudin.
                  Pellentesque habitant morbi tristique senectus et netus et
                  malesuada. Elit eget gravida cum sociis natoque penatibus et
                  magnis dis. Ac ut consequat semper viverra nam. Lorem ipsum
                  dolor sit amet consectetur adipiscing elit. Fermentum odio eu
                  feugiat pretium. Volutpat ac tincidunt vitae semper quis
                  lectus nulla. Lacus vestibulum sed arcu non odio euismod
                  lacinia at quis.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div
      class="modal fade"
      id="loginModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
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
                  <input
                    type="email"
                    class="form-control"
                    id="email1"
                    placeholder="Your email address..."
                  />
                </div>
                <div class="form-group">
                  <input
                    type="password"
                    class="form-control"
                    id="password1"
                    placeholder="Your password..."
                  />
                </div>
                <button type="button" class="btn btn-std btn-block btn-round">
                  Login
                </button>
              </form>

              <div class="text-center text-muted delimiter">
                or use a social network
              </div>
              <div class="d-flex justify-content-center social-buttons">
                <button
                  type="button"
                  class="btn btn-std btn-round"
                  data-toggle="tooltip"
                  data-placement="top"
                  title="Twitter"
                >
                  <i class="fab fa-twitter"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-std btn-round"
                  data-toggle="tooltip"
                  data-placement="top"
                  title="Facebook"
                >
                  <i class="fab fa-facebook"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-std btn-round"
                  data-toggle="tooltip"
                  data-placement="top"
                  title="Linkedin"
                >
                  <i class="fab fa-linkedin"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <div class="signup-section">
            Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
      crossorigin="anonymous"
    ></script>
    <script src="js/script.js"></script>
  </body>
</html>
