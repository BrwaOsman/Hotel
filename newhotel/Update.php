<?php  
// update function
if(isset($_POST['edit']) ){
    $id = $_POST['id'];
    $pName          = $_POST['name'];
    $pPhone          = $_POST['phone'];
    $pEmail           = $_POST['email'];
    $pCheckInDate     = $_POST['CheckInDate'];
    $pCheckOutDate     = $_POST['CheckOutDate'];
    $pNoRoom          = $_POST['NoRoom'];

  $query=mysqli_query($db , "UPDATE `visitor` SET `name` ='$pName' ,`phone`='$pPhone' ,`email`='$pEmail',
    `CheckInDate` ='$pCheckInDate' ,`CheckOutDate`='$pCheckOutDate' ,`NoRoom`='$pNoRoom' WHERE `id` = '$id' ");
  if($query){
    echo "<p style='color:green'>" . "Update" . "</p>";

 }
 else{
   echo "<p style='color:red'>" . "Try Again Update" . "</p>";
}
  }
//   delete function
  if(isset($_GET['d'])){
    $id = $_GET['d'];
  
    $query= mysqli_query($db , "DELETE FROM `visitor` WHERE `id` = '$id' ");
    if($query){
        echo "<p style='color:green'>" . "successFull Delete" . "</p>";

     }
     else{
       echo "<p style='color:red'>" . "Try Again Delete " . "</p>";
    }
  
  }

?>