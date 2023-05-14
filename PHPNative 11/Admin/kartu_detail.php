<?php

$id = $_REQUEST['id'];
$model = new Kartu();
$kartu = $model->getKartu($id);


?>


     <div class="row justify-content-center">
        <div class="col-md-11">
            
            <!-- About Me Box 1 -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">DETAIL KARTU</h3>
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
                                <strong><i class="fas fa-cog"></i> Kode Kartu</strong>
                                <p class="text-muted"><?= $kartu['kode'] ?></p>
                                <hr>

                                <strong><i class="fas fa-table"></i> Nama Kartu</strong>
                                <p class="text-muted"><?= $kartu['nama'] ?></p>
                                <hr>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong><i class="far fa-bell"></i> Diskon</strong>
                                <p class="text-muted"><?= $kartu['diskon'] ?></p>
                                <hr>

                                <strong><i class="fas fa-file-alt mr-1"></i> Iuran</strong>
                                <p class="text-muted"><?= $kartu['iuran'] ?></p>
                                <hr>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
     </div>

