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

            <div  style="background-color: #e0e0d1;">.
             <center>
                    <p style="font-size:30px; height:40px; font-family: 'Acme', sans-serif;">  GALA DINNER</p>
                </center>  
    
                <center>
                        <div style="font-family: 'Rajdhani', sans-serif; font-size: 25px;">
                                <a href="detaildress.php?name=Gala1">
                                <div class="imgsameline">
                                    <img style="width:300px; height:480px;"; src="gala1.jpg">
                                    <p>GALA DINNER 1</p>
                                </div>
                                </a>
                                <a href="detaildress.php?name=Gala2">
                                <div class="imgsameline">
                                    <img style="width:300px; height:480px;"; src="gala2.jpg">
                                    <p>GALA DINNER 2</p>
                                </div>
                                </a>
                                <a href="detaildress.php?name=Gala3">
                                <div class="imgsameline">
                                    <img style="width:300px; height:480px;"; src="gala10.jpg">
                                    <p>GALA DINNER 3</p>
                                </div>
                                </a>
                        </div>
                        <div style="font-family: 'Rajdhani', sans-serif; font-size: 25px;">
                                <a href="detaildress.php?name=Gala4">
                                <div class="imgsameline">
                                    <img style="width:300px; height:480px;"; src="gala4.jpg">
                                    <p>GALA DINNER 4</p>
                                </div>
                                </a>
                                <a href="detaildress.php?name=Gala5">
                                <div class="imgsameline">
                                    <img style="width:300px; height:480px;"; src="gala5.jpg">
                                    <p>GALA DINNER 5</p>
                                </div>
                                </a>
                                <a href="detaildress.php?name=Gala6">
                                <div class="imgsameline">
                                    <img style="width:300px; height:480px;"; src="gala6.jpg">
                                    <p>GALA DINNER 6</p>
                                </div>
                                </a>
                        </div>
                        <div style="font-family: 'Rajdhani', sans-serif; font-size: 25px;">
                                <a href="detaildress.php?name=Gala7">
                                <div class="imgsameline">
                                    <img style="width:300px; height:480px;"; src="gala3.jpg">
                                    <p>GALA DINNER 7</p>
                                </div>
                                </a>
                                <a href="detaildress.php?name=Gala8">
                                <div class="imgsameline">
                                    <img style="width:300px; height:480px;"; src="gala8.jpg">
                                    <p>GALA DINNER 8</p>
                                </div>
                                </a>
                                <a href="detaildress.php?name=Gala9">
                                <div class="imgsameline">
                                    <img style="width:300px; height:480px;"; src="gala9.jpg">
                                    <p>GALA DINNER 9</p>
                                </div>
                                </a>
                        </div>
                            
                  
                            
                </center> 
           
             </div>    
               
       </body>
    </html>