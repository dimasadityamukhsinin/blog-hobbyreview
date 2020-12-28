<div class="container pt-3 mb-5">
    <h4>{$data.title}</h4>
    {Flash::flashdata()}

    <div class="mt-3 p-3">
        <a href="{php}echo BASE_URL{/php}admin/master_artikel" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
        <div class="mt-3">
            <form action="{php}echo BASE_URL{/php}admin/master_artikel/edit/{$data.artikel.id}" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" placeholder="Judul" value="{$data.artikel.judul}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" id="ckeditor" class="form-control" rows="5">{$data.artikel.deskripsi}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Kategori</label>
                        <select name="kategori" class="form-control">
                        {foreach $data.kategori as $kategori}
                            <option value="{$kategori.id}" {if $data.artikel.kategori_id eq $kategori.id} selected{/if}>{$kategori.kategori}</option>
                        {/foreach}
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" value="{$data.artikel.tanggal}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Diterbitkan</label>
                        <select name="diterbitkan" class="form-control">
                            {if $data.artikel.diterbitkan eq 1}
                                <option value="1" selected>Terbit</option>
                                <option value="0">Draft</option>
                            {else}
                                <option value="1">Terbit</option>
                                <option value="0" selected>Draft</option>
                            {/if}
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
<script src="{php}echo BASE_URL{/php}assets/ckeditor/ckeditor.js"></script>
<script>
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
</script>