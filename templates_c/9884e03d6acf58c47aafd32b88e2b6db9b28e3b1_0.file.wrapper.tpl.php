<?php
/* Smarty version 3.1.36, created on 2020-12-24 16:06:57
  from '/opt/lampp/htdocs/blog/app/views/layout/wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe4ae9183b080_97781795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9884e03d6acf58c47aafd32b88e2b6db9b28e3b1' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/layout/wrapper.tpl',
      1 => 1608822414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
    'file:./header.tpl' => 1,
    'file:./content.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fe4ae9183b080_97781795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
