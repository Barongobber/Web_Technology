<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- ICONS -->
  <link rel="icon" href="assets/icon/favicon.ico" />
  <script src="https://kit.fontawesome.com/f9c45ad44a.js" crossorigin="anonymous"></script>
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@100;200;300;400;700&family=Roboto:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!-- BOOTSTRAP 4.6.0 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/auth.css" />
  
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="auth-container">
      <div class="forms-container">
        <div class="auth-forms">
          <form action="#" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn btn-std" />
            <p class="social-text">Or Sign in with social platforms</p>
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
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn btn-std" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
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
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn btn-std" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn btn-std" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".auth-container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
    </script>
  </body>
</html>