<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-5">
                    <div class="row">
                        <div class="col-md-6 d-flex text-center">
                            <h5 class="mb-0">Tambah Jadwal Kereta Api</h5>
                        </div>
                    </div>
                </div>
                <div class="card z-index-0">
                    <div class="card-body px-4 pt-0 pb-2">
                        <!-- <form role="form text-left" class="user" method="post" action="<?= base_url(''); ?>"> -->
                        <?php echo validation_errors(); ?>

                        <!-- echo form_open('form'); ?> -->
                        <!-- ke controller form, methodnya index -->

                        <?php echo form_open('Admin/Jadwal/create'); ?>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <?= form_label('Nama Kereta Api', 'id_KA', 'class="text-muted"') ?>
                            </div>
                            
                            <div class="col-sm-9">
                                    <?php
                                    foreach ($query->result_array() as $row) {
                                        //will's note:
                                        //ini harusnya yang jadi value ID bukan NAMA KA, karena PK nya ID
                                        $options[$row['id_KA']] = $row['nama_KA'];
                                    }
                                    ?>
                                    <?= form_dropdown('id_KA', [
                                        $options
                                    ], set_value('id_KA'), 'class="form-select" id="id_KA"') ?>

                                    
                                    <?php
                                    echo form_error('id_KA', '<small class="text-danger pl-3">', '</small>'); 
                                    // foreach ($query->result_array() as $row) {
                                    //     $options[$row['nama_KA']] = $row['nama_KA'];
                                    // }
                                    // $nama_ka = set_value('nama_ka');
                                    // echo form_dropdown('nama_ka', $options, $nama_ka);

                                    ?>
                                </div>

                            
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3">
                                <?= form_label('Stasiun Asal', 'st_asal', 'class="text-muted"') ?>
                            </div>
                            <div class="col-sm-9">
                                <?= form_input([
                                    'type' => 'text',
                                    'name' => 'st_asal',
                                    'id' => 'st_asal',
                                    'class' => 'form-control',
                                    'value' => set_value("st_asal")
                                ]);
                                echo form_error('st_asal', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3">
                                <?= form_label('Stasiun Tujuan', 'st_tujuan', 'class="text-muted"') ?>
                            </div>
                            <div class="col-sm-9">
                                <?= form_input([
                                    'type' => 'text',
                                    'name' => 'st_tujuan',
                                    'id' => 'st_tujuan',
                                    'class' => 'form-control',
                                    'value' => set_value("st_tujuan")
                                ]);
                                echo form_error('st_tujuan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3">
                                <?= form_label('Jam Berangkat', 'jamberangkat', 'class="text-muted"') ?>
                            </div>
                            <div class="col-sm-9">
                                <?= form_input([
                                    'type' => 'time',
                                    'name' => 'jamberangkat',
                                    'id' => 'jamberangkat',
                                    'class' => 'form-control',
                                    'value' => set_value("jamberangkat")
                                ]);
                                echo form_error('jamberangkat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3">
                                <?= form_label('Jam Datang', 'jamdatang', 'class="text-muted"') ?>
                            </div>
                            <div class="col-sm-9">
                                <?= form_input([
                                    'type' => 'time',
                                    'name' => 'jamdatang',
                                    'id' => 'jamdatang',
                                    'class' => 'form-control',
                                    'value' => set_value("jamdatang")
                                ]);
                                echo form_error('jamdatang', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-warning">Tambahkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>