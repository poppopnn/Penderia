<?php
    require_once('connect.php');
    session_start();
    //session_destroy();

    if(!empty($_REQUEST['name']))
    {
        $dressname=$_REQUEST['name'];
        $q="SELECT dress_id,filename,dressname FROM dress WHERE dressname='".$dressname."'";
        $resultc=$mysqli->query($q);
        $main=$resultc->fetch_array();

        $c="SELECT price FROM size WHERE dressname='".$dressname."'";
        $resulta=$mysqli->query($c);
       


        
    }
    else
    {
        echo "<script type='text/javascript'>alert('SOMETHING IS NOT RIGHT. PLEASE CONTACT admin')</script>";   
        echo '<script type="text/javascript">window.location = "index.php"</script>';
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
                    <a class="submenu" href="#"> JUMPSUIT</a>
                    

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
        <div style="width:47%; display:inline-block; box-sizing: border-box;">
            <img src="<?=$main['filename'];?>" style="width:70%; padding-top: 100px; padding-left: 250px;">
        </div>

        

        <div style="width:47%; display:inline-block; box-sizing: border-box; float:right; margin-top:70px;">

            <b>
                <p style="font-size:30px; font-family: 'Rajdhani', sans-serif"> <?=$main['dressname']; ?> </p>
            </b>
            <p style="font-size:27px; font-family: 'Rajdhani', sans-serif"> 
                <?php 
                    $count=0;
                     while($size=$resulta->fetch_array()){ 
                        if($count==0){
                            echo 'S  : ';
                            $S=$size['price'];
                            echo $S; 
                            echo ' baht/day [RENT]';
                            echo '<br>';
                        }else if($count==1){
                            echo 'M : ';
                            $M=$size['price'];
                            echo $M;
                            echo ' baht/day [RENT]';
                            echo '<br>';
                        }else{
                            echo 'L  : ';
                            $L=$size['price'];
                            echo $L;
                            echo ' baht/day [RENT]';
                            echo '<br>';
                        }
                        $count=$count+1;
                    }
                    
                ?>
            
            </p>
        <form id="form" method="POST">
            <input type="hidden" name="name" value="<?php echo $main['dressname']; ?>">
            <input id="totalPrice" type="hidden" name="total" value="">
            <input id="image" type="hidden" name="image" value="<?php echo $main['filename']; ?>">
            <input id="id" type="hidden" name="id" value="<?php echo $main['dress_id']; ?>">
            <u>
                <p style="font-size:27px; font-family: 'Rajdhani', sans-serif">SIZE</p>
            </u>
            <select onchange="keepinputsize(value)" name="size" id="size" style="background-color:#e0e0d1; font-size:27px; font-family: 'Rajdhani', sans-serif; ">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
            </select>
            <u>
                <p style="font-size:27px; font-family: 'Rajdhani', sans-serif">Quantity</p>
            </u>
            
                <input onchange= "keepinputquantity(value)" value=1 id="size" style="background-color:#e0e0d1; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                    type="number" name="quantity" min=1 max=3 name="number" value="" onkeyup="limit(event)"><br>
              
           
            <u>
                <p style="font-size:27px; font-family: 'Rajdhani', sans-serif">Delivery and Return date </p>
            </u>
            <select onchange="keepinputperiod(value)" id="size" name="day" style="background-color:#e0e0d1; font-size:27px; font-family: 'Rajdhani', sans-serif;">
                <option value="5">5 days rental</option>
                <option value="7">7 days rental </option>
            </select>
            <u>
                <p style="font-size:27px; font-family: 'Rajdhani', sans-serif">Period of rentals</p>
            </u>
            
            
           
    
                <p style="font-size:20px; font-family: 'Rajdhani', sans-serif">FROM :</p><input   onchange="keepinputfrom(value)" id="size" style="background-color:#e0e0d1; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                    type="date" name="fromdate" value=""><br>
                
    
            <br>
            <br>
                <button style="width:350px; height:50px; background-color:grey; font-size:27px; font-family: 'Rajdhani', sans-serif; color:white;" type="button" id="myBtn" name="rentnow">RENT NOW</button>

        </div>
       
        <script>
            function limit()
            {
                if (event.target.value>3)
                {
                    event.target.value=3
                } 
                if (event.target.value<1)
                {
                    event.target.value=1
                } 
            }

            var size = "S";
            var quantity = 1;
            var day = 5;
            function keepinputsize(value)
             {
                 size=value;
                 document.getElementById("test").innerHTML="Size: "+value;
             }
             function keepinputquantity(value)
             {
                 quantity=value;
                 document.getElementById("qua").innerHTML="Quantity: "+value;
             }
             function keepinputperiod(value)
             {
                 day=value;
                 document.getElementById("period").innerHTML="Period of rental: "+value + " days rental";
             }
             function keepinputfrom(value)
             {
                 document.getElementById("from").innerHTML="From: "+value;
             }
             function keepinputto(value)
             {
                 document.getElementById("to").innerHTML="To: "+value;
             }
           function calculate(size,quantity,day)
             {
                var sizeprice = "";
                if (size== 'S')
                {
                    sizeprice = "<?php echo $S; ?>"
                }
                else if (size== 'M')
                {
                    sizeprice = "<?php echo $M; ?>"
                }
                else if (size== 'L')
                {
                    sizeprice = "<?php echo $L; ?>"
                }
                var total = sizeprice*quantity*day;
                document.getElementById("total").innerHTML="Total price : "+total+" baht";
                document.getElementById("totalPrice").value = total
             }
            
            

        </script>



        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
            <?php 
                if(!empty($_SESSION['user'])){
            ?>
                <span class="close">&times;</span>
                <b>
                    <center>
                        <p style="font-family: 'Rajdhani', sans-serif; font-size: 30px;"> ADD RESERVED ITEM TO MY
                            CLOSET </p>
                    </center>
                </b>
                <div style="float: left; width:50%; display: inline-block; box-sizing: border-box;">
                    <img style="width:300px; height:500px; float:right; margin-right: 20px;" src="<?=$main['filename'];?>">
                </div>
                <div style="float: left; width:50%; display: inline-block; box-sizing: border-box; font-family: 'Rajdhani', sans-serif; font-size: 25px;">
                    <b>
                        <p> <?=$main['dressname']; ?> </p>
                    </b>
                    <p id="test"> size : S</p>
                    <p id="qua">Quantity : 1 </p>
                    <p id="period">Period of rental : 5 days</p>
                    <p id="from">From : 24/10/2018</p>
              
                    <p id="total">Price : 2900 BAHT</p>
                </div>
                <div>
                    <input id="continue" style="width:350px; height:50px; background-color:grey; font-size:27px; font-family: 'Rajdhani', sans-serif; color:white;"
                        onclick="shopping('index.php')" type="button" value="CONTINUE SHOPPING "> <br><br>
                    <input id="closet" style="width:350px; height:50px; background-color:grey; font-size:27px; font-family: 'Rajdhani', sans-serif; color:white;"
                    onclick="shopping('basket.php')" type="button" value="MY CLOSET "> <br><br>
                    
                </div>
                <div style="clear:left"></div>


            </div>
            <?php
                } else {
                    echo '<script>
                            alert("please login :)")
                            window.location.href = "login.html"
                        </script>';
                }
             ?>
        </div>
        </form> 
        
        <?php 

        ?>

        <script>

            function shopping(action)
            {
                document.getElementById('form').action=action;
                document.getElementById('form').submit();
            }
             
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function () {
                modal.style.display = "block";
                calculate(size, quantity, day)
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>




</body>

</html>