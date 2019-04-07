<?php
/* Smarty version 3.1.33, created on 2019-04-04 21:08:38
  from 'C:\xampp\htdocs\Vesna Cekerevac\Social network - final\faza4 - Sandra\views\editProfile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca656368b31c4_15876319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37a990078b97508030869b898d70a6379e9c792a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Vesna Cekerevac\\Social network - final\\faza4 - Sandra\\views\\editProfile.tpl',
      1 => 1554404892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca656368b31c4_15876319 (Smarty_Internal_Template $_smarty_tpl) {
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
    <img src="img/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
.jpg" />
    <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

   </a>
   <a href="logout.php" class="logoutA"><i class="fas fa-power-off"></i></a>
   </div>
  </nav>
  <div class="container">
   
   <div id="wrapper">
<div id="profil">
    <img src="img/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
.jpg"/>
    <p><?php echo $_smarty_tpl->tpl_vars['wallusername']->value;?>
</p>
   </div>
   <div class="container posti">
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['postsRows']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <form action="editProfile.php" method="POST">
     Name:<input type="text" name="editedName" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
"><br><br>
     Lastname:<input type="text" name="editedLastname" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lastname'];?>
"><br><br>
     Username:<input type="text" name="editedUsername" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
"><br><br>
     Email:<input type="text" name="editedEmail" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
"><br><br>
     <input type="submit" name="save" value="Save edits">
    </form>
    <?php
}
}
?>
   </div>
   </div>
 </div>
 
</body>
</html><?php }
}
