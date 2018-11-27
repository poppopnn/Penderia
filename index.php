<?php
    require_once('connect.php');
    session_start();
    //session_destroy();
    if(!isset($_SESSION['cloth_name'])){
        $_SESSION['cloth_name'] = array();
        $_SESSION['cloth_size'] = array();
        $_SESSION['cloth_quantity'] = array();
        $_SESSION['cloth_totalPrice'] = array();
        $_SESSION['cloth_image']=array();
        $_SESSION['cloth_id']=array();
        $_SESSION['cloth_day']=array();
        $_SESSION['cloth_return']=array();

    }
    


    if(isset($_POST['name']) && isset($_POST['total']) && isset($_POST['quantity']) && isset($_POST['size'])){
        array_push($_SESSION['cloth_name'],$_POST['name']);
        array_push($_SESSION['cloth_size'],$_POST['size']);
        array_push($_SESSION['cloth_quantity'],$_POST['quantity']);
        array_push($_SESSION['cloth_totalPrice'],$_POST['total']);
        array_push($_SESSION['cloth_image'],$_POST['image']);
        array_push($_SESSION['cloth_id'],$_POST['id']);
        array_push($_SESSION['cloth_day'],$_POST['day']);
        array_push($_SESSION['cloth_return'],date('Y-m-d',strtotime("$_POST[fromdate],+$_POST[day] day" )));
    }
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
            <a href="basket.php" id="">
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

    <center>
        <img src="pic4.jpg" style="width:670px; height: 770px;">
        <img src="pic1.jpg" style="width:650px; height: 770px;">
        <img src="pic2.jpg" style="width:670px; height: 770px;">
    </center>

    <div style="background-color: #e0e0d1;">.
        <center>
            <p style="font-size:50px; height:40px; padding-top: 20px; font-family: 'Acme', sans-serif;"> HOW IT WORKS</p>
        </center>

        <center>
            <div>
                <div class="imgsameline"><img style="width:200px; padding: 40px;" src="rent.png"></div>
                <div class="imgsameline"><img style="width:160px; padding: 40px; " src="love.png"></div>
                <div class="imgsameline"><img style="width:180px;  padding: 40px; " src="ship.png"></div>
            </div>

            <div style="float: left; position: relative; left: 50%;">
                <div style="position: relative;left: -50%;">
                    <div class="imgsameline" style="font-family: 'Rajdhani', sans-serif; float:left">
                        <b>
                            <p style="font-size:30px;"> 1.Browse the collection</p>
                        </b>
                        <p style="font-size:25px;"> Choose from our wide variety for our gala event or date night!</p>
                    </div>
                    <div class="imgsameline" style="font-family: 'Rajdhani', sans-serif; float:left">
                        <b>
                            <p style="font-size:30px;"> 2.Love</p>
                        </b>
                        <p style="font-size:25px;"> Look and feel amazing at your event!</p>
                    </div>
                    <div class="imgsameline" style="font-family: 'Rajdhani', sans-serif; float:left">
                        <b>
                            <p style="font-size:30px;"> 3.Deliver and Pickup</p>
                        </b>
                        <p style="font-size:25px;"> The dress will be delivered to your doorstep and pick up from your
                            doorstep after the rental duration has ended.</p>
                    </div>
                </div>
            </div>
            <div style="clear:left"></div>
        </center>

        <center>
            <p style="font-size:50px; height:40px; margin-top: 130px; font-family: 'Acme', sans-serif;"> FOR YOUR
                SPECIAL OCCASION </p>
        </center>

        <center>
            <div style="font-family: 'Rajdhani', sans-serif; font-size: 25px;">
                <a href="wedding.php">
                    <div class="imgsameline">
                        <img style="width:300px; padding: 70px;" ; src="wedd.png">
                        <center>
                            <p>WEDDING GUEST</p>
                        </center>
                    </div>
                </a>
                <a href="graduation.php">
                    <div class="imgsameline">
                        <img style="width:270px; padding: 70px; " ; src="gra.png">
                        <center>
                            <p> GRADUATION</p>
                        </center>
                    </div>
                </a>
                <a href="datenight.php">
                    <div class="imgsameline">
                        <img style="width:300px; padding: 70px; " ; src="date.png">
                        <center>
                            <p> NIGHT CLUB</p>
                        </center>
                    </div>
                </a>
            </div>

            <div style="font-family: 'Rajdhani', sans-serif; font-size: 25px;">
                <a href="bdparty.php">
                    <div class="imgsameline">
                        <img style="width:270px; padding: 70px; " ; src="bd.png">
                        <center>
                            <p> BIRTHDAY PARTY</p>
                        </center>
                    </div>
                </a>
                <a href="prom.php">
                    <div class="imgsameline">
                        <img style="width:270px; padding: 70px; " ; src="prommm.png">
                        <center>
                            <p> PROM</p>
                        </center>
                    </div>
                </a>
                <a href="gala.php">
                    <div class="imgsameline">
                        <img style="width:270px; padding: 70px; " ; src="gd.png">
                        <center>
                            <p> GALA DINNER</p>
                        </center>
                    </div>
                </a>
            </div>
        </center>

    </div>
</body>

</html>