<div class="container pt-3">
    <h4>Selamat Datang, {$smarty.session.pengguna.nama}</h4>

    <div class="mt-3 p-3">
        <div class="row m-0">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-info">
                <div class="inner">
                    <div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;"><b>{$data.artikel}</b></div>
                    <p>Total Artikel</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <a href="{php}echo BASE_URL{/php}author/master_artikel" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>