<?php
/* Smarty version 4.3.0, created on 2023-05-02 15:37:03
  from '/Applications/XAMPP/xamppfiles/htdocs/news/templates/addNews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_645111ffc34e02_78535215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f4c11d2a710395bf2fd937cf078022572a66c9c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/news/templates/addNews.tpl',
      1 => 1683034622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645111ffc34e02_78535215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173574029645111ffc33f80_47754577', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "content"} */
class Block_173574029645111ffc33f80_47754577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_173574029645111ffc33f80_47754577',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="text-center">
        <form method="post" action="addNews.php">
            <label for="title">Title:</label>
            <input type="text" name="title" id="newsTitle"><br><br>
            <label for="content">Content:</label>
            <textarea name="content" id="content" style="width: 500px; height: 200px;"></textarea><br><br>
            <input type="submit" name="submit" value="Add Article">
        </form>
    </div>
<?php
}
}
/* {/block "content"} */
}
