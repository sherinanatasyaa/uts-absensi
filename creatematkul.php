<!doctype html>
<html lang="en">

<head>
    <title>Tambah Mata Kuliah</title>
</head>

<body>
    <h1>Tambah Mata Kuliah</h1>
    <a href="matkul.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>Kode Mata Kuliah</label>
        <br>
        <input type="text" name="kodemk">
        <br>
        <label>Nama Mata Kuliah</label>
        <br>
        <input type="text" name="namamk">
        <br>
        <label>SKS</label>
        <br>
        <input type="number" name="sks">
        <br>
        <label>Semester</label>
        <br>
        <input type="number" name="smt">
        <br>
        <label>Kode Prodi</label>
        <br>
        <input type="text" name="kodeprodi">
        <br><br>
        <button type="submit" name="submit_simpan_matkul">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>