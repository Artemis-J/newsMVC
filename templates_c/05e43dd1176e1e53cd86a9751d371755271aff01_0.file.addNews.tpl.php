<?php
/* Smarty version 4.3.0, created on 2023-06-02 10:47:51
  from '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/addNews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6479acb7e88de6_18009500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05e43dd1176e1e53cd86a9751d371755271aff01' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/addNews.tpl',
      1 => 1685695668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6479acb7e88de6_18009500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1110377586479acb7e782a7_65023958', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "content"} */
class Block_1110377586479acb7e782a7_65023958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1110377586479acb7e782a7_65023958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="text-center">
        <form method="post" action="index.php?c=News&a=add">
            <label for="title">Title:</label>
            <input type="text" name="title" id="newsTitle"><br><br>
            <label for="content">Content:</label>
            <textarea name="content" id="content" style="width: 500px; height: 200px;"></textarea><br>
            

       
            <hr>

            <input type="submit" name="submit" value="Add Article">
        </form>
    </div>



<?php
}
}
/* {/block "content"} */
}
