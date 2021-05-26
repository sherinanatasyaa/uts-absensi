-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 12:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblabsen`
--

CREATE TABLE `tblabsen` (
  `idabsen` int(10) NOT NULL,
  `tglabsen` date DEFAULT NULL,
  `masuk` time DEFAULT NULL,
  `keluar` time DEFAULT NULL,
  `kodedosen` varchar(10) DEFAULT NULL,
  `sesi` varchar(2) DEFAULT NULL,
  `kelassesi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblabsen`
--

INSERT INTO `tblabsen` (`idabsen`, `tglabsen`, `masuk`, `keluar`, `kodedosen`, `sesi`, `kelassesi`) VALUES
(202001, '2021-05-28', '13:30:00', '14:30:00', 'FEB001', '2', 'Siang'),
(202101, '2021-05-26', '09:30:00', '11:30:00', 'FTI001', '1', 'Pagi'),
(202102, '2021-05-27', '07:30:00', '09:03:00', 'FTI002', '1', 'Pagi');

-- --------------------------------------------------------

--
-- Table structure for table `tbldosen`
--

CREATE TABLE `tbldosen` (
  `kodedosen` varchar(10) NOT NULL,
  `nids` varchar(15) DEFAULT NULL,
  `nipy` varchar(15) DEFAULT NULL,
  `namadosen` varchar(20) DEFAULT NULL,
  `kodeprodi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldosen`
--

INSERT INTO `tbldosen` (`kodedosen`, `nids`, `nipy`, `namadosen`, `kodeprodi`) VALUES
('FEB001', '8084143', '4143', 'Anggita Febrianti', '2003'),
('FTI001', '9594342', '4342', 'Sherina Natasya', '2001'),
('FTI002', '9595050', '5050', 'Gabriel Tomaro', '2002');

-- --------------------------------------------------------

--
-- Table structure for table `tbljadwal`
--

CREATE TABLE `tbljadwal` (
  `id` int(11) NOT NULL,
  `jadwalid` int(11) DEFAULT NULL,
  `kodedosen` varchar(10) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `thnakademik` varchar(10) DEFAULT NULL,
  `semester` varchar(5) DEFAULT NULL,
  `kodemk` varchar(15) DEFAULT NULL,
  `sesi` varchar(2) DEFAULT NULL,
  `jammasuk` time DEFAULT NULL,
  `jamkeluar` time DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `ruang` varchar(10) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `kelassesi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljadwal`
--

INSERT INTO `tbljadwal` (`id`, `jadwalid`, `kodedosen`, `hari`, `thnakademik`, `semester`, `kodemk`, `sesi`, `jammasuk`, `jamkeluar`, `kelas`, `ruang`, `status`, `kelassesi`) VALUES
(10102021, 100, 'FTI001', 'Senin', '2020/2021', '2', 'SIB432', '1', '13:30:00', '15:00:00', 'Reguler', 'Lab 2', 1, 'Pagi '),
(10102022, 101, 'FEB001', 'Selasa', '2020/2021', '4', 'MB123', '2', '08:00:00', '10:00:00', 'Reguler', 'Ruang 107', 1, 'Pagi'),
(10102023, 103, 'FTI002', 'Rabu', '2020/2021', '6', 'SI302', '1', '14:30:00', '16:30:00', 'Reguler', 'Auditorium', 1, 'Sore');

-- --------------------------------------------------------

--
-- Table structure for table `tblmatkul`
--

CREATE TABLE `tblmatkul` (
  `kodemk` varchar(15) NOT NULL,
  `namamk` varchar(30) DEFAULT NULL,
  `sks` int(2) DEFAULT NULL,
  `smt` int(1) DEFAULT NULL,
  `kodeprodi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmatkul`
--

INSERT INTO `tblmatkul` (`kodemk`, `namamk`, `sks`, `smt`, `kodeprodi`) VALUES
('MB123', 'Akuntansi Pajak', 4, 6, '2003'),
('SI302', 'Bahasa Inggris 3', 2, 4, '2001'),
('SIB432', 'Pemrograman Internet 2', 4, 4, '2001');

-- --------------------------------------------------------

--
-- Table structure for table `tblprodi`
--

CREATE TABLE `tblprodi` (
  `kodeprodi` varchar(10) NOT NULL,
  `namaprodi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprodi`
--

INSERT INTO `tblprodi` (`kodeprodi`, `namaprodi`) VALUES
('2001', 'Sistem Informasi'),
('2002', 'Teknik Informatika'),
('2003', 'Manajemen Bisnis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblabsen`
--
ALTER TABLE `tblabsen`
  ADD PRIMARY KEY (`idabsen`),
  ADD KEY `kodedosen` (`kodedosen`);

--
-- Indexes for table `tbldosen`
--
ALTER TABLE `tbldosen`
  ADD PRIMARY KEY (`kodedosen`);

--
-- Indexes for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kodedosen` (`kodedosen`),
  ADD KEY `kodemk` (`kodemk`);

--
-- Indexes for table `tblmatkul`
--
ALTER TABLE `tblmatkul`
  ADD PRIMARY KEY (`kodemk`),
  ADD KEY `kodeprodi` (`kodeprodi`);

--
-- Indexes for table `tblprodi`
--
ALTER TABLE `tblprodi`
  ADD PRIMARY KEY (`kodeprodi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblabsen`
--
ALTER TABLE `tblabsen`
  ADD CONSTRAINT `tblabsen_ibfk_1` FOREIGN KEY (`kodedosen`) REFERENCES `tbldosen` (`kodedosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD CONSTRAINT `tbljadwal_ibfk_1` FOREIGN KEY (`kodedosen`) REFERENCES `tbldosen` (`kodedosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbljadwal_ibfk_2` FOREIGN KEY (`kodemk`) REFERENCES `tblmatkul` (`kodemk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblmatkul`
--
ALTER TABLE `tblmatkul`
  ADD CONSTRAINT `tblmatkul_ibfk_1` FOREIGN KEY (`kodeprodi`) REFERENCES `tblprodi` (`kodeprodi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
