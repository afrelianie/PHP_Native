<?php

error_reporting(0);

$obj_kartu = new Kartu();
$data_kartu = $obj_kartu->dataKartu();

//Edit Data
$idedit = $_REQUEST['idedit'];
$kat = !empty($idedit) ? $obj_kartu->getKartu($idedit) : array() ;


?>


     <!-- jquery validation -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah <small>Kartu</small></h3>
              </div>
      
              <!-- form start -->
              <form action="kartu_controller.php" method="POST">
                <div class="card-body">

                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kode Kartu</label>
                        <input type="text" id="kode" name="kode" value="<?= $kat['kode']?>" class="form-control" placeholder="Masukkan Kode" require>
                      </div>                   
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kartu</label>
                        <input type="text" id="nama" name="nama" value="<?= $kat['nama']?>" class="form-control" placeholder="Jenis Kartu" require>
                      </div>                   
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Diskon</label>
                        <input type="number" id="diskon" name="diskon" value="<?= $kat['diskon']?>" class="form-control" placeholder="Diskon" require>
                      </div>                   
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Iuran</label>
                        <input type="number" id="iuran" name="iuran" value="<?= $kat['iuran']?>" class="form-control" placeholder="Jumlah Iuran" require>
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
    