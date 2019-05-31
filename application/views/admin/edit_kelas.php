<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan') ?>

    <?php if ($data_kelas) { ?>

        <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Edit Data Kelas</h3>

        <table class=" table table-bordered bg-white mb-5">
            <thead>
                <tr>
                    <th scope="col" class="bg-primary text-light">No.</th>
                    <th scope="col" class="bg-primary text-light">Nama Kelas</th>
                    <th scope="col" class="bg-primary text-light">Kapasitas</th>
                    <th scope="col" class="bg-primary text-light text-center w-25">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data_kelas as $kelas) { ?>
                    <tr>
                        <th scope="row" class="text-gray-800"><?= $i; ?></th>
                        <td class="text-gray-800"><?= $kelas->nama_ruangan; ?></td>
                        <td class="text-gray-800"><?= $kelas->kapasitas; ?></td>
                        <td class="w-25">
                            <div class="row offset-lg-1">
                                <div class="col-6">
                                    <a href="#" data-toggle="modal" data-target="#editModal<?= $kelas->id_ruangan; ?>" style="text-decoration: none;">
                                        <i class="fas fa-pen px-2 text-success"></i>
                                        <span class="text-success">Edit</span>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" data-toggle="modal" data-target="#deleteModal<?= $kelas->id_ruangan; ?>" style="text-decoration: none;">
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

    <?php } else { ?>

        <div class="text-center" style="margin-top: 250px;">
            <h1 class="text-gray-800">Tidak Ada Data Kelas</h1>
        </div>

    <?php } ?>

</div>
<!-- /.container-fluid -->

<!-- Edit Modal-->
<?php foreach ($data_kelas as $kelas) : ?>
    <div class="modal fade" id="editModal<?= $kelas->id_ruangan; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url() . 'kelas/modelEditKelas/' . $kelas->id_ruangan; ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Kelas</label>
                            <input type="text" class="form-control" name="nama_kelas" value="<?= $kelas->nama_ruangan; ?>" placeholder="Masukkan nama kelas" required>
                        </div>
                        <div class="form-group">
                            <label>Kapasitas</label>
                            <input type="text" class="form-control" name="kapasitas" value="<?= $kelas->kapasitas; ?>" placeholder="Masukkan kapasitas kelas yang dapat ditampung" required>
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
<?php foreach ($data_kelas as $kelas) : ?>
    <div class="modal fade" id="deleteModal<?= $kelas->id_ruangan; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a href="<?= base_url() . 'kelas/modelDeleteKelas/' . $kelas->id_ruangan; ?>" class="btn btn-primary">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

</div>
<!-- End of Main Content -->