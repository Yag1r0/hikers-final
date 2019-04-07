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
$name = $_SESSION['name']." " .$_SESSION['lastname'];;
$suid = $_SESSION['uid'];
$wallusername = $_POST['wallusername'];

//provera da li slika postoji i ako ne postoji stavljas default sliku :)

$fullPathImage = str_replace('editProfile.php', '', $_SERVER['SCRIPT_FILENAME']) . "img/" .$username . ".jpg";

if(file_exists($fullPathImage))
    $userImage = 'img/'.$username.'.jpg';
else
    $userImage = 'img/'.$username.'.jpg';
/******************************************/
/**getting users username******************/
/******************************************/
$message = '';
 
if(!empty($_POST["wallusername"])){
    $wallusername = $_POST["wallusername"];
    $sql3 = "SELECT * FROM users WHERE users.uid= '$suid'";
    $result = $conn->query($sql3);
      $postsRows = [];
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //save users and posts in this variable
                $postsRows[] = $row;        
       }       
    } else {
        $postMessage = "Trenutno nema podataka u bazi";
    }
};
   if(!empty($_POST["save"])){
    $editedName = $_POST['editedName'];
    $editedLastname = $_POST['editedLastname'];
    $editedUsername = $_POST['editedUsername'];
    $editedEmail= $_POST['editedEmail'];
    $file=$_FILES['file'];

    $fileName = $FILES['file']['name'];
    $fileTmpName = $FILES['file']['tmp_name'];
    $fileSize = $FILES['file']['size'];
    $fileError = $FILES['file']['error'];
    $fileType = $FILES['file']['type'];


    $fileExt = explode('.',$fileName );
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','gif','pdf');

    if(in_array($fileActualExt, $allowed)){

        if($fileError === 0){
            if($fileSize < 50000){
                $fileNameNew = $editedUsername.".".$fileActualExt;

                $fileDestination = 'img/'.$fileNameNew;


                move_uploaded_file($fileTmpName, $fileDestination);


                $resultInsert = $conn->query($sqlInsert);


            } else{

                echo "file too big";
            }

        } else {

            echo "Error";
        }


    } else{

        echo "you cannot upload files of this type";
    }


    $sqlInsert = "UPDATE users SET users.img='$fileNameNew.jpg'";

if(empty($_FILES['file']['name'])) {
    $sqlInsert = "UPDATE users SET users.img='default.jpg'";
}

$resultInsert = $conn->query($sqlInsert);
    $sqlInsert =  "UPDATE users 
    SET users.name = '$editedName',
     users.lastname = '$editedLastname',
     users.username = '$editedUsername',
     users.email = '$editedEmail',
     users.img='$fileNameNew'
      WHERE users.uid = $suid";

     $resultInsert = $conn->query($sqlInsert);

    $sqlSelect = "SELECT * FROM users WHERE users.uid = $suid";
    $result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
            $_SESSION['user'] = $row['username'];
            $_SESSION['uid'] = $row['uid'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['lastname']  = $row['lastname'];
                    //$userImg = $row['image'];
                }
            }
    
    



    
    header("Location: wall.php?wallusername=$editedUsername");
} else {

};



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
    'postsRows',
     $postsRows
);

/* end send request */
$smarty->display('editProfile.tpl');

?>
