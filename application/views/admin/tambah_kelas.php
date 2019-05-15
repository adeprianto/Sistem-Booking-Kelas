<!-- Begin Page Content -->
<div class="container-fluid">

    <h3 class="text-gray-800 mb-4 text-center font-weight-bold" style="margin-top: 150px;">Tambah Data Kelas</h3>

    <div class="container col-lg-8 offset-lg-2">
        <form action="<?= base_url() . 'admin/addKelas'; ?>" method="post">
            <div class="form-group">
                <label>Nama Kelas</label>
                <input type="text" class="form-control" name="nama_kelas" placeholder="Masukkan Nama Kelas">
                <?= form_error('nama_kelas', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <label>Kapasitas</label>
                <input type="text" class="form-control" name="kapasitas" placeholder="Password">
                <?= form_error('kapasitas', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->