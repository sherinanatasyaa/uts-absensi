<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Mata Kuliah</title>
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

<h1><p style="text-align:center">Mata Kuliah</h1></p>
        <a href="creatematkul.php">Tambah Mata Kuliah</a>
        <br>
        <a href="printmatkul.php" target="_blank">Cetak Mata Kuliah</a>
        <br>
        <table border ="1">
            <thead>
                <tr>
                <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Mata Kuliah</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Kode Prodi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_datamatkul();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->kodemk ?></td>
                            <td><?= $data->namamk ?></td>
                            <td><?= $data->sks?></td>
                            <td><?= $data->smt ?></td>
                            <td><?= $data->kodeprodi ?></td>
                            <td>
                                <a name="edit" id="edit" href="editmatkul.php?kodemk=<?= $data->kodemk ?>">Edit</a>
                                <a name="hapus" id="hapus" href="proses.php?kodemk=<?= $data->kodemk ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                    <tr>
                    <td colspan="6">Belum Ada Rekap Mata Kuliah</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html> 