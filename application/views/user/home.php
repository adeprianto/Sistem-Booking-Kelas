<div class="container-fluid">
    <div class=" jumbotron jumbotron-fluid" style="height: 450px;">
        <div class=" container text-center">
            <h1 class="display-1 mt-5"><strong>SIPEKA</strong></h1>
            <p class="lead">Sistem Penjadwalan Dan Pencarian Kelas Kosong Di Gedung FPMIPA - C</p>
        </div>
    </div>
</div>

<div class="container-fluid">

    <h3 class="text-gray-800 mb-4 text-center font-weight-bold">Info Penggunaan Kelas</h3>

    <table class="table table-bordered bg-white mb-5">
        <thead class="bg-primary">
            <tr>
                <th scope="col" class="text-light">No.</th>
                <th scope="col" class="text-light">Nama Kelas</th>
                <th scope="col" class="text-light">Kapasitas</th>
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

    <div class="text-center mt-4 mb-5">
        <a href="<?= base_url() . 'user/dataKelas'; ?>" class="btn btn-primary">Lihat Selengkapnya</a>
    </div>

    <hr>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Penggunaan Kelas</h3>

    <table class="table table-bordered bg-white">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>

    <div class="text-center mt-4 mb-5">
        <button class="btn btn-primary">Lihat Selengkapnya</button>
    </div>

    <hr>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Penggunaan Kelas</h3>

    <div class=" row">
        <div class="col-lg-4 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Booking</a>
                    <a href="#" class="btn btn-primary ml-3">Info</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 badge badge-success">Kosong</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Booking</a>
                    <a href="#" class="btn btn-primary ml-3">Info</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Booking</a>
                    <a href="#" class="btn btn-primary ml-3">Info</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4 mb-5">
        <button class="btn btn-primary">Lihat Selengkapnya</button>
    </div>

</div>