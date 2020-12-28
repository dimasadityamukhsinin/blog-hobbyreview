<?php
/* Smarty version 3.1.36, created on 2020-12-27 10:05:33
  from '/opt/lampp/htdocs/blog/app/views/Admin/Author/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe84e5d9670b9_25179584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99b9da309f2c4d00e732c9f50c04722f3175ac9a' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/Author/edit.tpl',
      1 => 1609059877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe84e5d9670b9_25179584 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3 mb-5">
    <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h4>
    <?php echo Flash::flashdata();?>


    <div class="mt-3 p-3">
        <a href="<?php echo BASE_URL?>admin/master_author" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
        <div class="mt-3">
            <form action="<?php echo BASE_URL?>admin/master_author/edit/<?php echo $_smarty_tpl->tpl_vars['data']->value['author']['id'];?>
" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['author']['email'];?>
">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['author']['nama'];?>
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
