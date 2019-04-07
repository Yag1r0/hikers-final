<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hikers</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
</head>
<body>
    <header id="header">
            <h2>SocialHikers</h2>
    </header>
    <div id="container1">
            <main id="main">
                    <p>Have you ever wondered how far you can go?</p>
                <h1>We are Hikers!</h1>
                
                <h2>Our community of over 100,000 hikers lorem ipsum donor sit amet.</h2>
    
                <form id="login" action="processlogin.php" method="POST" class="forma">
                    <label for="username">Username</label><br>
                    <input type="text" id="username" name="username" class="inputspace" required placeholder="error@gmail.com"><br>
                    <label for="password" id="labelpass">Password</label><br>
                    <input type="password" id="password" name="password" class="inputspace" placeholder="******" required><br>
                    <input type="submit" id="submitbn" name="submitbtn" class="loginbutton" value="LOG IN">
                    <a href="register.php" id="reghere">Not a member yet? Register here</a>
                    <?php
                    //proverava cookies i ispisuje poruku or waatever
                    if(!empty($_COOKIE["poruka"])) {
                        echo $_COOKIE["poruka"];
                        unset($_COOKIE["poruka"]);
                        setcookie("poruka", "",time()-3600,"/");
                    }
                     ?>  
                </form>
            </main>
        <div id="indeximage">
            <div id="kocka">
            </div>
        </div>
        
    </div>
    
    <footer id="footer">

        <p>Made by </p><a href="#"><div id="logo"></div></a><p>  2019. </p>
    </footer>
</body>
</html>