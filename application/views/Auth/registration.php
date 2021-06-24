<div class="container">
	<div class="row mt-lg-n10 mt-md-n11 mt-n10">
		<div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
			<div class="card z-index-0">
				<div class="card-header text-center pt-4">
					<h5>Pendaftaran akun!</h5>
				</div>
				<div class="card-body">
					<form role="form text-left class=" user" method="post"
						action="<?= base_url('Auth/registration'); ?>">
						<div class=" mb-3">
							<?= form_input([
                                'type' => 'text',
                                'name' => 'name',
                                'id' => 'name',
                                'class' => 'form-control',
                                'value' => set_value("name"),
                                'placeholder' => 'Nama Lengkap'
                                ]);
                                echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class=" mb-3">
							<?= form_input([
                                'type' => 'text',
                                'name' => 'nik',
                                'id' => 'nik',
                                'class' => 'form-control',
                                'value' => set_value("nik"),
                                'placeholder' => 'Nomor Induk Kependudukan'
                                ]);
                                echo form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class=" mb-3">
							<?= form_input([
                                'type' => 'text',
                                'name' => 'email',
                                'id' => 'email',
                                'class' => 'form-control',
                                'value' => set_value("email"),
                                'placeholder' => 'Alamat Email'
                                ]);
                                echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="mb-3">
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<?= form_input([
                                            'type' => 'password',
                                            'name' => 'password1',
                                            'id' => 'password1',
                                            'class' => 'form-control',
                                            'value' => set_value("password1"),
                                            'placeholder' => 'Kata Sandi'
                                        ]);
                                        echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<?= form_input([
                                            'type' => 'password',
                                            'name' => 'password2',
                                            'id' => 'password2',
                                            'class' => 'form-control',
                                            'value' => set_value("password2"),
                                            'placeholder' => 'Ulang Kata Sandi'
                                        ]); ?>
								</div>
							</div>
						</div>
						<div class="form-check form-check-info text-left">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Saya setuju dengan <a href="javascript:;" class="text-dark font-weight-bolder">Syarat dan Ketentuan</a> yang berlaku.
							</label>
						</div>
						<div class="text-center">
							<button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Daftar</button>
						</div>
						<div class="card-footer text-center pt-0 px-lg-2 px-1">
							<p class="mb-4 text-sm mx-auto">
								Sudah punya akun?
								<a href="<?= base_url('auth/index'); ?>"
									class="text-info text-gradient font-weight-bold">Login</a>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
