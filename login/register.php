<?php include('../includes/server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon"  href="logo.jpg">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Student Signup/login</title>

    <link rel="stylesheet" type="text/css" href="sty.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="post" action="register.php" class="sign-in-form">
          <?php include('../includes/errors.php'); ?>
            <h2 class="title">Sign In</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />

            </div>
            <input type="submit" value="Login" class="btn solid" name="login_user" />

            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/profile" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/i/flow/login" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://accounts.google.com/ServiceLogin/identifier?elo=1&ifkv=AeAAQh6RVlyw3KRoEgY1eC7xtz2xS1fqPBbn24Jf7xCDZenJBfeyuU6UYOSkCVeJkPJHEnIZymRUoA&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/home" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>


          <form method="post" action="register.php" class="sign-up-form">
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password_1" />
            </div>
             <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Repeat Password" />
            </div>
            <input type="submit" value="Sign Up" class="btn solid" name="reg_user" />

            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/i/flow/signup" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://accounts.google.com/signup/v2/webcreateaccount?continue=https%3A%2F%2Fmyaccount.google.com%3Futm_source%3Daccount-marketing-page%26utm_medium%3Dcreate-account-button&flowName=GlifWebSignIn&flowEntry=SignUp" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/signup/cold-join?trk=guest_homepage-basic_nav-header-join" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
      <div class="panels-container">

        <div class="panel left-panel">
            <div class="content">
                <h3>New here?</h3>
                <p>Need Help With Your Subjects who are near to you ?</p>
                <button class="btn transparent" id="sign-up-btn">Sign Up</button>
            </div>
            <img src="log.svg" class="image" alt="">
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>One of us?</h3>
                <p>Get up with determination. Go to bed with satisfaction. Lets GO!!</p>
                <button class="btn transparent" id="sign-in-btn">Sign In</button>
            </div>
            <img src="register.svg" class="image" alt="">
        </div>
      </div>
    </div>

    <script src="./app.js"></script>
  </body>
</html>