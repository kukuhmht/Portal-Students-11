-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29. Januari 2018 jam 11:50
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal_student`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id_absen`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `absen`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
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

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` varchar(50) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `no_identitas` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`,`no_identitas`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `admin`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE `album` (
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

CREATE TABLE `catatan` (
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

CREATE TABLE `guru` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `guru`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_kelas`
--

CREATE TABLE `guru_kelas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `kode_guru` varchar(50) DEFAULT NULL,
  `nama_guru` varchar(100) DEFAULT NULL,
  `matapelajaran` varchar(100) DEFAULT NULL,
  `pict_profil` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `guru_kelas`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_mapel`
--

CREATE TABLE `guru_mapel` (
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

CREATE TABLE `jadwalpelajaran` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELASI UNTUK TABEL `jadwalpelajaran`:
--   `kode_guru`
--       `guru` -> `kode_guru`
--   `kode_kelas`
--       `kelas` -> `ID`
--   `kode_mapel`
--       `matapelajaran` -> `kode_mapel`
--

--
-- Dumping data untuk tabel `jadwalpelajaran`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `senin` varchar(50) DEFAULT NULL,
  `selasa` varchar(50) DEFAULT NULL,
  `rabu` varchar(50) DEFAULT NULL,
  `kamis` varchar(50) DEFAULT NULL,
  `jumat` varchar(50) DEFAULT NULL,
  `sabtu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `jadwal_pelajaran`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `wali_kelas` varchar(100) DEFAULT NULL,
  `nama_kelas` varchar(25) DEFAULT NULL,
  `slogan` varchar(100) DEFAULT NULL,
  `ruang_kelas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `kelas`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `kode_mapel` varchar(25) NOT NULL,
  `nama_pelajaran` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_mapel`,`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `matapelajaran`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_guru`
--

CREATE TABLE `nilai_guru` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `nilai_guru`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangkelas`
--

CREATE TABLE `ruangkelas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ruang_kelas` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `ruangkelas`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
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

CREATE TABLE `siswa` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `siswa`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_daftarguru`
--

CREATE TABLE `temp_daftarguru` (
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

CREATE TABLE `temp_daftarsiswa` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_induk` int(25) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `nama_panggilan` varchar(35) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `id_kelas` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `temp_daftarsiswa`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
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
