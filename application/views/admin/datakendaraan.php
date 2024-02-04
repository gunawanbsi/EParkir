<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Petugas</th>
                        <th scope="col">Jenis Kendaraan</th>
                        <th scope="col">Nomor Plat</th>
                        <th scope="col">Biaya</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $a = 1; 
                foreach ($kendaraan as $k) { ?>
                <tr>
                    <th scope="row"><?= $a++; ?></th>
                    <td><?= $k['lokasi']; ?></td>
                    <td><?= $k['petugas']; ?></td>
                    <td><?= $k['jenis_kendaraan']; ?></td>
                    <td><?= $k['plat_kendaraan']; ?></td>
                    <td><?= $k['biaya']; ?></td>
                    <td>
                        <a href="<?=base_url('admin/hapusKendaraan/') . $k['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$k['plat_kendaraan'];?>?');" class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
