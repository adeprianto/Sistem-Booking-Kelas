<div class="container-fluid">

    <?= $this->session->flashdata('pesan') ?>

    <?php if ($data_booking) { ?>

        <h3 class="text-gray-800 mt-5 mb-2 text-center font-weight-bold">List Booking Kelas</h3>
        <hr class="w-25 mb-5" style="border: 1.5px solid #858796;">

        <table class=" table table-bordered bg-white mb-5">
            <thead>
                <tr>
                    <th scope="col" class="bg-primary text-light">No.</th>
                    <th scope="col" class="bg-primary text-light">Ruangan</th>
                    <th scope="col" class="bg-primary text-light">Berita Kegiatan</th>
                    <th scope="col" class="bg-primary text-light">Tanggal</th>
                    <th scope="col" class="bg-primary text-light">Waktu Mulai</th>
                    <th scope="col" class="bg-primary text-light">Waktu Akhir</th>
                    <th scope="col" class="bg-primary text-light text-center w-25">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data_booking as $booking) { ?>
                    <tr>
                        <th scope="row" class="text-gray-800"><?= $i; ?></th>
                        <td class="text-gray-800"><?= $booking->nama_ruangan; ?></td>
                        <td class="text-gray-800"><?= $booking->berita_kegiatan; ?></td>
                        <td class="text-gray-800"><?= $booking->tanggal; ?></td>
                        <td class="text-gray-800"><?= $booking->waktu_mulai; ?></td>
                        <td class="text-gray-800"><?= $booking->waktu_akhir; ?></td>
                        <td class="text-center">
                            <a href="#" data-toggle="modal" data-target="#deleteModal<?= $booking->id_booking; ?>" style="text-decoration: none;">
                                <i class="fas fa-times-circle px-2 text-danger"></i>
                                <span class="text-danger">Batalkan</span>
                            </a>
                        </td>
                    </tr>
                    <?php $i++;
                } ?>
            </tbody>
        </table>

    <?php } else { ?>
        <div class="text-center" style="margin-top: 250px;">
            <h1 class="text-gray-800">Anda Belum Mem-Booking Kelas Manapun</h1>
        </div>
    <?php } ?>



</div>

<?php foreach ($data_booking as $booking) : ?>
    <div class="modal fade" id="deleteModal<?= $booking->id_booking; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Batalkan Booking Kelas</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span>Apakah anda yakin batalkan booking kelas ?</span>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a href="<?= base_url() . 'user/cancelBookingKelas/' . $booking->id_booking ?>" class="btn btn-primary">Batalkan</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>