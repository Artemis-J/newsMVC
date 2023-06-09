<?php
/* Smarty version 4.3.0, created on 2023-05-02 11:37:11
  from '/Applications/XAMPP/xamppfiles/htdocs/news/templates/searchNews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6450d9c762efa1_50838441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f6a73ae171db1ac75ec8c9b554aeb1f73cf352b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/news/templates/searchNews.tpl',
      1 => 1683020102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6450d9c762efa1_50838441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20757159406450d9c76252e2_60215247', "content");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "content"} */
class Block_20757159406450d9c76252e2_60215247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20757159406450d9c76252e2_60215247',
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
