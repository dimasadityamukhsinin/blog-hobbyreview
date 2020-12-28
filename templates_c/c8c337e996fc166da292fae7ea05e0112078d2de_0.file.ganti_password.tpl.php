<?php
/* Smarty version 3.1.36, created on 2020-12-27 06:06:23
  from '/opt/lampp/htdocs/blog/app/views/Admin/Author/ganti_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe8164f2cd377_15257258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8c337e996fc166da292fae7ea05e0112078d2de' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/Author/ganti_password.tpl',
      1 => 1609045581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe8164f2cd377_15257258 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3 mb-5">
    <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h4>
    <?php echo Flash::flashdata();?>


    <div class="mt-3 p-3">
        <a href="<?php echo BASE_URL?>admin/master_author" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
        <div class="mt-3">
            <form action="<?php echo BASE_URL?>admin/master_author/ganti_password/<?php echo $_smarty_tpl->tpl_vars['data']->value['author']['id'];?>
" method="post">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Masukkan Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
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
