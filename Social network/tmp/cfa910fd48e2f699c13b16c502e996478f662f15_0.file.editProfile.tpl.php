<?php
/* Smarty version 3.1.33, created on 2019-04-04 04:32:37
  from 'C:\xampp\htdocs\Social network - final\faza4 - Sandra\views\editProfile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca56cc5c6e4e3_17533484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfa910fd48e2f699c13b16c502e996478f662f15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Social network - final\\faza4 - Sandra\\views\\editProfile.tpl',
      1 => 1554345091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca56cc5c6e4e3_17533484 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="UTF-8">
  <title>Edit</title>
</head>
<body>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['postsRows']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
       
        
        <form name="editpost" action="editPost.php" method="POST">
          img name: <?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['img'];?>

          <input type="file" name="file" id="fajlin"><br>
          <input type="submit" name="editprofbtn" value="Edit">
        </form>
       
    <?php
}
}
?>
        
</body>
</html><?php }
}
