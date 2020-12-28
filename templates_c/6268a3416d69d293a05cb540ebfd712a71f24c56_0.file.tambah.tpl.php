<?php
/* Smarty version 3.1.36, created on 2020-12-27 05:41:05
  from '/opt/lampp/htdocs/blog/app/views/Admin/Author/tambah.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe8106142c169_23902398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6268a3416d69d293a05cb540ebfd712a71f24c56' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/Author/tambah.tpl',
      1 => 1608992627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe8106142c169_23902398 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3 mb-5">
    <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h4>
    <?php echo Flash::flashdata();?>


    <div class="mt-3 p-3">
        <a href="<?php echo BASE_URL?>admin/master_author" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
        <div class="mt-3">
            <form action="<?php echo BASE_URL?>admin/master_author/tambah" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Role</label>
                        <input type="text" name="role" class="form-control" placeholder="Role" value="Author" readonly>
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
