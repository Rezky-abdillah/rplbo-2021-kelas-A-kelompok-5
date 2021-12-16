 <button type="button" class="btn btn-success btn-xs" data-toggle="modal" 
 data-target="#detail<?=$user->id_user058  ?>"><i class="fa fa-eye"> Detail</i></button>
      <div class="modal fade" id="detail<?=$user->id_user058  ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header badge-primary">
              <h4 class="modal-title">Detail Data user <strong><?= $user->nama058?></strong></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-bordered table-striped">
                <tr>
                  <th>Nama</th>
                  <td><?= $user->nama058 ?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><?= $user->email058 ?></td>
                </tr>
                <tr>
                  <th>Username</th>
                  <td><?= $user->username058 ?></td>
                </tr>
                <tr>
                  <th>Level Hak Akses </th>
                  <td><?= $user->akses_level058 ?></td>
                </tr>
                <tr>
                  <th>Keterangan</th>
                  <td><?= $user->keterangan058 ?></td>
                </tr>

              </table>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-success" data-dismiss="modal">
                <i class="fa fa-times"></i>Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>