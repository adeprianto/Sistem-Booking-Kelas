<!-- Begin Page Content -->
<div class="container-fluid">

    <h3 class="text-gray-800 mb-4 mt-5 text-center font-weight-bold">Tambah Mata Kuliah</h3>

    <div class="container col-lg-8 offset-lg-2">
        <form action="<?= base_url() . 'jadwal/addJadwal'; ?>" method="post">
            <div class="form-group">
                <label>Mata Kuliah</label>
                <select class="form-control" name="matkul">
                    <?php foreach ($data_matkul as $matkul) : ?>
                        <option value="<?= $matkul->id_matkul; ?>"><?= $matkul->nama_matkul; ?> (<?= $matkul->sks; ?> SKS)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Ruangan</label>
                <select class="form-control" name="ruangan">
                    <?php foreach ($data_kelas as $kelas) : ?>
                        <option value="<?= $kelas->id_ruangan; ?>"><?= $kelas->nama_ruangan; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Hari Perkuliahan</label>
                <select class="form-control" name="hari">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jum'at">Jum'at</option>
                </select>
            </div>
            <div class="form-group">
                <label>Waktu Mulai</label>
                <input type="time" class="form-control" name="waktu_mulai" placeholder="Masukkan waktu mulai">
                <?= form_error('waktu_mulai', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->