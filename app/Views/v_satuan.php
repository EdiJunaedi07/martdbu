<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $subjudul ?></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-data"><i class="fas fa-plus"></i> Add Data
                    </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                 <thead> 
                    <tr class="text-center">
                        <th width="50px">No</th>
                        <th>Satuan</th>
                        <th width="100px">Aksi</th>
                    </tr>
                  </thead> 
                  <tbody>
                    <?php $no = 1;
                    foreach ($satuan as $key => $value) { ?>
                        <tr>  
                          <td><?= $no++ ?></td>
                          <td><?= $value['nama_satuan'] ?></td>
                          <td>
                            <button class="btn btn-warning btn-sm btn-flat"> <i class="fas fa-pencil-alt"></i></button>
                            <button class="btn btn-denger btn-sm btn-flat"> <i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        <!-- Modall Add Data -->
          <div class="modal fade" id="add-data">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"> Add Data <?= $subjudul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo from_open('Satuan/InsertData') ?>
            <div class="modal-body">

                <div class="from-group">
                    <label for="">Nama Satuan</label>
                    <input name="nama_satuan" class="from-control" placeholder="Satuan" required>
                </div>
                
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-flat">Save changes</button>
            </div>
            <?php echo from_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->