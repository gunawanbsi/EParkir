<!-- Begin Page Content -->
<div class="container-fluid">
 <!-- row ux-->
 <div class="row">
    <div class="col-xl-5 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2 bg-primary">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Petugas</div>
                        <div class="h1 mb-0 font-weight-bold text-white"><?=$this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/petugas'); ?>"><i class="fas fa-users fa-3x text-danger"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-5 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Lokasi</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?=$this->ModelLokasi->cekData()->num_rows(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/petugas'); ?>"><i class="fas fa-book-medical fa-3x text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
        <!-- end row ux-->
        <!-- row table-->
            <div class="table-responsive table-bordered ml-auto mr-auto mt-2">
                <div class="page-header">
                    <span class="fas fa-users text-primary mt-2 "> Data Kendaraan</span>
                    <a class="text-danger" href="<?php echo base_url('admin/kendaraan'); ?>"><i class="fas fa-search mt-2 float-right">Tampilkan</i></a>
                </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Lokasi</th>
                            <th>Petugas</th>
                            <th>Jenis Kendaraan</th>
                            <th>Plat Kendaraan</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($kendaraan as $a) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $a['lokasi']; ?></td>
                            <td><?= $a['petugas']; ?></td>
                            <td><?= $a['jenis_kendaraan']; ?></td>
                            <td><?= $a['plat_kendaraan']; ?></td>
                            <td><?= $a['biaya']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
    </div>
<!-- end of row table-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
                        </div>