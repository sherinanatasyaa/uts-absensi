<?php
include 'model.php';

//tabel data jadwal
if (isset($_POST['submit_simpan_jadwal'])) {
    $id = $_POST['id'];
    $jadwalid = $_POST['jadwalid'];
    $kodedosen = $_POST['kodedosen'];
    $hari = $_POST['hari'];
    $thnakademik = $_POST['thnakademik'];
    $semester = $_POST['semester'];
    $kodemk = $_POST['kodemk'];
    $sesi = $_POST['sesi'];
    $jammasuk = $_POST['jammasuk'];
    $jamkeluar = $_POST['jamkeluar'];
    $kelas = $_POST['kelas'];
    $ruang = $_POST['ruang'];
    $status = $_POST['status'];
    $kelassesi = $_POST['kelassesi'];
    $model = new Model();
    $model->insert_datajadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
    header('location:jadwal.php');
}
if (isset($_POST['submit_edit_jadwal'])) {
    $id = $_POST['id'];
    $jadwalid = $_POST['jadwalid'];
    $kodedosen = $_POST['kodedosen'];
    $hari = $_POST['hari'];
    $thnakademik = $_POST['thnakademik'];
    $semester = $_POST['semester'];
    $kodemk = $_POST['kodemk'];
    $sesi = $_POST['sesi'];
    $jammasuk = $_POST['jammasuk'];
    $jamkeluar = $_POST['jamkeluar'];
    $kelas = $_POST['kelas'];
    $ruang = $_POST['ruang'];
    $status = $_POST['status'];
    $kelassesi = $_POST['kelassesi'];
    $model = new Model();
    $model->update_datajadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
    header('location:jadwal.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_datajadwal($id);
    header('location:jadwal.php');
}

//tabel data absen
if (isset($_POST['submit_simpan_absen'])) {
    $idabsen = $_POST['idabsen'];
    $tglabsen = $_POST['tglabsen'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $kodedosen = $_POST['kodedosen'];
    $sesi = $_POST['sesi'];
    $kelassesi = $_POST['kelassesi'];
    $model = new Model();
    $model->insert_dataabsen($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi);
    header('location:absen.php');
}
if (isset($_POST['submit_edit_absen'])) {
    $idabsen = $_POST['idabsen'];
    $tglabsen = $_POST['tglabsen'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $kodedosen = $_POST['kodedosen'];
    $sesi = $_POST['sesi'];
    $kelassesi = $_POST['kelassesi'];
    $model = new Model();
    $model->update_dataabsen($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi);
    header('location:absen.php');
}
if (isset($_GET['idabsen'])) {
    $idabsen = $_GET['idabsen'];
    $model = new Model();
    $model->delete_dataabsen($idabsen);
    header('location:absen.php');
}

//tabel data mata kuliah
if (isset($_POST['submit_simpan_matkul'])) {
    $kodemk = $_POST['kodemk'];
    $namamk = $_POST['namamk'];
    $sks = $_POST['sks'];
    $smt = $_POST['smt'];
    $kodeprodi = $_POST['kodeprodi'];
    $model = new Model();
    $model->insert_datamatkul($kodemk, $namamk, $sks, $smt, $kodeprodi);
    header('location:matkul.php');
}
if (isset($_POST['submit_edit_matkul'])) {
    $kodemk = $_POST['kodemk'];
    $namamk = $_POST['namamk'];
    $sks = $_POST['sks'];
    $smt = $_POST['smt'];
    $kodeprodi = $_POST['kodeprodi'];
    $model = new Model();
    $model->update_datamatkul($kodemk, $namamk, $sks, $smt, $kodeprodi);
    header('location:matkul.php');
}
if (isset($_GET['kodemk'])) {
    $kodemk = $_GET['kodemk'];
    $model = new Model();
    $model->delete_datamatkul($kodemk);
    header('location:matkul.php');
}

//tabel data prodi
if (isset($_POST['submit_simpan_prodi'])) {
    $kodeprodi = $_POST['kodeprodi'];
    $namaprodi = $_POST['namaprodi'];
    $model = new Model();
    $model->insert_dataprodi($kodeprodi, $namaprodi);
    header('location:prodi.php');
}
if (isset($_POST['submit_edit_prodi'])) {
    $kodeprodi = $_POST['kodeprodi'];
    $namaprodi = $_POST['namaprodi'];
    $model = new Model();
    $model->update_dataprodi($kodeprodi, $namaprodi);
    header('location:prodi.php');
}
if (isset($_GET['kodeprodi'])) {
    $kodeprodi = $_GET['kodeprodi'];
    $model = new Model();
    $model->delete_dataprodi($kodeprodi);
    header('location:prodi.php');
}

//tabel data dosen
if (isset($_POST['submit_simpan_dosen'])) {
    $kodedosen = $_POST['kodedosen'];
    $nids = $_POST['nids'];
    $nipy = $_POST['nipy'];
    $namadosen = $_POST['namadosen'];
    $kodeprodi = $_POST['kodeprodi'];
    $model = new Model();
    $model->insert_datadosen($kodedosen, $nids, $nipy, $namadosen, $kodeprodi);
    header('location:dosen.php');
}
if (isset($_POST['submit_edit_dosen'])) {
    $kodedosen = $_POST['kodedosen'];
    $nids = $_POST['nids'];
    $nipy = $_POST['nipy'];
    $namadosen = $_POST['namadosen'];
    $kodeprodi = $_POST['kodeprodi'];
    $model = new Model();
    $model->update_datadosen($kodedosen, $nids, $nipy, $namadosen, $kodeprodi);
    header('location:dosen.php');
}
if (isset($_GET['kodedosen'])) {
    $kodedosen = $_GET['kodedosen'];
    $model = new Model();
    $model->delete_datadosen($kodedosen);
    header('location:dosen.php');
}