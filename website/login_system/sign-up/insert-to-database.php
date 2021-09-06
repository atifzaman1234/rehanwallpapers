<?php
  if(isset($_POST['submit'])){
    require '../../connect-to-database.php'; #database setup

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date = date("Y-m-d");
    $sql_query = "INSERT INTO `website`.`users` (`ID`, `name`, `email`, `password`, `signup-date`, `admin`) VALUES ('','$name', '$email', '$password', '$date', '0')";

    $conn->close();
  }
?>
