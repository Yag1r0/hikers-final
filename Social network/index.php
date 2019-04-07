<?php
include("register_proces.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/png" href="img/favicon1.png"/>
	<title>Hikers</title>
	<link href="css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
 <header>
  <nav>
  <div id="logo"></div>
   <div id="navContent">
    
     <form action="process_login.php" method="post">
     <input type="text" name="username" placeholder="Username" class="logintext" /> | <input type="password" name="password" placeholder="Password" class="logintext">
         <input type="submit" name="login" value="Login" class="loginbutton"/>
     </form>

      <?php
 
 if(!empty ($_COOKIE["poruka"])) {
  echo $_COOKIE["poruka"];
  unset($_COOKIE["poruka"]);
  setcookie("poruka", "", time()-3600, "/"); //da se izbrise cookie
 }
 ?>
   </div>
   
  </nav>
 </header>
 <div id="wrapper">
      <main>
          <div id="logobig"></div>
      </main>
      <aside>
        <h2>Registration</h2>
        <p>Do you prefer hiking? Competing with your friends?</p>
        <p>Make sure you register!</p>
          <form action="index.php" method="post" id="registerform">
            <input class="inputreg" type="text" name="name" placeholder="Enter your name" autocomplete="off" /><br/>
            <input class="inputreg" type="text" name="lastname" placeholder="Enter your last name" autocomplete="off" /><br/>
            <input class="inputreg" type="email" name="email" placeholder="Enter your email" autocomplete="off" /><br/>
            <input class="inputreg" type="text" name="username" placeholder="Enter your username" autocomplete="off" /><br/>
            <input class="inputreg" type="password" name="password" placeholder="Enter your password" autocomplete="off" /><br/><br/>
            <input type="submit" name="register" class="loginbutton" id="registerbutton" value="Register" />
          </form><br><br>
          
      <?php
        if($registerMessage){
        echo
              "
                <div class='successmessage'>
                <span class='closebtn'>&times;</span>
                <strong>Bravo! </strong> $registerMessage
                
              </div>
              ";
      }
      ?>

      </aside>
  </div>
  <footer>


  </footer>
 <script>
   var close = document.querySelector(".closebtn");
   close.addEventListener('click', function(){
    this.parentElement.style.display = "none";
   });


    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
   };

 </script>
</body>
</html>