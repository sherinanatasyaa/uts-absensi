<?php
$kodeprodi = $_GET['kodeprodi'];
include 'model.php';
$model = new Model();
$data = $model->edit_dataprodi($kodeprodi);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Program Studi</title>
</head>

<body>
    <h1>Edit Program Studi</h1>
    <a href="prodi.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>Kode Prodi</label>
        <br>
        <input type="text" name="kodeprodi" value="<?php echo $data->kodeprodi ?>">
        <br>
        <label>Nama Prodi</label>
        <br>
        <input type="text" name="namaprodi" value="<?php echo $data->namaprodi ?>">
        <br><br>
        <button type="submit" name="submit_edit_prodi">Submit</button>
    </form>
</body>
</html>