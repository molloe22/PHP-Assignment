<?php
$host = "localhost";
$username = "root";
$password = "ConallMolloy2002";
$dbname = "Users";


$user = $_POST["username"];
$pass = $_POST["password"];


//Connect
$conn = new mysqli($host, $username, $password, $dbname);
if($conn->connect_error){
   die("Failed to connect: " . $conn->connect_error);
}

$query = "SELECT username FROM registeredUsers WHERE username='$user' and password = '$pass'";
$res = $conn->query($query);

$rows = $res->num_rows;


$count = mysqli_num_rows($res);
//If res matches username and password, table row must be only 1 row 
if($count == 1) {
   echo "Logged in!";
} else {
   echo "Login Failed!";
}



?>
<html>
   <head>
      <title>Login</title>
      <link rel="stylesheet" type="text/css"href="../stylesheet.css"/>
   </head>
   <body>
      <div id = "container">
         <div id="header">
            <h1>Login</h1>
         </div>
         <nav>
            <ul>
               <li><a href="../index.html">Home</a></li>
               <li><a href="login/login.php"><b>Login</b></a></li>
            </ul>
         </nav>
         <div id = "main">
            <div id="login">
               <form id="userLogin" action="" method="post">
                  <table border="0" width="500" align="center" class="table">
                  
                  <tr>
                     <td> User Name</td>
                     <td><input type="text" class="inputBox" name ="username" value=""></td>
                   </tr>
                   
                   <tr>
                     <td>Password</td>
                     <td><input type="text" class="inputBox" name="password" value=""></td>
                   </tr>
                   <tr>
                      <td colspan=2>
                        <input type="submit" name="loginUser" value="Login" class="btnRegister">
                      </td>
                   </tr>
                  
               </form>
            </div>
            <p>Dont have a login? Register <a href="../register/register.php">here</a></p>
         </div>
      </div>
   </body>
</html>
         
