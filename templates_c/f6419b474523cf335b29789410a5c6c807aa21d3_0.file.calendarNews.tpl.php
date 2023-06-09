<?php
/* Smarty version 4.3.0, created on 2023-06-02 16:26:52
  from '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/calendarNews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6479fc2c1031a9_62977658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6419b474523cf335b29789410a5c6c807aa21d3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/calendarNews.tpl',
      1 => 1685715822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6479fc2c1031a9_62977658 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>The news of <?php echo $_smarty_tpl->tpl_vars['newsDate']->value;?>
:</h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsList']->value, 'news');
$_smarty_tpl->tpl_vars['news']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->do_else = false;
?>   
    <div class="news-item mt-3 p-2 border border-dark rounded">
        <strong>
            <h2><?php echo $_smarty_tpl->tpl_vars['news']->value['titre'];?>
</h2>
        </strong>
        <p class="date text-secondary">Publié le <?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['news']->value['contenu'];?>
</p>

    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
