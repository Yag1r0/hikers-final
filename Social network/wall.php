<head>
<link rel="shortcut icon" type="image/png" href="img/favicon1.png"/>
</head>

<?php
/*********************************************/
/**initial settings for the smarty tpl engine*/
/*********************************************/
require_once("smarty/libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';

include("config/config.php");
// Create connection
$conn = mysqli_connect(SERVER, USER ,PASS, DB);
//end database connection
session_start();
$username = $_SESSION['user'];
$name = $_SESSION['name'] ." " .$_SESSION['lastname'];
$suid = $_SESSION['uid'];
$wallusername = $_GET["wallusername"];

//provera da li slika postoji i ako ne postoji stavljas default sliku :)

$fullPathImage = str_replace('wall.php', '', $_SERVER['SCRIPT_FILENAME']) . "img/" .$username . ".jpg";

if(file_exists($fullPathImage))
    $userImage = 'img/'.$username.'.jpg';
else
    $userImage = 'img/'.$username.'.jpg';
/******************************************/
/**getting users username******************/
/******************************************/
$message = '';
 
if(!empty($_GET["wallusername"])){
    $wallusername = $_GET["wallusername"];
    $sql3 = "SELECT * FROM users WHERE username = '$wallusername'";
    $result = $conn->query($sql3);
    $row = mysqli_fetch_assoc($result);
    
} 
    // select postova
    $sql2 = "SELECT posts.id,
                    users.uid,
                    posts.userId,
                    posts.privateStatus,
                    posts.image,
                    posts.date,
                    users.name,
                    users.img,
                    users.username,
                    users.lastname,
                    posts.body FROM posts INNER JOIN users ON posts.userId=users.uid
                    WHERE posts.userId='".$row['uid']."'
                    AND posts.privateStatus = 'public'
                    OR posts.userId = '".$row['uid']."'
                    AND posts.userId = '".$suid."'
                    ORDER BY posts.id DESC";
    $result = $conn->query($sql2);

    $getUserImage = '';

    $getUserImage = "SELECT * FROM users WHERE users.username='$wallusername'";
    $getUserImgResult = $conn->query($getUserImage);
    if ($getUserImgResult->num_rows > 0) {
        while($row = $getUserImgResult->fetch_assoc()) {
            $getUserImage = $row['img'];
        }
    }

    $postsRows = [];
    if ($result->num_rows > 0) {
        $i=0;
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //save users and posts in this variable
            $postsRows[] = $row;

       //select comments for each post
        $id = $row['id'];
        $sql3= "SELECT * FROM comments INNER JOIN users ON comments.userid = users.uid WHERE comments.postid = $id";
        $comments = $conn->query($sql3);
        while($row2=$comments->fetch_assoc()){
            //update exiting array with new prop
            $postsRows[$i]['comments'][]=$row2['comment'];
            $postsRows[$i]['fullname'][]=$row2['name']." ".$row2['lastname'];

        }
        $i++;
    }
    /*echo "<pre>";
    print_r($postsRows);
    echo "</pre>";*/
} else {
    $postMessage = "No data";
}


$conn->close();

/**********************************************/
/**send those variables to a our template wall.tpl*/
/**********************************************/


$smarty->assign(
    'wallusername',
     $wallusername
);
$smarty->assign(
    'name',
     $name
);
$smarty->assign(
    'name',
     $name
);
$smarty->assign(
    'message',
     $message
);
$smarty->assign(
    'username',
     $username
);

$smarty->assign(
    'userImage',
     $userImage
);

$smarty->assign(
    'getUserImage',
     $getUserImage
);

$smarty->assign(
    'postsRows',
     $postsRows
);

/* end send request */
$smarty->display('wall.tpl');
?>

