<?php
/* Smarty version 3.1.36, created on 2020-12-27 12:07:36
  from '/opt/lampp/htdocs/blog/app/views/Admin/layout/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe86af8f35c78_52330342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd6e2a4a6dc0a46e2d7b0d57f1963274c1b1862d' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Admin/layout/footer.tpl',
      1 => 1609067241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe86af8f35c78_52330342 (Smarty_Internal_Template $_smarty_tpl) {
?>    
            </div>
        </div>
        <footer class="container-fluid p-2">
            <span>Copyright © 2020 Noansa | Powered by Noansa</span>
        </footer>
    </nav>
</body>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/1a788d73ae.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('#example1').DataTable();
    } );
<?php echo '</script'; ?>
>
</html><?php }
}
