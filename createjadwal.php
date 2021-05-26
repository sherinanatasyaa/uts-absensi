<!doctype html>
<html lang="en">

<head>
    <title>Tambah Jadwal Perkuliahan</title>
</head>

<body>
    <h1>Tambah Jadwal Perkuliahan</h1>
    <a href="jadwal.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>Id</label>
        <br>
        <input type="number" name="id">
        <br>
        <label>Jadwal Id</label>
        <br>
        <input type="number" name="jadwalid">
        <br>
        <label>Kode Dosen</label>
        <br>
        <input type="text" name="kodedosen">
        <br>
        <label>Hari</label>
        <br>
        <input type="text" name="hari">
        <br>
        <label>Tahun Akademik</label>
        <br>
        <input type="text" name="thnakademik">
        <br>
        <label>Semester</label>
        <br>
        <input type="text" name="semester">
        <br>
        <label>Kode MK</label>
        <br>
        <input type="text" name="kodemk">
        <br>
        <label>Sesi</label>
        <br>
        <input type="text" name="sesi">
        <br>
        <label>Jam Masuk</label>
        <br>
        <input type="time" name="jammasuk">
        <br>
        <label>Jam Keluar</label>
        <br>
        <input type="time" name="jamkeluar">
        <br>
        <label>Kelas</label>
        <br>
        <input type="text" name="kelas">
        <br>
        <label>Ruang</label>
        <br>
        <input type="text" name="ruang">
        <br>
        <label>Status</label>
        <br>
        <input type="int" name="status">
        <br>
        <label>Kelas Sesi</label>
        <br>
        <input type="text" name="kelassesi">
        <br><br>
        <button type="submit" name="submit_simpan_jadwal">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>