<div class="container pt-3 mb-5">
    <h4>{$data.title}</h4>
    {Flash::flashdata()}

    <div class="mt-3 p-3">
        <a href="{php}echo BASE_URL{/php}admin/master_kategori" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
        <div class="mt-3">
            <form action="{php}echo BASE_URL{/php}admin/master_kategori/tambah" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nama Kategori</label>
                        <input type="text" name="kategori" class="form-control" placeholder="Nama Kategori" required>
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