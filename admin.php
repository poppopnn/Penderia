<?php
require_once('connect.php');
session_start();

if(empty($_SESSION['admin'])){
  echo '<script>
          alert("only admin can access :)")
          window.location.href = "login.html"
        </script>';
}

if(isset($_POST['add'])){
  $imagePath = $_FILES['file']['name'];
  $created = date('d-M-y');
  move_uploaded_file($_FILES['file']['tmp_name'], $imagePath);
  $a = "INSERT INTO dress (categoryname, dressname, arrival_date, filename) VALUES ('$_POST[catergory]', '$_POST[dressname]', '$created', '$imagePath')";
  $result = $mysqli ->query($a);
  if(!$result){
    echo $mysqli->error;
  }
}
if(isset($_POST['edit'])){
  if($_FILES['newImage']['tmp_name']!='') {
    unlink($_POST['oldImage']);
    $imagePath = $_FILES['newImage']['name'];
    move_uploaded_file($_FILES['newImage']['tmp_name'], $imagePath);
    $u = "UPDATE dress SET dressname='$_POST[dressname]', categoryname='$_POST[catergory]',filename='$imagePath' WHERE dress_id=$_POST[id]";
    $result = $mysqli ->query($u);
    if(!$result){
      echo $mysqli->error;
    }
  } else {
    $u = "UPDATE dress SET dressname='$_POST[dressname]', categoryname='$_POST[catergory]' WHERE dress_id=$_POST[id]";
    $result = $mysqli ->query($u);
    if(!$result){
      echo $mysqli->error;
    }
  }


}


?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Rajdhani" rel="stylesheet">
  <style>
    table {
      border-collapse: collapse;
      font-size: 20px;
    }
    table, th, td {
        border: 1px solid black;
    }
  </style>
</head>

<body style="background-color: #e0e0d1; ">
  <a href="logout.php"><button type="button" name="button">logout</button></a>
        <div>
            <center><b>
                 <p style="font-size:30px; margin-top: 40px; font-family: 'Rajdhani', sans-serif"> WELCOME TO ADMIN PAGE </p>
                 <a href="addDress.php"><button type="button" name="button">add dress</button></a>
                 <table>
                   <tr>
                     <th>dress id</th>
                     <th>name</th>
                     <!-- <th>quantity</th> -->
                     <th>category</th>
                     <th>created</th>
                     <th>image</th>
                     <th>delete</th>
                     <th>edit</th>
                   </tr>
                   <?php
                    $sql = "SELECT * FROM dress";
                    $result = $mysqli->query($sql);
                    while ($row = $result->fetch_assoc()) {
                      ?>
                      <tr>
                        <td><?php echo $row['dress_id']; ?></td>
                        <td><?php echo $row['dressname']; ?></td>
                        <td><?php echo $row['categoryname']; ?></td>
                        <td><?php echo $row['arrival_date']; ?></td>
                        <td><img src="<?php echo $row['filename']; ?>" width="60px;"></td>
                        <td><a href="deleteDress.php?id=<?php echo $row['dress_id']; ?>">delete</a></td>
                        <td><a href="editDress.php?id=<?php echo $row['dress_id']; ?>">edit</a></td>
                      </tr>
                      <?php
                    }
                   ?>
                 </table>
            </b></center>
        </div>


</body>
