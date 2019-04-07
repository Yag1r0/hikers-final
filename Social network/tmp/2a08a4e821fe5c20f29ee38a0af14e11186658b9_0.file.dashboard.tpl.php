<?php
/* Smarty version 3.1.33, created on 2019-04-02 10:31:34
  from 'C:\xampp\htdocs\Vesna Cekerevac\FINAL FORM SOCIAL NETWORK\faza4 - Sandra\views\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca31de6e8fb42_51705426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a08a4e821fe5c20f29ee38a0af14e11186658b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Vesna Cekerevac\\FINAL FORM SOCIAL NETWORK\\faza4 - Sandra\\views\\dashboard.tpl',
      1 => 1554129542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca31de6e8fb42_51705426 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/png" href="../img/favicon1.png"/>
	<title>Hikers</title>
	<link href="css/dashboard.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<!--navbar-->
	<nav>
      <a href="dashboard.php"><div id="homelogo"></div></a>
      <div id="desnonav">
      <a href="wall.php?wallusername=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" id="slikaime">
        <img src="img/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
.jpg" />
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

      </a>
      <a href="logout.php" class="logoutA"><i class="fas fa-power-off"></i></a>
      </div>
    </nav>

    
    <div id="wrapper">

    <!--Insert post-->
        <div id="insertPost">
            <img src="img/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
.jpg"/>
            <a href="wall.php?wallusername=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">
                <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

            </a>
        <form action="dashboard.php" method="post" enctype="multipart/form-data">
	        <input type="text" name="post_body" placeholder="Whats on your mind ?"/>
            <?php echo $_smarty_tpl->tpl_vars['postSuccessMessage']->value;?>
<br>
            <select name="privacy">
                <option value="public">Public</option>
                <option value="private">Private</option>
            </select>
            <input type="file" name="file">
	        <input id="button" type="submit" name="submit" value="Insert data" class="loginbutton">
            
        </form>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            
            
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
     <img src="img/<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
.jpg">
     
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
     <div id="kasli"> 
        <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
">
     </div>
     <?php }?>
     
     <div id="like">like comment</div>
     
     </div>
 </div>
 
  <?php
}
}
?>
 </div>
 </div>
<?php echo '<script'; ?>
>
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
   };
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
