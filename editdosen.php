<?php
$kodedosen = $_GET['kodedosen'];
include 'model.php';
$model = new Model();
$data = $model->edit_datadosen($kodedosen);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Dosen</title>
</head>

<body>
    <h1>Edit Data Dosen</h1>
    <a href="dosen.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>Kode Dosen</label>
        <br>
        <input type="text" name="kodedosen" value="<?php echo $data->kodedosen ?>">
        <br>
        <label>NIDS</label>
        <br>
        <input type="text" name="nids" value="<?php echo $data->nids ?>">
        <br>
        <label>NIPY</label>
        <br>
        <input type="text" name="nipy" value="<?php echo $data->nipy ?>">
        <br>
        <label>Nama Dosen</label>
        <br>
        <input type="text" name="namadosen" value="<?php echo $data->namadosen ?>">
        <br>
        <label>Kode Prodi</label>
        <br>
        <input type="text" name="kodeprodi" value="<?php echo $data->kodeprodi ?>">
        <br><br>
        <button type="submit" name="submit_edit_dosen">Submit</button>
    </form>
</body>
</html>