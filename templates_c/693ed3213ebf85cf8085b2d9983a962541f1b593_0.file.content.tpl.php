<?php
/* Smarty version 3.1.36, created on 2020-12-27 12:33:45
  from '/opt/lampp/htdocs/blog/app/views/Admin/layout/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe871197b5a40_87757300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '693ed3213ebf85cf8085b2d9983a962541f1b593' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/layout/content.tpl',
      1 => 1609068817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe871197b5a40_87757300 (Smarty_Internal_Template $_smarty_tpl) {
echo Simple_login::cek_loginAdmin();?>

<?php if ($_smarty_tpl->tpl_vars['data']->value['isi']) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['data']->value['isi'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
