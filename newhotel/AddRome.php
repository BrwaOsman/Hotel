<php <?php include 'config.php';?> ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reseption</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/JannaLTRegular.css">
    </head>

    <body>
        <a href="Login.php"
            style=" background-color: #f44336;color: white;padding: 14px 25px;text-align: center;text-decoration: none;display: inline-block;">Login</a>
        <div class="main">
            <div class="logo">
                <img src="images/logo.png">
            </div>
            <div class="book">
                <p>Wellcome</p>
                <form method="post" action="index.php">
                    <input type="text" placeholder="Input Your Name" name="name" />
                    <input type="text" placeholder="Input Phone Number" name="phone" />
                    <input type="text" placeholder="Input Email" name="email" />
                    <input type="date" name="CheckInDate" placeholder="check in" />
                    <input type="date" name="CheckOutDate" placeholder="check out" />
                    <input type="number" name="NoRoom" placeholder="NoRoom" max="25" min="1" />
                    <input type="submit" value="Send" name="send" />
                </form>

                <?php

        
                if(isset($_POST['send'])){

               $pName          = $_POST['name'];
                $pPhone          = $_POST['phone'];
                $pEmail           = $_POST['email'];
                $pCheckInDate     = $_POST['CheckInDate'];
                $pCheckOutDate     = $_POST['CheckOutDate'];
                $pNoRoom          = $_POST['NoRoom'];
               

                    $query = "INSERT INTO visitor(`name`,phone,email,CheckInDate,CheckOutDate,NoRoom) VALUE('$pName ', '$pPhone ' , '$pEmail ','$pCheckInDate ','$pCheckOutDate ','$pNoRoom ')";
                  $result = mysqli_query($db,$query);
                  if($result){
                     echo "<p style='color:green'>" . "Sent" . "</p>";

                  }
                 
 else{
                    echo "<p style='color:red'>" . "Try Again" . "</p>";
                }
                }
                

            ?>


            </div>
        </div>
    </body>

    </html>