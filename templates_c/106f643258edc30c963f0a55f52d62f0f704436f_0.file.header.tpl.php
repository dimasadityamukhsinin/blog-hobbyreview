<?php
/* Smarty version 3.1.36, created on 2020-12-24 16:06:11
  from '/opt/lampp/htdocs/blog/app/views/layout/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe4ae6381d1b8_91162008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '106f643258edc30c963f0a55f52d62f0f704436f' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/layout/header.tpl',
      1 => 1608822370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe4ae6381d1b8_91162008 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg bg-custom fixed-top">
    <div class="container">
        <a class="navbar-brand logo-text" href="<?php echo BASE_URL?>">
            <img class="lazyloaded" src="<?php echo BASE_URL?>assets/image/logo.png" alt="Bacalah" width="40" height="40">
            Hobby Review
        </a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="ml-auto navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link pr-5" href="<?php echo BASE_URL?>">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php }
}
