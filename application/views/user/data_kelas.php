<div class="container-fluid">

    <?php if ($data_kelas) { ?>

        <h3 class="text-gray-800 mt-5 mb-2 text-center font-weight-bold">Info Data Kelas</h3>
        <hr class="w-25" style="border: 1.5px solid #858796;">

        <table class="table table-bordered bg-white mt-5 mb-5 col-lg-10 offset-lg-1">
            <thead>
                <tr>
                    <th scope="col" class="bg-primary text-light">No.</th>
                    <th scope="col" class="bg-primary text-light">Nama Kelas</th>
                    <th scope="col" class="bg-primary text-light">Kapasitas</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data_kelas as $kelas) { ?>
                    <tr>
                        <th scope="row" class="text-gray-800"><?= $i; ?></th>
                        <td class="text-gray-800"><?= $kelas->nama_ruangan; ?></td>
                        <td class="text-gray-800"><?= $kelas->kapasitas; ?></td>
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