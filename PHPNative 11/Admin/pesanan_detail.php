<?php

$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);


?>


     <div class="row justify-content-center">
        <div class="col-md-11">
            
            <!-- About Me Box 1 -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">DETAIL PESANAN</h3>
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
                                <strong><i class="fas fa-cog"></i> Tanggal Pesanan</strong>
                                <p class="text-muted"><?= $pesanan['tanggal'] ?></p>
                                <hr>

                                <strong><i class="fas fa-table"></i> Total pesanan</strong>
                                <p class="text-muted"><?= $pesanan['total'] ?></p>
                                <hr>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong><i class="far fa-bell"></i> Pelanggan</strong>
                                <p class="text-muted"><?= $pesanan['pelanggan_id'] ?></p>
                                <hr>

                                <strong><i class="fas fa-file-alt mr-1"></i> Produk</strong>
                                <p class="text-muted"><?= $pesanan['produk_id'] ?></p>
                                <hr>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
     </div>

