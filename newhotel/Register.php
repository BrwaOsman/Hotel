<?php include 'header.php';?>



<?php

if(isset($_POST['Register'])){

   $Name          = $_POST['name'];
   $Password          = $_POST['password'];
   $Email           = $_POST['email'];

$query = mysqli_query($db , "INSERT INTO register(`name`,`password`,email) VALUE('$Name','$Password','$Email')");
if($query){ 
     echo "<p style='color:green'>" . "success" . "</p>";
   header("location:Login.php");
}

else{
   echo "<p style='color:red'>" . "Try Again" . "</p>";
}
}
?>

<div class="book">
   <p>Register</p>
   <form method="POST" enctype="multipart/form-data">
      <input type="text" placeholder="Input Your Name" name="name" />
      <input type="password" placeholder="Input Password" name="password" />
      <input type="email" placeholder="Input Email" name="email" />

      <input type="submit" value="Register" name="Register" />
   </form>