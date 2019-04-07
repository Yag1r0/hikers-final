<?php
/* Smarty version 3.1.33, created on 2019-04-04 21:08:15
  from 'C:\xampp\htdocs\Vesna Cekerevac\Social network - final\faza4 - Sandra\views\wall.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca6561f5c1668_96715816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e95c920659105beca74e23482a025433b7ae089' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Vesna Cekerevac\\Social network - final\\faza4 - Sandra\\views\\wall.tpl',
      1 => 1554404889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca6561f5c1668_96715816 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
      <a href="wall.php?wallusername=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" id="slikaime">
        <img src="<?php echo $_smarty_tpl->tpl_vars['userImage']->value;?>
" />
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

      </a>
      <a href="logout.php" class="logoutA"><i class="fas fa-power-off"></i></a>
      </div>
    </nav>


    <div class="container">
      
      <div id="wrapper">
      <div id="profil">
        <img src="img/<?php echo $_smarty_tpl->tpl_vars['wallusername']->value;?>
.jpg"/>
        <p><?php echo $_smarty_tpl->tpl_vars['wallusername']->value;?>
</p>
                                    <?php if ($_smarty_tpl->tpl_vars['wallusername']->value == $_smarty_tpl->tpl_vars['username']->value) {?>
            <form action="editProfile.php" method="POST">
                  <input type="hidden" name="wallusername" value="<?php echo $_smarty_tpl->tpl_vars['wallusername']->value;?>
">
                  <input type="hidden" name="usernejm" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
">
                  <input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['uid'];?>
">
                  <input type="hidden" name="trenutnikorisnik" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">
                  <button class="editProfileButton" type="submit">Edit Profile</button>
                 
            </form>
          <?php }?>
      </div>
     
      <div class="container posti">
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
            <div>
                <img src="img/<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
.jpg">
                <div id="picture">
                <a href="wall.php?wallusername=<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
&lastname=<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lastname'];?>
"  id="fullName">
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
                <div id="kasli"> 
                <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
">
                </div>
                <?php }?>
                <div id="like">like comment</div><div><?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['privateStatus'];?>
</div><!--pokazuje da li je post public ili private (stavljeno samo zbog kontrole koda-->
                                 <?php if ($_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'] == $_smarty_tpl->tpl_vars['username']->value) {?>
                <button class="deletePostButton" onclick="popUpBox('<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
')">Delete</button>
                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'] == $_smarty_tpl->tpl_vars['username']->value) {?>
                  <form action="editPost.php" method="POST">
                  <input type="hidden" name="postid" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                  <input type="hidden" name="usernejm" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
">
                  <input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['uid'];?>
">
                  <input type="hidden" name="postText" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
">
                  <input type="hidden" name="trenutnikorisnik" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">
                  <button class="editPostButton" type="submit">Edit</button>
                 
                  </form>
                <?php }?>
                </div>
            </div>
            </div>
                        <div id="popUp<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" class="popUp">
              <form action="deletePost.php?wallusername=<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
" method="POST">
              <input type="hidden" name="postid" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
              <button>Da</button>
              </form>
              <button onclick="exitPopUp('<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
')">Ne</button>
            </div>
      <?php
}
}
?>
      </div>
      </div>
 </div>
 
 <?php echo '<script'; ?>
>
  function popUpBox(idElement) {
    document.getElementById("popUp"+idElement).style.display="block";
  }

  function exitPopUp(idElement) {
     document.getElementById("popUp"+idElement).style.display="none";

  }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
