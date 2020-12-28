<?php
/* Smarty version 3.1.36, created on 2020-12-27 07:23:52
  from '/opt/lampp/htdocs/blog/app/views/Admin/layout/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe82878daca84_79166900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c40e4c87ba5c93733452dd56f78b1c14e9cef957' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/layout/nav.tpl',
      1 => 1609050230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe82878daca84_79166900 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>
    <div class="row m-0">
        <div class="navigation">
            <ul class="w-100 p-0">
                <a class="navigation-link" href="<?php echo BASE_URL?>admin/dashboard">
                    <li class="pt-2 pb-2 d-flex align-items-center <?php if ($_smarty_tpl->tpl_vars['active']->value == "dashboard") {?> active<?php }?>">
                            <i class="fas fa-tachometer-alt mr-1"></i>
                            <span>Dashboard</span>
                    </li>
                </a>
                <a class="navigation-link" href="<?php echo BASE_URL?>admin/master_author">
                    <li class="pt-2 pb-2 d-flex align-items-center <?php if ($_smarty_tpl->tpl_vars['active']->value == "author") {?> active<?php }?>">
                            <i class="fas fa-user mr-1"></i>
                            <span>Master Author</span>
                    </li>
                </a>
                <a class="navigation-link" href="<?php echo BASE_URL?>admin/master_artikel">
                    <li class="pt-2 pb-2 d-flex align-items-center <?php if ($_smarty_tpl->tpl_vars['active']->value == "artikel") {?> active<?php }?>">
                            <i class="fas fa-newspaper mr-1"></i>
                            <span>Master Artikel</span>
                    </li>
                </a>
                <a class="navigation-link" href="<?php echo BASE_URL?>admin/master_kategori">
                    <li class="pt-2 pb-2 d-flex align-items-center <?php if ($_smarty_tpl->tpl_vars['active']->value == "kategori") {?> active<?php }?>">
                            <i class="fas fa-tachometer-alt mr-1"></i>
                            <span>Master Kategori</span>
                    </li>
                </a>
            </ul>
        </div>
        <div class="col"><?php }
}
