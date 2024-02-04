<section class="bg vh-100">
<div class="container" style="padding-top: 8rem;">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1 style="color:black">Kendaraan</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <?php foreach ($lokasi as $d) : ?>
                            <form method="post" action="<?php echo base_url() ?>user/prosesKendaraan">
                                <div class="row mb-3">
                                    <label class="form-label">Jenis Kendaraan</label>
                                    <select class="form-control" name="jenis_kendaraan" id="jenis_kendaraan" placeholder="Jenis Kendaraan">
                                        <option>Motor</option>
                                        <option>Mobil</option>
                                    </select>
                                </div>
                                <?= form_error('jenis_kendaraan', '<small class="danger-text" role="alert">', '</small>'); ?>
                                <div class="row mb-3">
                                    <label class="form-label">Nomor Plat Kendaraan</label>
                                    <input type="text" class="form-control" name="plat_kendaraan" id="plat_kendaraan" placeholder="Nomor Plat Kendaraan">
                                </div>
                                <?= form_error('plat_kendaraan', '<small class="danger-text" role="alert">', '</small>'); ?>
                                <div class="row mb-3">
                                    <label class="form-label">Biaya Parkir</label>
                                    <input type="text" class="form-control" name="biaya" placeholder="Biaya Parkir">
                                    <input type="hidden" class="form-control" name="lokasi" value="<?php echo $d->lokasi; ?>">
                                    <input type="hidden" class="form-control" name="petugas" value="<?= $user['nama']; ?>">
                                </div>
                                <?= form_error('biaya', '<small class="danger-text" role="alert">', '</small>'); ?>
                                <button type="submit" class="btn btn-primary"> Proses </button>
                            </form>
                            <?php endforeach ?>
            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>