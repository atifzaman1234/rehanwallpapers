<!DOCTYPE html>
<html lang="en">

<head>
  <!-- nav bar font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

  <!-- main page font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

  <!-- emmet links -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- css -->
  <link rel="stylesheet" href="./index.css">
  <!-- logo --><link rel="icon" type="image/x-icon" href="../img/logo.svg">
  <title>RehanWallpapers</title>
</head>

<body>
  <?php include '../head_foot/header.php'; ?>
  <!-- wallpaper section begins here -->
  <main>
    <div class="device-name">
      Wallpapers for Desktop &rarr;
    </div>
    <div class="wallpaper-container">
      <?php
      require '../connect-to-database.php';
      // this query is satying give all the images from the db.
      $sql = 'SELECT
                i.name AS name,
                i.resolution AS resolution,
                u.name AS uploader
              FROM imgs i
              JOIN
                users u ON i.uploader_ID = u.ID
              LIMIT 6;';
      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);
      while($row=mysqli_fetch_assoc($result))
      {
        for($i = 0; $i < 1; $i++)
        {
          # now i will get the values
          $img_name = $row['name'];
          $resolution = $row['resolution'];
          $uploader = $row['uploader'];
          # now i will dislplay the names
          echo "<div class='img-container'><img src='../img/$img_name.jpeg' alt='' class='wallpaper-img desktop-img'><br><span class='resolution'>Resolution:"." ".$resolution."</span><br><span class='uploader'>Uploaded by:"." ".$uploader."</span><a href='../img/$img_name.jpeg' download><button class='download-btn'>Download</button></div></a>";
        }
      }
      ?>
  </main>
  <?php include '../head_foot/footer.php'; ?>
</body>

</html>
