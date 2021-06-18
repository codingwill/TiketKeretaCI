<?php
foreach ($data as $row) {
    $_POST['id'];
?>
<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-5">
					<div class="row">
						<div class="col-md-6 d-flex align-items-center">
							<h5 class="mb-0">Edit Jadwal Kereta Api</h5>
						</div>
                    </div>
                </div>
                <div class="card z-index-0">
                    <div class="card-body px-4 pt-0 pb-2">
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo $row->id_jadwal; ?>" />
                            <table width="600" border="0" cellspacing="5" cellpadding="5">
                                <tr>
                                    <td width="230">Nama Kereta Api</td>
                                    <td width="329"><input type="text" class="form-control" name="nama_ka" value="<?php echo $row->nama_ka; ?>" /></td>
                                </tr>

                                <tr>
                                    <td width="230">Stasiun Asal</td>
                                    <td width="329"><input type="text" class="form-control" name="st_asal" value="<?php echo $row->st_asal; ?>" /></td>
                                </tr>

                                <tr>
                                    <td width="230">Stasiun Asal</td>
                                    <td width="329"><input type="text" class="form-control" name="st_tujuan" value="<?php echo $row->st_tujuan; ?>" /></td>
                                </tr>

                                <tr>
                                    <td width="230">Jam Berangkat </td>
                                    <td width="329"><input type="time" class="form-control" name="jamberangkat" value="<?php echo $row->jamberangkat; ?>" /></td>
                                </tr>

                                <tr>
                                    <td width="230">Jam Datang </td>
                                    <td width="329"><input type="time" class="form-control" name="jamdatang" value="<?php echo $row->jamdatang; ?>" /></td>
                                </tr>

                                <tr>
                                    <td colspan="2" align="right">
                                        <input onclick="return confirm('Anda yakin mau mengedit item ini ?')" type="submit" name="edit" class="btn bg-gradient-secondary" value="edit" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <?php } ?>