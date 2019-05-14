<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7 my-5">

            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                                </div>

                                <?= $this->session->flashdata('pesan') ?>

                                <form class="user" method="post" action="<?= base_url() . 'auth'; ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username" value="<?= set_value('username'); ?>" placeholder="Username">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url() . 'auth/registration'; ?>">Buat Akun Kamu!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>