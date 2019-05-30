<div class="container-fluid">
    <?= $this->session->flashdata('pesan') ?>
    <h3 class="text-gray-800 mt-4 mb-4 text-center font-weight-bold">Booking Kelas</h3>
    <form action="<?= base_url() . 'user/bookingKelas'; ?>" method="post" class="col-lg-6 offset-lg-3">
        <div class="form-group">
            <label>Ruangan</label>
            <select class="form-control" name="ruangan">
                <?php foreach ($data_kelas as $kelas) : ?>
                    <option value="<?= $kelas->id_ruangan; ?>"><?= $kelas->nama_ruangan; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal">
            <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
        </div>
        <div class="form-group">
            <label>Waktu Mulai</label>
            <input type="time" class="form-control" name="waktu_mulai" placeholder="Masukkan waktu mulai">
            <?= form_error('waktu_mulai', '<small class="text-danger pl-3">', '</small>') ?>
        </div>
        <div class="form-group">
            <label>Waktu Akhir</label>
            <input type="time" class="form-control" name="waktu_akhir" placeholder="Masukkan waktu akhir">
            <?= form_error('waktu_akhir', '<small class="text-danger pl-3">', '</small>') ?>
        </div>
        <div class="form-group">
            <label>Berita Kegiatan</label>
            <textarea class="form-control" name="berita" placeholder="Masukkan Berita Kegitan" rows="3"></textarea>
            <?= form_error('berita', '<small class="text-danger pl-3">', '</small>') ?>
        </div>
        <button type="submit" class="mt-3 mb-5 btn btn-primary">Submit</button>
    </form>
</div>