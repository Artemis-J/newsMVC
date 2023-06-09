<?php
/* Smarty version 4.3.0, created on 2023-04-27 16:47:07
  from '/Applications/XAMPP/xamppfiles/htdocs/news/templates/modifyNews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644a8aeb806a39_23449349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce65fbe8a758a8c87a3b36251f0fc7d1e0c29d51' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/news/templates/modifyNews.tpl',
      1 => 1682606654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644a8aeb806a39_23449349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_582668491644a8aeb800758_16209984', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "content"} */
class Block_582668491644a8aeb800758_16209984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_582668491644a8aeb800758_16209984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="text-center">
        <form action="updateNews.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">
            <div>
                <label for="title">Title:</label>
                <input class="form-control-sm border rounded" type="text" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['titre'];?>
">
            </div>
            <br />
            <div>
                <label for="content">Content:</label>
                <textarea id="content" name="content" class="border rounded"
                    style="width: 500px; height: 200px;"><?php echo $_smarty_tpl->tpl_vars['news']->value['contenu'];?>
</textarea>
            </div>
            <br />
            <button class="btn btn-outline-primary d-block mx-auto" type="submit">Save</button>
        </form>
    </div>
<?php
}
}
/* {/block "content"} */
}
