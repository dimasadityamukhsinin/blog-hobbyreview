<?php
/* Smarty version 3.1.36, created on 2020-12-27 12:04:26
  from '/opt/lampp/htdocs/blog/app/views/Admin/Kategori/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe86a3a99dde3_75124373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '176cd641fdda6a79548cb75b1751b211802d0407' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/Kategori/list.tpl',
      1 => 1609067064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./delete.tpl' => 1,
  ),
),false)) {
function content_5fe86a3a99dde3_75124373 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3 mb-5">
    <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h4>
    <?php echo Flash::flashdata();?>


    <div class="mt-3 p-3">
        <a href="<?php echo BASE_URL?>admin/master_kategori/tambah" class="btn btn-success btn-md">
            <i class="fa fa-plus"></i> Tambah Baru
        </a>
        <div class="mt-3">
            <table class="table table-bordered" id="example1">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA KATEGORI</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $_smarty_tpl->_assignInScope('no', 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['kategori'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['kategori'];?>
</td>
                        <td>
                            <a href="<?php echo BASE_URL?>admin/master_kategori/edit/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="btn btn-warning btn-xs">
                            <i class="fa fa-edit"></i> Edit</a>
                            <?php $_smarty_tpl->_subTemplateRender('file:./delete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </td>
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }
}
