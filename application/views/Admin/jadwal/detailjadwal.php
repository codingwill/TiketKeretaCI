<?php
foreach ($data as $row) {
?>
    <div class="card text-dark bg-light mb-3" style="max-width: 38rem;">
        <div class="card-header"><?= $row->nama_ka ?></div>
        <div class="card-body">
            <h5 class="card-title">Informasi Jadwal Kereta</h5>
            <p class="card-text">
            <table>
                <tr>
                    <td width="230">Nama Kereta Api</td>
                    <td><?php echo $row->nama_ka; ?></td>
                </tr>
                <tr>
                    <td width="230">Stasiun Asal</td>
                    <td><?php echo $row->st_asal; ?></td>
                </tr>
                <tr>
                    <td width="230">Stasiun Tujuan</td>
                    <td><?php echo $row->st_tujuan; ?></td>

                </tr>
                <tr>
                    <td width="230">Jam Berangkat</td>
                    <td><?php echo $row->jamberangkat; ?></td>
                </tr>
                <tr>
                    <td width="230">Jam Datang</td>
                    <td><?php echo $row->jamdatang; ?></td>
                </tr>

            </table>
            </p>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        </div>
    </div>

<?php } ?>