<?php

//  include_once 'top.php';

//  include_once 'menu.php';

$model = new Produk();
$data_produk = $model->dataProduk();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }


$sesi = $_SESSION['MEMBER'];
if(isset($sesi)){


?> 
      
     <!-- Main row -->
     <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
           
            <!-- TABLE: LATEST ORDERS -->

            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Data Produk</h3>

                <div class="card-tools">
                  <a href="index.php?url=produk_form" class="btn btn-sm btn-info float-right">Tambah</a>
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
                      <th>ID Produk</th>
                      <th>Nama Produk</th>
                      <th>Harga Beli</th>
                      <th>Harga Jual</th>
                      <th>Stok</th>
                      <th>Minimal Stok</th>
                      <th>Jenis Produk</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php
                        $no = 1;
                            foreach($data_produk as $row){
                              ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td>
                                        <form action="produk_controller.php" method="POST">
                                          <a class="btn btn-info btn-sm" href="index.php?url=product_detail&id=<?= $row ['id'] ?> ">Detail</a>
                                          <a class="btn btn-warning btn-sm" href="index.php?url=produk_form&idedit=<?= $row ['id']?>">Ubah</a>
                                          
                                          <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" 
                                            onclick="return confirm('Anda yakin akan dihapus?')">Hapus</button>

                                          <input type="hidden" name="idx" value="<?= $row['id']?> ">
                                        </form>
                                    </td>
                                    <td><?= $row['kode']?></td>
                                    <td><?= $row['nama']?></td>
                                    <td><?= $row['harga_beli']?></td>
                                    <td><?= $row['harga_jual']?></td>
                                    <td><?= $row['stok']?></td>
                                    <td><?= $row['min_stok']?></td>
                                    <td><?= $row['jenis_produk_id']?></td>
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
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
     </div>


    <?php

      } else {
        echo '<script> alert("anda tidak boleh masuk");history.back();</script>';
      }

    ?>