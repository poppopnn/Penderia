
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Rajdhani" rel="stylesheet">

</head>

<body style="background-color: #e0e0d1;">

    <div class="top" style="background-color: #e0e0d1; width:100%;">
        <div class="topLeft"></div>
        <div class="topCenter" style="padding-left:15%; padding-top: 5%"> <img src="logo11.png"></div>
        <div class="topRight">
            <a class="sign" style="padding-left: 230px;" href="signup.php" id="">
                SIGN UP
            </a>
            <a class="sign" style="padding-left: 50px;" href="login.html" id="">
                LOG IN
            </a>
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
            <b><a class="bar" href="#">ABOUT</a></b>
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
                    <a class="submenu" href="wedding.html"> WEDDING GUEST</a>
                    <a class="submenu" href="bdparty.html"> BIRTHDAY PARTY</a>
                    <a class="submenu" href="gala.html"> GALA DINNER</a>
                    <a class="submenu" href="graduation.html"> GRADUATION</a>
                    <a class="submenu" href="prom.html"> PROM</a>
                    <a class="submenu" href="datenight.html"> NIGHT CLUB</a>
                </div>
            </div>
            <b><a class="bar" href="#">CONTACT US</a></b>
        </center>

    </div>

    <div style="background-color: #e0e0d1;">.
        <center>
            <div style="margin-top:100px; border:2px solid grey; width: 800px; height: 500px; ">
                <center><b style="font-size:27px;  font-family: 'Rajdhani', sans-serif;">SIGN UP</b></center>
                <form style="font-size:25px;  margin-left: 40px; font-family: 'Rajdhani', sans-serif" action="signup1.php"
                    method="POST">
                    <center>
                        <div style="margin-top:30px;">
                            <div style="display:inline-block;">
                                Username: <br>
                                <input style="background-color:white; width:100%; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                                    type="text" name="username" required><br>
                            </div>
                            <div style="display:inline-block; padding-left: 10px;">
                                Password: <br>
                                <input style="background-color:white; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                                    type="password" name="password" required><br>
                            </div>
                        </div>
                    </center>
                    <center>
                        <div>
                            <div style="display:inline-block; padding-left: 10px;">
                                Address: <br>
                                <textarea style="background-color:white; font-size:27px; padding:30px; width:560px; height:100px; font-family: 'Rajdhani', sans-serif;"
                                    name="address" rows="4" cols="50"></textarea>
                            </div>
                        </div>
                    </center>
                    <center>
                        <Div>
                            <div style="display:inline-block;">
                                Province: <br>
                                <input style="background-color:white; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                                    type="text" name="province" required><br>
                            </div>
                            <div style="display:inline-block; padding-left: 10px;">
                                Postcode: <br>
                                <input style="background-color:white; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                                    type="text" name="postcode" required><br>
                            </div>
                        </Div>
                    </center>
                    <center>
                        <Div>
                            <div style="display:inline-block;">
                                Mobile phone : <br>
                                <input style="background-color:white; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                                    type="text" name="phone" pattern="[0-9]{10}" required minlength="10" maxlength="10"><br>
                            </div>
                            <div style="display:inline-block; padding-left: 10px;">
                                E-mail: <br>
                                <input style="background-color:white; font-size:27px; font-family: 'Rajdhani', sans-serif;"
                                    type="text" name="mail" value=""><br>
                            </div>
                        </Div>
                    </center>
                    <center>
                        <div>
                          <!--   <a href="#"><button style="width:350px; height:50px; background-color:grey; font-size:27px; font-family: 'Rajdhani', sans-serif; color:white;">
                                    SIGN UP</button><br><br></a> -->
                            <!--<a href="sign"> -->
                                <input  style="width:350px; height:50px; background-color:grey; font-size:27px; font-family: 'Rajdhani', sans-serif; color:white;" type="submit" id="button" name="signup" value="SIGN UP">
                            <!-- </a> -->
                        </div>
                </center>

                </form>

                <div style="clear:left"></div>
            </div>
        </center>
    </div>
</body>

</html>