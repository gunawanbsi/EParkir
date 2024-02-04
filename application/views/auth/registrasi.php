<section class="bg">
    <section class="vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="<?php echo base_url()?>assets/img/icon-eparkir.png" class="img-fluid" alt="Sample image" style="margin-left:10rem; width:50%;">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <h2 class="mb-3 text-white"> Registrasi </h2>
            <?= $this->session->flashdata('pesan'); ?>
            <form method="post" action="<?= base_url('auth/registrasi'); ?>">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" class="form-control form-lg" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>" id="nama" name="nama">
                <?= form_error('nama', '<small class="alert-danger">', '</small>'); ?>
            </div>
            <div class="form-outline mb-4">
                    <input type="text" class="form-control form-lg" placeholder="Email" value="<?= set_value('email'); ?>" id="email" name="email">
                    <?= form_error('email', '<small class="alert-danger">', '</small>'); ?>
            </div>

            <div class="form-outline mb-3">
                    <input type="password"  class="form-control form-lg" placeholder="Password" id="password1" name="password1">
                    <?= form_error('password1', '<small class="alert-danger">', '<small>'); ?>
            </div>

            <div class="form-outline mb-3">
                    <input type="password"  class="form-control form-lg" placeholder="Ulangi Password" id="password2" name="password2">
                    <?= form_error('password2', '<small class="alert-danger">', '<small>'); ?>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Daftar">
            </div>
            <p class="small fw-bold mt-5 pt-1 mb-0 text-white">Sudah Punya Akun? <a href="<?php echo base_url().'auth'?>" class="btn btn-primary">Silahkan Login</a></p>
            </form>
        </div>
        </div>
    </div>
    </section>
</section>