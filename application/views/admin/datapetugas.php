<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#PetugasBaruModal"><i class="fas fa-file-alt"></i> Tambah Petugas</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Petugas</th>
                        <th scope="col">Email Petugas</th>
                        <th scope="col">Jadi Petugas Sejak</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $a = 1; 
                foreach ($petugas as $k) { ?>
                <tr>
                    <th scope="row"><?= $a++; ?></th>
                    <td><?= $k['nama']; ?></td>
                    <td><?= $k['email']; ?></td>
                    <td><?= date ('d F Y', $k['tanggal_input']) ?></td>
                    <td>
                        <a href="<?=base_url('admin/editPetugas/') . $k['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                        <a href="<?=base_url('admin/hapusPetugas/') . $k['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$k['nama'];?>?');" class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
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
<div class="modal fade" id="PetugasBaruModal" tabindex="-1" role="dialog" aria-labelledby="PetugasBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="=PetugasBaruModalLabel">Tambah Data Petugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url(). 'admin/createPetugas'; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-lg" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>" id="nama" name="nama">
                        <?= form_error('nama', '<small class="alert-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-lg" placeholder="Email" value="<?= set_value('email'); ?>" id="email" name="email">
                        <?= form_error('email', '<small class="alert-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="password"  class="form-control form-lg" placeholder="Password" id="password1" name="password1">
                        <?= form_error('password1', '<small class="alert-danger">', '<small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="password"  class="form-control form-lg" placeholder="Ulangi Password" id="password2" name="password2">
                        <?= form_error('password2', '<small class="alert-danger">', '<small>'); ?>
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