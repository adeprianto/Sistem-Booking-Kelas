<div class="container-fluid">
    <div class=" jumbotron jumbotron-fluid" style="height: 450px;">
        <div class=" container text-center">
            <h1 class="display-1 mt-5"><strong>SIPEKA</strong></h1>
            <p class="lead pt-3">Sistem Penjadwalan Dan Pencarian Kelas Kosong Di Gedung FPMIPA - C</p>
        </div>
    </div>
</div>

<div class="container-fluid">

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Jadwal Perkuliahan</h3>

    <?php if ($data_jadwal) { ?>
        <table class="table table-bordered bg-white mb-5">
            <thead class="bg-primary">
                <tr>
                    <th scope="col" class="bg-primary text-light">Hari</th>
                    <th scope="col" class="bg-primary text-light">Mata Kuliah</th>
                    <th scope="col" class="bg-primary text-light">Dosen Pengajar</th>
                    <th scope="col" class="bg-primary text-light">Jurusan</th>
                    <th scope="col" class="bg-primary text-light">Angkatan</th>
                    <th scope="col" class="bg-primary text-light">Kelas</th>
                    <th scope="col" class="bg-primary text-light">SKS</th>
                    <th scope="col" class="bg-primary text-light">Ruangan</th>
                    <th scope="col" class="bg-primary text-light">Waktu Mulai</th>
                    <th scope="col" class="bg-primary text-light">Waktu Akhir</th>
                </tr>
            </thead>
            <?php $i = 1;
            foreach ($data_jadwal as $jadwal) { ?>
                <tbody>
                    <td class="text-gray-800"><?= $jadwal->hari; ?></td>
                    <td class="text-gray-800"><?= $jadwal->nama_matkul; ?></td>
                    <td class="text-gray-800"><?= $jadwal->nama_dosen; ?></td>
                    <td class="text-gray-800"><?= $jadwal->jurusan; ?></td>
                    <td class="text-gray-800"><?= $jadwal->angkatan; ?></td>
                    <td class="text-gray-800"><?= $jadwal->kelas; ?></td>
                    <td class="text-gray-800"><?= $jadwal->sks; ?></td>
                    <td class="text-gray-800"><?= $jadwal->nama_ruangan; ?></td>
                    <td class="text-gray-800"><?= $jadwal->waktu_mulai; ?></td>
                    <td class="text-gray-800"><?= $jadwal->waktu_akhir; ?></td>
                </tbody>
                <?php if ($i++ == 5) break;
            } ?>
        </table>

        <div class="text-center mt-4 mb-5">
            <a href="<?= base_url() . 'user/jadwalMatkul'; ?>" class="btn btn-primary">Lihat Selengkapnya</a>
        </div>
    <?php } else { ?>

        <div class="text-center my-5">
            <h4 class="text-gray-800 font-weight-bold"><span class="p-2 badge badge-danger">Tidak Ada Data Jadwal Mata Kuliah</span></h4>
        </div>

    <?php } ?>


    <hr>

    <h3 class="text-gray-800 mb-4 mt-5 text-center font-weight-bold">Info Data Kelas</h3>

    <?php if ($data_kelas) { ?>

        <table class="table table-bordered bg-white mb-5">
            <thead class="bg-primary">
                <tr>
                    <th scope="col" class="text-light">No.</th>
                    <th scope="col" class="text-light">Nama Kelas</th>
                    <th scope="col" class="text-light">Kapasitas</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data_kelas as $kelas) { ?>
                    <tr>
                        <th scope="row" class="text-gray-800"><?= $i; ?></th>
                        <td class="text-gray-800"><?= $kelas->nama_ruangan; ?></td>
                        <td class="text-gray-800"><?= $kelas->kapasitas; ?></td>
                    </tr>
                    <?php if ($i++ == 5)  break;
                } ?>
            </tbody>
        </table>

        <div class="text-center mt-4 mb-5">
            <a href="<?= base_url() . 'user/dataKelas'; ?>" class="btn btn-primary">Lihat Selengkapnya</a>
        </div>

    <?php } else { ?>

        <div class="text-center my-5">
            <h4 class="text-gray-800 font-weight-bold"><span class="p-2 badge badge-danger">Tidak Ada Data Kelas</span></h4>
        </div>

    <?php } ?>



    <hr>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Penggunaan Kelas</h3>

    <?php if ($data_kelas) { ?>
        <div class=" row mb-5">
            <?php $i = 1;
            foreach ($data_kelas as $kelas) {
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
                                <h5 class="card-subtitle my-3"><span class="p-2 badge badge-danger">Dipakai</span></h5>
                            <?php } else { ?>
                                <h5 class="card-subtitle my-3"><span class="p-2 badge badge-success">Kosong</span></h5>
                            <?php } ?>
                            <p class="card-text">Ruangan <?= $kelas->nama_ruangan; ?> ini memiliki kapasitas kursi sebanyak <?= $kelas->kapasitas; ?> kursi.</p>
                            <a href="<?= base_url() . 'user/infoBookingKelas/' . $kelas->id_ruangan; ?>" class="btn btn-primary">Info Ruangan</a>
                        </div>
                    </div>
                </div>

                <?php if ($i++ == 3)  break;
            } ?>
        </div>

        <div class="text-center mt-4 mb-5">
            <a href="<?= base_url() . 'user/jadwalKelas'; ?>" class="btn btn-primary">Lihat Selengkapnya</a>
        </div>

    <?php } else { ?>

        <div class="text-center my-5">
            <h4 class="text-gray-800 font-weight-bold"><span class="p-2 badge badge-danger">Tidak Ada Data Kelas</span></h4>
        </div>

    <?php } ?>

</div>