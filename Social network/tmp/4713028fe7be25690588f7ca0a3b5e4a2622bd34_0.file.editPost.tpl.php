<?php
/* Smarty version 3.1.33, created on 2019-03-28 11:24:14
  from 'C:\xampp\htdocs\faza4 - Sandra\views\editPost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9ca0ce604412_85883515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4713028fe7be25690588f7ca0a3b5e4a2622bd34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faza4 - Sandra\\views\\editPost.tpl',
      1 => 1553768650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9ca0ce604412_85883515 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
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

          Date: <?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
<br>
          Post: <input type="text" name="inputpost" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
"><br>
          privacy:  <?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['privateStatus'];?>

          <select name="privacy">
                <option value="public">Public</option>
                <option value="private">Private</option>
            </select><br>
          <input type="hidden" name="ajdi" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
          <input type="submit" name="editpostbtn" value="Edit">
        </form>
       
    <?php
}
}
?>
        
</body>
</html><?php }
}
