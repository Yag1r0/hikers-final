<?php
/*********************************************/
/**database connection and session start******/
/*********************************************/
session_start();
$suid =  $_SESSION['uid'];
include("config/config.php");
if(empty($_SESSION['user'])) {
    header('Location: index.php');
}

$username = $_SESSION['user'];
$userId = $_SESSION['uid'];
$lastname = $_SESSION['lastname'];
$name = $_SESSION['name'] ." " .$_SESSION['lastname'];


// Create connection
$conn = new mysqli(SERVER, USER ,PASS, DB);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//end database connection settings

/***********************************************/
/**give me posts and the users******************/
/***********************************************/

// select postova
$postid = $_GET['postid'];
$sql2 = "SELECT * FROM comments WHERE comments.postid=$postid";
$result = $conn->query($sql2);
$postsRows = [];


if ($result->num_rows > 0) {
    // output data of each row
$postId = '';
    while($row = $result->fetch_assoc()) {
        //save users and posts in this variable
        //$postsRows[] = $row;
        //select comments for each post
        $comment = $row['comment'];
        $id = $row['id'];
        $uid = $row['userid'];

        if(empty($postId))
            $postId = $row['postid'];;
    }
    
        $sql3 = "SELECT * FROM comments INNER JOIN users ON comments.userid = users.uid WHERE comments.postid = $postId";

         $comments = $conn->query($sql3);
        

        //var_dump($comments->fetch_assoc());
        while($row2=$comments->fetch_assoc()){
            //update exiting array with new prop
            $fullname=$row2['name']." ".$row2['lastname'];
            $komentar = $row2['comment'];
            echo "<div class='komentirech'><div class='oneComment'><strong>$fullname</strong> said <br> $komentar</div><br></div>";

        }
    
    //echo "<pre>";
    //print_r($fullname);
    //echo "</pre>";
} else {
    $postMessage = "Trenutno nema podataka u bazi";
}
$conn->close();

?>