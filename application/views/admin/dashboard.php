<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan') ?>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Data Kelas</h3>

    <?php if ($data_kelas) { ?>

        <table class="table table-bordered bg-white mb-5">
            <thead>
                <tr>
                    <th scope="col" class="bg-primary text-light">No.</th>
                    <th scope="col" class="bg-primary text-light">Nama Kelas</th>
                    <th scope="col" class="bg-primary text-light">Kapasitas</th>
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
                    <?php $i++;
                } ?>
            </tbody>
        </table>

    <?php } else { ?>

        <div class="text-center my-5">
            <h4 class="text-gray-800 font-weight-bold"><span class="p-2 badge badge-danger">Tidak Ada Data Kelas</span></h4>
        </div>

    <?php } ?>


    <hr>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Mata Kuliah</h3>

    <?php if ($data_matkul) { ?>

        <table class="table table-bordered bg-white mb-5">
            <thead>
                <tr>
                    <th scope="col" class="bg-primary text-light">No.</th>
                    <th scope="col" class="bg-primary text-light">Kode Matkul</th>
                    <th scope="col" class="bg-primary text-light">Nama Matkul</th>
                    <th scope="col" class="bg-primary text-light">SKS</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data_matkul as $matkul) { ?>
                    <tr>
                        <th scope="row" class="text-gray-800"><?= $i; ?></th>
                        <td class="text-gray-800"><?= $matkul->kode_matkul; ?></td>
                        <td class="text-gray-800"><?= $matkul->nama_matkul; ?></td>
                        <td class="text-gray-800"><?= $matkul->sks; ?></td>
                    </tr>
                    <?php $i++;
                } ?>
            </tbody>
        </table>

    <?php } else { ?>

        <div class="text-center my-5">
            <h4 class="text-gray-800 font-weight-bold"><span class="p-2 badge badge-danger">Tidak Ada Data Mata Kuliah</span></h4>
        </div>

    <?php } ?>


    <hr>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Jadwal Kuliah</h3>

    <?php if ($data_jadwal) { ?>

        <table class="table table-bordered bg-white mb-5">
            <thead>
                <tr>
                    <th scope="col" class="bg-primary text-light">Hari</th>
                    <th scope="col" class="bg-primary text-light">Mata Kuliah</th>
                    <th scope="col" class="bg-primary text-light">Dosen Pengajar</th>
                    <th scope="col" class="bg-primary text-light">Jurusan</th>
                    <th scope="col" class="bg-primary text-light">Angkatan</th>
                    <th scope="col" class="bg-primary text-light">Kelas</th>
                    <th scope="col" class="bg-primary text-light">SKS</th>
                    <th scope="col" class="bg-primary text-light">Ruangan</th>
                    <th scope="col" class="bg-primary text-light">Mulai</th>
                    <th scope="col" class="bg-primary text-light">Akhir</th>
                </tr>
            </thead>
            <?php foreach ($data_jadwal as $jadwal) : ?>
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
            <?php endforeach; ?>
        </table>

    <?php } else { ?>

        <div class="text-center my-5">
            <h4 class="text-gray-800 font-weight-bold"><span class="p-2 badge badge-danger">Tidak Ada Data Jadwal Kuliah</span></h4>
        </div>

    <?php } ?>

    <hr>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Penggunaan Kelas</h3>

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
                                <h5 class="card-subtitle my-3"><span class="p-2 badge badge-danger">Dipakai</span></h5>
                            <?php } else { ?>
                                <h5 class="card-subtitle my-3"><span class="p-2 badge badge-success">Kosong</span></h5>
                            <?php } ?>
                            <p class="card-text">Ruangan <?= $kelas->nama_ruangan; ?> ini memiliki kapasitas kursi sebanyak <?= $kelas->kapasitas; ?> kursi.</p>
                            <a href="#" class="btn btn-primary">Info Kelas</a>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>

    <?php } else { ?>
        <div class="text-center my-5">
            <h4 class="text-gray-800 font-weight-bold"><span class="p-2 badge badge-danger">Tidak Ada Data Kelas</span></h4>
        </div>
    <?php } ?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->