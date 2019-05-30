<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan') ?>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Edit Mata Kuliah</h3>

    <table class=" table table-bordered bg-white mb-5">
        <thead>
            <tr>
                <th scope="col" class="bg-primary text-light">Hari</th>
                <th scope="col" class="bg-primary text-light">Mata Kuliah</th>
                <th scope="col" class="bg-primary text-light">Nama Dosen</th>
                <th scope="col" class="bg-primary text-light">Jurusan</th>
                <th scope="col" class="bg-primary text-light">Angkatan</th>
                <th scope="col" class="bg-primary text-light">Kelas</th>
                <th scope="col" class="bg-primary text-light">Ruangan</th>
                <th scope="col" class="bg-primary text-light">Mulai</th>
                <th scope="col" class="bg-primary text-light">Akhir</th>
                <th scope="col" class="bg-primary text-light text-center w-25">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($data_jadwal as $jadwal) { ?>
                <tr>
                    <td class="text-gray-800"><?= $jadwal->hari; ?></td>
                    <td class="text-gray-800"><?= $jadwal->nama_matkul; ?></td>
                    <td class="text-gray-800"><?= $jadwal->nama_dosen; ?></td>
                    <td class="text-gray-800"><?= $jadwal->jurusan; ?></td>
                    <td class="text-gray-800"><?= $jadwal->angkatan; ?></td>
                    <td class="text-gray-800"><?= $jadwal->kelas; ?></td>
                    <td class="text-gray-800"><?= $jadwal->nama_ruangan; ?></td>
                    <td class="text-gray-800"><?= $jadwal->waktu_mulai; ?></td>
                    <td class="text-gray-800"><?= $jadwal->waktu_akhir; ?></td>
                    <td class="w-25">
                        <div class="row offset-lg-1">
                            <div class="col-6">
                                <a href="#" data-toggle="modal" data-target="#editModal<?= $jadwal->id_jadwal; ?>" style="text-decoration: none;">
                                    <i class="fas fa-pen px-2 text-success"></i>
                                    <span class="text-success">Edit</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#" data-toggle="modal" data-target="#deleteModal<?= $jadwal->id_jadwal; ?>" style="text-decoration: none;">
                                    <i class="fas fa-trash px-2 text-danger"></i>
                                    <span class="text-danger">Delete</span>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php $i++;
            } ?>
        </tbody>
    </table>

    <!-- Edit Modal-->
    <?php foreach ($data_jadwal as $jadwal) : ?>
        <div class="modal fade" id="editModal<?= $jadwal->id_jadwal; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?= base_url() . 'jadwal/modelEditJadwal/' . $jadwal->id_jadwal; ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Hari</label>
                                <select class="form-control" name="hari">
                                    <?php foreach ($data_hari as $hari) : ?>
                                        <?php if ($jadwal->hari == $hari->nama_hari) { ?>
                                            <option value="<?= $hari->id_hari; ?>" selected><?= $hari->nama_hari; ?></option>
                                        <?php } ?>
                                        <option value="<?= $hari->id_hari; ?>"><?= $hari->nama_hari; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mata Kuliah</label>
                                <select class="form-control" name="matkul">
                                    <?php foreach ($data_matkul as $matkul) : ?>
                                        <?php if ($jadwal->nama_matkul == $matkul->nama_matkul) { ?>
                                            <option value="<?= $matkul->id_matkul; ?>" selected><?= $matkul->nama_matkul; ?> (<?= $matkul->sks; ?> SKS)</option>
                                        <?php } ?>
                                        <option value="<?= $matkul->id_matkul; ?>"><?= $matkul->nama_matkul; ?> (<?= $matkul->sks; ?> SKS)</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Dosen Pengajar</label>
                                <input type="text" class="form-control" name="nama_dosen" value="<?= $jadwal->nama_dosen; ?>" placeholder="Masukkan nama dosen pengajar mata kuliah" required>
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" name="jurusan" value="<?= $jadwal->jurusan; ?>" placeholder="Masukkan jurusan" required>
                            </div>
                            <div class="form-group">
                                <label>Angkatan</label>
                                <input type="text" class="form-control" name="angkatan" value="<?= $jadwal->angkatan; ?>" placeholder="Masukkan angkatan" required>
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" class="form-control" name="kelas" value="<?= $jadwal->kelas; ?>" placeholder="Masukkan kelas" required>
                            </div>
                            <div class="form-group">
                                <label>Ruangan</label>
                                <select class="form-control" name="ruangan">
                                    <?php foreach ($data_kelas as $kelas) : ?>
                                        <?php if ($jadwal->nama_ruangan == $kelas->nama_ruangan) { ?>
                                            <option value="<?= $kelas->id_ruangan; ?>" selected><?= $kelas->nama_ruangan; ?></option>
                                        <?php } ?>
                                        <option value="<?= $kelas->id_ruangan; ?>"><?= $kelas->nama_ruangan; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Waktu Mulai Perkuliahan</label>
                                <input type="time" class="form-control" name="waktu_mulai" value="<?= $jadwal->jam_masuk; ?>" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Edit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Delete Modal-->
    <?php foreach ($data_jadwal as $jadwal) : ?>
        <div class="modal fade" id="deleteModal<?= $jadwal->id_jadwal; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span>Data yang dihapus akan hilang <strong>permanen</strong>. Yakin hapus data ?</span>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a href="<?= base_url() . 'jadwal/modelDeleteJadwal/' . $jadwal->id_jadwal; ?>" class="btn btn-primary">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->