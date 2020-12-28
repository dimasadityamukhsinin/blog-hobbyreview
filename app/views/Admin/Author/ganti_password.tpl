<div class="container pt-3 mb-5">
    <h4>{$data.title}</h4>
    {Flash::flashdata()}

    <div class="mt-3 p-3">
        <a href="{php}echo BASE_URL{/php}admin/master_author" class="btn btn-info btn-md">
            <i class="fa fa-backward"></i> Kembali
        </a>
        <div class="mt-3">
            <form action="{php}echo BASE_URL{/php}admin/master_author/ganti_password/{$data.author.id}" method="post">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Masukkan Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
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