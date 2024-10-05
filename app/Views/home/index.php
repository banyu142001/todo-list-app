<!-- content -->
<?= $this->extend('layout/template') ?>
<?= $this->section('main'); ?>
<div class="container">
    <div class="row justify-content-center mt-3 my-2">
        <div class="col-lg-8 order-lg-1 order-2">
            <img src="/assets/img/banner.png" class="img-fluid rounded shadow-sm">
            <h5 class="my-2">Todo List Belajar Bahasa Pemrograman <span class="bg-warning rounded text-white px-2">JavaScript</span> Dasar.</h5>

            <div class="row mt-4">
                <div class="col-lg-6 ">
                    <h6 class="text-muted">Pelajar </h6>
                    <h4>Bayu Gurium</h>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-muted">Sumber Belajar <span class="badge text-bg-success">Online / Youtube</span></h6>
                    <h4>WEB Programming UNPAS</h4>
                    <small>by Sandhika Galih 🚀 jangan lupa titik koma ;</small>
                </div>
            </div>
        </div>

        <div class="col-lg-2 order-lg-2 order-1">
            <div class="card shadow-sm border-0 p-2 my-2">
                <div class="card-header bg-white">
                    Menu
                </div>
                <div class="card-body">
                    <a href="/" class="d-block text-decoration-none my-2">Home</a>
                    <a href="/materi" class="d-block text-decoration-none my-2">List Belajar</a>
                    <a href="/front/logout" class="d-block text-decoration-none my-2 text-danger">Logout</a>

                </div>
            </div>
        </div>

    </div>

    <!-- footer  -->

    <div class="row mt-5 justify-content-center">
        <div class="col-lg-10">
            <small>Copyright &copy; 2024. Website created with 🚀 by <a href="">Bayu Gurium</a></small>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>
<!-- End content -->