<?php
/* Smarty version 4.3.0, created on 2023-05-11 16:28:29
  from '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/cateList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_645cfb8d85cb71_56027871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00c0a8d13654d4449e70dee033749f7e88bb3f42' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/cateList.tpl',
      1 => 1683815251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645cfb8d85cb71_56027871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1084149785645cfb8d858033_46535828', "content");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "content"} */
class Block_1084149785645cfb8d858033_46535828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1084149785645cfb8d858033_46535828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_cates']->value, 'cate');
$_smarty_tpl->tpl_vars['cate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php
}
}
/* {/block "content"} */
}
