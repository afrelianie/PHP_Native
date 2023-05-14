<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new JenisProduk();
$jenis_produk = $model->JenisProduk();


?>
                    




   <!-- Main row -->
   <div class="row">
          <!-- Left col -->
          <div class="col-md-11">
           
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Jenis Produk</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                         <tr>
                              <th>No</th>
                              <th>Nama </th>
                              <th>Keterangan</th>
                                            
                         </tr>
                    </thead>
                    <tbody>
                         <!-- hapus dari baris 64 sampai 511 -->
                         <!-- dari <tr> ke </tr> -->
                         <?php
                              $no = 1;
                              foreach($jenis_produk as $row){

                         ?>
                         <tr>
                              <td><?= $no ?></td>
                              <td><?= $row['nama']?></td>
                              <td><?= $row['ket']?></td>
                                           
                         </tr>
                         <?php
                              $no++; 
                         } 
                         ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
     </div>


                <?php
        // include_once 'bottom.php';
                ?>