<?php
/* Smarty version 4.3.0, created on 2023-06-05 15:51:57
  from '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/newsDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647de87dd75408_36544588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '714c9805c6188c4839ef5894c7b5ce01451a1f87' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/newsDetail.tpl',
      1 => 1685973071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647de87dd75408_36544588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1024133273647de87dd66b31_47922418', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "content"} */
class Block_1024133273647de87dd66b31_47922418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1024133273647de87dd66b31_47922418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/newsMVC/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>

    <section class="p-5 mx-5" id="newsList">
        <div class="news-item mt-3 p-2 border border-dark rounded">
            <h2>
                <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['news']->value['titre']);?>

            </h2>
            <p>
                <?php echo $_smarty_tpl->tpl_vars['news']->value['contenu'];?>

            </p>
            <div class="row">
                <div class="d-flex  justify-content-end">
                    <div class="mx-2">
                        <form action="index.php?c=News&a=modify" method="POST">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">
                            <button type="submit" class="btn btn-sm btn-outline-success">
                                <span class="fa fa-pen"></span> Modify
                            </button>
                        </form>
                    </div>
                    <div>
                        <a href="index.php?c=News&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">
                            <button type="submit"
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?')"
                                class="btn btn-sm btn-outline-danger">
                                <span class="fas fa-trash-alt"></span> Supprimer
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <label for="comment">Comment:</label>
                <hr>
                <textarea name="comment" id="content" style="width: 500px; height: 200px;"></textarea><br>
                <input type="submit" name="submit" value="Submit">
            </div>
        </div>
    </section>
<?php
}
}
/* {/block "content"} */
}
