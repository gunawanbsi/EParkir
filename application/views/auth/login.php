<section class="bg">
    <section class="vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="<?php echo base_url()?>assets/img/icon-eparkir.png" class="img-fluid" alt="Sample image" style="margin-left:10rem; width:50%;">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <h2 class="mb-3 text-white"> Login </h2>
            <?= $this->session->flashdata('pesan'); ?>
            <form method="post" action="<?= base_url('auth'); ?>">
            <!-- Email input -->
            <div class="form-outline mb-4">
                    <input type="text" class="form-control form-lg" placeholder="Email" value="<?= set_value('email'); ?>" id="email" name="email">
                    <?= form_error('email', '<small class="alert-danger">', '</small>'); ?>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                    <input type="password"  class="form-control form-lg" placeholder="Password" id="password" name="password">
                    <?= form_error('password', '<small class="alert-danger">', '<small>'); ?>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->

            <div class="text-center text-lg-start mt-4 pt-2">
                <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Login">
            </div>

            </form>
        </div>
        </div>
    </div>
    </section>
</section>