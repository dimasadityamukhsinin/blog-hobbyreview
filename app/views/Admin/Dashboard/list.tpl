<div class="container pt-3">
    <h4>Selamat Datang, {$smarty.session.pengguna.nama}</h4>

    <div class="mt-3 p-3">
        <div class="row m-0">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-success">
                <div class="inner">
                    <div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;"><b>{$data.admin}</b></div>
                    <p>Total Admin</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{php}echo BASE_URL{/php}admin/master_admin" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-primary">
                <div class="inner">
                    <div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;"><b>{$data.author}</b></div>
                    <p>Total Author</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{php}echo BASE_URL{/php}admin/master_author" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-info">
                <div class="inner">
                    <div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;"><b>{$data.artikel}</b></div>
                    <p>Total Artikel</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <a href="{php}echo BASE_URL{/php}admin/master_artikel" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-danger">
                <div class="inner">
                    <div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;"><b>{$data.kategori}</b></div>
                    <p>Total Kategori</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <a href="{php}echo BASE_URL{/php}admin/master_kategori" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>