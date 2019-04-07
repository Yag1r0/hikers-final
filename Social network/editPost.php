<?php
require_once("smarty/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
session_start();
include("config/config.php");
// Create connection
$conn = mysqli_connect(SERVER, USER ,PASS, DB);
//end database connection
/**********varijable************************/
$uid = $_SESSION['uid'];
$postId = $_POST['postid'];



//fetchovanje podataka iz posts
$sql5 = "SELECT * FROM posts WHERE id = $postId AND userId = $uid";
$result = $conn->query($sql5);
    $postsRows = [];
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //save users and posts in this variable
                $postsRows[] = $row;
        
        }
    } else {
        $postMessage = "Trenutno nema podataka u bazi";
    };
 //kraj fetchovanja
 
 $myusername = $_SESSION['user'];
 
//izmena posta
if(!empty($_POST["editpostbtn"])){
    $postBody = $_POST["inputpost"];
    $privacy = $_POST["privacy"];
    $postId = $_POST["ajdi"];


    $sqlInsert =  "UPDATE posts SET body='$postBody' WHERE id='$postId'";
    $resultInsert = $conn->query($sqlInsert);
    if ($resultInsert === true) {
        $postMessage = "Post apdejtovan!";
    } else {
        $postMessage = "Greska u konekciji".$conn->error;
    }
    header("Location: wall.php?wallusername=$myusername");
};

    $conn->close();

/**********************************************/
/**send those variables to a our template editpost.tpl*/
/**********************************************/



$smarty->assign(
    'postsRows',
     $postsRows
);


$smarty->display('editPost.tpl');


?>