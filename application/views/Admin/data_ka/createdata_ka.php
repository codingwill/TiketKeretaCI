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
                    <!-- <form role="form text-left" class="user" method="post" action="<?= base_url(''); ?>"> -->
                    <?php echo validation_errors(); ?>

                    <!-- echo form_open('form'); ?> -->
                    <!-- ke controller form, methodnya index -->

                    <?php echo form_open('Admin/Data_ka/create'); ?>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <?= form_label('Nama Kereta Api', 'namaKA', 'class="text-muted"') ?>
                        </div>
                        <div class="col-sm-9">
                            <?= form_input([
                                'type' => 'text',
                                'name' => 'namaKA',
                                'id' => 'namaKA',
                                'class' => 'form-control',
                                'value' => set_value("namaKA")
                            ]);
                            echo form_error('namaKA', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-3">
                            <?= form_label('Kelas Kereta', 'kelas', 'class="text-muted"') ?>
                        </div>
                        <div class="col-sm-9">
                            <?php
                            foreach ($query->result_array() as $row) {
                                $options[$row['idkelas']] = $row['namakelas'];
                            }
                            ?>
                            <?= form_dropdown('kelas', [
                                $options
                            ], set_value('kelas'), 'class="form-select" id=""') ?>
                        </div>
                    </div>
                    <!-- <label>Kelas

                        <?php
                        // foreach ($query->result_array() as $row) {
                        //     $options[$row['idkelas']] = $row['namakelas'];
                        // }
                        // $kelas = set_value('kelas');
                        // echo form_dropdown('kelas', $options, $kelas);

                        ?>
                    </label> -->

                    <div class="row form-switch" style="padding-left: 0;">
                        <div class="col-sm-3">
                            <?= form_label('Status Kereta', 'status', 'class="text-muted"') ?>
                        </div>
                        <div class="col-sm-9">
                            <div class="demo-radio-button col-sm-9">
                                <?php
                                $data = array(
                                    'name'          => 'status',
                                    'id'            => 'status1',
                                    'value'         => 'Aktif',
                                    'checked'       => FALSE,
                                    'class'         => 'form-check-input',
                                    'type'          => 'radio'
                                );
                                echo form_radio($data); ?>
                                <label class="form-check-label" for="status1">Aktif</label>

                            </div>
                            <div class="demo-radio-button">
                                <?php
                                $data = array(
                                    'name'          => 'status',
                                    'id'            => 'status2',
                                    'value'         => 'Tidak Aktif',
                                    'checked'       => FALSE,
                                    'class'         => 'form-check-input',
                                    'type'          => 'radio'
                                );
                                echo form_radio($data); ?>
                                <label class="form-check-label" for="status2">Tidak Aktif</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <?= form_label('Jumlah Kursi', 'jumlahkursi', 'class="text-muted"') ?>
                        </div>
                        <div class="col-sm-9">
                            <?= form_input([
                                'type' => 'text',
                                'name' => 'jumlahkursi',
                                'id' => 'jumlahkursi',
                                'class' => 'form-control',
                                'value' => set_value("jumlahkursi")
                            ]);
                            echo form_error('jumlahkursi', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                    </div>


                    <div class="mb-3 row">
                        <div class="col-sm-3">
                            <?= form_label('Keterangan', 'keterangan', 'class="text-muted"') ?>
                        </div>
                        <div class="col-sm-9">
                            <?= form_input([
                                'type' => 'textarea',
                                'name' => 'keterangan',
                                'id' => 'keterangan',
                                'class' => 'form-control',
                                'value' => set_value("keterangan")
                            ]);
                            echo form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-warning">Tambahkan</button>
                    </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
</div>