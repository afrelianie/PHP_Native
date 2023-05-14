<?php

//  include_once 'top.php';
//  include_once 'menu.php';

$model = new Pesanan();
$data_pesanan = $model->dataPesanan();



?> 
      
     <!-- Main row -->
     <div class="row">
          <!-- Left col -->
          <div class="col-md-11">
           
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Tabel Pesanan</h3>

                <div class="card-tools">
                  <a href="index.php?url=pesanan_form" class="btn btn-sm btn-info float-right">Tambah</a>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-2">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Action</th>
                      <th>Tanggal</th>
                      <th>Total</th>
                      <th>Pelanggan</th>
                      <th>Produk</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php
                        $no = 1;
                            foreach($data_pesanan as $row){
                              ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td>
                                        <form action="pesanan_controller.php" method="POST">
                                          <a class="btn btn-info btn-sm" href="index.php?url=pesanan_detail&id=<?= $row ['id'] ?> ">Detail</a>
                                          <a class="btn btn-warning btn-sm" href="">Ubah</a>
                                          <a class="btn btn-danger btn-sm" href="">Hapus</a>

                                          <input type="hidden" name="idx" value="<?= $row['id']?> ">
                                        </form>
                                    </td>
                                    <td><?= $row['tanggal']?></td>
                                    <td><?= $row['total']?></td>
                                    <td><?= $row['pelanggan_id']?></td>
                                    <td><?= $row['produk_id']?></td>
                              
                                </tr>
                            <?php
                                $no++; } 
                            ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
     </div>





