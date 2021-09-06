<!DOCTYPE html>
<html lang="en">

<head>
  <!-- css -->
  <link rel="stylesheet" href="./sign-up.css">
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
  <title>RehanWallpapers</title>
</head>

<body>
  <div class="container">
    <div class="header-for-form">SIGN UP</div>

    <form action="./insert-to-database.php" method="post">
      <span class="text">username:</span><br>
      <input type="text" name="name" class="input name"><br>
      <span class="text">email:</span><br>
      <input type="email" name="email" class="input email"><br>
      <span class="text">password:</span><br>
      <input type="text" name="password" class="input Password"><br>
      <div class="error" style="color:red"></div>
      <input type="submit" name="submit" class="submit-btn">
    </form>
    <span class="sign-up-link">
      Already have an accoutnt?<a href="../login/login.html.php">Login</a>
    </span>
  </div>
  <!-- js -->
  <script charset="utf-8">
    <?php include './sign-up-validation.php'?>
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
