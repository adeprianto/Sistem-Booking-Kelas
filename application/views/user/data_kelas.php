<div class="container-fluid">

    <h3 class="text-gray-800 mb-4 font-weight-bold mx-3 my-4">Info Data Kelas</h3>

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

</div>