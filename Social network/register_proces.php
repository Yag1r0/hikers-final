<?php

include("config/config.php");
$conn = mysqli_connect(SERVER, USER ,PASS, DB);
$registerMessage = false;

if (!empty($_POST["register"])) {
	$ok = true;
	if (empty($_POST["name"])){
		$ok = false;
	}
	if (empty($_POST["lastname"])){
		$ok = false;
	}
	if (empty($_POST["email"])){
		$ok = false;
	}
	if (empty($_POST["username"]) || strlen($_POST["username"]) < 5){
		$ok = false;
	}
	$username = $_POST["username"];
	$sql_u = "SELECT * FROM users WHERE username='$username'";
  	$results = mysqli_query($conn, $sql_u);
  	if (mysqli_num_rows($results) > 0) {
  	  $ok = false;
  	  echo "Username already exists"; 
  	 }
	if (empty($_POST["password"])){
		$ok = false;
	}
	if($ok == true){
		$password = $_POST["password"];
		$username = $_POST["username"];
		$name = $_POST["name"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];

		$hash = password_hash($password, PASSWORD_DEFAULT);

		//add database code here
		//$conn = mysqli_connect(SERVER, USER ,PASS, DB);

		//security measures
		$escapeName = mysqli_real_escape_string($conn, $name);
		$escapeLastname = mysqli_real_escape_string($conn, $lastname);
		$escapeEmail = mysqli_real_escape_string($conn, $email);
		$escapeUsername = mysqli_real_escape_string($conn, $username);
		$escapeHash = mysqli_real_escape_string($conn, $hash);

		$sql = "INSERT INTO users (name, lastname, email, username,img, password) VALUES ('".$escapeName."','".$escapeLastname."','".$escapeLastname."','".$escapeUsername."', 'default.jpg' ,'".$escapeHash."')";

		$registerUser = mysqli_query($conn, $sql);
		if($registerUser === true){
			$registerMessage = "User ".$username." successfully registred!";
		} else {
			$registerMessage = "Error description: ".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>