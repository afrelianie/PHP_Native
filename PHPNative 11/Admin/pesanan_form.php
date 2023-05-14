<?php

$obj_pesanan = new Pesanan();
$data_pesanan = $obj_pesanan->dataPesanan();

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
                        <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Masukkan Tanggal" require>
                      </div>                   
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Total Pesanan</label>
                        <input type="number" id="total" name="total" class="form-control" placeholder="Total pesanan" require>
                      </div>                   
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Id Pelanggan</label>
                        <input type="number" id="pelanggan_id" name="pelanggan_id" class="form-control" placeholder="Pelanggan" require>
                      </div>                   
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Id Produk</label>
                        <input type="number" id="produk_id" name="produk_id" class="form-control" placeholder="Id Produk" require>
                      </div>                   
                    </div>
                  </div>
              
                </div>  
                <div class="card-footer">
                  <button type="submit" value="simpan" name="proses" class="btn btn-primary">Tambah</button>
                </div>
              </form>


          </div>
     <!-- /.card -->