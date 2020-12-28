<?php
/* Smarty version 3.1.36, created on 2020-12-27 11:57:41
  from '/opt/lampp/htdocs/blog/app/views/Admin/Artikel/ganti_gambar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe868a546b3b4_39997999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a41f16b155a82aa375281bcd4aff268283c92385' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/Artikel/ganti_gambar.tpl',
      1 => 1609066654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe868a546b3b4_39997999 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3 mb-5">
    <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h4>
    <?php echo Flash::flashdata();?>


    <div class="mt-3 p-3">
        <a href="<?php echo BASE_URL?>admin/master_artikel" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
        <div class="mt-3">
            <form action="<?php echo BASE_URL?>admin/master_artikel/ganti_gambar/<?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['id'];?>
" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Ganti Gambar</label>
                        <input type="file" name="gambar" class="form-control-file" placeholder="Gambar" accept="image/png, image/jpg" required>
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
