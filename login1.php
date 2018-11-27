<?php
    require_once('connect.php');
    session_start();





if(isset($_POST['login']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$q="SELECT * FROM customer WHERE username='".$username."' AND password='".$password."'";
    $result=$mysqli->query($q);
    $row=$result->fetch_array();

    if(count($row))
    {
        echo "<script type='text/javascript'>alert('LOG IN SUCCESSFULLY!')</script>";
        $_SESSION['user']=$username;
        echo ' <script type="text/javascript">
        window.location = "index.php";
        </script>
        ';
    }
    else
    {
      $q2 = "SELECT * FROM admin WHERE username='".$username."' AND password='".$password."'";
      $result2=$mysqli->query($q2);
      $row2=$result2->fetch_array();
      if(count($row2))
      {
        echo "<script type='text/javascript'>alert('WELCOME TO ADMIN PAGE!')</script>";
        $_SESSION['admin']=$username;
        echo ' <script type="text/javascript">
        window.location = "admin.php";
        </script>
        ';
      } else {
        echo "<script type='text/javascript'>alert('ERROR: USER NAME OR PASSWORD IS WRONG!')</script>";

        echo "<script>
                window.location = 'login.html';
             </script>";
      }
    }
}




?>
