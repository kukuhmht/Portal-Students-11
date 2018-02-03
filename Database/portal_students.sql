-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29. Januari 2018 jam 18:28
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal_students`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE IF NOT EXISTS `absen` (
  `id_absen` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id_absen`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id_absen`, `ID`, `tanggal`, `status`) VALUES
(1, 28, '2017-05-15', 'Alfa'),
(2, 29, '2017-05-15', 'Alfa'),
(3, 18, '2017-05-15', 'Sakit'),
(4, 11, '2017-05-15', 'Izin'),
(5, 7, '2017-05-16', 'Sakit'),
(6, 7, '2017-04-16', 'Alfa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `tanggal` int(11) DEFAULT NULL,
  `bulan` varchar(25) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `absensi`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` varchar(50) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `no_identitas` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`,`no_identitas`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID`, `id_kelas`, `username`, `no_identitas`, `password`, `hak_akses`) VALUES
(6, '', 'kesiswaan', 'kesiswaan', 'kesiswaan', 'kesiswaan'),
(7, '', 'absensi', 'absensi', 'absensi', 'absensi'),
(10, '', 'Super User', 'admin', 'admin', 'admin'),
(88, 'XIIRPL2', 'Dewi Nurlela', 'ddewi.muchmuch', 'dn01022000', 'siswa'),
(90, 'XIIRPL2', 'Kukuh Mangku Hidayatulah', 'kukuh', 'pelog', 'siswa'),
(91, 'XIIRPL1', 'Saya siswa Kelas XII RPL 1', 'rpl1', 'rpl1', 'siswa'),
(93, NULL, 'Pak Rohmat', 'kurikulum', 'kurikulum', 'kurikulum'),
(95, NULL, 'Wulansari, S.pd', 'wulansari', 'wulan', 'guru'),
(96, NULL, 'Bimbingan Konseling', 'bimbingankonseling', 'bk123', 'bk'),
(101, 'XIIRPL1', 'Yudi Subekti, S.Kom', 'walikelas', 'walikelas', 'walikelas'),
(105, 'XIIRPL2', 'Dewi Nurlela', 'ddew', 'ddew', 'absensi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama_foto` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `album`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE IF NOT EXISTS `catatan` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `judul_catatan` varchar(100) NOT NULL,
  `isi_catatan` text,
  `tanggal_catatan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `catatan`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `kode_guru` varchar(15) NOT NULL,
  `kode_mapel` varchar(35) DEFAULT NULL,
  `nip` int(25) DEFAULT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `matapelajaran` varchar(50) DEFAULT NULL,
  `status_pekerja` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kode_guru`,`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`ID`, `kode_guru`, `kode_mapel`, `nip`, `nama_guru`, `jenis_kelamin`, `matapelajaran`, `status_pekerja`, `jabatan`, `picture`) VALUES
(1, '1', 'KR03', 2147483647, 'Yudi Subekti, S.Kom', 'Laki-Laki', 'Database', '', 'Kepala Jurusan RPL', NULL),
(2, '2', 'KR04', 2147483647, 'Ani Nuraeni, S.Kom', 'Perempuan', 'Pemrograman Graphic', '', 'Kepala Jurusan TI', NULL),
(6, '3', 'KR05', 2147483647, 'Himatul Munawwaroh , S.T', 'Perempuan', 'Object Oriented Programming (OOP)', '', 'Guru TI', NULL),
(5, '4', 'A022', 2147483647, 'Hj. Euis Nursibahhayati, S.pd', 'Perempuan', 'Bahasa Inggris', '', 'Guru', NULL),
(4, '5', 'A017', 2147483647, 'Wulansari, S.pd', 'Perempuan', 'Matematika', '', 'Guru', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_kelas`
--

CREATE TABLE IF NOT EXISTS `guru_kelas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `kode_guru` varchar(50) DEFAULT NULL,
  `nama_guru` varchar(100) DEFAULT NULL,
  `matapelajaran` varchar(100) DEFAULT NULL,
  `pict_profil` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `guru_kelas`
--

INSERT INTO `guru_kelas` (`ID`, `kode_guru`, `nama_guru`, `matapelajaran`, `pict_profil`) VALUES
(1, '457646534', 'Ani Nur''aeni, S.Kom', 'Model Perangkat Lunak', '1.JPG'),
(2, '457644342', 'Himatul Munawaroh, S.T', 'Object Oriented Programming', '2.JPG'),
(3, '4576464543', 'Restika Kanianingsih, S.Pd', 'Pemrograman Dasar', '3.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_mapel`
--

CREATE TABLE IF NOT EXISTS `guru_mapel` (
  `kode_guru` varchar(15) NOT NULL,
  `kode_mapel` varchar(35) DEFAULT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `matapelajaran` varchar(50) DEFAULT NULL,
  `status_pekerja` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kode_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru_mapel`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalpelajaran`
--

CREATE TABLE IF NOT EXISTS `jadwalpelajaran` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(10) DEFAULT NULL,
  `kode_mapel` varchar(25) DEFAULT NULL,
  `kode_guru` varchar(25) DEFAULT NULL,
  `kode_kelas` int(11) DEFAULT NULL,
  `namakelas` varchar(35) DEFAULT NULL,
  `ruang_kelas` varchar(20) DEFAULT NULL,
  `jam` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `kode_mapel` (`kode_mapel`),
  KEY `kode_guru` (`kode_guru`),
  KEY `kode_kelas` (`kode_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data untuk tabel `jadwalpelajaran`
--

INSERT INTO `jadwalpelajaran` (`ID`, `hari`, `kode_mapel`, `kode_guru`, `kode_kelas`, `namakelas`, `ruang_kelas`, `jam`) VALUES
(1, 'Senin', 'A017', '3', 1, 'XIIRPL2', 'RTI 1', '23:01'),
(2, 'Senin', 'KR05', '3', 1, 'XIIRPL2', 'BTI 2', '11:30'),
(3, 'Senin', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(4, 'Senin', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(5, 'Senin', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(6, 'Senin', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(7, 'Selasa', 'KR03', '2', 1, 'XIIRPL2', 'BTI 2', '09:15'),
(8, 'Selasa', 'KR05', NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(9, 'Selasa', 'KR03', NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(10, 'Selasa', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(11, 'Selasa', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(12, 'Selasa', 'A017', '5', 1, 'XIIRPL2', 'RTI 4', '13:35'),
(13, 'Rabu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(14, 'rabu', 'KR05', NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(15, 'rabu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(16, 'rabu', 'KR05', '2', 1, 'XIIRPL2', 'RTI 6', '23:43'),
(17, 'rabu', 'A022', '4', 1, 'XIIRPL2', 'RTI 1', '12:43'),
(18, 'rabu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(19, 'Kamis', 'KR03', '2', 1, 'XIIRPL2', 'RTI 3', '21:23'),
(20, 'kamis', 'KR05', NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(21, 'kamis', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(22, 'kamis', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(23, 'kamis', 'A022', '3', 1, 'XIIRPL2', 'RTI 5', '07:47'),
(24, 'kamis', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(25, 'Jumat', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', '0'),
(26, 'jumat', 'KR05', NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', '0'),
(27, 'jumat', 'KR04', '4', 1, 'XIIRPL2', 'RTI 6', '12:42'),
(29, 'jumat', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', '0'),
(30, 'jumat', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', '0'),
(31, 'Sabtu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(32, 'sabtu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(33, 'sabtu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(34, 'sabtu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(35, 'sabtu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(36, 'sabtu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(37, 'Senin', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(38, 'Senin', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(39, 'Senin', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(40, 'Senin', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(41, 'Senin', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(42, 'Senin', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(43, 'Selasa', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(44, 'Selasa', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(45, 'Selasa', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(46, 'Selasa', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(47, 'Selasa', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(48, 'Selasa', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(49, 'Rabu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(50, 'rabu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(51, 'rabu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(52, 'rabu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(53, 'rabu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(54, 'rabu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(55, 'Kamis', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(56, 'kamis', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(57, 'kamis', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(58, 'kamis', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(59, 'kamis', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(60, 'kamis', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(61, 'Jumat', 'KR03', '4', 1, 'XIIRPL2', 'RTI 1', '12:21'),
(62, 'jumat', NULL, '4', 1, 'XIIRPL2', 'BTI 2', '04:23'),
(63, 'jumat', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(64, 'jumat', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(65, 'jumat', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(66, 'jumat', 'A017', '5', 1, 'XIIRPL2', 'BTI 3', '04:34'),
(67, 'Sabtu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(68, 'sabtu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(69, 'sabtu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(70, 'sabtu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(71, 'sabtu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(72, 'sabtu', NULL, NULL, 1, 'XIIRPL2', 'Pilih Ruang Kelas', ''),
(73, 'Senin', 'A022', '4', 3, 'XIIRPL1', 'RTI 1', '21:45'),
(74, 'Senin', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(75, 'Senin', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(76, 'Senin', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(77, 'Senin', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(78, 'Senin', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(79, 'Selasa', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(80, 'Selasa', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(81, 'Selasa', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(82, 'Selasa', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(83, 'Selasa', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(84, 'Selasa', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(85, 'Rabu', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(86, 'rabu', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(87, 'rabu', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(88, 'rabu', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(89, 'rabu', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(90, 'rabu', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(91, 'Kamis', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(92, 'kamis', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(93, 'kamis', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(94, 'kamis', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(95, 'kamis', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(96, 'kamis', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(97, 'Jumat', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(98, 'jumat', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(99, 'jumat', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(100, 'jumat', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(101, 'jumat', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(102, 'jumat', 'A017', '5', 3, 'XIIRPL1', 'BTI 2', '04:21'),
(103, 'Sabtu', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(104, 'sabtu', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(105, 'sabtu', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(106, 'sabtu', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(107, 'sabtu', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', ''),
(108, 'sabtu', NULL, NULL, 3, 'XIIRPL1', 'Pilih Ruang Kelas', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pelajaran`
--

CREATE TABLE IF NOT EXISTS `jadwal_pelajaran` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `senin` varchar(50) DEFAULT NULL,
  `selasa` varchar(50) DEFAULT NULL,
  `rabu` varchar(50) DEFAULT NULL,
  `kamis` varchar(50) DEFAULT NULL,
  `jumat` varchar(50) DEFAULT NULL,
  `sabtu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`ID`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`) VALUES
(1, 'Bahasa Inggris', 'Pendidikan Agama Islam', 'Seni Budaya', 'Kewirausahaan', 'Olahraga', NULL),
(2, 'Object Oriented Programming', 'Web Dinamis', 'Fisika', 'Matematika', 'Pendidikan Kewarganegaraan', NULL),
(3, 'Pemrograman Dasar', 'Database', 'Pendidikan Lingkungan Hidup', 'Sistem Komputer', 'Sejarah', NULL),
(4, 'Model Perangkat Lunak', NULL, 'Pemrograman Desktop', 'Bimbingan Konseling', 'Bahasa Indonesia', NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `wali_kelas` varchar(100) DEFAULT NULL,
  `nama_kelas` varchar(25) DEFAULT NULL,
  `slogan` varchar(100) DEFAULT NULL,
  `ruang_kelas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`ID`, `wali_kelas`, `nama_kelas`, `slogan`, `ruang_kelas`) VALUES
(1, 'Hj. Euis Nursibahhayati, S.pd', 'XIIRPL2', 'Bubadibasu', 'RTI 4'),
(3, 'Yudi Subekti, S.Kom', 'XIIRPL1', NULL, 'BTI 3'),
(5, 'Ani Nuraeni, S.Kom', 'XII RPL 3', NULL, 'BTI 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matapelajaran`
--

CREATE TABLE IF NOT EXISTS `matapelajaran` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `kode_mapel` varchar(25) NOT NULL,
  `nama_pelajaran` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_mapel`,`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `matapelajaran`
--

INSERT INTO `matapelajaran` (`ID`, `kode_mapel`, `nama_pelajaran`) VALUES
(3, 'A017', 'Matematika'),
(4, 'A022', 'Bahasa Inggris'),
(5, 'KR01', 'Database'),
(1, 'KR03', 'Kerja Proyek (KPR)'),
(2, 'KR04', 'Pemrograman Graphic'),
(6, 'KR05', 'Object Oriented Programming (OOP)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_guru`
--

CREATE TABLE IF NOT EXISTS `nilai_guru` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) NOT NULL,
  `kode_kelas` int(11) DEFAULT NULL,
  `namakelas` varchar(25) DEFAULT NULL,
  `mapel` varchar(25) DEFAULT NULL,
  `ujian` varchar(15) DEFAULT NULL,
  `pengetahuan` varchar(25) DEFAULT NULL,
  `keterampilan` varchar(25) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`,`ID`),
  KEY `mapel` (`mapel`),
  KEY `ID` (`ID`),
  KEY `kelas` (`kode_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data untuk tabel `nilai_guru`
--

INSERT INTO `nilai_guru` (`ID`, `id_siswa`, `kode_kelas`, `namakelas`, `mapel`, `ujian`, `pengetahuan`, `keterampilan`, `semester`) VALUES
(25, 119, 1, 'XIIRPL2', 'Bahasa Jepang', 'uts', '76', '88', 1),
(23, 120, 1, 'XIIRPL2', 'Bahasa Indonesia', 'uts', '88', '89', 1),
(26, 120, 1, 'XIIRPL2', 'Fisika', 'uts', '89', '87', 4),
(5, 154, 1, 'XIIRPL2', 'PBO', 'uas', '89', '90', 2),
(6, 154, 1, 'XIIRPL2', 'Web Dinamis', 'uts', '87', '89', 3),
(7, 154, 1, 'XIIRPL2', 'PG', 'uas', '76', '67', 3),
(8, 154, 1, 'XIIRPL2', 'OOP', 'uts', '87', '67', 4),
(9, 154, 1, 'XIIRPL2', 'MTK', 'uas', '78', '75', 4),
(10, 154, 1, 'XIIRPL2', 'Sejarah', 'uts', '98', '90', 5),
(11, 154, 1, 'XIIRPL2', 'KWU', 'uas', '76', '77', 5),
(13, 154, 1, 'XIIRPL2', 'BK', 'uas', '87', '78', 6),
(18, 154, 1, 'XIIRPL2', 'PPB', 'uas', '99', '98', 1),
(20, 154, 1, 'XIIRPL2', 'Senbud', 'uts', '87', '98', 1),
(21, 154, 1, 'XIIRPL2', 'Pemrograman Dasar', 'uts', '87', '77', 2),
(22, 154, 1, 'XIIRPL2', 'Bahasa Sunda', 'uts', '87', '89', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangkelas`
--

CREATE TABLE IF NOT EXISTS `ruangkelas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ruang_kelas` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `ruangkelas`
--

INSERT INTO `ruangkelas` (`ID`, `ruang_kelas`) VALUES
(5, 'RTI 1'),
(6, 'RTI 2'),
(7, 'RTI 3'),
(8, 'RTI 4'),
(9, 'RTI 5'),
(10, 'RTI 6'),
(12, 'BTI 1'),
(13, 'BTI 2'),
(14, 'BTI 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `semester 1` varchar(25) DEFAULT NULL,
  `semester 2` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `semester`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_induk` int(15) NOT NULL,
  `nama_siswa` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `nama_panggilan` varchar(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8_swedish_ci DEFAULT NULL,
  `nomor_hp` varchar(15) COLLATE utf8_swedish_ci DEFAULT NULL,
  `alamat` varchar(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `jabatan` varchar(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `picture` varchar(100) COLLATE utf8_swedish_ci DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_kelas` (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=157 ;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`ID`, `nomor_induk`, `nama_siswa`, `nama_panggilan`, `jenis_kelamin`, `nomor_hp`, `alamat`, `jabatan`, `picture`, `id_kelas`) VALUES
(119, 1502011352, 'Ali Taufik Rachman', 'Ali', 'Laki-Laki', '0895334624042', 'Desa lembur sawah, Kabupaten Bandung Barat', 'Ketua Sie Peralatan', NULL, 1),
(120, 1502011276, 'Amalia Nur Oktaviana', 'Amal', 'Perempuan', '', 'Jl.Sukawarna No.22 RT/RW 03/01', 'Wakil Sie Peralatan', NULL, 1),
(121, 1502011280, 'Annisa Nur Hadiyanti', 'Ica', 'Perempuan', '', 'Jl.Cibuntu Timur RT/RW : 05/04', 'Ketua Bendahara', NULL, 1),
(122, 1502011283, 'Asep Husen', 'Asep', 'Laki-Laki', '', 'Jl.Setia Budi RT/RW : 03/05', 'Ketua Sie Rohani', NULL, 1),
(123, 1502011293, 'Daniel Dwi Fortuna', 'Daniel', 'Laki-Laki', '0897576245', 'Jl.Cipedes Tengah  RT/RW :  06/06', '', NULL, 1),
(124, 1502011294, 'Dea Fitri Handayani', 'Dea', 'Perempuan', '', 'Jl.jati Indah Blok D1 No.03 RT/RW : 01/07', '', NULL, 1),
(125, 1502011299, 'Dewi Nurlela', 'Dewi', 'Perempuan', '', 'Jl.Pesantren RT/RW : 15/02', 'Ketua Absensi ', NULL, 1),
(126, 1502011305, 'Elizta Krisnawati Setiadi', 'Eliz', 'Perempuan', '', 'Jl.Mentor 01 No.1 Cicendo', 'Ketua Sekretaris', NULL, 1),
(127, 1502011309, 'Fahri Muhamad Zulkarnaen', 'Fahri', 'Laki-Laki', '', 'Jl.Cigondewah kaler sukaraja ', '', NULL, 1),
(128, 1502011313, 'Fiki Rieza Muzafar', 'Fiki', 'Laki-Laki', '', 'Jl.Bunni pakusarakan ', 'Wakil Sie Rohani', NULL, 1),
(129, 1502011321, 'Gresyela Paulina Valentine', 'Gres', 'Perempuan', '081214676281', 'Jl.Terusan pasirkoja, RT/RW : 12/02', '', NULL, 1),
(130, 1502011331, 'Ilham Fatur Rabani', 'Ilham', 'Laki-Laki', '', 'Jl. Rajawali timur RT/RW: 05/06', 'Ketua Murid', NULL, 1),
(131, 1502011337, 'Intan Nurmalasari', 'Intan', 'Perempuan', '', 'Jl.Raya Batujajar desa LaksanaMekar RT/RW : 05/06', 'Wakil Sekretaris', NULL, 1),
(132, 1502011341, 'Kukuh Mangku Hidayatulah', 'Kukuh', 'Laki-Laki', '', 'Jl.rajawali Timur RT/RW : 02/04', 'Ketua Sie Kebersihan', NULL, 1),
(133, 1502011349, 'Mira Novianti', 'Mira', 'Perempuan', '', 'Jl. Jamika Gg.Siti mariah RT/RW : 07/02', 'Wakil Absensi', NULL, 1),
(134, 1502011357, 'Muhammad Iqbal', 'Iqbal', 'Laki-Laki', '', 'Jl.cogondewah kaler RT/RW : 02/03', '', NULL, 1),
(135, 1502011372, 'Muhammad Syaiful ', 'Iful', 'Laki-Laki', '', 'Jl. gunung batu RT/RW :02/02', '', NULL, 1),
(136, 1502011385, 'Nicholas Benyamin ', 'Niko', 'Laki-Laki', '', 'Jl. Maleber RT/RW :01/04', 'Wakil Ketua Murid', NULL, 1),
(137, 1502011388, 'Nisa Rahma Sari ', 'Nisa', 'Perempuan', '', 'Jl. Tegal kawung RT/RW : 01/08', 'Wakil Bendahara', NULL, 1),
(138, 1502011400, 'Raden Fitriany Nur Hak Sania Natapraja', 'Pipit', 'Perempuan', '', 'Jl. Cibeber RT/RW : 02/12', '', NULL, 1),
(139, 1502011401, 'Reghan Haqi Maulana', 'Reghan', 'Laki-Laki', '', 'Jl.industri Barat RT/RW : 03/04', '', NULL, 1),
(141, 1502011419, 'Rizki Febriansyah', 'Iki', 'Laki-Laki', '', 'JL.Aksan NO.7 RT/RW : 07/10', 'Ketua Sie Olahraga', NULL, 1),
(142, 1502011424, 'Rois Muzaqi', 'Rois', 'Laki-Laki', '', 'Jl.Situ Wangi RT/RW : 05/06', 'Ketua Sie Keamanan', NULL, 1),
(143, 1502011445, 'Teddy Gunawan ', 'Tedy', 'Laki-Laki', '', 'Jl.cibereum No.58 RT/RW : 03/01', '', NULL, 1),
(144, 1502011451, 'Vera Dwi Fajriani', 'Vera', 'Perempuan', '', 'Jl.kerkof NO.32 RT/RW : 11/09', '', NULL, 1),
(146, 1502011462, 'Yanuar Wanda Putra', 'Yanuar', 'Laki-Laki', '', 'Jl.Bumi asri marga asih RT/RW : 05/08', 'Wakil Sie Kebersihan', NULL, 1),
(147, 1502011465, 'Yusuf Abdul Rozak', 'Yusuf', 'Laki-Laki', '', 'Jl. Andir RT/RW : 02/10', '', NULL, 1),
(155, 1502011341, 'Saya siswa Kelas XII RPL 1', NULL, 'Perempuan', '0897537846', 'Dimana Ajah', NULL, NULL, 3),
(156, 182729, 'asal', NULL, 'Laki-Laki', '29037802137', 'asal', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_daftarguru`
--

CREATE TABLE IF NOT EXISTS `temp_daftarguru` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nip` int(25) NOT NULL,
  `kode_mapel` varchar(25) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `nomor_hp` varchar(20) DEFAULT NULL,
  `matapelajaran` varchar(30) DEFAULT NULL,
  `status_pekerja` varchar(25) DEFAULT NULL,
  `jabatan` varchar(25) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `temp_daftarguru`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_daftarsiswa`
--

CREATE TABLE IF NOT EXISTS `temp_daftarsiswa` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_induk` int(25) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `nama_panggilan` varchar(35) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `id_kelas` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `temp_daftarsiswa`
--

INSERT INTO `temp_daftarsiswa` (`ID`, `nomor_induk`, `nama_siswa`, `nama_panggilan`, `jenis_kelamin`, `nomor_hp`, `alamat`, `id_kelas`) VALUES
(2, 123, '123', '123', 'Laki-Laki', '123', '123', 'XIIRPL3'),
(3, 182729, 'asal', NULL, 'Laki-Laki', '29037802137', 'asal', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(25) DEFAULT NULL,
  `judul_tugas` text,
  `isi_tugas` text,
  `tanggal_tugas` datetime DEFAULT NULL,
  `tanggal_dikembalikan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `tugas`
--


--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwalpelajaran`
--
ALTER TABLE `jadwalpelajaran`
  ADD CONSTRAINT `kode_guru` FOREIGN KEY (`kode_guru`) REFERENCES `guru` (`kode_guru`),
  ADD CONSTRAINT `kode_kelas` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`ID`),
  ADD CONSTRAINT `kode_mapel` FOREIGN KEY (`kode_mapel`) REFERENCES `matapelajaran` (`kode_mapel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
