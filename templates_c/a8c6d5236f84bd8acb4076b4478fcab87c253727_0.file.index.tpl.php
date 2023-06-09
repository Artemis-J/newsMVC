<?php
/* Smarty version 4.3.0, created on 2023-05-03 14:20:29
  from '/Applications/XAMPP/xamppfiles/htdocs/news/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6452518d6e5ea4_76119777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8c6d5236f84bd8acb4076b4478fcab87c253727' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/news/templates/index.tpl',
      1 => 1683116402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6452518d6e5ea4_76119777 (Smarty_Internal_Template $_smarty_tpl) {
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


    <link rel="stylesheet" type="text/css" href="templates/index.css">
</head>

<body>

    <h1 class="text-center p-4" id="title"> Système de News </h1>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="d-flex p-2 justify-content-end">
        <button onclick="addArticle()" class="btn btn-sm btn-dark">
            <span class="fa fa-add"></span> Add Article
        </button>
    </div>

    <section class="p-5 mx-5" id="newsList">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12293129936452518d6d72c0_66080610', "content");
?>


            <div>
                <button id="back-to-top"><i class="fa-solid fa-arrow-up"></i></button>
            </div>

            <?php echo '<script'; ?>
>
                function addArticle() {
                    window.location.href = "addNews.php";
                }

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
class Block_12293129936452518d6d72c0_66080610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12293129936452518d6d72c0_66080610',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/news/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/news/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

            <div class="row">
                <div class="col-md-9">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_news']->value, 'news');
$_smarty_tpl->tpl_vars['news']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->do_else = false;
?>
                        <div class="news-item mt-3 p-2 border border-dark rounded">
                            <strong>
                                <h2 id="<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">
                                    <a href="newsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['news']->value['titre']);?>
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
                                        <form action="modifyNews.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">
                                            <button type="submit" class="btn btn-sm btn-outline-success">
                                                <span class="fa fa-pen"></span> Modify
                                            </button>
                                        </form>
                                    </div>
                                    <div>
                                        <form action="deleteNews.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">
                                            <button type="submit"
                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?')"
                                                class="btn btn-sm btn-outline-danger">
                                                <span class="fas fa-trash-alt"></span> Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>
                <div class="col-md-3 p-3">
                    <!-- 目录 -->
                    <ul>
                        <!-- 循环输出目录 -->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_news']->value, 'news');
$_smarty_tpl->tpl_vars['news']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->do_else = false;
?>
                            <li><a href="#<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['titre'];?>
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
