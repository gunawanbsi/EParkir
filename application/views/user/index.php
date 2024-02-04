<section class="bg vh-100">
      <div class="row">
    <center><h1 class="text-light mt-5">Welcome to E-Parkir</h1></center>
<div class="row mt-5 ms-2">

  <div class="col-sm-4">
    <div class="card">
        <center><br><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/user.png" style="width: 150px;" alt="Card image cap">
        </center><div class="card-body">
        <h5 class="card-title"><center>Login</center></h5>
        <hr>
        <p class="card-text">Tahap pertama adalah petugas parkir melakukan login</p>
        </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
        <br>
        <center><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/lokasi.png" style="width: 150px;" alt="Card image cap">
      </center><div class="card-body">
        <h5 class="card-title"><center>Pilih Lokasi</center></h5>
        <hr>
        <p class="card-text">Setelah berhasil login, maka selanjutnya petugas memilih lokasi parkir yang sedang ditugaskan.</p>
        </div>
    </div>
  </div>


  <div class="col-sm-4">
    <div class="card">
        <br><center><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/tarif.png" style="width: 150px;" alt="Card image cap">
      </center><div class="card-body">
        <h5 class="card-title"><center>Kendaraan Masuk</center></h5>
        <hr>
        <p class="card-text">Petugas mulai bekerja dan memasukan data kendaraan beserta biaya parkir.</p>
        </div>
    </div>
  </div>

</div>

<div class="row mt-5">
<center><a href="<?php echo base_url('user/lokasi'); ?>" class="btn btn-primary"><i class="fa fa-map-marker"></i> Pilih Lokasi</a>
</center>
</div>
</section>