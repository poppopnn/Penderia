<?php
require_once('connect.php');
session_start();
echo $_GET['id'];

$sql = "SELECT filename FROM dress WHERE dress_id = $_GET[id]";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
unlink($row['filename']);

$q = "DELETE FROM dress WHERE dress_id = $_GET[id]";
$result = $mysqli->query($q);
header("Location: admin.php");
