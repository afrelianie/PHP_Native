<?php

$id = $_REQUEST['id'];
$model = new Pelanggan();
$pelanggan = $model->getPelanggan($id);


?>



<div class="row justify-content-center">
        <div class="col-md-11">
            
            <!-- About Me Box 1 -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">DETAIL PELANGGAN</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong><i class="fas fa-table"></i> Nama Pelanggan</strong>
                                <p class="text-muted"><?= $pelanggan['nama'] ?></p>
                                <hr>

                                <strong><i class="fas fa-cog"></i> Kode Pelanggan</strong>
                                <p class="text-muted"><?= $pelanggan['kode'] ?></p>
                                <hr>

                                <strong><i class="far fa-bell"></i> Email</strong>
                                <p class="text-muted"><?= $pelanggan['email'] ?></p>
                                <hr>

                                <strong><i class="fas fa-user"></i> Jenis Kelamin</strong>
                                <p class="text-muted"><?= $pelanggan['jk'] ?></p>
                                <hr>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong><i class="far fa-bell"></i> Tanggal Lahir</strong>
                                <p class="text-muted"><?= $pelanggan['tgl_lahir'] ?></p>
                                <hr>

                                <strong><i class="fas fa-file-alt mr-1"></i> Tempat Lahir</strong>
                                <p class="text-muted"><?= $pelanggan['tmp_lahir'] ?></p>
                                <hr>

                                <strong><i class="fas fa-file-alt mr-1"></i> Id Kartu</strong>
                                <p class="text-muted"><?= $pelanggan['kartu_id'] ?></p>
                                <hr>

                                <strong><i class="fas fa-file-alt mr-1"></i> Alamat</strong>
                                <p class="text-muted"><?= $pelanggan['alamat'] ?></p>
                                <hr>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
     </div>

