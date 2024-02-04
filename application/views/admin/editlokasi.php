<div class="container-fluid">
    <h3> Ubah Data Lokasi </h3>
    <?php foreach($lokasi as $b) : ?>
                <form method="post" action="<?php echo base_url(). 'admin/ubahLokasi'?>">
                    <div class="form-group mb-2">
                        <label>Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" value="<?php echo $b->lokasi ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Kapasitas</label>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $b->id ?>">
                        <input type="text" name="kapasitas" class="form-control" value="<?php echo $b->kapasitas ?>">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali </button>
                </form>
        <?php endforeach ?>
</div>
    </div>