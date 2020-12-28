<?php
/* Smarty version 3.1.36, created on 2020-12-27 07:22:32
  from '/opt/lampp/htdocs/blog/app/views/Admin/Admin/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe82828e86c15_17203179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aad03935c5cd4860593817c8f488c962342eec67' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/Admin/list.tpl',
      1 => 1609050150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./delete.tpl' => 1,
  ),
),false)) {
function content_5fe82828e86c15_17203179 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3 mb-5">
    <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h4>
    <?php echo Flash::flashdata();?>


    <div class="mt-3 p-3">
        <a href="<?php echo BASE_URL?>admin/master_admin/tambah" class="btn btn-success btn-md">
            <i class="fa fa-plus"></i> Tambah Baru
        </a>
        <div class="mt-3">
            <table class="table table-bordered" id="example1">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>ROLE</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $_smarty_tpl->_assignInScope('no', 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['admin'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['role'];?>
</td>
                        <td>
                            <a href="<?php echo BASE_URL?>admin/master_admin/ganti_password/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="btn btn-info btn-xs">
                            <i class="fa fa-key"></i> Ganti Password</a>
                            <a href="<?php echo BASE_URL?>admin/master_admin/edit/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
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
