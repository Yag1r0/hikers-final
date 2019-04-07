<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="UTF-8">
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
//initial variable definition
$wrongPassword = "";
//end initial nsettings

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
$username1 = "default";
$userId = $_SESSION['uid'];
$lastname = $_SESSION['lastname'];
$name = $_SESSION['name'] ." " .$_SESSION['lastname'];
//provera da li slika postoji i ako ne postoji stavljas default sliku :)

$fullPathImage = str_replace('dashboard.php', '', $_SERVER['SCRIPT_FILENAME']) . "img/" .$username . ".jpg";

if(file_exists($fullPathImage))
    $userImage = 'img/'.$username.'.jpg';
else
    $userImage = 'img/'.$username1.'.jpg';

// Create connection
$conn = new mysqli(SERVER, USER ,PASS, DB);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//end database connection settings

/******************************************/
/**succesifull inserted post or not********/
/******************************************/

$postMessage = '';
$postSuccessMessage = '';
$fileNameNew = '';
//kod za unos podataka u bazu
if(!empty($_POST["submit"])){
$postBody = $_POST["post_body"];
$privacy = $_POST["privacy"];
$date = date("d/m/Y H:i:s");
$userId = $_SESSION['uid'];
//image
//info about file
$file=$_FILES['file'];
    
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];
//allow extentions
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

//which we allow
$allowed=array('jpg','jpeg','png','pdf','gif');
if(!empty($_FILES['file']['name'])) {
$test = in_array($fileActualExt, $allowed);
} else {
    $test = false;
}
if($test){
    if($fileError === 0){
        if($fileSize < 800000){
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestination = 'uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            header("Location: dashboard.php?uploadsuccess");
            
        } else{

            echo "your file is too big";
        }

    } else{
        echo "there was an error uploading your file";
    }


}
//image




$sqlInsert = "INSERT INTO posts(id, body, date, userId, privateStatus, image) VALUES (null,'".$postBody."', '".$date."', '".$suid."', '".$privacy."','".$fileNameNew."')";

if(empty($_FILES['file']['name'])) {
    $sqlInsert = "INSERT INTO posts(id, body, date, userId, privateStatus) VALUES (null,'".$postBody."', '".$date."', '".$suid."', '".$privacy."')";
}

$resultInsert = $conn->query($sqlInsert);
if ($resultInsert === true) {
    $postSuccessMessage = "Vas post je uspesno unet!";
} else {
    $postSuccessMessage = "Imate gresku u konekciji".$conn->error ;
}
};
//end of insert post code

//////////////////////////////////////////////
/********************************************/
//insert comment code 2.4.2019 MIXI//

if(!empty($_POST["commentBody"])){
    if(!empty($_POST["commentpostId"])){
    $commentBody = $_POST["commentBody"];
    $commentUser = $_SESSION['uid'];
    $commentPostId = $_POST["commentpostId"];


    $sqlInsert2 = "INSERT INTO comments(id, comment, postid, userid) VALUES (null,'".$commentBody."','".$commentPostId."','".$commentUser."')";
    $resultInsert = $conn->query($sqlInsert2);
    if ($resultInsert === true) {
        $postMessage = "Komentar dodat!";
    } else {
        $postMessage = "Greska u konekciji".$conn->error;
    }
}
};
//////////////////////////////////////////////
/********************************************/
//insert comment code 2.4.2019 MIXI KRAJ//

/***********************************************/
/**give me posts and the users******************/
/***********************************************/

// select postova
$sql2 = "SELECT posts.id,
                users.uid,
                posts.userId,
                posts.privateStatus,
                posts.image,
                posts.date,
                users.name,
                users.username,
                users.lastname,
                posts.body FROM posts INNER JOIN users ON posts.userId=users.uid
                WHERE privateStatus = 'public' OR users.uid='".$userId."' ORDER BY posts.id DESC";
$result = $conn->query($sql2);
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

   /* echo "<pre>";
    print_r($postsRows);
    echo "</pre>";*/
} else {
    $postMessage = "Trenutno nema podataka u bazi";
}

$getUserImage = '';
$getUserImage = "SELECT * FROM users";
$getUserImgResult = $conn->query($getUserImage);
if ($getUserImgResult->num_rows > 0) {
    while($row = $getUserImgResult->fetch_assoc()) {
        $getUserImage = $row['img'];
    }
}
$conn->close();
//end of defining variables,
//now we need to send them to template

/**********************************************/
/**send those variables to a our template dashboard.tpl*/
/**********************************************/
$smarty->assign(
    'username',
     $username
);
$smarty->assign(
    'name',
     $name
);

$smarty->assign(
    'postSuccessMessage',
     $postSuccessMessage
);

$smarty->assign(
    'postMessage',
     $postMessage
);
/* end send request */

$smarty->assign(
    'userImage',
     $userImage
);

$smarty->assign(
    'postsRows',
     $postsRows
);

$smarty->assign(
    'getUserImage',
     $getUserImage
);
$smarty->display('dashboard.tpl');
?>
