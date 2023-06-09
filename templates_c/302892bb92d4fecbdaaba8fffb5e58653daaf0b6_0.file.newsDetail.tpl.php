<?php
/* Smarty version 4.3.0, created on 2023-05-03 11:10:42
  from '/Applications/XAMPP/xamppfiles/htdocs/news/templates/newsDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64522512bf43c4_03466530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '302892bb92d4fecbdaaba8fffb5e58653daaf0b6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/news/templates/newsDetail.tpl',
      1 => 1683105035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64522512bf43c4_03466530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136088569364522512bedaf6_39457786', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "content"} */
class Block_136088569364522512bedaf6_39457786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_136088569364522512bedaf6_39457786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/news/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>

    <div class="news-item mt-3 p-2 border border-dark rounded">
        <h2>
            <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['news']->value['titre']);?>

        </h2>
        <p>
            <?php echo $_smarty_tpl->tpl_vars['news']->value['contenu'];?>

        </p>
    </div>
<?php
}
}
/* {/block "content"} */
}
