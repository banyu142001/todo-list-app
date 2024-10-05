<?= $this->extend('layout/template') ?>

<?= $this->section('main'); ?>

<div class="row justify-content-center mt-2 p-lg-0 p-3">
    <div class="col-lg-8">
        <div class="card shadow-sm border-0  my-2">
            <div class="card-header bg-white">
                <h5>List Belajar JavaScript Dasar</h5>
                <a href="/home" class="text-decoration-none"> Home</a>
                <a href="/materi/create" class="text-decoration-none mx-3"> <i class="bi bi-folder-plus text-warning"></i> Tambah list Materi</a>
            </div>

            <div class="card-body">
                <!-- list materi -->
                <?php if ($data_materi) : ?>
                    <?php foreach ($data_materi as $materi) : ?>
                        <div class="row">
                            <div class="col-lg border p-2 my-1 rounded">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4><?= $materi['judul_materi'] ?></h4>
                                    </div>
                                    <div class="col-lg-4 text-end">

                                        <a href="/materi/edit/<?= $materi['id_materi'] ?>"><i class="bi bi-pencil-square mx-3 text-success"></i></a>

                                        <a href="/materi/delete/<?= $materi['id_materi'] ?>"> <i class="bi bi-trash3 text-danger"></i></a>
                                    </div>
                                </div>
                                <p><?= $materi['des_materi'] ?></p>
                                <div class="row">
                                    <div class="col-lg-4 col-4">
                                        <small class="text-muted"><?= $materi['sumber'] ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php else : ?>
                    <div class="row">
                        <div class="col-lg text-center">
                            <small class="text-muted">Belum ada list Pembelajaran 🚀</small>
                        </div>
                    </div>
                <?php endif ?>

            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>