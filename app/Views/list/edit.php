<?= $this->extend('layout/template') ?>

<?= $this->section('main'); ?>

<div class="row justify-content-center align-items-center mt-2 p-lg-0 p-3" style="height: 90vh;">
    <div class="col-lg-4">
        <div class="card shadow-sm border-0  my-2">
            <div class="card-header bg-white">
                <h5 class="">Edit dan Update List Materi Belajar</h5>

            </div>
            <div class="card-body">
                <!-- list materi -->
                <div class="row">
                    <div class="col-lg">
                        <form action="/materi/update" method="post">
                            <input type="hidden" name="id_materi" value="<?= $materi['id_materi'] ?>">
                            <div class="form-group">
                                <label for="">Judul Materi</label>
                                <input type="text" name="judul" class="form-control fw-bold <?= (validation_errors()) ? 'is-invalid' : '' ?> " value="<?= $materi['judul_materi'] ?>">

                            </div>
                            <div class=" form-group">
                                <label for="">Deskrpsi</label>
                                <textarea name="deskripsi" class="form-control fw-bold"><?= $materi['des_materi'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Sumber Belajar</label>
                                <input type="text" name="sumber" class="form-control fw-bold" value="Web Programming UNPAS">
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-primary" name="submit" type="submit">Update and Save</button>
                                <a href="/materi" class="btn btn-danger"> <i class="bi bi-reply"></i> Back</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
</div>

<?= $this->endSection(); ?>