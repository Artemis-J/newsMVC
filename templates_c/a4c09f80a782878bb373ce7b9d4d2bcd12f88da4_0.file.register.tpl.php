<?php
/* Smarty version 4.3.0, created on 2023-06-05 11:04:05
  from '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647da505756522_88627865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4c09f80a782878bb373ce7b9d4d2bcd12f88da4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/register.tpl',
      1 => 1685955830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647da505756522_88627865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_585392614647da5057535d6_58990662', "content");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "content"} */
class Block_585392614647da5057535d6_58990662 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_585392614647da5057535d6_58990662',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="text-center">
        <form method="post" action="index.php?c=User&a=register">
            <div class="mb-3">
                <label for="username">Username:</label>
                <input type="text" name="username" id="user">
            </div>
            <div class="mb-5">
                <label for="password">Password:</label>
                <input type="password" name="password" id="pw">
            </div>
            <div>
                <input type="submit" name="submit" value="Register">
            </div>

        </form>
    </div>
<?php
}
}
/* {/block "content"} */
}
