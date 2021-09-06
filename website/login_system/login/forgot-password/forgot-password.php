<?php include './send-email.php';  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RehanWallpapers</title>
</head>
<body>
    <main>
        <!-- the form container -->
        <form action="./forgot-password.php" method="post">
            <span class="text">email:</span><br>
            <input type="text" name="email" class="input name"><br>
                <?php 
                    if($email_found == false){
                        echo "<div class='error' style='color:red'>Invalid email</div>";
                    }else{
                        echo "<div class='error' style='color:green'>Check your email</div>";
                    }
                ?>
            <button type="submit" class="submit-btn">SEND</button>
        </form>
    </main>
</body>
</html>