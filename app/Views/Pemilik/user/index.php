<?= $this->extend('layouts/Pemilik/main-layouts'); ?>

<?= $this->section('content'); ?>
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <!-- Reports -->
                <div class="col-12">
                    <!-- set flash data -->
                    <?php
                    // Cek apakah terdapat session nama message
                    if (session()->getFlashdata('success')) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('success'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } elseif (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('error'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <h5 class="card-title">List User</h5>
                                <div class="col d-flex justify-content-end">
                                    <a href="<?= base_url('pemilik/tambah-user') ?>" class="btn btn-primary">Tambah User</a>
                                </div>
                            </div>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($admin as $item) : ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><?= $item['nama'] ?></td>
                                            <td><?= $item['email'] ?></td>
                                            <?php
                                            $roles = $item['role'];
                                            if ($roles == 1) {
                                                $role = 'Pemilik';
                                            } elseif ($roles == 2) {
                                                $role = 'Kasir';
                                            } elseif ($roles == 3) {
                                                $role = 'Chef';
                                            } elseif ($roles == 4) {
                                                $role = 'Kurir';
                                            }
                                            ?>
                                            <td><?= $role ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div><!-- End Reports -->

            </div>
        </div><!-- End Left side columns -->

    </div><!-- End Right side columns -->

    </div>
</section>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<?= $this->endSection(); ?>