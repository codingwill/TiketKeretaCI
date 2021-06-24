<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-5">
					<div class="row">
						<div class="col-md-6 d-flex text-center">
							<h5 class="mb-0">Tambah Data Kereta Api</h5>
						</div>
					</div>
				</div>
				<div class="card z-index-0">
					<div class="card-body px-4 pt-0 pb-2">

						<form role="form text-left" class="user" method="post"
							action="<?= base_url(''); ?>">

							<div class="form-group row">
								<div class="col-sm-3">
									<?= form_label('Nama Kereta Api', '', 'class="text-muted"')?>
								</div>
								<div class="col-sm-9">
									<?= form_input([
                                        'type' => 'text',
                                        'name' => '',
                                        'id' => '',
                                        'class' => 'form-control',
                                        'value' => set_value("")
                                    ]);
                                    echo form_error('', '<small class="text-danger pl-3">', '</small>'); ?>

								</div>
							</div>

							<div class="mb-3 row">
								<div class="col-sm-3">
									<?= form_label('Kelas Kereta', '', 'class="text-muted"') ?>
								</div>
								<div class="col-sm-9">
									<?= form_dropdown('', [
                                    '' => '',
                                    '1' => "Ekonomi",
                                    '2' => "Bisnis",
                                    '3' => "Eksekutif"
                                    ], set_value(''), 'class="form-select" id=""') ?>
								</div>
							</div>

							<div class="row form-switch" style="padding-left: 0;">
								<div class="col-sm-3 form-check-label">
									<?= form_label('Status Kereta', '', 'class="text-muted"') ?>
								</div>
								<div class="col-sm-9">
									<input class="form-check-input" style="margin-left: 1rem;" type="checkbox"
										id="rememberMe">
								</div>
							</div>

							<div class="mb-3 row">
								<div class="col-sm-3">
									<?= form_label('Keterangan', '', 'class="text-muted"') ?>
								</div>
								<div class="col-sm-9">
									<?= form_input([
                                        'type' => 'textarea',
                                        'name' => '',
                                        'id' => '',
                                        'class' => 'form-control',
                                        'value' => set_value("")
                                    ]);
                                    echo form_error('', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>

							<div class="text-center">
								<button type="submit" class="btn bg-gradient-warning">Submit</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
