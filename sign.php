<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="login.php" method="post" class="sign-in-form">
            <title>Sign in</title>
            <h2 class="title">Sign in</h2>
            <?php if (isset($_GET['errori'])) { ?>
     		      <p class="error"><?php echo $_GET['errori']; ?></p>
     	      <?php } ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Company Name" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="signup-check.php" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <?php if (isset($_GET['erroru'])) { ?>
              <script type="text/javascript">
              const containeru = document.querySelector(".container");
              containeru.classList.add("sign-up-mode");         
              </script>
              <p class="error"><?php echo $_GET['erroru']; ?></p>
            <?php } ?>
     
               <?php if (isset($_GET['success'])) { ?>
                <script type="text/javascript">
                    const containers = document.querySelector(".container");
                    containers.classList.add("sign-up-mode");         
                </script>
                    <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>
                 <div class="input-field">
                   <i class="fas fa-user"></i>
                   <?php if (isset($_GET['name'])) { ?>
                    <input type="text" 
                           name="name" 
                           placeholder="Company Name"
                           value="<?php echo $_GET['name']; ?>"><br>
               <?php }else{ ?>
                    <input type="text" 
                           name="name" 
                           placeholder="Company Name"><br>
               <?php }?>
                 </div>
                 <div class="input-field">
                   <i class="fas fa-envelope"></i>
                   <?php if (isset($_GET['amil'])) { ?>
                    <input type="text" 
                           name="mail" 
                           placeholder="Mail"
                           value="<?php echo $_GET['mail']; ?>"><br>
               <?php }else{ ?>
                    <input type="text" 
                           name="mail" 
                           placeholder="Mail"><br>
               <?php }?>
     
                 </div>
                 <div class="input-field">
                   <i class="fas fa-lock"></i>
                   <input type="password" 
                      name="password" 
                      placeholder="Password"><br>
                 </div>
           <div class="input-field">
                   <i class="fas fa-lock"></i>
                    <input type="password" 
                      name="re_password" 
                      placeholder="Re_Password"><br>
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Sign up for free and get your free trial for 3 days ... Let's goo !!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Sign in to see your workspace , and enjoy with us !!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
