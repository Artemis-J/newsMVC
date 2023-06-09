<?php
/* Smarty version 4.3.0, created on 2023-05-09 16:48:03
  from '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/signIn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_645a5d23d0e3d6_51406335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15c44e8290bdef21415bff276e939ed9a4aa4e87' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/signIn.tpl',
      1 => 1683643087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645a5d23d0e3d6_51406335 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="index.php?c=User&a=signIn">
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="user">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="pw">
    </div>
    <div>
        <input type="submit"  name="submit" value="Sign In">
    </div>

</form><?php }
}
