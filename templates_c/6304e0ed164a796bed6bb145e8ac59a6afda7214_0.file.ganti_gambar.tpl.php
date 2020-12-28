<?php
/* Smarty version 3.1.36, created on 2020-12-27 15:33:52
  from '/opt/lampp/htdocs/blog/app/views/Author/Artikel/ganti_gambar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe89b5052cd21_80448158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6304e0ed164a796bed6bb145e8ac59a6afda7214' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Author/Artikel/ganti_gambar.tpl',
      1 => 1609079551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe89b5052cd21_80448158 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3 mb-5">
    <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h4>
    <?php echo Flash::flashdata();?>


    <div class="mt-3 p-3">
        <a href="<?php echo BASE_URL?>author/master_artikel" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
        <div class="mt-3">
            <form action="<?php echo BASE_URL?>author/master_artikel/ganti_gambar/<?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['id'];?>
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
