<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-5">
					<div class="row">
						<div class="col-md-6 d-flex align-items-center">
							<h2 class="mb-0">Data Kereta Api</h2>
						</div>
						<!--
						<div class="col-md-6 text-right">
							<a class="btn btn-outline-warning btn-sm mb-0"
								href="<?= base_url('User/Data_ka/create'); ?>"><i
									class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Data</a>
						</div>
						-->
					</div>
				</div>
				<div class="card-body px-0 pt-0 pb-2">
					<div class="table-responsive p-0">
						<table class="table align-items-center mb-0">
							<thead>
								<tr>
									<th class="text-center text-secondary text-xxs font-weight-bolder opacity-7">
										No</th>
									<th
										class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
										Nama Kereta Api
									</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Kelas
									</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Status
									</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Jumlah Kursi Maksimal
									</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Keterangan
									</th>
									<!--
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Menu
									</th>
									-->
								</tr>
							</thead>
							<tbody>
									
									<?php
										$i = 1;
										//notes
										//will: retrieve data KA + kelas keretanya
										foreach ($dataKereta->result_array() as $row) {
											echo '<tr>';
											echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $i .  "</td>";
											echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['nama_KA'] .  "</td>";
											echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['namakelas'] .  "</td>";
											echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . 
											($row['status'] == "Aktif" ? '<span class="badge badge-sm bg-gradient-success">Aktif</span>'
											: '<span class="badge badge-sm bg-gradient-danger">Non-Aktif</span>') .  "</td>";
											echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['jumlahkursi'] .  "</td>";
											echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['keterangan'] .  "</td>";
											echo '</tr>';
											++$i;
										}
									?>
									<!--
									<td class="d-flex align-items-center justify-content-center">
									<form action="<?= base_url("Admin/data_ka/edit") ?>" method="post">
											<button type="submit" class="btn btn-link text-dark px-3 mb-0" name="id">
											<i class="far fa-trash-alt me-2"></i>Hapus
											</button>
										</form>
										<form action="<?= base_url("Admin/data_ka/edit") ?>" method="post">
											<button type="submit" class="btn btn-link text-dark px-3 mb-0" name="id">
												<i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit
											</button>
										</form>
									</td>
									-->
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
