<?php
/* Smarty version 3.1.36, created on 2020-12-25 08:25:43
  from '/opt/lampp/htdocs/blog/app/views/Dashboard/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe593f78f6988_92816037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43a23199b23ba46596f94f163f6fa64feb029d90' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Dashboard/list.tpl',
      1 => 1608881136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe593f78f6988_92816037 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mb-5" id="article">
    <div class="wrap">
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
" src="https://www.kursuswebsite.org/wp-content/uploads/2013/10/fi-kursus-website-terbaik.jpg">
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
