<?php 
session_start();

$getUsername = $_GET['wallusername'];
$uid = $_SESSION['uid'];
include("config/config.php");
$conn = mysqli_connect(SERVER, USER ,PASS, DB);

$postId = $_POST['postid'];
$sql4 = "DELETE FROM posts WHERE id =$postId AND userId = $uid";

$result = $conn->query($sql4);
$row = mysqli_fetch_assoc($result);
header("Location: wall.php?wallusername=$getUsername");


 ?>