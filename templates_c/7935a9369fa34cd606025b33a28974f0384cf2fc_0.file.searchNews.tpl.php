<?php
/* Smarty version 4.3.0, created on 2023-05-04 10:57:14
  from '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/searchNews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6453736a352234_27247081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7935a9369fa34cd606025b33a28974f0384cf2fc' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/searchNews.tpl',
      1 => 1683121854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6453736a352234_27247081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10484724196453736a348517_28492874', "content");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "content"} */
class Block_10484724196453736a348517_28492874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10484724196453736a348517_28492874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['newsList']->value) {?>
  <h2>Search Result:</h2>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsList']->value, 'news');
$_smarty_tpl->tpl_vars['news']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->do_else = false;
?>
    <div id="search-results" class="news-item mt-3 p-2 border border-dark rounded">
      <h3><?php echo $_smarty_tpl->tpl_vars['news']->value['titre'];?>
</h3>
      <p><?php echo $_smarty_tpl->tpl_vars['news']->value['contenu'];?>
</p>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
  <p>No Result</p>
<?php }
}
}
/* {/block "content"} */
}
