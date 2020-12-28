<?php
/* Smarty version 3.1.36, created on 2020-12-27 10:43:53
  from '/opt/lampp/htdocs/blog/app/views/Admin/layout/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe85759ea9704_42303174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7789c5c33a5dbecd9b74d88cdb3dc40deff8c5cd' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/layout/header.tpl',
      1 => 1609062232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe85759ea9704_42303174 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="navbar navbar-expand-lg bg-custom">
    <a class="navbar-brand logo-text" href="<?php echo BASE_URL?>admin/dashboard">
        <img class="lazyloaded" src="<?php echo BASE_URL?>assets/image/logo.png" alt="Bacalah" width="40" height="40">
        Hobby Review
    </a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="ml-auto navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user mr-2"></i><?php echo $_SESSION['pengguna']['nama'];?>

                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo BASE_URL?>admin/logout">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</header><?php }
}
