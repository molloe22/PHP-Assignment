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

$query = "INSERT INTO registeredUsers (username, password) VALUES ('$user', '$pass')";
if($conn->query($query) === TRUE) {
   echo "New table entry successful!";
} else {
   echo "Error: " . $query . "<br>" . $conn->error;
}

?>
<html>
   <head>
      <title>Registration</title>
      <link rel="stylesheet" type="text/css"href="../stylesheet.css"/>
   </head>
   <body>
      <div id = "container">
         <div id="header">
            <h1>Registration</h1>
         </div>
         <nav>
            <ul>
               <li><a href="../index.html">Home</a></li>
               <li><a href="../login/login.php">Login</a></li>
            </ul>
         </nav>
         <div id = "main">
            <div id="register">
               <form id="register" action="" method="post">
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
                        <input type="submit" name="registerUser" value="Register" class="btnRegister">
                      </td>
                   </tr>
                  
               </form>
            </div>
         </div>
      </div>
   </body>
</html>
         
