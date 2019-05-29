<div class="container-fluid">
    <div class=" jumbotron jumbotron-fluid" style="height: 450px;">
        <div class=" container text-center">
            <h1 class="display-1 mt-5"><strong>SIPEKA</strong></h1>
            <p class="lead">Sistem Penjadwalan Dan Pencarian Kelas Kosong Di Gedung FPMIPA - C</p>
        </div>
    </div>
</div>

<div class="container-fluid">

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Jadwal Perkuliahan</h3>

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

    <hr>

    <h3 class="text-gray-800 mb-4 mt-5 text-center font-weight-bold">Info Data Kelas</h3>

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

    <hr>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Penggunaan Kelas</h3>

    <div class=" row">
        <div class="col-lg-4 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Booking</a>
                    <a href="#" class="btn btn-primary ml-3">Info</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 badge badge-success">Kosong</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Booking</a>
                    <a href="#" class="btn btn-primary ml-3">Info</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Booking</a>
                    <a href="#" class="btn btn-primary ml-3">Info</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4 mb-5">
        <button class="btn btn-primary">Lihat Selengkapnya</button>
    </div>

</div>