<?php
/* Smarty version 3.1.36, created on 2020-12-27 14:45:45
  from '/opt/lampp/htdocs/blog/app/views/Home/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe8900931b964_73447678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b5db5cad0b2b077989842640c002b3d478bd031' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Home/list.tpl',
      1 => 1609076741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe8900931b964_73447678 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mb-5 wrap" id="article">
        <div class="content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['artikel'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                <article class="mb-5">
                    <a class="mb-5" href="#">
                        <img class="float-left mr-3 lazyloaded h-auto imgArticle" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
" src="<?php echo BASE_URL;?>assets/image/<?php echo $_smarty_tpl->tpl_vars['data']->value['gambar'];?>
">
                    </a>
                    <h2>
                        <a href="<?php echo BASE_URL;?>artikel/<?php echo $_smarty_tpl->tpl_vars['data']->value['slug'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>

                        </a>
                    </h2>
                    <p class="meta">
                        by
                        <span>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>

                        </span>
                        |
                        <span>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal'];?>

                        </span>
                        |
                        <a href="<?php echo BASE_URL;?>kategori/<?php echo $_smarty_tpl->tpl_vars['data']->value['kategori'];?>
" rel="category tag">
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['kategori'];?>

                        </a>
                    </p>
                    <p>
                        <?php echo html_entity_decode(substr($_smarty_tpl->tpl_vars['data']->value['deskripsi'],0,900));?>

                        <a href="<?php echo BASE_URL;?>artikel/<?php echo $_smarty_tpl->tpl_vars['data']->value['slug'];?>
">
                            <span aria-label="Lanjutkan Membaca <?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
">
                                (selengkapnya…)
                            </span>
                        </a>
                    </p>
                </article>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="d-flex flex-column kategori">
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
</div><?php }
}
