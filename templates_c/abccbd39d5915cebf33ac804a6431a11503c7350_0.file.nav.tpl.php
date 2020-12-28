<?php
/* Smarty version 3.1.36, created on 2020-12-28 05:40:19
  from '/opt/lampp/htdocs/blog/app/views/Author/layout/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe961b3207e93_70733109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abccbd39d5915cebf33ac804a6431a11503c7350' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Author/layout/nav.tpl',
      1 => 1609130204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe961b3207e93_70733109 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>
    <div class="row m-0">
        <div class="navigation">
            <ul class="w-100 p-0">
                <a class="navigation-link" href="<?php echo BASE_URL?>author/dashboard">
                    <li class="pt-2 pb-2 d-flex align-items-center <?php if ($_smarty_tpl->tpl_vars['active']->value == "dashboard") {?> active<?php }?>">
                            <i class="fas fa-tachometer-alt mr-1"></i>
                            <span>Dashboard</span>
                    </li>
                </a>
                <a class="navigation-link" href="<?php echo BASE_URL?>author/master_artikel">
                    <li class="pt-2 pb-2 d-flex align-items-center <?php if ($_smarty_tpl->tpl_vars['active']->value == "artikel") {?> active<?php }?>">
                            <i class="fas fa-newspaper mr-1"></i>
                            <span>Master Artikel</span>
                    </li>
                </a>
            </ul>
        </div>
        <div class="col"><?php }
}
