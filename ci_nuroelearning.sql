-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2016 at 03:47 
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_nuroelearning`
--
CREATE DATABASE IF NOT EXISTS `ci_nuroelearning` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ci_nuroelearning`;

-- --------------------------------------------------------

--
-- Table structure for table `nurodigital_guru`
--

CREATE TABLE IF NOT EXISTS `nurodigital_guru` (
  `id_guru` char(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mapel_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Tidak Aktif',
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nurodigital_jawaban`
--

CREATE TABLE IF NOT EXISTS `nurodigital_jawaban` (
  `id_jawaban` char(50) NOT NULL,
  `siswa_id` char(50) NOT NULL,
  `kelas_id` int(1) NOT NULL,
  `jurusan_id` int(1) NOT NULL,
  `mapel_id` int(10) NOT NULL,
  `soal_id` char(50) NOT NULL,
  `ujian_id` char(50) NOT NULL,
  `jawaban_pg` enum('a','b','c','d','e') NOT NULL,
  `jawaban_essay` text NOT NULL,
  `lama_mengerjakan` varchar(50) NOT NULL,
  `started_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ended_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_jawaban`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nurodigital_jurusan`
--

CREATE TABLE IF NOT EXISTS `nurodigital_jurusan` (
  `id_jurusan` int(1) NOT NULL AUTO_INCREMENT,
  `jurusan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nurodigital_kelas`
--

CREATE TABLE IF NOT EXISTS `nurodigital_kelas` (
  `id_kelas` int(1) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nurodigital_log_history`
--

CREATE TABLE IF NOT EXISTS `nurodigital_log_history` (
  `id_log_history` int(100) NOT NULL AUTO_INCREMENT,
  `ip_address` text NOT NULL,
  `siswa_id` char(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logged_at` varchar(250) NOT NULL,
  PRIMARY KEY (`id_log_history`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nurodigital_mapel`
--

CREATE TABLE IF NOT EXISTS `nurodigital_mapel` (
  `id_mapel` int(10) NOT NULL AUTO_INCREMENT,
  `mapel` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nurodigital_siswa`
--

CREATE TABLE IF NOT EXISTS `nurodigital_siswa` (
  `id_siswa` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `image` varchar(250) NOT NULL DEFAULT 'default.png',
  `kelas_id` int(1) NOT NULL,
  `jurusan_id` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Aktif','Tidak Aktif') DEFAULT 'Tidak Aktif',
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurodigital_siswa`
--

INSERT INTO `nurodigital_siswa` (`id_siswa`, `email`, `nama`, `username`, `password`, `image`, `kelas_id`, `jurusan_id`, `created_at`, `status`) VALUES
('cbec00681a5f11e69647642382242f80', 'ahmad.uji1902@gmail.com', 'Siswa', 'siswa', 'bcd724d15cde8c47650fda962968f102', 'default.png', 1, 1, '2016-05-15 13:26:56', 'Tidak Aktif'),
('cbec00681a5f11e69647642382242f81', 'ahmad.uji1902@gmail.com', 'Ahmad Fauzi', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'default.png', 1, 1, '2016-05-15 05:42:22', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `nurodigital_soal`
--

CREATE TABLE IF NOT EXISTS `nurodigital_soal` (
  `id_soal` char(50) NOT NULL,
  `soal` text NOT NULL,
  `image_soal` text NOT NULL,
  `jenis_soal` enum('pg','essay') NOT NULL,
  `pg_a` text NOT NULL,
  `pg_a_image` varchar(250) NOT NULL DEFAULT 'default.png',
  `pg_b` text NOT NULL,
  `pg_b_image` varchar(250) NOT NULL DEFAULT 'default.png',
  `pg_c` text NOT NULL,
  `pg_c_image` varchar(250) NOT NULL DEFAULT 'default.png',
  `pg_d` text NOT NULL,
  `pg_d_image` varchar(250) NOT NULL DEFAULT 'default.png',
  `pg_e` text NOT NULL,
  `pg_e_image` varchar(250) NOT NULL DEFAULT 'default.png',
  `jawaban_benar` enum('a','b','c','d','e') NOT NULL,
  `mapel_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creatad_by` char(50) NOT NULL DEFAULT '1',
  `status` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Tidak Aktif',
  PRIMARY KEY (`id_soal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nurodigital_ujian`
--

CREATE TABLE IF NOT EXISTS `nurodigital_ujian` (
  `id_ujian` char(50) NOT NULL,
  `soal_id` char(50) NOT NULL,
  `mapel_id` int(10) NOT NULL,
  `kelas_id` int(1) NOT NULL,
  `jurusan_id` int(1) NOT NULL,
  `waktu` varchar(3) NOT NULL,
  `created_by` char(50) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Tidak Aktif',
  PRIMARY KEY (`id_ujian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
