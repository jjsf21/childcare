  <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <h1></h1>

                  <a href="<?= base_url('/home/tambah_pembayaran/')?>"><button class="btn btn-success"><i class="fa fa-plus"></i>+tambah</button></a>

                  <h1></h1>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>

                      <th>No</th>
                      <th>Nominal Pembayaran</th>
                      <th>Tgl Pembayaran</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>


                    <?php
                    $no=1;
                    foreach ($ferdi as $jes){
                      ?>
                      <tr>
                        <th><?php echo $no++ ?></th>
                        <td><?php echo $jes->nominal?></td>
                        <td><?php echo $jes->tgl_pembayaran?></td>

                        <td>
                          <a href="<?= base_url('/home/edit_pembayaran/'.$jes->id_pembayaran)?>"><button class="btn btn-warning"><i class="fa fa-edit"></i>Edit</button></a>
                          <a href="<?= base_url('/home/hapus_pembayaran/'.$jes->id_pembayaran)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</button></a>
                        </td>
                      </tr>


                    <?php }?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
