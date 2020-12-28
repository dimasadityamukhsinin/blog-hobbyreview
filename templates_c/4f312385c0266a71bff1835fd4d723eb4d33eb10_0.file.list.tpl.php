<?php
/* Smarty version 3.1.36, created on 2020-12-28 05:28:52
  from '/opt/lampp/htdocs/blog/app/views/Admin/Artikel/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe95f04aaf5d6_88064250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f312385c0266a71bff1835fd4d723eb4d33eb10' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/Artikel/list.tpl',
      1 => 1609129731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./delete.tpl' => 1,
  ),
),false)) {
function content_5fe95f04aaf5d6_88064250 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3 mb-5">
    <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h4>
    <?php echo Flash::flashdata();?>


    <div class="mt-3 p-3">
        <a href="<?php echo BASE_URL?>admin/master_artikel/tambah" class="btn btn-success btn-md">
            <i class="fa fa-plus"></i> Tambah Baru
        </a>
        <div class="mt-3">
            <table class="table table-bordered" id="example1">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>GAMBAR</th>
                        <th>JUDUL</th>
                        <th>KATEGORI</th>
                        <th>TANGGAL</th>
                        <th>DITERBITKAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $_smarty_tpl->_assignInScope('no', 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['artikel'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
</td>
                        <td>
                            <img src="<?php echo BASE_URL?>assets/image/<?php echo $_smarty_tpl->tpl_vars['data']->value['gambar'];?>
" class="img img-responsive img-thumbnail" width="250">
                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['diterbitkan'] == 1) {?> 
                                <a href="<?php echo BASE_URL?>artikel/<?php echo $_smarty_tpl->tpl_vars['data']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>

                            <?php } else { ?> 
                                <?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>

                            <?php }?>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['kategori'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['diterbitkan'] == 1) {?> 
                                <h4>
                                    <span class="badge badge-success badge-lg">
                                        Terbit
                                    </span> 
                                </h4>
                            <?php } else { ?> 
                                <h4>
                                    <span class="badge badge-warning">
                                        Draft
                                    </span> 
                                </h4>
                            <?php }?>
                        </td>
                        <td>
                            <a href="<?php echo BASE_URL?>admin/master_artikel/ganti_gambar/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" class="btn btn-info btn-xs">
                            <i class="fa fa-image"></i> Ganti Gambar</a>
                            <a href="<?php echo BASE_URL?>admin/master_artikel/edit/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
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
