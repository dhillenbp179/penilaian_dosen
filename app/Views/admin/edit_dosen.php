<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Dosen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin/data_mahasiswa">Data Dosen</a></li>
                        <li class="breadcrumb-item active">Edit Dosen</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-purple">
                        <div class="card-header">
                            <h3 class="card-title">Edit Dosen</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <?php if (session()->getFlashdata('msg')) : ?>
                                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="nidn">Nomor Induk Dosen</label>
                                    <input type="text" name="nidn" class="form-control <?= ($validation->hasError('nidn') ? 'is-invalid' : ''); ?>" id=" nidn" required value="<?= (old('nidn')) ? old('nidn') : $dosen['nidn'] ?>">
                                    <small class="text-danger">
                                        <?= $validation->getError('nidn'); ?>
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="nm_dosen">Nama Dosen</label>
                                    <input type="text" name="nm_dosen" class="form-control" id="nm_dosen" required value="<?= (old('nm_dosen')) ? old('nm_dosen') : $dosen['nm_dosen'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Dosen</label>
                                    <input type="text" name="email" class="form-control" id="email" required value="<?= (old('email')) ? old('email') : $dosen['email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="foto_dosen">Foto Dosen</label>
                                    <input type="hidden" name="namaFotoLama" value="<?= $dosen['foto_dosen']; ?>">
                                    <div class="form-group">
                                        <img width="150" src="img/dosen/<?= $dosen['foto_dosen']; ?>" class="img-thumbnail img-preview">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="foto_dosen" class="custom-file-input  <?= ($validation->hasError('foto_dosen') ? 'is-invalid' : ''); ?>" id="foto_dosen" value="<?= old('foto_dosen'); ?>" onchange="previewImg()" />
                                            <label class=" custom-file-label" for="foto_dosen">Pilih file</label>
                                        </div>
                                    </div>
                                    <small id="foto_dosen" class="text-danger">
                                        <?= $validation->getError('foto_dosen'); ?>
                                        <?php var_dump($validation->getError()); ?>
                                    </small>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1" required>
                                        <label class="custom-control-label" for="exampleCheck1">Pastikan telah mengisi form dengan benar!</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                <button type="submit" class="btn btn-default float-right" id="back">Cancel</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <script>
        // tombol kembali
        let btnBack = document.getElementById('back');
        btnBack.addEventListener('click', () => {
            window.history.back();
        });
    </script>

</div>

<?= $this->endSection(); ?>