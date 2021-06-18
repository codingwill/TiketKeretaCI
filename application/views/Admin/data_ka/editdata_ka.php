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
							<h5 class="mb-0">Edit Data Kereta Api</h5>
						</div>
                    </div>
                </div>
                <div class="card z-index-0">
                    <div class="card-body px-4 pt-0 pb-2">
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo $row->id_KA; ?>" />
                            <table width="600" border="0" cellspacing="5" cellpadding="5">
                                <tr>
                                    <td width="230">Nama Kereta </td>
                                    <td width="329"><input type="text" class="form-control" name="nama_KA" value="<?php echo $row->nama_KA; ?>" /></td>
                                </tr>

                                <tr>
                                    <td width="230">Status</td>
                                    <td width="329">


                                        <?php
                                        if ($row->status == "Aktif") {
                                        ?>
                                            <label class="form-check-label" for="status">Aktif</label>
                                            <?php
                                            echo form_radio(
                                                'status',
                                                'Aktif',
                                                true
                                            );
                                            ?>
                                            <label class="form-check-label" for="status">Tidak Aktif</label>
                                        <?php
                                            echo form_radio('status', 'Tidak Aktif', false);
                                        } else {
                                        ?>
                                            <label class="form-check-label" for="status">Aktif</label>
                                            <?php
                                            echo form_radio(
                                                'status',
                                                'Aktif',
                                                false
                                            );
                                            ?>
                                            <label class="form-check-label" for="status">Tidak Aktif</label>
                                        <?php
                                            echo form_radio('status', 'Tidak Aktif', true);
                                        }
                                        ?>

                                    </td>
                                </tr>
                                
                                <tr>
                                    <td width="230">Jumlah Kursi</td>
                                    <td width="329"><input type="text" class="form-control" name="jumlahkursi" value="<?php echo $row->jumlahkursi; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width="230">Kelas</td>
                                    <td width="329">
                                        <?php
                                        foreach ($query->result_array() as $row) {
                                            $options[$row['idkelas']] = $row['namakelas'];
                                        }
                                        $kelas = set_value('kelas');
                                        echo form_dropdown('kelas', $options, $kelas);

                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="230">Keterangan</td>
                                    <td width="329">
                                        <?php
                                        foreach ($data as $row) { ?>
                                            <textarea class="form-control" <?php
                                                                            echo form_textarea('keterangan', $row->keterangan, 'small');
                                                                            ?> </textarea>
                                            <?php
                                        }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="right">
                                            <input onclick="return confirm('Anda yakin mau mengedit item ini ?')" type="submit" name="edit" class="btn btn-primary" value="edit" />
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