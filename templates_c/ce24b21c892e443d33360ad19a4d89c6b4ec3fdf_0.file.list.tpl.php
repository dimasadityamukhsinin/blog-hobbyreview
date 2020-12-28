<?php
/* Smarty version 3.1.36, created on 2020-12-26 15:08:07
  from '/opt/lampp/htdocs/blog/app/views/Admin/Dashboard/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe743c7542c43_28558094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce24b21c892e443d33360ad19a4d89c6b4ec3fdf' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/Dashboard/list.tpl',
      1 => 1608991686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe743c7542c43_28558094 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3">
    <h4>Selamat Datang, <?php echo $_SESSION['pengguna']['nama'];?>
</h4>

    <div class="mt-3 p-3">
        <div class="row m-0">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-success">
                <div class="inner">
                    <div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;"><b><?php echo $_smarty_tpl->tpl_vars['data']->value['admin'];?>
</b></div>
                    <p>Total Admin</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo BASE_URL?>admin/master_admin" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-primary">
                <div class="inner">
                    <div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;"><b><?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
</b></div>
                    <p>Total Author</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo BASE_URL?>admin/master_author" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-info">
                <div class="inner">
                    <div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;"><b><?php echo $_smarty_tpl->tpl_vars['data']->value['artikel'];?>
</b></div>
                    <p>Total Artikel</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <a href="<?php echo BASE_URL?>admin/master_artikel" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-danger">
                <div class="inner">
                    <div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;"><b><?php echo $_smarty_tpl->tpl_vars['data']->value['kategori'];?>
</b></div>
                    <p>Total Kategori</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <a href="<?php echo BASE_URL?>admin/master_kategori" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
