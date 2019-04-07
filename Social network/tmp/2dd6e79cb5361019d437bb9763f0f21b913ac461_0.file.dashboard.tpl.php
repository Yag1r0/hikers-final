<?php
/* Smarty version 3.1.33, created on 2019-04-06 12:56:15
  from 'C:\xampp\htdocs\Vesna Cekerevac\megafinalform\Social network - final\faza4 - Sandra\views\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca885cfaee160_86180974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dd6e79cb5361019d437bb9763f0f21b913ac461' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Vesna Cekerevac\\megafinalform\\Social network - final\\faza4 - Sandra\\views\\dashboard.tpl',
      1 => 1554548168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca885cfaee160_86180974 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
      <a href="wall.php?wallusername=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" id="slikaime">
        <img src="img/<?php echo $_smarty_tpl->tpl_vars['getUserImage']->value;?>
" />
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

      </a>
      <a href="logout.php" class="logoutA"><i class="fas fa-power-off"></i></a>
      </div>
    </nav>

    
    <div id="wrapper">

    <!--Insert post-->
    <div id="insertPost">
        <img src="<?php echo $_smarty_tpl->tpl_vars['userImage']->value;?>
"/>
        <a href="wall.php?wallusername=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

        </a>
      <form action="dashboard.php" method="post" enctype="multipart/form-data" id="onmindform" autocomplete="off">
	    <input type="text" name="post_body" id="whatonmindo" placeholder="Whats on your mind, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
? "/>
        <?php echo $_smarty_tpl->tpl_vars['postSuccessMessage']->value;?>
<br>
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
<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['postsRows']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
  <div id="printText">
    <div class="row postovi">
      <div class="picture">
        <img src="img/<?php echo $_smarty_tpl->tpl_vars['getUserImage']->value;?>
">
          <a href="wall.php?wallusername=<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
&lastname=<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lastname'];?>
" id="fullName">
          <?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>

          <?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lastname'];?>
</a>
          <span id="postDate"><?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
</span>
     </div>
          <div id="postTxt"><?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
</div><br>
          <?php ob_start();
echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == true) {?>
     <div id="kasli" class="clickable"> 
        <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
     </div>
     <?php }?>
     <div id="like">like comment</div>
     <!----------UNOS KOMENTARA 2.4.2019. MIXI--------------->
             <form action="dashboard.php" method="POST">
          <input type="hidden" name="commentpostId" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
          <input type="text" id="addcomment" name="commentBody" placeholder="Add a comment" autocomplete="off">
          <button name="commentBodybtn" class="commentBodyButton" type="submit">Add</button>    
        </form>
     <!------------------------->
     <!----------  KRAJ UNOS KOMENTARA MIXI 2.4.2019.--------------->    
     
     <!------------------------------------------------------>
     <!-- iscitavanje komentara----------->
     <div class="comments">
         <?php if (array_key_exists('comments',$_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)])) {?>
         <?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['comments']) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
         <div class="single_comment">
              <strong><?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fullname'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];?>
</strong> said<br>
              <?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['comments'][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];?>

             
         </div>
         <?php
}
}
?>
         <?php }?>
      <!----------------------------------------------->
      <!-- kraj iscitavanje komentara----------->
     </div>
     </div>
 </div>
<?php
}
}
?>
 </div>
 </div>
 <!-- Modalni prozor----->
 <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['postsRows']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
<div id="modal_window">
<div id="modal_content">

<div id="column_image"></div>
<div id="column_comments">
<div id="cc_userdata" class="picture">
    <span><img  src="img/<?php echo $_smarty_tpl->tpl_vars['getUserImage']->value;?>
"></span>
    <div class="text">
        <section id="fullname"><?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lastname'];?>
</section>
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
<?php
}
}
?>


<!--kraj Modalni prozor----->

<?php echo '<script'; ?>
 src="js/dashboard.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
