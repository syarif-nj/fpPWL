-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2022 pada 06.44
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websekolah1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`, `level`) VALUES
('admin', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('admin2', '2ae117665ae566b1f2b6c27ea8016e35', 3),
('guru', 'c4ca4238a0b923820dcc509a6f75849b', 2),
('okky', 'c4ca4238a0b923820dcc509a6f75849b', 2),
('siswasyarif', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('syarif', 'e8059811450b854a7b77cc653761282d', 2),
('syarifsiswa', '906412364a0197f7fc17c596000bfd6c', 1),
('tigasatu', '73fe721bb3ed8fad7a5713edcff75b2e', 1),
('udin1', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('udin2', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('udin3', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('udin4', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('udin5', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('udin6', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('udin7', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('udin8', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('udin9', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('yadi', 'c4ca4238a0b923820dcc509a6f75849b', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` char(10) NOT NULL,
  `nama_guru` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `kelas` varchar(10) NOT NULL,
  `Penjurusan` varchar(10) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nohp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `username`, `kelas`, `Penjurusan`, `gender`, `alamat`, `nohp`) VALUES
('1111111111', 'Hendika', 'hendika', '10', 'IPS', 'laki-laki', 'kota bantul', '081616161616'),
('1111111113', 'Okky', 'okky', '12', 'IPA', 'perempuan', 'kota bantul', '83838383838'),
('231144321', 'Syarif Nurwahid Jaelani', 'syarif', '10', 'IPA', 'Laki-laki', 'JALAN MERDEKA', '08947392937292');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `Tanggal` varchar(10) DEFAULT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `No_HP` varchar(20) DEFAULT NULL,
  `Isi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mail`
--

INSERT INTO `mail` (`id`, `Tanggal`, `Nama`, `Email`, `No_HP`, `Isi`) VALUES
(2, '06-01-2022', 'syarif nj', 'syarif@gmail.com', '080908098098', 'ini adalah pesan peringatan dari user web ini......');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(50) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `kelas` int(2) NOT NULL,
  `penjurusan` varchar(5) NOT NULL,
  `nip` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `kelas`, `penjurusan`, `nip`) VALUES
('231231241234', 'KIMIA', 10, 'IPA', '1111111111'),
('5523532', 'fisika', 12, 'IPA', '1111111113'),
('bg01', 'sosiologi', 10, 'IPS', '1111111113');

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `nisn` char(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama_murid` varchar(50) DEFAULT NULL,
  `kelas` int(2) DEFAULT NULL,
  `penjurusan` varchar(10) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`nisn`, `username`, `nama_murid`, `kelas`, `penjurusan`, `gender`, `agama`, `alamat`) VALUES
('10021', 'udin3', 'udin tiga', 12, 'IPA', 'laki-laki', 'islam', 'bantul'),
('10022', 'udin2', 'udin dua', 12, 'IPA', 'laki-laki', 'islam', 'bantul'),
('10023', 'udin1', 'udin satu', 12, 'IPA', 'laki-laki', 'islam', 'bantul'),
('10024', 'udin4', 'udin empat', 12, 'IPA', 'laki-laki', 'islam', 'bantul'),
('10025', 'udin5', 'udin lima', 12, 'IPA', 'laki-laki', 'islam', 'bantul'),
('10026', 'udin6', 'udin enam', 12, 'IPA', 'laki-laki', 'islam', 'bantul'),
('10027', 'udin7', 'udin tujuh', 12, 'IPA', 'laki-laki', 'islam', 'bantul'),
('10028', 'udin8', 'udin delapan', 12, 'IPA', 'laki-laki', 'islam', 'bantul'),
('10029', 'udin9', 'udin sembilan', 12, 'IPA', 'laki-laki', 'islam', 'bantul'),
('10031', 'tigasatu', 'siswa tiga satu', 10, 'IPA', 'Laki-laki', 'Islam', 'kota bantul'),
('10032', 'syarifsiswa', 'syarif aja', 13, 'IPA', 'Laki-laki', 'Islam', 'kota bantul'),
('123212', 'yadi', 'yadi', 10, 'IPA', 'Laki-laki', 'Islam', 'bantul'),
('2204884394', 'siswasyarif', 'syarif nj', 10, 'IPA', 'Laki-laki', 'Islam', 'adelah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `nama_murid` varchar(50) NOT NULL,
  `kelas` varchar(3) DEFAULT NULL,
  `penjurusan` varchar(5) DEFAULT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `nilai_UTS` int(5) NOT NULL,
  `nilai_UAS` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`nama_murid`, `kelas`, `penjurusan`, `nama_mapel`, `nilai_UTS`, `nilai_UAS`) VALUES
('Udin', '10', 'IPA', 'FISIKA', 100, 100),
('Udin', '10', 'IPA', 'KIMIA', 77, 88),
('Udin', '10', 'IPA', 'BIOLOGI', 100, 100),
('andi', '10', 'ipa', 'biologi', 0, 0),
('udin tiga', '12', 'IPA', 'fisika', 100, 98),
('udin dua', '12', 'IPA', 'fisika', 100, 100),
('udin satu', '12', 'IPA', 'fisika', 100, 67),
('udin empat', '12', 'IPA', 'fisika', 100, 67),
('udin lima', '12', 'IPA', 'fisika', 87, 67),
('udin enam', '12', 'IPA', 'fisika', 78, 67),
('udin tujuh', '12', 'IPA', 'fisika', 86, 56),
('udin delapan', '12', 'IPA', 'fisika', 78, 67),
('udin sembilan', '12', 'IPA', 'fisika', 98, 56),
('Kanna Kamui', '10', 'IPA', 'BIOLOGI', 98, 98),
('yadi', '10', 'IPA', 'BIOLOGI', 98, 67),
('syarif nj', '10', 'IPA', 'BIOLOGI', 98, 87);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumumam`
--

CREATE TABLE `pengumumam` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(55) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumumam`
--

INSERT INTO `pengumumam` (`id`, `tanggal`, `kelas`, `subject`, `isi`) VALUES
(24, '23-01-2022', '10', 'libur', 'karena besok tanggal merah'),
(25, '23-01-2022', '10', 'libur', 'dikarenakan besok tanggal merah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `guru_ibfk_1` (`username`);

--
-- Indeks untuk tabel `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `mapel_ibfk_1` (`nip`);

--
-- Indeks untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `murid_ibfk_1` (`username`);

--
-- Indeks untuk tabel `pengumumam`
--
ALTER TABLE `pengumumam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengumumam`
--
ALTER TABLE `pengumumam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
