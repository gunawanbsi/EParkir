<div class="container-fluid">
    <h3> Ubah Data Petugas </h3>
    <?php foreach($petugas as $b) : ?>
                <form method="post" action="<?php echo base_url(). 'admin/ubahPetugas'?>">
                    <div class="form-group mb-2">
                        <label>Nama Petugas</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $b->nama ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Email Petugas</label>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $b->id ?>">
                        <input type="text" name="email" class="form-control" value="<?php echo $b->email ?>">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali </button>
                </form>
        <?php endforeach ?>
</div>
    </div>