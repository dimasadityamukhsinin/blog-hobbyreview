<?php
/* Smarty version 3.1.36, created on 2020-12-24 15:48:03
  from '/opt/lampp/htdocs/blog/app/views/layout/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe4aa23055f57_23580311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf2cd068ae660c6ac05e0a8c4e5cb1ae544c8849' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/layout/content.tpl',
      1 => 1608821275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe4aa23055f57_23580311 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['data']->value['isi']) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['data']->value['isi'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
