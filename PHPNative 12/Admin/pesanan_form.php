<?php

error_reporting(0);

$obj_pesanan = new Pesanan();
$data_pesanan = $obj_pesanan->dataPesanan();

//Edit Data
$idedit = $_REQUEST['idedit'];
$pesan = !empty($idedit) ? $obj_pesanan->getPesanan($idedit) : array() ;


?>


     <!-- jquery validation -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah <small>Pesanan</small></h3>
              </div>
      
              <!-- form start -->
              <form action="pesanan_controller.php" method="POST">
                <div class="card-body">

                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Pesanan</label>
                        <input type="date" id="tanggal" name="tanggal" value="<?= $pesan['tanggal']?>" class="form-control" placeholder="Masukkan Tanggal" require>
                      </div>                   
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Total Pesanan</label>
                        <input type="number" id="total" name="total" value="<?= $pesan['total']?>" class="form-control" placeholder="Total pesanan" require>
                      </div>                   
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Id Pelanggan</label>
                        <input type="number" id="pelanggan_id" name="pelanggan_id" value="<?= $pesan['pelanggan_id']?>" class="form-control" placeholder="Pelanggan" require>
                      </div>                   
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Id Produk</label>
                        <input type="number" id="produk_id" name="produk_id" value="<?= $pesan['produk_id']?>" class="form-control" placeholder="Id Produk" require>
                      </div>                   
                    </div>
                  </div>
              
                </div>  
                <div class="card-footer">
                  <?php

                  if(empty($idedit)){
                  ?>
                    <button name="proses" type="submit" value="simpan" class="btn btn-success">Submit</button>
                  <?php
                  } else {
                  ?>
                    <button name="proses" type="submit" value="ubah" class="btn btn-success">Update</button>
                    <input type="hidden" name="idx" value="<?= $idedit ?>">
                  <?php
                  }
                  ?>

                  <button type="submit" value="batal" name="proses" class="btn btn-primary">Batal</button>
                </div>
              </form>


          </div>
     <!-- /.card -->