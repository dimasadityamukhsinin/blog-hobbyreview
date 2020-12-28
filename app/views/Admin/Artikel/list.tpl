<div class="container pt-3 mb-5">
    <h4>{$data.title}</h4>
    {Flash::flashdata()}

    <div class="mt-3 p-3">
        <a href="{php}echo BASE_URL{/php}admin/master_artikel/tambah" class="btn btn-success btn-md">
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
                    {$no = 1}
                    {foreach $data.artikel as $data}
                    <tr>
                        <td>{$no++}</td>
                        <td>{$data.nama}</td>
                        <td>
                            <img src="{php}echo BASE_URL{/php}assets/image/{$data.gambar}" class="img img-responsive img-thumbnail" width="250">
                        </td>
                        <td>
                            {if $data.diterbitkan eq 1} 
                                <a href="{php}echo BASE_URL{/php}artikel/{$data.slug}">{$data.judul}
                            {else} 
                                {$data.judul}
                            {/if}
                        </td>
                        <td>{$data.kategori}</td>
                        <td>{$data.tanggal}</td>
                        <td>
                            {if $data.diterbitkan eq 1} 
                                <h4>
                                    <span class="badge badge-success badge-lg">
                                        Terbit
                                    </span> 
                                </h4>
                            {else} 
                                <h4>
                                    <span class="badge badge-warning">
                                        Draft
                                    </span> 
                                </h4>
                            {/if}
                        </td>
                        <td>
                            <a href="{php}echo BASE_URL{/php}admin/master_artikel/ganti_gambar/{$data.id}" class="btn btn-info btn-xs">
                            <i class="fa fa-image"></i> Ganti Gambar</a>
                            <a href="{php}echo BASE_URL{/php}admin/master_artikel/edit/{$data.id}" class="btn btn-warning btn-xs">
                            <i class="fa fa-edit"></i> Edit</a>
                            {include file='./delete.tpl'}
                        </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>