<div class="container-fluid">

    <h3 class="text-gray-800 mb-4 font-weight-bold mx-3 my-4">Info Jadwal Perkuliahan</h3>

    <table class="table table-bordered bg-white mb-3 mt-5">
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
                <th scope="col" class="bg-primary text-light">Waktu Mulai</th>
                <th scope="col" class="bg-primary text-light">Waktu Akhir</th>
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

</div>