<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Absensi Mahasiswa</title>
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

<h1><p style="text-align:center">Absensi Mahasiswa</h1></p>
        <a href="createabsen.php">Tambah Absen</a>
        <br>
        <a href="printabsen.php" target="_blank">Cetak Absensi</a>
        <br>
        <table border ="1">
            <thead>
                <tr>
                <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Id Absen</th>
                    <th>Tanggal Absen</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Kode Dosen</th>
                    <th>Sesi</th>
                    <th>Kelas Sesi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_dataabsen();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->idabsen ?></td>
                            <td><?= $data->tglabsen ?></td>
                            <td><?= $data->masuk ?></td>
                            <td><?= $data->keluar ?></td>
                            <td><?= $data->kodedosen ?></td>
                            <td><?= $data->sesi ?></td>
                            <td><?= $data->kelassesi ?></td>
                            <td>
                                <a name="edit" id="edit" href="editabsen.php?idabsen=<?= $data->idabsen ?>">Edit</a>
                                <a name="hapus" id="hapus" href="proses.php?idabsen=<?= $data->idabsen ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                    <tr>
                    <td colspan="8">Belum Ada Rekap Absensi</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html> 