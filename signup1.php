<?php require_once('connect.php');
//error_reporting(0);

      if(isset($_POST['signup']))
    {
       $username=$_POST['username'];
       $password=$_POST['password'];
       $address=$_POST['address'];
       $province=$_POST['province'];
       $postcode=$_POST['postcode'];
       $mobilephone=$_POST['phone'];
       $email=$_POST['mail'];
      
       

       $checkname=mysqli_query($mysqli,"SELECT count(*) AS n FROM customer WHERE username='".$username."'");
       $checkemail=mysqli_query($mysqli,"SELECT count(*) AS e FROM customer WHERE email='".$email."'");
       $checkmobile=mysqli_query($mysqli,"SELECT count(*) AS m FROM customer WHERE mobilephone='".$mobilephone."'");
       $namec=mysqli_fetch_array($checkname);
       $emailc=mysqli_fetch_array($checkemail);
       $mobilec=mysqli_fetch_array($checkmobile);
       if($namec['n']!=0)
       {
        echo "<script type='text/javascript'>alert('This username has been used. Please try again')</script>";   
        echo '<script type="text/javascript">window.location = "signup.php"</script>';
       }
       else if($emailc['e']!=0)
       {
        echo "<script type='text/javascript'>alert('This e-mail has been used. Please try again')</script>";   
        echo '<script type="text/javascript">window.location = "signup.php"</script>';
       }
       else if($mobilec['m']!=0)
       {
        echo "<script type='text/javascript'>alert('This number has been used. Please try again')</script>";   
        echo '<script type="text/javascript">window.location = "signup.php"</script>';
       }
       else
       {
         
        $q="INSERT INTO customer (username,password,address,province,postcode,mobilephone,email,payment_status)
        VALUES ('$username','$password','$address','$province','$postcode','$mobilephone','$email','n')";
        $result=$mysqli->query($q);
        if(!$result)
        {
         echo "INSERT failed. Error: ".$mysqli->error ;
         //break;
        }
        echo "<script type='text/javascript'>alert('DONE!')</script>";
        echo '<script type="text/javascript">window.location = "login.html"</script>';
       }
 
    }
?>