<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

//tabel data jadwal
public function insert_datajadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
{
    $sql = "INSERT INTO tbljadwal (id, jadwalid, kodedosen, hari, thnakademik, semester, kodemk, sesi, jammasuk, jamkeluar, kelas, ruang, status, kelassesi) VALUES ('$id', '$jadwalid', '$kodedosen', '$hari', '$thnakademik', '$semester', '$kodemk', '$sesi', '$jammasuk', '$jamkeluar', '$kelas', '$ruang', '$status', '$kelassesi')";
    $this->conn->query($sql);
    return $sql;
}
public function tampil_datajadwal()
    {
        $sql = "SELECT * FROM tbljadwal"; 
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] =$obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
public function edit_datajadwal($id)
    {
        $sql = "SELECT * FROM tbljadwal WHERE id='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris =$obj;
        }
            return $baris;
    }
public function update_datajadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
    {
        $sql = "UPDATE tbljadwal SET jadwalid='$jadwalid', kodedosen='$kodedosen', hari='$hari', thnakademik='$thnakademik', semester='$semester', kodemk='$kodemk', sesi='$sesi', jammasuk='$jammasuk', jamkeluar='$jamkeluar', kelas='$kelas', ruang='$ruang', status='$status', kelassesi='$kelassesi' WHERE id='$id'";
        $this->conn->query($sql);
    }
    public function delete_datajadwal($id)
    {
        $sql = "DELETE FROM tbljadwal WHERE id='$id'";
        $this->conn->query($sql);
    }

//tabel data absen
public function insert_dataabsen ($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi)
{
    $sql = "INSERT INTO tblabsen (idabsen, tglabsen, masuk, keluar, kodedosen, sesi, kelassesi) VALUES ('$idabsen', '$tglabsen', '$masuk', '$keluar', '$kodedosen', '$sesi', '$kelassesi')";
    $this->conn->query($sql);
    return $sql;
}
public function tampil_dataabsen()
{
    $sql = "SELECT * FROM tblabsen"; 
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris[] =$obj;
    }
    if (!empty($baris)) {
        return $baris;
    }
}
public function edit_dataabsen($idabsen)
{
    $sql = "SELECT * FROM tblabsen WHERE idabsen='$idabsen'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris = $obj;
    }
    return $baris;
}
public function update_dataabsen($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi)
{
    $sql = "UPDATE tblabsen SET tglabsen='$tglabsen', masuk='$masuk', keluar='$keluar', kodedosen='$kodedosen', sesi='$sesi', kelassesi='$kelassesi' WHERE idabsen='$idabsen'";
    $this->conn->query($sql);
}
public function delete_dataabsen($idabsen)
{
    $sql = "DELETE FROM tblabsen WHERE idabsen='$idabsen'";
    $this->conn->query($sql);
}

//tabel data mata kuliah
public function insert_datamatkul ($kodemk, $namamk, $sks, $smt, $kodeprodi)
{
    $sql = "INSERT INTO tblmatkul (kodemk, namamk, sks, smt, kodeprodi) VALUES ('$kodemk', '$namamk', '$sks', '$smt', '$kodeprodi')";
    $this->conn->query($sql);
    return $sql;
}
public function tampil_datamatkul()
{
    $sql = "SELECT * FROM tblmatkul"; 
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris[] =$obj;
    }
    if (!empty($baris)) {
        return $baris;
    }
}
public function edit_datamatkul($kodemk)
{
    $sql = "SELECT * FROM tblmatkul WHERE kodemk='$kodemk'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris = $obj;
    }
    return $baris;
}
public function update_datamatkul($kodemk, $namamk, $sks, $smt, $kodeprodi)
    {
        $sql = "UPDATE tbljadwal SET namamk='$namamk', sks='$sks', smt='$smt', kodeprodi='$kodeprodi' WHERE kodemk='$kodemk'";
        $this->conn->query($sql);
    }
public function delete_datamatkul($kodemk)
    {
        $sql = "DELETE FROM tbljadwal WHERE kodemk='$kodemk'";
        $this->conn->query($sql);
    }

//tabel data prodi
public function insert_dataprodi ($kodeprodi, $namaprodi)
{
    $sql = "INSERT INTO tblprodi (kodeprodi, namaprodi) VALUES ('$kodeprodi', '$namaprodi')";
    $this->conn->query($sql);
    return $sql;
}
public function tampil_dataprodi()
{
    $sql = "SELECT * FROM tblprodi"; 
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris[] =$obj;
    }
    if (!empty($baris)) {
        return $baris;
    }
}
public function edit_dataprodi($kodeprodi)
{
    $sql = "SELECT * FROM tblprodi WHERE kodeprodi='$kodeprodi'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris = $obj;
    }
    return $baris;
}
public function update_dataprodi($kodeprodi, $namaprodi)
{
    $sql = "UPDATE tblprodi SET namaprodi='$namaprodi' WHERE kodeprodi='$kodeprodi'";
    $this->conn->query($sql);
}
public function delete_dataprodi($kodeprodi)
{
    $sql = "DELETE FROM tblprodi WHERE kodeprodi='$kodeprodi'";
    $this->conn->query($sql);
}

//tabel data dosen
public function insert_datadosen ($kodedosen, $nids, $nipy, $namadosen, $kodeprodi)
{
    $sql = "INSERT INTO tbldosen (kodedosen, nids, nipy, namadosen, kodeprodi) VALUES ('$kodedosen', '$nids', '$nipy', '$namadosen', '$kodeprodi')";
    $this->conn->query($sql);
    return $sql;
}
public function tampil_datadosen()
{
    $sql = "SELECT * FROM tbldosen"; 
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris[] =$obj;
    }
    if (!empty($baris)) {
        return $baris;
    }
}
public function edit_datadosen($kodedosen)
{
    $sql = "SELECT * FROM tbldosen WHERE kodedosen='$kodedosen'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris = $obj;
    }
    return $baris;
}
public function update_datadosen($kodedosen, $nids, $nipy, $namadosen, $kodeprodi)
{
    $sql = "UPDATE tbldosen SET nids='$nids', nipy='$nipy', namadosen='$namadosen', kodeprodi='$kodeprodi' WHERE kodedosen='$kodedosen'";
    $this->conn->query($sql);
}
public function delete_datadosen($kodedosen)
{
    $sql = "DELETE FROM tbldosen WHERE kodedosen='$kodedosen'";
    $this->conn->query($sql);
}
}