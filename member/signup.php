<!DOCTYPE html>
<html class="authentication">

<head>
  <title>Sign Up</title>
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
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!-- BOOTSTRAP 4.6.0 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/styles.css"/>

</head>
<body>
<!---
Insert Here
--->

<section id="authSection">
    <div class="main-container sign-up-mode">
      <div class="auth-container">
        <div class="auth">
          <form action="#" class="sign-in-form">
            <img class="form-logo" src="assets/icon/apple-icon-114x114.png" alt="">
            <h2 class="title">Sign in</h2>
            <div class="input-div">
              <i class="fas fa-user"></i>
              <input type="text" name="matricNo" placeholder="Matric No" />
            </div>
            <div class="input-div">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn btn-std mt-3 px-5 py-2" />
          </form>
          <form action="#" class="sign-up-form">
            <img class="form-logo" src="assets/icon/apple-icon-114x114.png" alt="">
            <h2 class="title">Sign up</h2>
            <div class="input-div">
              <i class="fas fa-user"></i>
              <input type="text" name="matricNo" placeholder="Matric No" />
            </div>
            <div class="input-div">
              <i class="fas fa-id-badge"></i>
              <input type="text" name="name" placeholder="Name" />
            </div>
            <div class="input-div">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div class="input-div">
              <i class="fas fa-school"></i>
              <input type="email" name="batch" placeholder="Batch" />
            </div>
            <div class="input-div">
              <i class="fas fa-university"></i>
              <input type="email" name="progCode" placeholder="Program Code" />
            </div>
            <div class="input-div">
              <i class="fas fa-graduation-cap"></i>
              <input type="email" name="degree" placeholder="Degree" />
            </div>
            <div class="input-div">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" class="mt-3 btn btn-std px-5 py-2" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Don't have an account yet?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn btn-std px-5 py-2" id="sign-up-btn">
              Sign up
            </button>
          </div>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Already have an account?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn btn-std px-5 py-2" id="sign-in-btn">
              Sign in
            </button>
          </div>
        </div>
      </div>
    </div>
    </section>
    


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="js/script.js"></script>


</body>

</html>
