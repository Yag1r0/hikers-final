<!DOCTYPE html>
<html>
<head>
  <title>Hikers</title>
  <link href="css/dashboard.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


  <link rel="stylesheet" href="css/wall.css">

</head>
<body>
<!--NAVBAR-->
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


    <div class="container">
      
      <div id="wrapper">
      <div id="profil">
      <img src="img/{$getUserImage}"/>

        <p>{$wallusername}</p>
             {* Edit profila Mozda sam se zeznuo za slanje wallusername *}
             {* Mislim da cak i ne treba da se sve ovo salje postom *}

             <div id="stats">
                <div class="profileinfo"><i class="fas fa-shoe-prints"></i> Total Steps: 32.145</div>
                <div class="profileinfo"><i class="fas fa-walking"></i> Time Walked: 2h 37m</div>
                <div class="profileinfo"><i class="fas fa-map-marker-alt"></i> Checkpoints Visited: 5 </div>
                <div class="profileinfo"><i class="fas fa-medal"></i> Monthly rank: #214263 </div>
             </div>
          {if $wallusername eq $username}
            <form action="editProfile.php" method="POST">
                  <input type="hidden" name="wallusername" value="{$wallusername}">
                  <input type="hidden" name="usernejm" value="{$postsRows[i].username}">
                  <input type="hidden" name="userid" value="{$postsRows[i].uid}">
                  <input type="hidden" name="trenutnikorisnik" value="{$username}">
                  <button class="editProfileButton" type="submit">Edit Profile</button>
                 
            </form>
          {/if}
      </div>
     
      <div class="container posti">
   <!-- ISCITAVANJE POSTOVA-->
         {section name=i loop=$postsRows}
  <div id="printText">
   <div class="row postovi">
    <div>
      <div id="opa">
          <img src="img/{$postsRows[i].img}">
      </div>
      <div id="picture">
      <a href="wall.php?wallusername={$postsRows[i].username}&name={$postsRows[i].name}&lastname={$postsRows[i].lastname}"  id="fullName">
      {$postsRows[i].name}
      {$postsRows[i].lastname}</a>
      <span id="postDate">{$postsRows[i].date}</span>
      </div>
      <div id="postTxt">{$postsRows[i].body}</div><br> 
     {* slika posta *}
     {if {$postsRows[i].image} eq true}
     <div id="kasli" class="clickable"> 
        <img src="uploads/{$postsRows[i].image}">
     </div>
     {/if}
     <div id="like">like comment</div>
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
    {* Brisanje posta *}
    <div id="dugmad">
      {if $postsRows[i].username eq $username}
      <button class="deletePostButton" onclick="popUpBox('{$postsRows[i].id}')">Delete</button>
      {/if}
      {* EDIT POSTA *}
      {if $postsRows[i].username eq $username}
      <form action="editPost.php" method="POST">
      <input type="hidden" name="postid" value="{$postsRows[i].id}">
      <input type="hidden" name="usernejm" value="{$postsRows[i].username}">
      <input type="hidden" name="userid" value="{$postsRows[i].uid}">
      <input type="hidden" name="postText" value="{$postsRows[i].body}">
      <input type="hidden" name="trenutnikorisnik" value="{$username}">
      <button class="editPostButton" type="submit">Edit</button>              
      </form>
      {/if}
    </div>
    </div>
  </div>
</div>
   {* popup za brisanje *}
   <div id="popUp{$postsRows[i].id}" class="popUp">
     <form action="deletePost.php?wallusername={$postsRows[i].username}" method="POST">
     <input type="hidden" name="postid" value="{$postsRows[i].id}">
     <p>Do you really want to delete this post?</p>
     <button id="yesbutton">Yes</button>
     
     </form>
     <button onclick="exitPopUp('{$postsRows[i].id}')" id="nobutton">No</button>
    </div>
    {/section}
   </div>
  </div>
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
        <section id="fullname">{$postsRows[i].name} {$postsRows[i].lastname}</section>
    </div>

</div>
<div id="cc_imgcomment">
    <div class="text">
    </div>
</div>
<div id="cc_insertdata">
</div>  

</div>
<span id="closebtn">x</span>   
</div>    
</div>
{/section}

<!--kraj Modalni prozor----->
{literal}
<script src="js/dashboard.js"></script>

 <script>
  function popUpBox(idElement) {
    document.getElementById("popUp"+idElement).style.display="block";
  }

  function exitPopUp(idElement) {
     document.getElementById("popUp"+idElement).style.display="none";

  }
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