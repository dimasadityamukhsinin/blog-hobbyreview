<?php
/* Smarty version 3.1.36, created on 2020-12-27 12:17:28
  from '/opt/lampp/htdocs/blog/app/views/Admin/Kategori/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe86d48208043_39487662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ce3cb5867bbfdfd29cbe52439c5edc82fc25700' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/Kategori/edit.tpl',
      1 => 1609067846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe86d48208043_39487662 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3 mb-5">
    <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h4>
    <?php echo Flash::flashdata();?>


    <div class="mt-3 p-3">
        <a href="<?php echo BASE_URL?>admin/master_kategori" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
        <div class="mt-3">
            <form action="<?php echo BASE_URL?>admin/master_kategori/edit/<?php echo $_smarty_tpl->tpl_vars['data']->value['kategori']['id'];?>
" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nama Kategori</label>
                        <input type="text" name="kategori" class="form-control" placeholder="Nama Kategori" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['kategori']['kategori'];?>
">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div><?php }
}
