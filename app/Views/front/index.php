<?= $this->extend('layout/template') ?>

<?= $this->section('main'); ?>

<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 90vh;">

        <div class="col-lg-4">
            <?php if (session()->getFlashdata('flash')) : ?>
                <div class="alert bg-danger-subtle border-0 p-0 px-2 py-2">
                    <?= session()->getFlashdata('flash') ?>
                </div>
            <?php endif ?>
            <div class="card shadow-sm border-0 p-2 my-2">
                <form action="/front/login" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group my-3">
                        <label for="">Username</label>
                        <input type="text" class="form-control <?= (validation_errors()) ? 'is-invalid' : '' ?>" name="username" placeholder="Username">
                        <div class="invalid-feedback">
                            <?= validation_show_error('username') ?>
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <label for="">Password</label>
                        <input type="password" class="form-control  <?= (validation_errors()) ? 'is-invalid' : '' ?>" name=" password" placeholder="Password">
                        <div class="invalid-feedback">
                            <?= validation_show_error('password') ?>
                        </div>
                    </div>
                    <div class="form-group my-2">
                        <button class="btn w-100 p-2 btn-primary" name="submit" type="submit">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>