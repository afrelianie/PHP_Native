<?php

$id = $_REQUEST['id'];
$model = new Produk();
$produk = $model->getProduk($id);


?>



<div class="row justify-content-center">
        <div class="col-md-11">
            
            <!-- About Me Box 1 -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">DETAIL PRODUK</h3>
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
                                <strong><i class="fas fa-table"></i> Nama Produk</strong>
                                <p class="text-muted"><?= $produk['nama'] ?></p>
                                <hr>

                                <strong><i class="fas fa-cog"></i> Kode Produk</strong>
                                <p class="text-muted"><?= $produk['kode'] ?></p>
                                <hr>

                                <strong><i class="fas fa-table"></i> Jenis Produk</strong>
                                <p class="text-muted"><?= $produk['jenis_produk_id'] ?></p>
                                <hr>

                                <strong><i class="far fa-bell"></i> Stok</strong>
                                <p class="text-muted"><?= $produk['stok'] ?></p>
                                <hr>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong><i class="far fa-bell"></i> Harga Beli</strong>
                                <p class="text-muted"><?= $produk['harga_beli'] ?></p>
                                <hr>

                                <strong><i class="fas fa-file-alt mr-1"></i> Harga Jual</strong>
                                <p class="text-muted"><?= $produk['harga_jual'] ?></p>
                                <hr>

                                <strong><i class="fas fa-file-alt mr-1"></i> Minimal Stok</strong>
                                <p class="text-muted"><?= $produk['min_stok'] ?></p>
                                <hr>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
     </div>

