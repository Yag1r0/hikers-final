<?php
/* Smarty version 3.1.33, created on 2019-04-04 22:40:04
  from 'C:\xampp\htdocs\FINAL FORM SOCIAL NETWORK\Social network - final\faza4 - Sandra\views\editPost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca66ba4af2d21_98103433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47c250174923c56f792668f789e77b178b573d34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FINAL FORM SOCIAL NETWORK\\Social network - final\\faza4 - Sandra\\views\\editPost.tpl',
      1 => 1554391946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca66ba4af2d21_98103433 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="img/favicon1.png"/>
    <title>Hikers</title>
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['postsRows']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
       
        <div id="editiz">
        <form name="editpost" action="editPost.php" method="POST">

          Date: <?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
<br>
          Post: <input type="text" name="inputpost" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
"><br>
          privacy:  <?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['privateStatus'];?>
<br>
          
          <input type="hidden" name="ajdi" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
          <input type="submit" name="editpostbtn" value="Edit" id="editpostbtn">
        </form>
       </div>
    <?php
}
}
?>
        
</body>
</html><?php }
}
