<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- nav bar font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap"
      rel="stylesheet"
    />

    <!-- main page font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap"
      rel="stylesheet"
    />

    <!-- emmet links -->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible" content="ie=edge"  />

    <!-- css files -->
    <link rel="stylesheet" href="./search-data.css" />
    <title>RehanWallpapers</title>
  </head>

  <body>
    <?php include '../head_foot/header.php' ?>

    <main>
      <div class="wallpaper-container">
        <?php include './find-data.php' ?>
      </div>
    </main>

    <?php include '../head_foot/footer.php' ?>
  </body>
</html>
