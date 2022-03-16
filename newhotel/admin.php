<?php
    include "header.php";
    include "Update.php";
    
    session_start();
if (isset( $_SESSION['user'])) {
 echo 'welcome';
}else{
  header("location:Login.php");
}
// bo logot krdn
if (isset($_GET['Logout'])) {
  session_destroy();
  header("location:Login.php");
}
    
?>

<div class="m-5 cneter ">
<a href="AddRome.php" class=" btn btn-success" >Add Rome</a>

<a href="?Logout"
  style=" background-color: #f44336;color: white;padding: 14px 25px;text-align: center;text-decoration: none;display: inline-block;">Logout</a>
</div>
<table>
  <th>Number</th>
  <th>Name</th>
  <th>Phone Number</th>
  <th>Email</th>
  <th>Check In Date</th>
  <th>Check Out Date</th>
  <th>Number Of Room</th>
  <th>Action</th>


  <?php
    $query = "SELECT * FROM visitor";
    $result = mysqli_query($db,$query);

    
        while($row = mysqli_fetch_assoc($result)){
          
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['email'] . "</td><td>" . $row['CheckInDate'] . "</td><td>". $row['CheckOutDate']. "</td><td>" . $row['NoRoom']. "</td>
            <td><a href='#'data-toggle='modal' data-target='#edit".$row['id']."' class='edit'  ><i class='bi bi-pencil-square btn btn-primary'></i></a> 
            <a href='?d=". $row['id']."'class='delete'><i class='bi bi-trash-fill btn btn-danger'></i></a></td></tr>";
            ?>


  <!-- modal  eidt -->
  <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST">
          <div class="modal-body">

            <input type="text" value="<?php echo $row['id'];?>" name="id" hidden>
            <input type="text" value="<?php echo $row['name'];?>" class="m-2 form-control form-control-lg"
              placeholder="Input Your Name" name="name" />
            <input type="text" value="<?php echo $row['phone'];?>" class="m-2 form-control form-control-lg"
              placeholder="Input Phone Number" name="phone" />
            <input type="text" value="<?php echo $row['email'];?>" class="m-2 form-control form-control-lg"
              placeholder="Input Email" name="email" />
            <input type="date" value="<?php echo $row['CheckInDate'];?>" class="m-2 form-control form-control-lg"
              name="CheckInDate" placeholder="check in" />
            <input type="date" value="<?php echo $row['CheckOutDate'];?>" class="m-2 form-control form-control-lg"
              name="CheckOutDate" placeholder="check out" />
            <input type="number" value="<?php echo $row['NoRoom'];?>" class="m-2 form-control form-control-lg"
              name="NoRoom" placeholder="NoRoom" max="25" min="1" />
          </div>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" value="Update" name="edit" />
        </form>
      </div>
    </div>
  </div>




  <?php  }
        echo "</table>";
?>