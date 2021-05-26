<?php
$kodemk = $_GET['kodemk'];
include 'model.php';
$model = new Model();
$data = $model->edit_datamatkul($kodemk);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Edit Mata Kuliah</title>
</head>

<body>
    <h1>Edit Mata Kuliah</h1>
    <a href="matkul.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>Kode Mata Kuliah</label>
        <br>
        <input type="text" name="kodemk" value="<?php echo $data->kodemk ?>">
        <br>
        <label>Nama Mata Kuliah</label>
        <br>
        <input type="text" name="namamk" value="<?php echo $data->namamk ?>">
        <br>
        <label>SKS</label>
        <br>
        <input type="number" name="sks" value="<?php echo $data->sks ?>">
        <br>
        <label>Semester</label>
        <br>
        <input type="number" name="smt" value="<?php echo $data->smt ?>">
        <br>
        <label>Kode Prodi</label>
        <br>
        <input type="text" name="kodeprodi" value="<?php echo $data->kodeprodi ?>">
        <br><br>
        <button type="submit" name="submit_edit_matkul">Submit</button>
    </form>
</body>
</html>