<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-5">
                    <div class="row">
                        <div class="col-md-6 d-flex text-center">
                            <h2 class="mb-0">Pemesanan</h2>
                        </div>
                    </div>
                </div>
                <div class="card z-index-0">
                    <div class="card-body px-4 pt-0 pb-2">
                        <?php echo validation_errors(); ?>

                        <!-- echo form_open('form'); ?> -->
                        <!-- ke controller form, methodnya index -->
                        <?php echo form_open('user/pemesanan/insert'); ?>
                        <form role="form text-left" class="user" method="post" action="<?= base_url('user/pemesanan/insert'); ?>">

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <?= form_label('NIK', '', 'class="text-muted"') ?>
                                </div>
                                <div class="col-sm-9">
                                    <?= form_input([
                                        'type' => 'text',
                                        'name' => 'nik',
                                        'id' => 'nik',
                                        'class' => 'form-control',
                                        'value' => set_value("nik", $nik),
                                        'readOnly' => 'true'
                                    ]);
                                    //echo form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <?= form_label('Nama', 'nama', 'class="text-muted"') ?>
                                </div>
                                <div class="col-sm-9">
                                    <?= form_input([
                                        'type' => 'text',
                                        'name' => 'nama',
                                        'id' => 'nama',
                                        'class' => 'form-control',
                                        'value' => set_value("nama", $nama),
                                        'readOnly' => 'true'
                                    ]);
                                    //echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <?= form_label('Email', 'email', 'class="text-muted"') ?>
                                </div>
                                <div class="col-sm-9">
                                    <?= form_input([
                                        'type' => 'text',
                                        'name' => 'email',
                                        'id' => 'email',
                                        'class' => 'form-control',
                                        'value' => set_value("email", $email),
                                        'readOnly' => 'true'
                                    ]);
                                    //echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <?= form_label('Alamat', 'alamat', 'class="text-muted"') ?>
                                </div>
                                <div class="col-sm-9">
                                    <?= form_input([
                                        'type' => 'text',
                                        'name' => 'alamat',
                                        'id' => 'alamat',
                                        'class' => 'form-control',
                                        'value' => set_value("alamat")
                                    ]);
                                    echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <?= form_label('Tanggal', 'tanggal', 'class="text-muted"') ?>
                                </div>
                                <div class="col-sm-9">
                                    <?= form_input([
                                        'type' => 'date',
                                        'name' => 'tanggal',
                                        'id' => 'tanggal',
                                        'class' => 'form-control',
                                        'value' => set_value("tanggal")
                                    ]);
                                    echo form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                    <?= form_label('Nama Kereta', 'nama_ka', 'class="text-muted"') ?>
                                </div>
                                <div class="col-sm-9">
                                    <?php
                                    foreach ($query->result_array() as $row) {
                                        if ($row["sisa_kursi"] > 0) {
                                            $options[$row['id_jadwal']] = $row['nama_KA'] . " (" . $row["st_asal"] . " - " . $row["st_tujuan"] . ")"; 
                                        }
                                    }
                                    ?>
                                    <?= form_dropdown('nama_ka', [
                                        $options
                                    ], set_value('nama_ka'), 'class="form-select" id="nama_ka"');
                                    echo form_error('nama_ka', '<small class="text-danger pl-3">', '</small>'); ?>
                                    
                                    

                                    <?php
                                    // foreach ($query->result_array() as $row) {
                                    //     $options[$row['nama_KA']] = $row['nama_KA'];
                                    // }
                                    // $nama_ka = set_value('nama_ka');
                                    // echo form_dropdown('nama_ka', $options, $nama_ka);

                                    ?>
                                </div>
                            </div>




                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-warning">Pesan</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>