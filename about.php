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

     <div>
        <div style="width:47%; display:inline-block; box-sizing: border-box;">
            <img src="closet.png" style="width:70%; padding-top: 100px; padding-left: 250px;">
        </div>

        <div style="width:47%; display:inline-block; box-sizing: border-box; float:right; margin-top:70px; font-size: 25px; font-family: 'Rajdhani', sans-serif">
            <b>
                <p style="font-size:50px;">About Us</p>
            </b>
            <p> If you are a fashion enthusiast with a closet full of clothes but still have "nothing to wear", you have come to the right place!</p>
            <p> PENDERIA.COM is an up-and-coming, top-tier online destination for designer items rentals, enabling you to temporarily own the best authentic fashion pieces from fashion labels around the globe at any given time no matter where you are.</p>
            <P>We will take you to a new height of fashion and change the face of retail forever.</P>
            <p>The beginning of your new closet is only a click away!</p>