<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-5">
					<div class="row">
						<div class="col-md-6 d-flex align-items-center">
							<h2 class="mb-0">Data Kereta Api</h2>
						</div>
						<div class="col-md-6 text-right">
							<a class="btn btn-outline-warning btn-sm mb-0" href="<?= base_url('Admin/Data_ka/create'); ?>"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Data</a>
						</div>
					</div>
				</div>
				<div class="card-body px-0 pt-0 pb-2">
					<div class="table-responsive p-0">
						<table class="table align-items-center mb-0">
							<thead>
								<tr>
									
									<th class="text-center text-secondary text-xxs font-weight-bolder opacity-7">
										No</th>
									<th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
										Nama Kereta Api</th>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Kelas</th>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Status</th>
										<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Jumlah Kursi</th>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Keterangan</th>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Aksi
									</th>
									</td>
								</tr>
							</thead>
							<!-- <tbody>
								<tr>
									<td>
									</td>
									<td>
									</td>
									<td>
									</td>
									<td class="align-middle text-center text-sm">
										<span class="badge badge-sm bg-gradient-success">Active</span>
									</td>
									<td>
									</td>
									<td class="d-flex align-items-center justify-content-center">
										<a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
										<a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
									</td>
								</tr>
							</tbody> -->
							<tbody>
								<?php
								$i = 1;
								// foreach ($query->result_array() as $query) {
								foreach ($tampil->result_array() as $row) {

									echo "<tr>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $i .  "</th>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['nama_KA'] .  "</td>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['namakelas'] .  "</td>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . 
									($row['status'] == "Aktif" ? '<span class="badge badge-sm bg-gradient-success">Aktif</span>'
									: '<span class="badge badge-sm bg-gradient-danger">Non-Aktif</span>') .  "</td>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['jumlahkursi'] .  "</td>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['keterangan'] .  "</td>";
									echo '<td class="d-flex justify-content-center font-weight-bolder opacity-10">'
								?>
									<?php echo form_open('Admin/Data_ka/hapus'); ?>
										<input type="hidden" name="id" value="<?= $row['id_KA'] ?>">
										<input onclick="return confirm('Anda yakin mau menghapus item ini ?')" class=" btn bg-warning text-white m-2" type="submit" name="hapus" value="hapus">
									<?php echo form_close(); ?>
									<?php echo form_open('Admin/Data_ka/edit'); ?>
									<a href="<?= base_url('Admin/Data_ka/edit') ?>">
										<input type="hidden" name="id" value="<?= $row['id_KA'] ?>">
										<button class="btn bg-gradient-secondary m-2">Edit</button>
									</a>
									<?php echo form_close(); ?>
									<?php echo form_open('Admin/Data_ka/detail'); ?>
									<a href="<?= base_url('Admin/Data_ka/detail') ?>">
										<input type="hidden" name="id" value="<?= $row['id_KA'] ?>">
										<button class="btn bg-gradient-primary m-2" type="submit">Detail</button>
									</a>
									<?php echo form_close(); ?>
								<?php
									"</td>";

									$i += 1;
								}
								// }
								echo "</tr>";
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>