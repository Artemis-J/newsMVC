<?php
/* Smarty version 4.3.0, created on 2023-06-09 16:30:49
  from '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64833799201a09_25086324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab3020f4f5f571d33791a4593a58f230e8adcbce' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/index.tpl',
      1 => 1686321046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64833799201a09_25086324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>News</title>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.4.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/flatpickr"><?php echo '</script'; ?>
>

    <link rel="stylesheet" type="text/css" href="templates/index.css">

</head>

<body>

    <h2 class="text-center m-4" id="title"> News System </h2>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="d-flex p-2 justify-content-end">
        <a href="index.php?c=News&a=add">
            <button class="btn btn-sm btn-dark">
                <span class="fa fa-add"></span> Add Article
            </button>
        </a>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106883036648337991eb0d8_43063895', "content");
?>

            <!-- 回到顶部 -->
            <div>
                <button id="back-to-top"><i class="fa-solid fa-arrow-up"></i></button>
            </div>

            <?php echo '<script'; ?>
>
                var backToTopBtn = document.getElementById('back-to-top');
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 400) {
                        backToTopBtn.style.display = 'block';
                    } else {
                        backToTopBtn.style.display = 'none';
                    }
                });
                backToTopBtn.addEventListener('click', function() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            <?php echo '</script'; ?>
>

    </section>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
/* {block "content"} */
class Block_106883036648337991eb0d8_43063895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_106883036648337991eb0d8_43063895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/newsMVC/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/newsMVC/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

        <section class="p-5 mx-5" id="newsList">
            <div class="row">
                <!-- 左边栏 -->
                <div class="col-md-9" id="contentArea">
                                        <div class="news-item m-3 p-2 border border-warning rounded">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_news']->value, 'news');
$_smarty_tpl->tpl_vars['news']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->do_else = false;
?>
                            <strong>
                                <h2 id="<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">
                                    <i class="fa-solid fa-hand-point-right" style="color: #b889d4;"></i>
                                    <a href="index.php?c=News&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"
                                        style="color: #412a4f;"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['news']->value['titre']);?>
</a>
                                </h2>
                            </strong>
                            <p class="date text-secondary">Publié le <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],"%H:%M:%S %d/%m/%Y");?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['news']->value['preview'];?>
...</p>

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
                            <hr class="border border-secondary">
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                                          <nav aria-label="Page navigation">
                     <ul class="pagination justify-content-center">
                         <li class="page-item">
                             <a class="page-link" href="index.php?c=News&a=page&page=<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
" aria-label="Previous">
                                 &laquo;
                             </a>
                         </li>
                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['totalPages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                             <li class="page-item <?php if ($_smarty_tpl->tpl_vars['currentPage']->value == $_smarty_tpl->tpl_vars['page']->value) {?>active<?php }?>">
                                 <a class="page-link" href="index.php?c=News&a=page&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
                             </li>
                         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                         <li class="page-item">
                             <a class="page-link" href="index.php?c=News&a=page&page=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
" aria-label="Next">
                                 &raquo;
                             </a>

                         </li>
                     </ul>
                 </nav>
                </div>

                <!-- 右边栏 -->
                <div class="col-md-3 p-3">
                    <!-- 日历 -->
                    <div id="calendar"></div>
                    <?php echo '<script'; ?>
>
                        var highlightedDates = [
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_news']->value, 'news');
$_smarty_tpl->tpl_vars['news']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->do_else = false;
?>
                                "<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],'%Y-%m-%d');?>
",             
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        ];
                        /*数组从小到大排列，可有可无
                    highlightedDates.sort(function(a, b) {
                        return new Date(a) - new Date(b);
                    });
                    */
                        flatpickr("#calendar", {
                            inline: true,
                            dateFormat: 'Y-m-d',
                            enable: highlightedDates,
                            onChange: function(selectedDates, dateStr, instance) {
                                // 发送 AJAX 请求
                                var xhr = new XMLHttpRequest();
                                var url = 'http://localhost/newsMVC/index.php?c=News&a=calendar&d=' + dateStr;
                                xhr.onreadystatechange = function() {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        // 请求成功，在选中的HTML区域显示响应内容
                                        document.getElementById("contentArea").innerHTML = xhr.responseText;
                                    }
                                }
                                xhr.open('GET', url, true);
                                xhr.send();
                            }
                        });
                    <?php echo '</script'; ?>
>
                    <br />
                    <!-- 目录 -->
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_news']->value, 'news');
$_smarty_tpl->tpl_vars['news']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->do_else = false;
?>
                            <li class="title-li"><a href="#<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['news']->value['titre']);?>
</a></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            <?php
}
}
/* {/block "content"} */
}
