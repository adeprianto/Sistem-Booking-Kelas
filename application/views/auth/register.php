<div class="container">

	<div class="justify-content-center">
		<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-lg">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Buat Akun Kamu!</h1>
						</div>
						<form class="user" method="post" action="<?= base_url().'auth/registration'; ?>">
							<div class="form-group">
								<input type="text" class="form-control form-control-user" name="nama" value="<?= set_value('nama'); ?>" placeholder="Nama">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" class="form-control form-control-user" name="nim" value="<?= set_value('nim'); ?>" placeholder="NIM">
									<?= form_error('nim', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-user" name="fakultas" value="<?= set_value('fakultas'); ?>"  placeholder="Fakultas">
									<?= form_error('fakultas', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" class="form-control form-control-user" name="jurusan" value="<?= set_value('jurusan'); ?>"  placeholder="Jurusan">
									<?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-user" name="angkatan" value="<?= set_value('angkatan'); ?>"  placeholder="Angkatan">
									<?= form_error('angkatan', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
							</div>
							<hr>
							<div class="form-group">
								<input type="text" class="form-control form-control-user" name="username" value="<?= set_value('username'); ?>"  placeholder="Username">
								<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-user" name="email" value="<?= set_value('email'); ?>"  placeholder="Alamat Email">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="password" class="form-control form-control-user" name="password1" placeholder="Password">
									<?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-user" name="password2" placeholder="Password Ulang">
									<?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-user btn-block">
								Register Akun
							</button>
						</form>
						<hr>
						<div class="text-center">
							<a class="small" href="<?= base_url().'auth'; ?>">Sudah punya akun sebelumnya? Login!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	

</div>
