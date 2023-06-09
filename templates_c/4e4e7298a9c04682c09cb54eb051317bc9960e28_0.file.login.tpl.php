<?php
/* Smarty version 4.3.0, created on 2023-06-05 11:04:03
  from '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647da503bfe961_47415599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e4e7298a9c04682c09cb54eb051317bc9960e28' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/login.tpl',
      1 => 1685955841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647da503bfe961_47415599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1795496666647da503bfb850_63937921', "content");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "content"} */
class Block_1795496666647da503bfb850_63937921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1795496666647da503bfb850_63937921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="text-center">
        <form method="post" action="index.php?c=User&a=login">
            <div class="mb-3">
                <label for="username">Username:</label>
                <input type="text" name="username" id="user">
            </div>
            <div class="mb-5">
                <label for="password">Password:</label>
                <input type="password" name="password" id="pw">
            </div>
            <div>
                <input type="submit" name="submit" value="Login">
            </div>
            <a class="nav-link" href="index.php?c=User&a=register">create a new account</a>
        </form>
    </div>
<?php
}
}
/* {/block "content"} */
}
