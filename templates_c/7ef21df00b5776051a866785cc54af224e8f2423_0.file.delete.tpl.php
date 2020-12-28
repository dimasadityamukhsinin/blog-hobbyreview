<?php
/* Smarty version 3.1.36, created on 2020-12-26 15:57:46
  from '/opt/lampp/htdocs/blog/app/views/Admin/Author/delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe74f6a7c4880_47998132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ef21df00b5776051a866785cc54af224e8f2423' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/Author/delete.tpl',
      1 => 1608994665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe74f6a7c4880_47998132 (Smarty_Internal_Template $_smarty_tpl) {
?><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
    <i class="fa fa-trash"></i> Hapus
</button>

<div class="example-modal">
    <div class="modal" id="delete-<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="alert alert-warning">
                <h4><i class="icon fa fa-ban"></i> Peringatan!</h4>
                Yakin ingin menghapus data ini? Data yang sudah dihapus tidak dapat dikembalikan
              </div>.
          </div>
          <div class="modal-footer">
            <a href="<?php echo BASE_URL?>admin/master_author/delete/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Ya, Hapus Data Ini</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- /.example-modal --><?php }
}
