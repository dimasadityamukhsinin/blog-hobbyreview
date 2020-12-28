<?php
/* Smarty version 3.1.36, created on 2020-12-28 05:40:19
  from '/opt/lampp/htdocs/blog/app/views/Author/Dashboard/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe961b3263dd4_18812879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e509eae8a712f83107fe650d794b062e797139cb' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Author/Dashboard/list.tpl',
      1 => 1609130190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe961b3263dd4_18812879 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3">
    <h4>Selamat Datang, <?php echo $_SESSION['pengguna']['nama'];?>
</h4>

    <div class="mt-3 p-3">
        <div class="row m-0">
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
                <a href="<?php echo BASE_URL?>author/master_artikel" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
