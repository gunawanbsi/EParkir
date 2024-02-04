<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#LokasiBaruModal"><i class="fas fa-file-alt"></i> Tambah Lokasi</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Kapasitas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $a = 1; 
                foreach ($lokasi as $k) { ?>
                <tr>
                    <th scope="row"><?= $a++; ?></th>
                    <td><?= $k['lokasi']; ?></td>
                    <td><?= $k['kapasitas']; ?></td>
                    <td>
                        <a href="<?=base_url('admin/editLokasi/') . $k['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                        <a href="<?=base_url('admin/hapusLokasi/') . $k['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$k['lokasi'];?>?');" class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Modal Tambah kategori baru-->
<div class="modal fade" id="LokasiBaruModal" tabindex="-1" role="dialog" aria-labelledby="LokasiBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="=LokasiBaruModalLabel">Tambah Data Lokasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url(). 'admin/createLokasi'; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-lg" placeholder="Lokasi" value="<?= set_value('lokasi'); ?>" id="lokasi" name="lokasi">
                        <?= form_error('lokasi', '<small class="alert-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-lg" placeholder="Kapasitas" value="<?= set_value('kapasitas'); ?>" id="kapasitas" name="kapasitas">
                        <?= form_error('kapasitas', '<small class="alert-danger">', '</small>'); ?>
                    </div>
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
                </div>
<!-- End of Modal Tambah Mneu -->