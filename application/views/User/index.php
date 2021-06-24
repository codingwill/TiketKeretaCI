<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-5">
					<div class="row">
						<div class="col-md-6 d-flex align-items-center">
							<h2 class="mb-0">Dashboard</h2>
						</div>
                            <hr>
                            <div class="card-body m-3 px-0 pt-0 pb-2">
                                <?php
                                    echo "<h4>Selamat datang, <strong>" .$nama. "</strong>!<h4>"; 
                                    
                                ?>
                                <h4>
                                <table>
                                    <tr>
                                        <th width="200">
                                            Nama Lengkap
                                        </th>
                                        <th width="15">
                                            :
                                        </th>
                                        <td>
                                            <div class="font-weight-normal">
                                                <?=$nama?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="200">
                                            Email
                                        </th>
                                        <th width="15">
                                            :
                                        </th>
                                        <td>
                                            <div class="font-weight-normal">
                                                <?=$email?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="200">
                                            NIK
                                        </th>
                                        <th width="15">
                                            :
                                        </th>
                                        <td>
                                            <div class="font-weight-normal">
                                                <?=$nik?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="200">
                                            Role
                                        </th>
                                        <th width="15">
                                            :
                                        </th>
                                        <td>
                                            <div class="font-weight-normal">
                                                <?=$role == 1 ? "Admin" : "User";?>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                </h4>
                            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

