<?php
/* Smarty version 3.1.36, created on 2020-12-27 15:35:32
  from '/opt/lampp/htdocs/blog/app/views/Author/Artikel/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe89bb4a15bf4_62209667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52721ebc091d5f6bff771f653ea80a3868577fd7' => 
    array (
      0 => '/opt/lampp/htdocs/blog/app/views/Author/Artikel/edit.tpl',
      1 => 1609079548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe89bb4a15bf4_62209667 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container pt-3 mb-5">
    <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h4>
    <?php echo Flash::flashdata();?>


    <div class="mt-3 p-3">
        <a href="<?php echo BASE_URL?>author/master_artikel" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
        <div class="mt-3">
            <form action="<?php echo BASE_URL?>author/master_artikel/edit/<?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['id'];?>
" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" placeholder="Judul" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['judul'];?>
" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" id="ckeditor" class="form-control" rows="5"><?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['deskripsi'];?>
</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Kategori</label>
                        <select name="kategori" class="form-control">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['kategori'], 'kategori');
$_smarty_tpl->tpl_vars['kategori']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kategori']->value) {
$_smarty_tpl->tpl_vars['kategori']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['kategori']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['artikel']['kategori_id'] == $_smarty_tpl->tpl_vars['kategori']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['kategori']->value['kategori'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['artikel']['tanggal'];?>
" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Diterbitkan</label>
                        <select name="diterbitkan" class="form-control">
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['artikel']['diterbitkan'] == 1) {?>
                                <option value="1" selected>Terbit</option>
                                <option value="0">Draft</option>
                            <?php } else { ?>
                                <option value="1">Terbit</option>
                                <option value="0" selected>Draft</option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo BASE_URL?>assets/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    ClassicEditor.defaultConfig = {
      toolbar: {
        items: [
          'heading',
          '|',
          'bold',
          'italic',
          '|',
          'bulletedList',
          'numberedList',
          '|',
          'insertTable',
          '|',
          'undo',
          'redo'
        ]
      },
      image: {
        toolbar: [
          'imageStyle:full',
          'imageStyle:side',
          '|',
          'imageTextAlternative'
        ]
      },
      table: {
        contentToolbar: [ 'tableColumn', 'tableRow', 'mergeTableCells' ]
      },
      language: 'en'
    };
    ClassicEditor
    .create( document.querySelector( '#ckeditor' ) );
<?php echo '</script'; ?>
><?php }
}
