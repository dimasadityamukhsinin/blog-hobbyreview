<?php
/* Smarty version 3.1.36, created on 2020-12-27 09:54:27
  from '/opt/lampp/htdocs/blog/app/views/Artikel/artikel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe84bc3cf67b5_67646023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e57e60bec10c7db6d452f937f3f87ab1dbbd1ee7' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Artikel/artikel.tpl',
      1 => 1609059267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe84bc3cf67b5_67646023 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mb-5" id="article">
    <div class="wrap">
        <div class="content">
            <article class="mb-5">
                <h2>
                    <a href="<?php echo BASE_URL;?>artikel/<?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['slug'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['judul'];?>

                    </a>
                </h2>
                <p class="meta">
                    by
                    <span>
                        <?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['nama'];?>

                    </span>
                    |
                    <span>
                        <?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['tanggal'];?>

                    </span>
                    |
                    <a href="<?php echo BASE_URL;?>kategori/<?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['kategori'];?>
" rel="category tag">
                        <?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['kategori'];?>

                    </a>
                </p>
                <a class="mb-5" href="#">
                    <img class="float-left mr-3 lazyloaded h-auto imgPost" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['judul'];?>
" src="<?php echo BASE_URL;?>assets/image/<?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['gambar'];?>
">
                </a>
                <p>
                    <?php echo html_entity_decode($_smarty_tpl->tpl_vars['data']->value['artikel']['deskripsi']);?>

                </p>
            </article>
        </div>
        <div class="col kategori">
            <h2>Kategori</h2>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['kategori'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                <a href="<?php echo BASE_URL;?>kategori/<?php echo $_smarty_tpl->tpl_vars['data']->value['kategori'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['kategori'];?>

                </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
}
