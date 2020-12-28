<?php
/* Smarty version 3.1.36, created on 2020-12-27 12:31:20
  from '/opt/lampp/htdocs/blog/app/views/Author/Artikel/delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe87088a68482_56238114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12fd0fe504b6f6cb5f74f0f2277faab86a91f5c5' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Author/Artikel/delete.tpl',
      1 => 1609068677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe87088a68482_56238114 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a href="<?php echo BASE_URL?>author/master_artikel/delete/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Ya, Hapus Data Ini</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- /.example-modal --><?php }
}
