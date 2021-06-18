<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-5">
					<div class="row">
						<div class="col-md-6 d-flex align-items-center">
							<h5 class="mb-0">Jadwal Kereta Api</h5>
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
                                    
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								//notes
								//will: edited layout
								foreach ($tampil->result_array() as $row) {
									echo '<tr>';
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $i .  "</th>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['nama_ka'] .  "</td>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['st_asal'] .  "</td>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['st_tujuan'] .  "</td>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['jamberangkat'] .  "</td>";
									echo '<td class="text-center text-uppercase text-secondary  font-weight-bolder opacity-10">' . $row['jamdatang'] .  "</td>";
									echo '</tr>';
									$i++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>