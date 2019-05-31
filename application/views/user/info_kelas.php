<div class="container-fluid">

    <h3 class="text-gray-800 mt-5 mb-2 text-center font-weight-bold">Info Kelas <?= $data_kelas[0]->nama_ruangan; ?></h3>
    <hr class="w-25 mb-5" style="border: 1.5px solid #858796;">

    <?php if ($data_booking) { ?>

        <h5 class="text-gray-800 font-weight-bold">Jadwal Penggunaan Hari Ini :</h5>

        <table class="table table-bordered bg-white mt-4 mb-5">
            <thead>
                <tr>
                    <th scope="col" class="bg-primary text-light">No.</th>
                    <th scope="col" class="bg-primary text-light">Nama Pembooking</th>
                    <th scope="col" class="bg-primary text-light">Fakultas</th>
                    <th scope="col" class="bg-primary text-light">Jurusan</th>
                    <th scope="col" class="bg-primary text-light">Angkatan</th>
                    <th scope="col" class="bg-primary text-light">Tanggal</th>
                    <th scope="col" class="bg-primary text-light">Kegiatan</th>
                    <th scope="col" class="bg-primary text-light">Waktu Mulai</th>
                    <th scope="col" class="bg-primary text-light">Waktu Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data_booking as $booking) {
                    if ($booking->tanggal == date("Y-m-d")) { ?>
                        <tr>
                            <th scope="row" class="text-gray-800"><?= $i; ?></th>
                            <td class="text-gray-800"><?= $booking->nama; ?></td>
                            <td class="text-gray-800"><?= $booking->fakultas; ?></td>
                            <td class="text-gray-800"><?= $booking->jurusan; ?></td>
                            <td class="text-gray-800"><?= $booking->angkatan; ?></td>
                            <td class="text-gray-800"><?= $booking->tanggal; ?></td>
                            <td class="text-gray-800"><?= $booking->berita_kegiatan; ?></td>
                            <td class="text-gray-800"><?= $booking->waktu_mulai; ?></td>
                            <td class="text-gray-800"><?= $booking->waktu_akhir; ?></td>
                        </tr>
                    <?php }
                $i++;
            } ?>
            </tbody>
        </table>

        <?php $used = false;
        foreach ($data_booking as $booking) { ?>
            <?php if (($booking->waktu_mulai <= date("H:i")) && ($booking->waktu_akhir >= date("H:i"))) { ?>
                <h2 class="text-center text-light"><span class="p-2 badge badge-danger font-weight-bold">Kelas Sedang Digunakan Dari Pukul : <?= $booking->waktu_mulai; ?> Sampai <?= $booking->waktu_akhir; ?></span></h2>
                <?php $used = true;
                break;
            } ?>
        <?php } ?>

        <?php if (!$used) { ?>
            <h2 class="text-center text-light"><span class="p-2 badge badge-success font-weight-bold">Kelas Sedang Tidak Digunakan Saat Ini</span></h2>
        <?php } ?>

    <?php } else { ?>
        <div class="text-center" style="margin-top: 200px;">
            <h2 class="text-center text-light"><span class="p-2 badge badge-success font-weight-bold">Kelas Belum Dibooking Sama Sekali Hari Ini</span></h2>
        </div>
    <?php } ?>


</div>