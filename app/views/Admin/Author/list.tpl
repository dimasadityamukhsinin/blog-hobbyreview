<div class="container pt-3 mb-5">
    <h4>{$data.title}</h4>
    {Flash::flashdata()}

    <div class="mt-3 p-3">
        <a href="{php}echo BASE_URL{/php}admin/master_author/tambah" class="btn btn-success btn-md">
            <i class="fa fa-plus"></i> Tambah Baru
        </a>
        <div class="mt-3">
            <table class="table table-bordered" id="example1">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>ROLE</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    {$no = 1}
                    {foreach $data.author as $data}
                    <tr>
                        <td>{$no++}</td>
                        <td>{$data.nama}</td>
                        <td>{$data.email}</td>
                        <td>{$data.role}</td>
                        <td>
                            <a href="{php}echo BASE_URL{/php}admin/master_author/ganti_password/{$data.id}" class="btn btn-info btn-xs">
                            <i class="fa fa-key"></i> Ganti Password</a>
                            <a href="{php}echo BASE_URL{/php}admin/master_author/edit/{$data.id}" class="btn btn-warning btn-xs">
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