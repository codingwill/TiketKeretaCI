<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-5">
					<div class="row">
						<div class="col-md-6 d-flex align-items-center">
							<h2 class="mb-0">Jadwal Kereta Api</h2>
						</div>
						<div class="col-md-6 text-right">
							<a class="btn btn-outline-warning btn-sm mb-0" href="<?= base_url('Admin/Jadwal/create'); ?>"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Data</a>
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
										Stasiun Asal</th>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Stasiun Tujuan</th>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Jam Berangkat</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Jam Datang</th>
									<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Menu
									</th>
                                    </td>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								// foreach ($query->result_array() as $query) {
								foreach ($tampil->result_array() as $row) {

									echo "<tr>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $i .  "</th>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['nama_KA'] .  "</td>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['st_asal'] .  "</td>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['st_tujuan'] .  "</td>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['jamberangkat'] .  "</td>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['jamdatang'] .  "</td>";
									echo '<td class="d-flex justify-content-center font-weight-bolder opacity-10">';
								?>
									<?php echo form_open('Admin/Jadwal/hapus'); ?>
										<input type="hidden" name="id" value="<?= $row['id_jadwal'] ?>">
										<input onclick="return confirm('Anda yakin mau menghapus item ini ?')" class=" btn bg-warning text-white m-2" type="submit" name="hapus" value="hapus">
										</button>
									<?php echo form_close(); ?>

									<?php echo form_open('Admin/Jadwal/edit'); ?>
									<a href="<?= base_url('Admin/Jadwal/edit') ?>">
										<input type="hidden" name="id" value="<?= $row['id_jadwal'] ?>">
										<button class="btn bg-gradient-secondary m-2">Edit</button>
									</a>
									<?php echo form_close(); ?>

									<?php echo form_open('Admin/Jadwal/detail'); ?>
									<a href="<?= base_url('Admin/Jadwal/detail') ?>">
										<input type="hidden" name="id" value="<?= $row['id_jadwal'] ?>">
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