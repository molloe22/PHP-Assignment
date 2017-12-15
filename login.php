<?php 
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] =="POST" {
      //username and password from html form
      $username = mysqli_real_escape_string($db,$_POST['usename']);
      $password = mysqli_real_escape_string($db, $-POST['password']);

      $sqlQuery = "SELECT id FROM admin WHERE username = '$username' and passcode = '$password'";
      $result = mysqli_query($db,$sqlQuery);

      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $username and $password, table row must be 1 row

      if($count == 1) {
         session_register("username");
         $_SESSION['login_user'] = $username;

         header("location: welcome.php");
      } else {
         $error = "Your Login information is incorrect";
      }
   }
?>

