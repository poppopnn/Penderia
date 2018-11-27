<?php
require_once('connect.php');
session_start();

$q = "SELECT * FROM dress WHERE dress_id=$_GET[id]";
$result = $mysqli->query($q);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="admin.php" method="post" enctype="multipart/form-data">
      Name :
      <input type="text" name="dressname" value="<?php echo $row['dressname']; ?>">
      Catergory :
      <input type="text" name="catergory" value="<?php echo $row['categoryname']; ?>">
      arrival Date :
      <input type="text" name="arrival" value="<?php echo $row['arrival_date']; ?>">
      <img src="<?php echo $row['filename']; ?>" width="100px;">
      <br><br>
      <label>Edit image</label><br>
      <input type="file" name="newImage" value="">
      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
      <input type="hidden" name="oldImage" value="<?php echo $row['filename']; ?>">
      <input type="submit" name="edit" value="done">
    </form>
  </body>
</html>
