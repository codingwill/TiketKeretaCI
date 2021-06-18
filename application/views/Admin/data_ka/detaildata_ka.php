<?php
foreach ($data as $row) {
?>
    <div class="card text-dark bg-light mb-3" style="max-width: 38rem;">
        <div class="card-header"><?= $row->nama_KA ?></div>
        <div class="card-body">
            <h5 class="card-title">Informasi Detail</h5>
            <p class="card-text">
            <table>
                <tr>
                    <td width="230">Nama Kereta </td>
                    <td><?php echo $row->nama_KA; ?></td>
                </tr>
                <tr>
                    <td width="230">Kelas</td>
                    <td><?php echo $row->namakelas; ?></td>
                </tr>
                <tr>
                    <td width="230">Status</td>
                    <td><?php echo $row->status; ?></td>

                </tr>
                <tr>
                    <td width="230">Jumlah Kursi</td>
                    <td><?php echo $row->jumlahkursi; ?></td>
                </tr>
                <tr>
                    <td width="230">Keterangan</td>
                    <td><?php echo $row->keterangan; ?></td>
                </tr>

            </table>
            </p>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
        </div>
    </div>

<?php } ?>