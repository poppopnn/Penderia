<?php
    require_once('connect.php');
    session_start();
    //session_destroy();
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Rajdhani" rel="stylesheet">

</head>

<body>

<?php

  $address = '';
  $province = '';
  $postcode = '';

  if( $_POST['ship']=='delivery'){
    if( $_POST['newaddress']=='new'){
      $address = $_POST['address'];
      $province =  $_POST['province'];
      $postcode = $_POST['postcode'];
    } else {
      $q = "SELECT address,province,postcode FROM customer WHERE username = '$_SESSION[user]'";
      $result2 = $mysqli->query($q);
      $row = $result2->fetch_assoc();
      $address = $row['address'];
      $province = $row['province'];
      $postcode = $row['postcode'];

    }

  }

  $sql = "INSERT INTO rental (rentaddress,province,postcode,deliverytype) VALUES ('$address','$province','$postcode','$_POST[ship]')";
  $result = $mysqli->query($sql);
  if(!$result){
    echo $mysqli->error;
  } else {
    $rentalID = $mysqli->insert_id;
    for ($i=0; $i<count($_SESSION['cloth_id']); $i++){
      $id = $_SESSION['cloth_id'][$i];
      $day = $_SESSION['cloth_day'][$i];
      $returnDate = $_SESSION['cloth_return'][$i];
      $quantity = $_SESSION['cloth_quantity'][$i];
      $fromDate = date('Y-m-d', strtotime ( '-'.$_SESSION['cloth_day'][$i].' day' , strtotime ($_SESSION['cloth_return'][$i])));

      $a = "INSERT INTO rentitem (dress_id,period,fromdate,returndate,quantity,rental_id) VALUES ($id,'$day','$fromDate','$returnDate',$quantity,$rentalID)";

      $result_a = $mysqli->query($a);
      if(!$result_a){
        echo $mysqli->error;
      }
    }
    unset($_SESSION['cloth_id']);
    unset($_SESSION['cloth_day']);
    unset($_SESSION['cloth_return']);
    unset($_SESSION['cloth_size']);
    unset($_SESSION['cloth_name']);
    unset($_SESSION['cloth_quantity']);
    unset($_SESSION['cloth_totalPrice']);
    unset($_SESSION['cloth_image']); 
  }

?>

    <div class="top" style="background-color: #e0e0d1; width:100%;">
        <div class="topLeft"></div>
        <div class="topCenter" style="padding-left:15%; padding-top: 5%"> <img src="logo11.png"></div>
        <div class="topRight">
            <?php
            if(empty($_SESSION['user'])){ ?>
                <a class="sign" style="padding-left: 230px;" href="signup.php" id="">
                SIGN UP
                </a>

                <a class="sign" style="padding-left: 50px;" href="login.html" id="">
                LOG IN
                </a>
            <?php }
            else{
                $user = $_SESSION['user'];
                echo $user;
                ?>

                <a class="sign" style="padding-left: 50px;" href="logout.php" id="">
                LOG OUT
                </a>
            <?php }
            ?>
            <a href="#" id="">
                    <img style="width:40px; height:40px; padding-left: 50px; padding-top: 20px;" src="basket.png">
                </a>
            <div style="clear:both;"></div>
        </div>

     </div>

    <div style="background-color:  #ccccb3; width: 100%; height:40px; padding-top: 20px; font-family: 'Rajdhani', sans-serif"
        ;>
        <center>
            <b><a class="bar" href="index.php">HOME</a></b>
            <b><a class="bar" href="about.php">ABOUT</a></b>
            <div class="dropdown">
                <b><a class="dropbtn bar" href="#">CLOTHING</a></b>
                <div class="dropdown-content">
                    <a class="submenu" href="#"> NEW ARRIVAL</a>
                    <a class="submenu" href="#"> MOST POPULAR</a>
                    <a class="submenu" href="#"> LONG DRESS</a>
                    <a class="submenu" href="#"> MINI DRESS</a>
                    <a class="submenu" href="#"> COAT</a>

                </div>
            </div>
            <div class="dropdown">
                <b><a class="dropbtn bar" href="#">OCCASIONS</a></b>
                <div class="dropdown-content1">
                    <a class="submenu" href="wedding.php"> WEDDING GUEST</a>
                    <a class="submenu" href="bdparty.php"> BIRTHDAY PARTY</a>
                    <a class="submenu" href="gala.php"> GALA DINNER</a>
                    <a class="submenu" href="graduation.php"> GRADUATION</a>
                    <a class="submenu" href="prom.php"> PROM</a>
                    <a class="submenu" href="datenight.php"> NIGHT CLUB</a>
                </div>
            </div>
            <b><a class="bar" href="contactus.php">CONTACT US</a></b>
        </center>

    </div>

    <div style="background-color: #e0e0d1; ">.
        <div>
           <center>
               <img  style="margin-top:150px; width:100px; height:100px;" src="icondress.png">
               <p style="font-size:50px; font-family: 'Dosis', sans-serif;">Thank you for your purchase!</p>
               <p style="font-size:25px; color:#3d3d29; font-family: 'Dosis', sans-serif;"> We are preparing your order and will soon recieve and email with detail of order. Once</p>
               <p style="font-size:25px; color:#3d3d29; font-family: 'Dosis', sans-serif;"> the order has shipped you will recieve another email with a link to track its progress.</p>
           </center>
        </div>
        <div>
            <center style="margin-top: 120px;">
                <a href="index.php"><button style="width:350px; height:50px; background-color:grey; font-size:27px; font-family: 'Rajdhani', sans-serif; color:white;"
                    type="button"> CONTINUE SHOPPING </button></a>

            </center>
        </div>
    </div>

    </body>
</html>
