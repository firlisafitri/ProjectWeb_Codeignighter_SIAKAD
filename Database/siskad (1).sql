-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 05:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siskad`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `pertemuan` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `absensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`id_absensi`, `id_jadwal`, `id_mhs`, `pertemuan`, `tgl`, `absensi`) VALUES
(1, 1, 1, 'Pertemuan 1', '2021-01-03', 'Hadir'),
(2, 1, 2, 'Pertemuan 1', '2021-01-03', 'Sakit'),
(7, 1, 1, 'Pertemuan 2', '2021-01-10', 'Sakit'),
(8, 1, 2, 'Pertemuan 2', '2021-01-10', 'Hadir'),
(9, 2, 1, 'Pertemuan 2', '2021-01-17', 'Hadir'),
(10, 2, 2, 'Pertemuan 2', '2021-01-17', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn_dosen` varchar(15) NOT NULL,
  `nm_dosen` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id_dosen`, `nidn_dosen`, `nm_dosen`, `gender`, `alamat`, `nohp`) VALUES
(1, '0408059501', 'Chairun Nas M.Kom', 'Laki-Laki', 'Cirebon', '082284711455'),
(2, '0419029401', 'Tiara Rasyid, M.Kom', 'Perempuan', 'Kuningan', '082134567890'),
(3, '0409087601', 'Wanda Putra', 'Laki-Laki', 'Kuningan, Jawa Barat', '081923456789'),
(4, '0405089402', 'Putra Jaya', 'Laki-Laki', 'Cirebon, Jawa Barat', '082253467891');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam` varchar(15) NOT NULL,
  `thn_ajar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_matkul`, `id_dosen`, `id_kelas`, `ruangan`, `hari`, `jam`, `thn_ajar`) VALUES
(1, 1, 1, 1, 'Ruangan R-102', 'Jum\'at', '10:00', 'Ganjil 2019/2020'),
(2, 3, 3, 1, 'Ruangan R-102', 'Senin', '08:00', 'Ganjil 2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `nm_kelas` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kd_kelas`, `nm_kelas`, `jurusan`, `semester`) VALUES
(1, 'TI20191', 'TI 1', 'Teknik Informatika', 3),
(3, 'SI20191', 'SI 1', 'Sistem Informasi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas_mhs`
--

CREATE TABLE `tbl_kelas_mhs` (
  `id_kelas_mhs` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas_mhs`
--

INSERT INTO `tbl_kelas_mhs` (`id_kelas_mhs`, `id_kelas`, `id_mhs`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 3, 3),
(4, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `id_matkul` int(11) NOT NULL,
  `kode_matkul` varchar(15) NOT NULL,
  `nm_matkul` varchar(50) NOT NULL,
  `sks` varchar(15) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_matkul`
--

INSERT INTO `tbl_matkul` (`id_matkul`, `kode_matkul`, `nm_matkul`, `sks`, `ket`) VALUES
(1, 'MK001', 'Web Framework', '4 SKS', 'Matakuliah Jurusan T'),
(2, 'MK002', 'Algoritma Dan Pemrograman', '3 SKS', 'Matakulliah Jurusan '),
(3, 'MK003', 'Pemrograman Dekstop', '4 SKS', 'Matakuliah Jurusan T');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `id_mhs` int(11) NOT NULL,
  `nim_mhs` varchar(15) NOT NULL,
  `nm_mhs` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id_mhs`, `nim_mhs`, `nm_mhs`, `gender`, `alamat`, `nohp`) VALUES
(1, '2019102010', 'Firli Safitri', 'Perempuan', 'Cirebon, Jawa Barat', '081923456789'),
(2, '2019102007', 'Siti Nurazizah', 'Perempuan', 'Brebes, Jawa Tengah', '082345765431'),
(3, '2019102020', 'Jenar', 'Perempuan', 'Cirebon, Jawa Barat', '0896657342'),
(5, '2019102030', 'Ridwan Maulana', 'Laki-Laki', 'Kuningan, Jawa Barat', '082253467888');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `uts` double NOT NULL,
  `uas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `id_jadwal`, `id_mhs`, `uts`, `uas`) VALUES
(1, 1, 1, 90, 95),
(2, 1, 2, 80, 85),
(3, 2, 1, 90, 95),
(4, 2, 2, 70, 75);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nm_user`, `status`) VALUES
(1, 'admin', '12345', 'Firli Safitri', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_kelas_mhs`
--
ALTER TABLE `tbl_kelas_mhs`
  ADD PRIMARY KEY (`id_kelas_mhs`);

--
-- Indexes for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kelas_mhs`
--
ALTER TABLE `tbl_kelas_mhs`
  MODIFY `id_kelas_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
