<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <!-- <div class="alert alert-success" role="alert"> -->
        <!-- <h4 class="alert-heading">Your form was successfully submitted!</h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">, be sure to use margin utilities to keep things nice and tidy.</p>
        </div>
        <?php set_value('username');
        ?> -->


    </div>
    <div class="container">
        <div class="alert alert-white" role="alert">
            <p>NIK: <?php echo set_value('nik'); ?></p>
            <hr>
            <p class="mb-0">Nama: <?php echo set_value('nama'); ?></p>
            <hr>
            <p>Email: <?= set_value('email'); ?></p>
            <hr>
            <p class="mb-0">Alamat: <?php echo set_value('alamat'); ?></p>
            <hr>
            <p>Tanggal: <?php echo set_value('tanggal'); ?></p>
            <hr>
            <p class="mb-0">Nama Kereta: <?php echo $nama_jadwal; ?></p>
            <hr>
            <p class="mb-0"></p>

        </div>

        <div class="text-center">
            <button type="submit" class="btn bg-gradient-warning" onClick="return window.print()">Cetak</button>
        </div>
    </div>=
</body>

</html>