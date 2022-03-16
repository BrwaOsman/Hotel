<?php

include "header.php";
session_start();
?>
<a href="index.php"
  style=" background-color: #f44336;color: white;padding: 14px 25px;text-align: center;text-decoration: none;display: inline-block;">Creat
  User</a>


<?php

if(isset($_POST['login'])){

$Email           = $_POST['email'];
$Password          = $_POST['password'];

$query = mysqli_query($db , "SELECT * FROM `register` WHERE `password` = '$Password' AND  `email` = '$Email'");
if(mysqli_num_rows($query) == 1){ 
  echo "<p style='color:green'>" . "success" . "</p>";
  
  $_SESSION['user'] = $_POST['email'];
  
header("location:admin.php");
}

else{
echo "<p style='color:red'>" . "Try Again" . "</p>";
}
}


?>

<div class="book">
  <p>Login</p>
  <form method="post">
    <input type="email" placeholder="Input Email" name="email" />
    <input type="password" placeholder="Input Password" name="password" />

    <input type="submit" value="Login" name="login" />

  </form>
  <a href="Register.php">Register ...</a>