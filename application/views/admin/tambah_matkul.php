<!-- Begin Page Content -->
<div class="container-fluid">

    <h3 class="text-gray-800 mb-4 text-center font-weight-bold" style="margin-top: 130px;">Tambah Mata Kuliah</h3>

    <div class="container col-lg-8 offset-lg-2">
        <form action="<?= base_url() . 'matkul/addMatkul'; ?>" method="post">
            <div class="form-group">
                <label>Kode Mata Kuliah</label>
                <input type="text" class="form-control" name="kode_matkul" placeholder="Masukkan kode mata kuliah">
                <?= form_error('kode_matkul', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input type="text" class="form-control" name="nama_matkul" placeholder="Masukkan nama mata kuliah">
                <?= form_error('nama_matkul', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <label>SKS</label>
                <input type="text" class="form-control" name="sks" placeholder="Masukkan SKS mata kuliah">
                <?= form_error('sks', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->