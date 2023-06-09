<?php
/* Smarty version 4.3.0, created on 2023-06-02 16:53:00
  from '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647a024cf1a3b6_79553382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9909870b3e1e23798b86686a9833e15d8adf6f61' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/newsMVC/templates/head.tpl',
      1 => 1685717579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647a024cf1a3b6_79553382 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <img src="imgs/2.jpg" class="rounded-circle" width="50" height="50" alt="Flower">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About me</a>
            </li>
        </ul>

        <form action="index.php?c=News&a=search" method="POST" class="d-flex">
            <input class="form-control me-2" type="text" name="key" id="search-box" placeholder="Input keyword">
            <button class="btn btn-warning" type="submit">Search</button>
        </form>

        <a class="nav-link text-white" href="index.php?c=User&a=login">Log in</a>
        <button class="rounded-pill">More Info</button>
    </div>
</nav><?php }
}
