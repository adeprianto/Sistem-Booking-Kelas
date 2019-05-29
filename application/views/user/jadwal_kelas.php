<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan') ?>

    <h3 class="text-gray-800 mt-5 mb-2 text-center font-weight-bold">Booking Kelas</h3>
    <hr class="w-25" style="border: 1px solid #858796;">

    <a href="<?= base_url() . 'user/bookingKelas'; ?>" class="btn btn-primary">Booking Kelas</a>

</div>
<!-- End of Main Content -->