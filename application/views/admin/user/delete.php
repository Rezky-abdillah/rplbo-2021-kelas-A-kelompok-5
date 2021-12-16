<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete<?=$user->id_user058  ?>">
<i class="far fa-trash-alt">Hapus</i>
                </button>
   <div class="modal fade" id="delete<?=$user->id_user058?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data User - <?= $user->nama058 ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <p class="alert alert-danger"><i class="fas fa-excalation=triangle"></i>Apakah Anda Yakin ingin 
              Menghapus data Ini?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <a href="<?= base_url('admin/user/delete/'.$user->id_user058) ?>" class="btn btn-danger">
              <i class="far fa-trash-alt">Hapus</i></a>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>   
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->