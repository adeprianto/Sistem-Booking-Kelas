<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan') ?>

    <h3 class="text-gray-800 mt-5 mb-2 text-center font-weight-bold">Info Penggunaan Kelas</h3>
    <hr class="w-25 mb-5" style="border: 1px solid #858796;">

    <div class="row mb-4">
        <div class="col-lg-8 offset-lg-2">
            <div class="row">
                <div class="col-lg-2">
                    <a href="<?= base_url() . 'user/bookingKelas'; ?>" class="btn btn-primary mb-4">Booking Kelas</a>
                </div>
                <div class="col-lg-10">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari kelas" name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php if ($data_kelas) { ?>

        <div class=" row mb-5">
            <?php foreach ($data_kelas as $kelas) {
                $used = false;

                foreach ($data_booking as $booking) {
                    if (($booking->id_ruangan == $kelas->id_ruangan) && ($booking->id_booking != null) && ($booking->waktu_mulai <= date('H:i')) && ($booking->waktu_akhir >= date('H:i'))) {
                        $used = true;
                    }
                } ?>

                <div class="col-lg-4 pb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $kelas->nama_ruangan; ?></h5>
                            <?php if ($used) { ?>
                                <h5 class="card-subtitle my-3"><span class="badge badge-danger">Kosong</span></h5>
                            <?php } else { ?>
                                <h5 class="card-subtitle my-3"><span class="badge badge-success">Kosong</span></h5>
                            <?php } ?>
                            <p class="card-text">Ruangan <?= $kelas->nama_ruangan; ?> ini memiliki kapasitas kursi sebanyak <?= $kelas->kapasitas; ?> kursi.</p>
                            <a href="<?= base_url() . 'user/infoBookingKelas/' . $kelas->id_ruangan; ?>" class="btn btn-primary">Info Kelas</a>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>

    <?php } else { ?>
        <div class="text-center mt-5">
            <h1 class="text-gray-800">Kelas Tidak Ditemukan</h1>
        </div>
    <?php } ?>


</div>
<!-- End of Main Content -->