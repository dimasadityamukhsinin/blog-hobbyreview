<?php
/* Smarty version 3.1.36, created on 2020-12-27 12:34:47
  from '/opt/lampp/htdocs/blog/app/views/Author/layout/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe87157339cb2_80131999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2f808b7b1f07fbbb5c32f1abd19201fcfbfbeb0' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Author/layout/content.tpl',
      1 => 1609068884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe87157339cb2_80131999 (Smarty_Internal_Template $_smarty_tpl) {
echo Simple_login::cek_loginAuthor();?>

<?php if ($_smarty_tpl->tpl_vars['data']->value['isi']) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['data']->value['isi'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
