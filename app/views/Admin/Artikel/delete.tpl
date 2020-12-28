<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-{$data.id}">
    <i class="fa fa-trash"></i> Hapus
</button>

<div class="example-modal">
    <div class="modal" id="delete-{$data.id}">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="alert alert-warning">
                <h4><i class="icon fa fa-ban"></i> Peringatan!</h4>
                Yakin ingin menghapus data ini? Data yang sudah dihapus tidak dapat dikembalikan
              </div>.
          </div>
          <div class="modal-footer">
            <a href="{php}echo BASE_URL{/php}admin/master_artikel/delete/{$data.id}" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Ya, Hapus Data Ini</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- /.example-modal -->