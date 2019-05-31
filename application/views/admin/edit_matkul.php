<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan') ?>

    <?php if ($data_matkul) { ?>

        <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Edit Mata Kuliah</h3>

        <table class=" table table-bordered bg-white mb-5">
            <thead>
                <tr>
                    <th scope="col" class="bg-primary text-light">No.</th>
                    <th scope="col" class="bg-primary text-light">Kode Mata Kuliah</th>
                    <th scope="col" class="bg-primary text-light">Nama Mata Kuliah</th>
                    <th scope="col" class="bg-primary text-light">SKS</th>
                    <th scope="col" class="bg-primary text-light text-center w-25">Action</th>
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
                        <td class="w-25">
                            <div class="row offset-lg-1">
                                <div class="col-6">
                                    <a href="#" data-toggle="modal" data-target="#editModal<?= $matkul->id_matkul; ?>" style="text-decoration: none;">
                                        <i class="fas fa-pen px-2 text-success"></i>
                                        <span class="text-success">Edit</span>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" data-toggle="modal" data-target="#deleteModal<?= $matkul->id_matkul; ?>" style="text-decoration: none;">
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
            <h1 class="text-gray-800">Tidak Ada Data Mata Kuliah</h1>
        </div>

    <?php } ?>


</div>
<!-- /.container-fluid -->

<!-- Edit Modal-->
<?php foreach ($data_matkul as $matkul) : ?>
    <div class="modal fade" id="editModal<?= $matkul->id_matkul; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url() . 'matkul/modelEditMatkul/' . $matkul->id_matkul; ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kode Mata Kuliah</label>
                            <input type="text" class="form-control" name="kode_matkul" value="<?= $matkul->kode_matkul; ?>" placeholder="Masukkan kode mata kuliah" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Mata Kuliah</label>
                            <input type="text" class="form-control" name="nama_matkul" value="<?= $matkul->nama_matkul; ?>" placeholder="Masukkan nama mata kuliah" required>
                        </div>
                        <div class="form-group">
                            <label>SKS</label>
                            <input type="text" class="form-control" name="sks" value="<?= $matkul->sks; ?>" placeholder="Masukkan SKS mata kuliah" required>
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
<?php foreach ($data_matkul as $matkul) : ?>
    <div class="modal fade" id="deleteModal<?= $matkul->id_matkul; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a href="<?= base_url() . 'matkul/modelDeleteMatkul/' . $matkul->id_matkul; ?>" class="btn btn-primary">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

</div>
<!-- End of Main Content -->