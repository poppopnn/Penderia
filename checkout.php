<?php
    require_once('connect.php');
    session_start();
    //session_destroy();

    if(isset($_POST['name']) && isset($_POST['total']) && isset($_POST['quantity']) && isset($_POST['size'])){
        array_push($_SESSION['cloth_name'],$_POST['name']);
        array_push($_SESSION['cloth_size'],$_POST['size']);
        array_push($_SESSION['cloth_quantity'],$_POST['quantity']);
        array_push($_SESSION['cloth_totalPrice'],$_POST['total']);
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
<form class="" action="success.php" method="post">
    <div style="background-color: #e0e0d1; ">
        <div style="width:40%; display:inline-block; box-sizing: border-box; border-style:groove; background-color: #ebebe0; margin-top: 40px; margin-left: 150px;">
            <b>
                <p style="font-size:30px; margin-left: 30px; font-family: 'Rajdhani', sans-serif"> DELIVERY OPTIONS</p>
            </b>
            <div style="font-size:27px;  margin-left: 40px; font-family: 'Rajdhani', sans-serif">
                <input type="radio" name="ship" value="pickup"> FREE self pick-up at our shop<br>
                <input type="radio" name="ship" value="delivery" checked> FREE express delivery
            </div>
        </div>



        <div style="width:47%; display:inline-block; box-sizing: border-box; float:right; margin-top:70px; margin-right: 40px; margin-top: 5px">
            <b>
                <p style="font-size:30px; margin-left: 30px; font-family: 'Rajdhani', sans-serif">SUMMARY </p>
            </b>

    <div>
            <div style="clear:both;"></div>
            <hr>
            <div style="float: left; width:80%; display: inline-block; box-sizing: border-box; font-family: 'Rajdhani', sans-serif; font-size: 25px;">
                <div>
                    <?php
                        $netPrice = 0;
                        for ($i=0; $i<count($_SESSION['cloth_name']); $i++){
                            ?><div style="margin-left:100px;">
                                <div style="display:inline-block;">
                                    <b><p><?php echo $_SESSION['cloth_name'][$i]; ?> (x<?php echo $_SESSION['cloth_quantity'][$i] ?>)</p></b>
                                </div>
                                <div style="display:inline-block; float:right;">
                                    <p><?php echo $_SESSION['cloth_totalPrice'][$i] ?> Baht</p>
                                </div>

                                <p style="font-size:20px; margin-top:-10px; margin-left: 100px;"> Return date : <?php echo $_SESSION['cloth_return'][$i] ?> <p>
                                <p style=" font-size:20px; margin-top:-10px; margin-left: 100px;"> Deposit (x<?php echo $_SESSION['cloth_quantity'][$i] ?>) = <?php echo $_SESSION['cloth_quantity'][$i]*500 ?> Baht <p>
                                <?php
                                    $netPrice = $netPrice+$_SESSION['cloth_totalPrice'][$i]+$_SESSION['cloth_quantity'][$i]*500;
                                ?>
                            </div>
                            <?php
                        }
                    ?>





                    <hr style=" margin-left: 100px;">
                    <div>
                        <div style="display:inline-block; margin-left: 100px; ">
                            <p>Total payment</p>
                        </div>
                        <div style="display:inline-block; float:right;">
                            <p><?php echo $netPrice; ?> Baht</p>
                        </div>
                    </div>
    </div>
                </div>

                <div style="margin-top:30px;">
                    <center><input style="width:300px; margin-top:40px; height:50px; background-color:grey; font-size:27px; font-family: 'Rajdhani', sans-serif; color:white;"
                        type="submit" value="CONFIRM ORDER"> </center>
                </div>


            </div>


        </div>


    </div>


    <div style="background-color: #e0e0d1; ">
        <div style="width:40%; display:inline-block; box-sizing: border-box; border-style:groove; background-color: #ebebe0; margin-top: 40px; margin-left: 150px;">
            <b>
                <p style="font-size:30px; margin-left: 30px; font-family: 'Rajdhani', sans-serif"> DELIVERY DETAILS</p>
            </b>
            <div style="font-size:27px;  margin-left: 40px; font-family: 'Rajdhani', sans-serif" action="">
                <input type="radio" name="newaddress" value="same" checked> Same as registed address<br>
                <input type="radio" name="newaddress" value="new"> New address
            </div>
            <div style="font-size:25px;  margin-left: 40px; font-family: 'Rajdhani', sans-serif" action="">
                <div>
                    <div style="display:inline-block; padding-left: 10px;">
                        Address: <br>
                        <input style="background-color:white; font-size:27px; padding:30px; padding-left: 245px; font-family: 'Rajdhani', sans-serif;"
                            type="text" name="address" value=""><br>
                    </div>
                </div>
                <br>
                <div>
                    <div style="display:inline-block;">
                        Province: <br>
                        <input style="background-color:white; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                            type="text" name="province" value=""><br>
                    </div>
                    <div style="display:inline-block; padding-left: 10px;">
                        Postcode: <br>
                        <input style="background-color:white; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                            type="text" name="postcode" value=""><br>
                    </div>
                    <br><br>
                </div>

            </div>
        </div>
    </div>

    <div style="background-color: #e0e0d1; ">
        <div style="width:40%; display:inline-block; box-sizing: border-box; border-style:groove; background-color: #ebebe0; margin-top: 40px; margin-left:150px;">
            <b>
                <p style="font-size:30px; margin-left: 30px; font-family: 'Rajdhani', sans-serif"> PAYMENT</p>
            </b>
            <div style="font-size:25px;  margin-left: 40px; font-family: 'Rajdhani', sans-serif">
                <div style="display:inline-block; padding-left: 10px;">
                    NAME ON CREDIT CARD <br>
                    <input style="background-color:white; width:550px; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                            type="text" name="nameon" value=""><br><br>
                </div>
                <br>
                <div style="display:inline-block; padding-left: 10px;">
                    CARD NUMBER <br>
                    <input style="background-color:white; width:550px; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                            type="text" name="nameon" value=""><br><br>
                </div>
                <Div>
                    <div style="display:inline-block;">
                        MM <br>
                        <input style="background-color:white; width:180px; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                            type="text" name="MM" value="">
                    </div>
                    <div style="display:inline-block; padding-left: 10px;">
                        YY <br>
                        <input style="background-color:white; width:180px; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                            type="text" name="YY" value="">
                    </div>
                    <div style="display:inline-block; padding-left: 10px;">
                        CVC <br>
                        <input style="background-color:white; width:170px; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                            type="text" name="CVC" value="">
                    </div>
                    <br>
                    <br>
                    <br>


                </Div>


            </div>
  </form>
