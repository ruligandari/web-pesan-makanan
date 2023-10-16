<?= $this->extend('layouts/Pemilik/main-layouts'); ?>

<?= $this->section('head'); ?>

<?= $this->endSection(); ?>

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
                            <h5 class="card-title">Transaksi</h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Pembeli</th>
                                        <th scope="col">Nomor Order</th>
                                        <th scope="col">Total Harga</th>
                                        <th scope="col">Jenis Pesanan</th>
                                        <th scope="col">Status Pesanan</th>
                                        <th scope="col">Tgl</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($transaksi as $item) : ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><?= $item['nama_pembeli'] ?></td>
                                            <td><?= $item['no_order'] ?></td>
                                            <td><?= $item['total_harga'] ?></td>
                                            <td><?= $item['status'] ?></td>
                                            <td><?= $item['status_pesanan'] ?></td>
                                            <td><span class="badge bg-success text-light"><?= $item['tgl_transaksi'] ?></span></td>
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
<script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<?= $this->endSection(); ?>