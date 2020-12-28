<?php
/* Smarty version 3.1.36, created on 2020-12-27 12:06:41
  from '/opt/lampp/htdocs/blog/app/views/Admin/Kategori/tambah.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe86ac1c24342_22387191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9173ad02521372bf4fbe503d869990a1bf3805a0' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/Kategori/tambah.tpl',
      1 => 1609067201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe86ac1c24342_22387191 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3 mb-5">
    <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h4>
    <?php echo Flash::flashdata();?>


    <div class="mt-3 p-3">
        <a href="<?php echo BASE_URL?>admin/master_kategori" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
        <div class="mt-3">
            <form action="<?php echo BASE_URL?>admin/master_kategori/tambah" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nama Kategori</label>
                        <input type="text" name="kategori" class="form-control" placeholder="Nama Kategori" required>
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
