<?php
/* Smarty version 4.3.0, created on 2023-05-02 13:40:00
  from '/Applications/XAMPP/xamppfiles/htdocs/news/templates/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6450f690289069_95704528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea3508a05dc61de8aaeb0f6ee65cfc62a90d4942' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/news/templates/head.tpl',
      1 => 1683027598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6450f690289069_95704528 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <img src="imgs/2.jpg" class="rounded-circle" width="50" height="50" alt="Flower">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Guides</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">MDN Plus</a>
            </li>
        </ul>

        <form action="searchNews.php" method="GET" class="d-flex">
            <input class="form-control me-2" type="text" name="key" id="search-box" placeholder="Input keyword">
            <button class="btn btn-warning" type="submit">Search</button>
        </form>

        <a class="nav-link text-white" href="#">Log in</a>
        <button class="rounded-pill">More Info</button>
    </div>
</nav><?php }
}
