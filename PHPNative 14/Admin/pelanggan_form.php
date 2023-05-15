<?php

error_reporting(0);

$obj_pelanggan = new Pelanggan();
$data_pelanggan = $obj_pelanggan->dataPelanggan();

//Edit Data
$idedit = $_REQUEST['idedit'];
$pelan = !empty($idedit) ? $obj_pelanggan->getPelanggan($idedit) : array() ;


?>


     <!-- jquery validation -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah <small>Pelanggan</small></h3>
              </div>
      
              <!-- form start -->
              <form action="pelanggan_controller.php" method="POST">
                <div class="card-body">

                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                         <label for="exampleInputName">Nama Pelanggan</label>
                         <input type="text" id="nama" name="nama" value="<?= $pelan['nama']?>" class="form-control" placeholder="Nama Pelanggan" require>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInput">Id Kartu</label>
                        <input type="text" id="kartu_id" name="kartu_id" value="<?= $pelan['kartu_id']?>" class="form-control" placeholder="Masukkan Id Kartu" require>
                      </div>                   
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInput">Kode Pelanggan</label>
                        <input type="text" id="kode" name="kode" value="<?= $pelan['kode']?>" class="form-control" placeholder="Masukkan Kode" require>
                      </div>                   
                    </div>
                    <div class="col-6">
                         <div class="form-group">
                              <label>Jenis Kelamin</label>
                                <select name="jk" id="jk" class="form-control">
                                    <option value="<?= $pelan['jk']?>" selected disabled><?= $pelan['jk']?></option>
                                    <option value="P">Perempuan</option>
                                    <option value="L">Laki-laki</option>
                                </select>
                         </div>                  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInput">Tempat Lahir</label>
                        <input type="text" id="tmp_lahir" name="tmp_lahir" value="<?= $pelan['tmp_lahir']?>" class="form-control" placeholder="Tempat Lahir" require>
                      </div>                   
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInput">Tanggal Lahir</label>
                        <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?= $pelan['tgl_lahir']?>" class="form-control" placeholder="Tanggal Lahir" require>
                      </div>                   
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" id="email" name="email" value="<?= $pelan['email']?>" class="form-control" placeholder="Email" require>
                      </div>                   
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInput">Alamat</label>
                        <input type="text" id="alamat" name="alamat" value="<?= $pelan['alamat']?>" class="form-control" placeholder="Alamat" require>
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
    