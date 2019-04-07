<!DOCTYPE html>
<html>
<head>
 <title>Hikers</title>
 <link href="css/dashboard.css" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <link rel="stylesheet" href="css/index.css">
 <link rel="stylesheet" href="css/dashboard.css">
 <link rel="stylesheet" href="css/wall.css">
</head>
<body>
<!--NAVBAR-->
  <nav>
   <a href="dashboard.php"><div id="homelogo"></div></a>
   <div id="desnonav">
   <a href="wall.php?wallusername={$username}" id="slikaime">
    <img src="img/{$username}.jpg" />
    {$name}
   </a>
   <a href="logout.php" class="logoutA"><i class="fas fa-power-off"></i></a>
   </div>
  </nav>
  <div class="container">
   
   <div id="wrapper">
<div id="profil">
    <img src="img/{$username}.jpg"/>
    <p>{$wallusername}</p>
   </div>
   <div class="container posti">
    {section name=i loop=$postsRows}
    <form action="editProfile.php" method="POST">
     Name:<input type="text" name="editedName" value="{$postsRows[i].name}"><br><br>
     Lastname:<input type="text" name="editedLastname" value="{$postsRows[i].lastname}"><br><br>
     Username:<input type="text" name="editedUsername" value="{$postsRows[i].username}"><br><br>
     Email:<input type="text" name="editedEmail" value="{$postsRows[i].email}"><br><br>
     Image:<input type="file" name="file" id="userimg" value="dodaj sliku"><br>
     <input type="submit" name="save" value="Save edits">
    </form>
    {/section}
   </div>
   </div>
 </div>
 
</body>
</html>