<?php
    require_once('connect.php');
    session_start();
    //session_destroy();
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

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Rajdhani" rel="stylesheet">

</head>

<body style="background-color: #e0e0d1;">

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
        <div style="border-style:groove; margin-left:30px; margin-top:30px; margin-right:30px;">
            <p style="font-size:30px; height:40px; font-family: 'Acme', sans-serif; margin-left:50px;">MY CLOSET</p>
            <hr>
        </div>
            
        <div> 
            

            </div>

            <?php 
                    for ($i=0; $i<count($_SESSION['cloth_name']); $i++){
                        
                
                    // session_destroy();
                ?>
            <div style="margin-left:20%; margin-top:5%;">

                <div style="display:inline-block; width:200px;">
                    <img src="<?php echo $_SESSION['cloth_image'][$i] ?>" style="width:100%">
                </div>
                <div style="display: inline-block; font-family: 'Rajdhani', sans-serif; font-size: 25px; margin-left:5%;">
                    <b>
                        <p><?php echo $_SESSION['cloth_name'][$i]; ?></p>
                    </b>
                    <p>Total price : <?php echo $_SESSION['cloth_totalPrice'][$i]; ?> Baht</p>
                    <p>Size : <?php echo $_SESSION['cloth_size'][$i]; ?></p>
                    <p>Quantity : <?php echo $_SESSION['cloth_quantity'][$i]; ?></p>
                    <p>Period : <?php echo $_SESSION['cloth_day'][$i]; ?> days</p>
                    <div>
                    <a href="linkremove.php?index=<?php echo $i; ?>"><button style="width:200px; height:50px; background-color:grey; font-size:27px; font-family: 'Rajdhani', sans-serif; color:white;"
                        > REMOVE </button><br><br></a>
                    </div>
                </div>
            </div>
            <?php 
                } ?>  
        <div >
            
             <a href="checkout.php"><button style="margin-left:25%; margin-top:70px; width:350px; height:50px; background-color:grey; font-size:27px; font-family: 'Rajdhani', sans-serif; color:white;"
                         > CHECKOUT </button><br><br></a>
         
        </div>


        
    </div>