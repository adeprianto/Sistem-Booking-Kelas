<!-- Begin Page Content -->
<div class="container-fluid">

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Data Kelas</h3>

    <hr>

    <table class="table table-bordered bg-white mb-5">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Kelas</th>
                <th scope="col">Kapasitas</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($data_kelas as $kelas) { ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $kelas->nama_ruangan; ?></td>
                    <td><?= $kelas->kapasitas; ?></td>
                    <td>Otto</td>
                </tr>
                <?php $i++;
            } ?>
        </tbody>
    </table>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Penggunaan Kelas</h3>

    <table class="table table-bordered bg-white mb-5">
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

    <hr>

    <h3 class="text-gray-800 mt-5 mb-4 text-center font-weight-bold">Info Penggunaan Kelas</h3>

    <div class=" row mb-5">
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->