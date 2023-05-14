<?php

$obj_produk = new Produk();
$data_produk = $obj_produk->dataProduk();

?>


     <!-- jquery validation -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah <small>Produk</small></h3>
              </div>
      
              <!-- form start -->
              <form action="produk_controller.php" method="POST">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Produk</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Produk" require>
                  </div>

                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kode Produk</label>
                        <input type="text" id="kode" name="kode" class="form-control" placeholder="Masukkan Kode" require>
                      </div>                   
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Harga Beli</label>
                        <input type="number" id="harga_beli" name="harga_beli" class="form-control" placeholder="Jumlah Harga" require>
                      </div>                   
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Harga Jual</label>
                        <input type="number" id="harga_jual" name="harga_jual" class="form-control" placeholder="Harga Jual" require>
                      </div>                   
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Stok Produk</label>
                        <input type="number" id="stok" name="stok" class="form-control" placeholder="Stok" require>
                      </div>                   
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Minimal Stok</label>
                        <input type="number" id="min_stok" name="min_stok" class="form-control" placeholder="Minimal Stok" require>
                      </div>                   
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Produk</label>
                        <input type="text" id="jenis_produk_id" name="jenis_produk_id" class="form-control" placeholder="Jenis Produk" require>
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
    