<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="../img/favicon1.png"/>
    <title>Hikers</title>
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<!--navbar-->
	<nav>
      <a href="dashboard.php"><div id="homelogo"></div></a>
      <div id="desnonav">
      <a href="wall.php?wallusername={$username}" id="slikaime">
        <img src="img/{$getUserImage}" />
        {$name}
      </a>
      <a href="logout.php" class="logoutA"><i class="fas fa-power-off"></i></a>
      </div>
    </nav>

    
    <div id="wrapper">

    <!--Insert post-->
    <div id="insertPost">
        <img src="{$userImage}"/>
        <a href="wall.php?wallusername={$username}">
        {$name}
        </a>
      <form action="dashboard.php" method="post" enctype="multipart/form-data" id="onmindform" autocomplete="off">
	    <input type="text" name="post_body" id="whatonmindo" placeholder="Whats on your mind, {$username}? "/>
        {$postSuccessMessage}<br>
        <select name="privacy" id="privasi">
          <option value="public">Public</option>
          <option value="private">Private</option>
        </select>
          <input type="file" name="file" id="fajlin"><br>
	      <input id="button" type="submit" name="submit" value="Post" class="loginbutton">
     </form>
    </div>
<div class="container">
<!-- ISCITAVANJE POSTOVA-->
{section name=i loop=$postsRows}
  <div id="printText">
    <div class="row postovi">
      <div class="picture">
        <img src="img/{$getUserImage}">
          <a href="wall.php?wallusername={$postsRows[i].username}&name={$postsRows[i].name}&lastname={$postsRows[i].lastname}" id="fullName">
          {$postsRows[i].name}
          {$postsRows[i].lastname}</a>
     {* datum posta *}
     <span id="postDate">{$postsRows[i].date}</span>
     </div>
     {* tekst posta *}
     <div id="postTxt">{$postsRows[i].body}</div><br>
     {* slika posta *}
     {if {$postsRows[i].image} eq true}
     <div id="kasli" class="clickable"> 
        <img src="uploads/{$postsRows[i].image}" id="{$postsRows[i].id}">
     </div>
     {/if}
     <div id="like">like comment</div>
     <!----------UNOS KOMENTARA 2.4.2019. MIXI--------------->
     {* unos komentara *}
        <form action="dashboard.php" method="POST">
          <input type="hidden" name="commentpostId" value="{$postsRows[i].id}">
          <input type="text" id="addcomment" name="commentBody" placeholder="Add a comment" autocomplete="off">
          <button name="commentBodybtn" class="commentBodyButton" type="submit">Add</button>    
        </form>
     <!------------------------->
     <!----------  KRAJ UNOS KOMENTARA MIXI 2.4.2019.--------------->    
     
     <!------------------------------------------------------>
     <!-- iscitavanje komentara----------->
     <div class="comments">
         {if array_key_exists('comments', $postsRows[i])}
         {section name=j loop= $postsRows[i].comments}
         <div class="single_comment">
              <strong>{$postsRows[i].fullname[j]}</strong> said<br>
              {$postsRows[i].comments[j]}
             
         </div>
         {/section}
         {/if}
      <!----------------------------------------------->
      <!-- kraj iscitavanje komentara----------->
     </div>
     </div>
 </div>
{/section}
 </div>
 </div>
 <!-- Modalni prozor----->
 {section name=i loop=$postsRows}
<div id="modal_window">
<div id="modal_content">

<div id="column_image"></div>
<div id="column_comments">
<div id="cc_userdata" class="picture">
    <span><img  src="img/{$getUserImage}"></span>
    <div class="text">
        <section id="fullname"></section>
    </div>
</div>
<div id="cc_imgcomment">
    <div class="text"></div>
</div>
<div id="cc_insertdata"></div>  
</div>
<span id="closebtn">x</span>   
</div>    
</div>
{/section}


<!--kraj Modalni prozor----->
{literal}
<script src="js/dashboard.js"></script>


<script>
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
   };

  function prikazEksternogFajla(postid) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
  
        document.getElementById("cc_insertdata").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", `loadcomments.php?postid=${postid}`);
    xhttp.send();
    console.log(this);
  }
</script>
{/literal}
</body>
</html>