<?php
    include_once "../config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <div class="main-container">
      <div class="container">
        <div class="row form signup">
          <div class="col left">
            <form action="../proccess/registration.php" method="POST">
              <h2>Sign Up</h2>
              <div>
                <i class="fas fa-user"></i>
                <input name="username" type="text" placeholder="Username" />
              </div>
              <div>
                <i class="fas fa-user"></i>
                <input  name="email" type="text" placeholder="Email" />
              </div>
              <div>
                <i class="fas fa-lock"></i>
                <input name="password" type="password" placeholder="Password" />
              </div>
              <div><input type="submit" value="Login" /></div>
              <div class="social-links">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-google"></i>
                <i class="fab fa-instagram"></i>
              </div>
            </form>
          </div>
          <div class="col right">
            <div class="row">
              <h2>Sign Up</h2>
            </div>
            <div class="row">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="row">
              <button class="signup-btn">Log in</button>
              <!-- <svg>
                        <text x="0" y="15">Sign up</text>
                    </svg> -->
            </div>
            <div class="row">
              <img src="<?= IMAGES?>undraw_Mobile_feed_re_72ta.svg" />
            </div>
          </div>
        </div>
        <div class="row form login-form">
          <div class="col left">
            <form action="../proccess/login.php" method="POST">

              <h2>Log In</h2>
                <h3 style="color: red">
                    <?php
                    if(isset($_GET["err"]))
                    {
                       echo $_GET["err"];
                    }
                    ?>
                </h3>
              <div>
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username" />
              </div>
              <div>
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" />
              </div>
              <div><input type="submit" value="Login" /></div>
              <div class="social-links">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-google"></i>
                <i class="fab fa-instagram"></i>
              </div>
            </form>
          </div>
          <div class="col right">
            <div class="row">
              <h2>Signin</h2>
            </div>
            <div class="row">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="row">
              <button class="login-btn">Sign up</button>
              <!-- <svg>
                                <text x="0" y="15">Sign up</text>
                            </svg> -->
            </div>
            <div class="row">
              <img src="<?= IMAGES?>undraw_Mobile_feed_re_72ta.svg" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?= SCRIPTS?>login.js"></script>
  </body>
</html>
