<?php
/* Smarty version 4.3.0, created on 2023-04-19 11:59:23
  from '/Applications/XAMPP/xamppfiles/htdocs/test/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643fbb7b2f3f68_96428076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37dcae3cb5879ecd506c9b8353ba0b176fbd9ff1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/test/templates/index.tpl',
      1 => 1681898361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643fbb7b2f3f68_96428076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/test/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html>

<head>
    <title>Test</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><?php echo '</script'; ?>
>
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

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <img src="2.jpg" class="rounded-circle" width="50" height="50" alt="Flower">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">References</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Guides</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MDN Plus</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-warning" type="button">Search</button>
            </form>
            <a class="nav-link text-white" href="#">Log in</a>
            <button class="rounded-pill">More Info</button>
        </div>
    </nav>


        <div class="p-5 bg-dark text-white text-center border-top border-light shadow">
        <h1>Resources for <u>Developers</u>,<br> by Developers</h1>
        <p>Documenting web technologies, including CSS, HTML, and JavaScript, since 2005.</p>
        <div class="input-group mb-3 ">
            <div class="col-sm-6 d-flex mx-auto">
                <input type="text" class="form-control" placeholder="search">
                <button type="submit" class="btn btn-warning">
                    <span class="fa fa-search">
                    </span>
                </button>
            </div>
        </div>
    </div>


        <div id="carouselEx" class="carousel slide my-2 border-top border-3 border-info" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselEx" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselEx" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselEx" data-bs-slide-to="2"></li>
        </ol>


        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="8000">
                <img src="2.jpg" alt="flower" class="d-block" height="400px" width="100%">
                <div class="carousel-caption">
                    <h2>Web Hosting</h2>
                    <p>Get a website that works it's quick and easy..</p>
                    <button type="button" class="btn btn-primary-outline border border-light text-light">View
                        Plans&Features</button>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="8000">
                <img src="tulip.jpg" alt="Beijing" class="d-block" height="400px" width="100%">
                <div class="carousel-caption">
                    <h2>Reseller Hosting</h2>
                    <p>Start Your Own Web Hosting Business Today..</p>
                    <button type="button" class="btn btn-primary-outline border border-light text-light">View
                        Plans&Features</button>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="8000">
                <img src="flower.jpg" alt="Wuhan" class="d-block" height="400px" width="100%">
                <div class="carousel-caption">
                    <h2>VPS Hosting</h2>
                    <p>Setup to the power of a Fully Managered Cloud VPS..</p>
                    <button type="button" class="btn btn-primary-outline border border-light text-light">View
                        Plans&Features</button>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselEx" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselEx" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>






        <section class="content">

        <h3 class="text-center mb-5 pt-5">Browse our Products/Services</h3>
        <div class="container">
            <div class="row align-middle">
                <div class="col-md-6 col-lg-4">
                    <div class="card p-5 border border-secondary text-center">
                        <h4 class="card-title mb-3">Register a New Domain</h4>
                        <p class="card-text">Secure your domain name by registering it today</p>
                        <button class="card-link btn-light border border-dark rounded mt-2 mx-auto" type="submit">Domain
                            Search</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card p-5 border border-secondary text-center">
                        <h4 class="card-title mb-3">Transfer Your Domain</h4>
                        <p class="card-text text-center">Transfer now to extend your domain by 1 year</p>
                        <button class="card-link btn-light border border-dark rounded mt-2 mx-auto"
                            type="submit">Transfer Your
                            Domain</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card p-5 border border-secondary text-center">
                        <h4 class="card-title mb-3">Register a New Domain</h4>
                        <p class="card-text text-center">Secure your domain name by registering it today</p>
                        <button class="card-link btn-light border border-dark rounded mt-2 mx-auto" type="submit">Domain
                            Search</button>
                    </div>
                </div>
            </div>

        </div>
        </div>


        
        <h3 class="text-center m-4 my-5">How can we help today</h3>
        <div class="container">
            <div class="row align-middle">
                <div class="row">
                    <div class="col-6 col-md-4 col-lg p-4 m-3 text-center border-top border-3 border-info bg-white rounded"
                        id="card1">
                        <a href="#" class="card-accent-teal">
                            <figure class="ico-container">
                                <i class="fa fa-bullhorn display-5 text-secondary"></i>
                            </figure>
                            <p class="text-secondary">Announcements</p>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg p-4 m-3 text-center border-top border-3 border-danger bg-white rounded"
                        id="card2">
                        <a href="#">
                            <figure class="ico-container">
                                <i class="fa-solid fa-layer-group display-5 text-secondary"></i>
                            </figure>
                            <p class="text-secondary">Network Status</p>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg p-4 m-3 text-center border-top border-3 border-warning bg-white rounded"
                        id="card3">
                        <a href="#">
                            <figure class="ico-container">
                                <i class="fa fa-book display-5 text-secondary"></i>
                            </figure>
                            <p class="text-secondary">knowledgebase</p>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg p-4 m-3 text-center border-top border-3 border-secondary bg-white rounded"
                        id="card4">
                        <a href="#">
                            <figure class="ico-container">
                                <i class="fa fa-download display-5 text-secondary"></i>
                            </figure>
                            <p class="text-secondary">Downloads</p>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg p-4 m-3 text-center border-top border-3 border-success bg-white rounded"
                        id="card5">
                        <a href="#">
                            <figure class="ico-container">
                                <i class="fa fa-life-ring display-5 text-secondary"></i>
                            </figure>
                            <p class="text-secondary">Submit a Ticket</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <section>
                <h3 class="text-center m-3">Smarty Exercise</h3>
        <strong><?php echo $_smarty_tpl->tpl_vars['ma_variable']->value;?>
</strong> <br />
        <?php echo mb_strtolower($_smarty_tpl->tpl_vars['une_variable']->value, 'UTF-8');?>
 <br />
        <?php echo ($_smarty_tpl->tpl_vars['une_autre_variable']->value).("xxxxx");?>
<br />

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listMatiere']->value, 'matiere');
$_smarty_tpl->tpl_vars['matiere']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['matiere']->value) {
$_smarty_tpl->tpl_vars['matiere']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['matiere']->value;?>
 est une matière <br />
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <br/>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_news']->value, 'news');
$_smarty_tpl->tpl_vars['news']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->do_else = false;
?>
            <strong><?php echo $_smarty_tpl->tpl_vars['news']->value['titre'];?>
</strong> écrit le <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],"%d/%m/%Y");?>
<br />
            <?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
<br /><br />
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </section>


    <div class="mt-5 p-4 bg-dark text-light text-center" style="height: 80px;">
        <a href="#" class="text-light">Contact Us</a>
        <p class="mb-3">Copyright © 2023 Company Name. All Rights Reserved.</p>
    </div>





</body>

</html><?php }
}
