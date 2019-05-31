<div class="container-fluid">

    <?php if ($data_matkul) { ?>

        <h3 class="text-gray-800 mt-5 mb-2 text-center font-weight-bold">Info Data Mata Kuliah</h3>
        <hr class="w-25" style="border: 1.5px solid #858796;">

        <table class="table table-bordered bg-white mt-5 mb-5 col-lg-10 offset-lg-1">
            <thead>
                <tr>
                    <th scope="col" class="bg-primary text-light">No.</th>
                    <th scope="col" class="bg-primary text-light">Kode Mata Kuliah</th>
                    <th scope="col" class="bg-primary text-light">Nama Mata Kuliah</th>
                    <th scope="col" class="bg-primary text-light">SKS</th>
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