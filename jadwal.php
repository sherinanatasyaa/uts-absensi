<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Jadwal Perkuliahan Universitas CIC</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <li class="active"><a href="jadwal.php">Jadwal<a></li>
                <li><a href="absen.php">Absensi</a></li>
                <li><a href="matkul.php">Mata Kuliah</a></li>
                <li><a href="prodi.php">Program Studi</a></li>
                <li><a href="dosen.php">Dosen</a></li>
            </ul>
        </div>
</nav>

<h1><p style="text-align:center">Jadwal Perkuliahan</h1></p>
        <a href="createjadwal.php">Tambah Jadwal</a>
        <br>
        <a href="printjadwal.php" target="_blank">Cetak Jadwal</a>
        <br>
        <table border ="1">
            <thead>
                <tr>
                <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Id</th>
                    <th>Jadwal Id</th>
                    <th>Kode Dosen</th>
                    <th>Hari</th>
                    <th>Tahun Akademik</th>
                    <th>Semester</th>
                    <th>Kode MK</th>
                    <th>Sesi</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Kelas</th>
                    <th>Ruang</th>
                    <th>Status</th>
                    <th>Kelas Sesi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_datajadwal();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->id ?></td>
                            <td><?= $data->jadwalid ?></td>
                            <td><?= $data->kodedosen ?></td>
                            <td><?= $data->hari ?></td>
                            <td><?= $data->thnakademik ?></td>
                            <td><?= $data->semester ?></td>
                            <td><?= $data->kodemk ?></td>
                            <td><?= $data->sesi ?></td>
                            <td><?= $data->jammasuk ?></td>
                            <td><?= $data->jamkeluar ?></td>
                            <td><?= $data->kelas ?></td>
                            <td><?= $data->ruang ?></td>
                            <td><?= $data->sesi ?></td>
                            <td><?= $data->kelassesi ?></td>
                            <td>
                                <a name="edit" id="edit" href="editjadwal.php?id=<?= $data->id ?>">Edit</a>
                                <a name="hapus" id="hapus" href="proses.php?id=<?= $data->id ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                    <tr>
                    <td colspan="16">Belum Ada Rekap Jadwal Perkuliahan</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html> 