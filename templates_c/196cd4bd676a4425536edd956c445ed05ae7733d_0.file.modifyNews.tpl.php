<?php
/* Smarty version 4.3.0, created on 2023-05-10 14:28:14
  from '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/modifyNews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_645b8ddea62168_53906946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '196cd4bd676a4425536edd956c445ed05ae7733d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/modifyNews.tpl',
      1 => 1683721677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645b8ddea62168_53906946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1443535648645b8ddea59d52_76813643', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "content"} */
class Block_1443535648645b8ddea59d52_76813643 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1443535648645b8ddea59d52_76813643',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="text-center">
        <form action="index.php?c=News&a=update" method="POST">
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
