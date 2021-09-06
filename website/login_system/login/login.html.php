<?php
  require 'check-with-database.php'
?>

<!DOCTYPE html>
  <html lang="en">

  <head>
    <!-- css link -->
    <link rel="stylesheet" href="login.css">

    <!-- emmet boilerplate -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- main page font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- navbar font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- title -->
    <title>RehanWallpapers</title>
  </head>

  <body>
    <div class="container">
      <div class="header-for-form">LOGIN</div>

      <!-- the form container -->
      <form action="./login.html.php" method="post">
        <span class="text">username:</span><br>
        <input type="text" name="name" class="input name"><br>
        <span class="text">password:</span><br>
        <input type="password" name="password" class="input Password">
        <div class="error" style="color:red"></div>
        <button type="submit" name="submit" class="submit-btn">Submit</button>
        <!-- verify login -->
        <?php
        if(isset($_POST['submit'])){
          if(isset($_SESSION['loggedin'])){
            echo "<div style='color:green'>You are Logged in</div>";
          }else{
            echo "<div style='color:red'>Invalid Credentials</div>"; 
          }
        }
        ?>
      </form>
      <span class="sign-up-link">
        Dont have an account?<a href="../sign-up/sign-up.html.php">Sign Up Now</a>
        <!-- <br>
        <div class="sign-up-link option">OR</div>
        <div class="change-pwd">
          <a href="./forgot-password/forgot-password.php">Forgot password?</a>
        </div>
      </span> -->
    </div>
    <script>
      <?php include './login-validation.php' ?>
    </script>
  </body>

  <style media="screen">
    * {
      margin: 0;
      padding: 0
    }

    a {
      text-decoration: none;
    }

    li {
      list-style: none;
    }
  </style>

  </html>