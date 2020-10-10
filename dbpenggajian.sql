-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Waktu pembuatan: 06. September 2011 jam 10:51
-- Versi Server: 5.0.51
-- Versi PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `dbpenggajian`
-- 

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `daftar_gaji`
-- 

CREATE TABLE `daftar_gaji` (
  `id_gaji` int(6) NOT NULL auto_increment,
  `tanggal` date NOT NULL,
  `nip` varchar(15) NOT NULL,
  `id_jabatan` varchar(6) NOT NULL,
  `id_departemen` varchar(6) NOT NULL,
  `uang_lembur` int(11) NOT NULL,
  `uang_makan` int(11) NOT NULL,
  `uang_transport` int(11) NOT NULL,
  `tunj_istri` int(11) NOT NULL,
  `tunj_anak` int(11) NOT NULL,
  `tunj_hari_tua` int(11) NOT NULL,
  `tunj_kecelakaan` int(11) NOT NULL,
  `tunj_kesehatan` int(11) NOT NULL,
  `tunj_kematian` int(11) NOT NULL,
  `tunj_hari_raya` int(11) NOT NULL,
  `jumlah_produksi` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `harga_per_unit` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `gaji_kotor` int(11) NOT NULL,
  `total_upah` int(11) NOT NULL,
  `status_pgw` enum('Tetap','Kontrak','Buruh') NOT NULL,
  PRIMARY KEY  (`id_gaji`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data untuk tabel `daftar_gaji`
-- 

INSERT INTO `daftar_gaji` VALUES (1, '2011-09-25', '1083038', '1', '2', 80000, 90000, 80000, 50000000, 5000, 1850, 445, 190, 3350, 5000, 0, '', 0, 5000, 5000, 50325835, 0, 'Tetap');
INSERT INTO `daftar_gaji` VALUES (2, '2011-09-25', '1083039', '1', '2', 50000, 50000, 50000, 50000, 50000, 1850, 445, 190, 3350, 50000, 0, '', 0, 50000, 50000, 355835, 0, 'Tetap');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `data_absensi`
-- 

CREATE TABLE `data_absensi` (
  `id_absensi` int(11) NOT NULL auto_increment,
  `tanggal` date NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `denda` bigint(20) NOT NULL,
  PRIMARY KEY  (`id_absensi`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data untuk tabel `data_absensi`
-- 

INSERT INTO `data_absensi` VALUES (3, '2011-08-28', '09', '16:50:00', '17:00:00', '0', 10000);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `data_buruh`
-- 

CREATE TABLE `data_buruh` (
  `nip` varchar(15) NOT NULL default '',
  `nama` varchar(30) default NULL,
  `Tanggal_lahir` date default NULL,
  `Tempat_lahir` varchar(30) default NULL,
  `Agama` varchar(30) default NULL,
  `No_Telp` varchar(30) NOT NULL,
  `Alamat` varchar(30) default NULL,
  `Status` varchar(30) default NULL,
  `Kota` varchar(30) default NULL,
  `Jenis_Kelamin` varchar(30) default NULL,
  `Pendidikan` varchar(30) default NULL,
  `id_departemen` varchar(6) default NULL,
  `status_pegawai` varchar(30) default NULL,
  `masa_kerja` date default NULL,
  `foto` varchar(30) NOT NULL,
  PRIMARY KEY  (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `data_buruh`
-- 

INSERT INTO `data_buruh` VALUES ('123456768796754', 'ertyuhuctx', '2011-08-18', 'ds', 'Islam', '123', 'werw', 'Lajang', '2343', 'Pria', 'SMA', '1', NULL, '2011-08-18', 'tiny 004.jpg');
INSERT INTO `data_buruh` VALUES ('09', 'lala ', '2011-08-18', 'medan', '', '05958686', 'sk pura', '', 'makasar', '', 'SMA', '2', 'Tetap', '2011-08-18', '');
INSERT INTO `data_buruh` VALUES ('445455', '111111111111', '2011-08-18', 'esw', '', 'we', 'we', '', 'sds', '', 'SMA', '1', '', '0000-00-00', '');
INSERT INTO `data_buruh` VALUES ('2', 'lala', '2011-08-28', 'ta', 'Islam', '3424', '243234', 'Lajang', 'ert', 'Pria', 'SMA', '2', 'Tetap', '2011-08-28', 'me.JPG');
INSERT INTO `data_buruh` VALUES ('444', 'ere', '2011-08-18', 'er', 'Islam', 'ty', 'ty', 'Lajang', 'er', '', 'SMA', '4', 'Tetap', '2011-08-18', 'tiny 004.jpg');
INSERT INTO `data_buruh` VALUES ('21145', 'Triyono Setyo Nugroho', '2011-08-25', 'twetweqt', 'Islam', '2316346', 'fteatqwewqe', 'Lajang', 'asfeqtwe', 'Pria', 'Diploma', '1', 'Tetap', '2011-08-25', '');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `data_lembur`
-- 

CREATE TABLE `data_lembur` (
  `tanggal` date NOT NULL,
  `id_lembur` int(15) NOT NULL auto_increment,
  `nip` varchar(6) NOT NULL,
  `nama_departemen` varchar(25) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `jml_jam` int(3) NOT NULL,
  `upah_lembur` bigint(20) NOT NULL,
  `totalUph` bigint(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `bulan` varchar(2) NOT NULL,
  PRIMARY KEY  (`id_lembur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data untuk tabel `data_lembur`
-- 

INSERT INTO `data_lembur` VALUES ('2011-09-28', 1, '09', 'Departemen Perikanan', '16:00:00', '18:00:00', 2, 12500, 25000, 'Kerja Bakti', '09');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `data_produksi`
-- 

CREATE TABLE `data_produksi` (
  `id_jenis` int(6) NOT NULL auto_increment,
  `nama_jenis` varchar(25) default NULL,
  `harga` int(11) default NULL,
  PRIMARY KEY  (`id_jenis`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=567 ;

-- 
-- Dumping data untuk tabel `data_produksi`
-- 

INSERT INTO `data_produksi` VALUES (566, 'Ayam Goreng', 80780);
INSERT INTO `data_produksi` VALUES (3, 'Markisa', 34253);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `data_ptkp`
-- 

CREATE TABLE `data_ptkp` (
  `id_ptkp` int(10) NOT NULL auto_increment,
  `id_pph` int(6) NOT NULL,
  `wajib_pajak` bigint(21) NOT NULL,
  `ptkp_kawin` bigint(21) NOT NULL,
  `ptkp_anak` bigint(21) NOT NULL,
  PRIMARY KEY  (`id_ptkp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data untuk tabel `data_ptkp`
-- 

INSERT INTO `data_ptkp` VALUES (1, 1, 15840000, 0, 0);
INSERT INTO `data_ptkp` VALUES (2, 1, 15840000, 0, 0);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `data_report`
-- 

CREATE TABLE `data_report` (
  `id_report` int(6) NOT NULL auto_increment,
  `tanggal` date default NULL,
  `nip` varchar(6) default NULL,
  `jumlah` int(11) default NULL,
  `id_jenis` varchar(6) default NULL,
  `upah` int(11) default NULL,
  PRIMARY KEY  (`id_report`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43256 ;

-- 
-- Dumping data untuk tabel `data_report`
-- 

INSERT INTO `data_report` VALUES (43255, '2011-08-01', '098765', 12, '12', 12);
INSERT INTO `data_report` VALUES (35455, '0000-00-00', '111111', 5, '11111', 5);
INSERT INTO `data_report` VALUES (43253, '2011-08-01', '12345', 32363, '32', 12356);
INSERT INTO `data_report` VALUES (43254, '2011-08-16', '4334', 1, '32', 12356);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `departemen`
-- 

CREATE TABLE `departemen` (
  `id_departemen` int(6) NOT NULL auto_increment,
  `nama_departemen` varchar(25) default NULL,
  `section` varchar(25) default NULL,
  PRIMARY KEY  (`id_departemen`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data untuk tabel `departemen`
-- 

INSERT INTO `departemen` VALUES (1, 'Departemen Pertanian', 'Dept 01');
INSERT INTO `departemen` VALUES (2, 'Departemen Perikanan', 'Dept 02');
INSERT INTO `departemen` VALUES (4, 'Departemen Perkebunan', 'Depat 03');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `hrd`
-- 

CREATE TABLE `hrd` (
  `nip` varchar(15) NOT NULL,
  `nama_hrd` varchar(50) NOT NULL,
  `alamat_hrd` text NOT NULL,
  `telp_hrd` varchar(15) NOT NULL,
  `hp_hrd` varchar(12) NOT NULL,
  `email_hrd` varchar(50) NOT NULL,
  PRIMARY KEY  (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `hrd`
-- 

INSERT INTO `hrd` VALUES ('12345', 'feri', 'medan', '123456', '12345678', 'aazroelmw@gmail.com');
INSERT INTO `hrd` VALUES ('2083053', 'asrul', 'sidempuan', '', '085222338367', 'aazroelmw@gmail.com');
INSERT INTO `hrd` VALUES ('123', 'ana', 'bandung', '0617877180', '085276988033', 'ygygyg');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `jabatan`
-- 

CREATE TABLE `jabatan` (
  `id_jabatan` int(6) NOT NULL auto_increment,
  `nama_jabatan` varchar(25) default NULL,
  `golongan` varchar(25) default NULL,
  `gaji_pokok` int(11) default NULL,
  PRIMARY KEY  (`id_jabatan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data untuk tabel `jabatan`
-- 

INSERT INTO `jabatan` VALUES (1, 'direktur', '3', 50000);
INSERT INTO `jabatan` VALUES (2, 'mandor', '1', 10000);
INSERT INTO `jabatan` VALUES (5, 'staff IT', '5', 2000000);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `jenjang_karir`
-- 

CREATE TABLE `jenjang_karir` (
  `tanggal` date NOT NULL,
  `id_karir` int(10) NOT NULL auto_increment,
  `id_jabatan` varchar(6) NOT NULL,
  `nip` varchar(6) NOT NULL,
  `gaji_pokok` varchar(25) NOT NULL,
  `golongan` varchar(15) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_karir`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data untuk tabel `jenjang_karir`
-- 

INSERT INTO `jenjang_karir` VALUES ('2011-08-31', 3, '2', '09', '1500000', '1', 'buat dikorupsi1111');
INSERT INTO `jenjang_karir` VALUES ('2011-08-01', 6, '2', '21145', '10000', '1', 'Tes');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `keuangan`
-- 

CREATE TABLE `keuangan` (
  `nip` varchar(15) NOT NULL,
  `nama_keuangan` varchar(50) NOT NULL,
  `alamat_keuangan` text NOT NULL,
  `telp_keuangan` varchar(15) NOT NULL,
  `hp_keuangan` varchar(12) NOT NULL,
  `email_keuangan` varchar(50) NOT NULL,
  PRIMARY KEY  (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `keuangan`
-- 

INSERT INTO `keuangan` VALUES ('2083054', 'asrul', 'sidimpuan', '1234454', '12435', '234');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mandor`
-- 

CREATE TABLE `mandor` (
  `nip` varchar(15) NOT NULL,
  `nama_mandor` varchar(50) NOT NULL,
  `alamat_mandor` text NOT NULL,
  `telp_mandor` varchar(15) NOT NULL,
  `hp_mandor` varchar(12) NOT NULL,
  `email_mandor` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `mandor`
-- 

INSERT INTO `mandor` VALUES ('20830551', 'asrul', 'sidimpuan', '', '012384208', '2103854');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `pegawai_kontrak`
-- 

CREATE TABLE `pegawai_kontrak` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `jmlAnak` int(5) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `id_jabatan` varchar(6) NOT NULL,
  `id_departemen` varchar(6) NOT NULL,
  `status_pegawai` varchar(15) NOT NULL,
  `masa_kerja` varchar(4) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `no_rekening` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `foto` varchar(30) NOT NULL,
  PRIMARY KEY  (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `pegawai_kontrak`
-- 

INSERT INTO `pegawai_kontrak` VALUES ('2083130', 'Nugroho', '1914-07-16', 'Bandung', 'Islam', '089656067794', 'Villa Duta', 'kawin', 0, 'Bandung', 'pria', 'DIPLOMA', '1', '2', 'kontrak', '2011', '103256173256371', '013578231569312598', 'triyono.setyo@gmail.com', '');
INSERT INTO `pegawai_kontrak` VALUES ('2083131', 'Angel', '1914-07-16', 'Bandung', 'Islam', '089656067794', 'Villa Duta', 'lajang', 0, 'Bandung', 'pria', 'DIPLOMA', '2', '4', 'kontrak', '2011', '103256173256371', '013578231569312598', 'triyono.setyo@gmail.com', '');
INSERT INTO `pegawai_kontrak` VALUES ('1083040', 'sezuka', '2011-09-16', 'Tangerang', 'Islam', '08575888888', 'Jl.SariAsih', 'kawin', 0, 'Tangerang', 'pria', 'S2', '5', '4', 'kontrak', '2011', '', '0255555', 'adimuwardi@yahoo.com', '');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `pegawai_tetap`
-- 

CREATE TABLE `pegawai_tetap` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `jmlAnak` int(5) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `id_jabatan` varchar(6) NOT NULL,
  `id_departemen` varchar(6) NOT NULL,
  `status_pegawai` varchar(15) NOT NULL,
  `masa_kerja` varchar(4) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `no_rekening` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `foto` varchar(30) NOT NULL,
  PRIMARY KEY  (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `pegawai_tetap`
-- 

INSERT INTO `pegawai_tetap` VALUES ('1083038', 'Adi Muwardi', '2011-08-20', 'Tangerang', 'Islam', '08927625', 'Jl Nuri 3 Blok 8', 'lajang', 0, 'Tangerang', 'pria', 'SMA', '1', '2', 'tetap', '2011', '', '99887090', 'adi@yahoo.com', '');
INSERT INTO `pegawai_tetap` VALUES ('1083039', 'Ismail', '1990-06-22', 'Tangerang', 'Islam', '08575888888', 'Jl.SariAsih', 'kawin', 3, 'Tangerang', 'pria', 'DIPLOMA', '1', '2', 'tetap', '2011', '', '0255555', 'adimuwardi@yahoo.com', '');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `posisi`
-- 

CREATE TABLE `posisi` (
  `tanggal` time NOT NULL,
  `id_posisi` int(6) NOT NULL auto_increment,
  `id_departemen` varchar(6) NOT NULL,
  `nip` varchar(6) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  PRIMARY KEY  (`id_posisi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `posisi`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `pph_21`
-- 

CREATE TABLE `pph_21` (
  `id_pph` int(6) NOT NULL auto_increment,
  `nip` varchar(15) NOT NULL,
  `golongan` enum('Tetap','Kontrak') NOT NULL,
  `tgl_pph` date NOT NULL,
  `pph_sebulan` bigint(20) NOT NULL,
  `pph_setahun` bigint(20) NOT NULL,
  `netto_sebulan` bigint(21) NOT NULL,
  `netto_setahun` bigint(21) NOT NULL,
  PRIMARY KEY  (`id_pph`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data untuk tabel `pph_21`
-- 

INSERT INTO `pph_21` VALUES (1, '1083038', 'Tetap', '2011-09-25', 6409044, 76908528, 42726960, 42726960);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `slip_gaji`
-- 

CREATE TABLE `slip_gaji` (
  `tgl_slip_gaji` date NOT NULL,
  `id_slip` int(6) NOT NULL auto_increment,
  `nip` varchar(15) NOT NULL,
  `id_jabatan` varchar(6) NOT NULL,
  `id_departemen` varchar(6) NOT NULL,
  `uang_lembur` int(11) NOT NULL,
  `uang_makan` int(11) NOT NULL,
  `uang_transport` int(11) NOT NULL,
  `tunj_istri` int(11) NOT NULL,
  `tunj_anak` int(11) NOT NULL,
  `tunj_kesehatan` int(11) NOT NULL,
  `tunj_kematian` int(11) NOT NULL,
  `tunj_keselamatan` int(11) NOT NULL,
  `tunj_hari_tua` int(11) NOT NULL,
  `tunj_hari_raya` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `id_pph` varchar(6) NOT NULL,
  `total_pph` bigint(21) NOT NULL,
  `potongan` int(11) NOT NULL,
  `gaji_bersih` int(11) NOT NULL,
  `stts_pgw` enum('Tetap','Kontrak','Buruh') NOT NULL,
  PRIMARY KEY  (`id_slip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `slip_gaji`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `user`
-- 

CREATE TABLE `user` (
  `nip` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` enum('mandor','HRD','keuangan','admin') NOT NULL,
  PRIMARY KEY  (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `user`
-- 

INSERT INTO `user` VALUES ('1', 'admin', 'admin');
INSERT INTO `user` VALUES ('2', '12345', 'HRD');
INSERT INTO `user` VALUES ('3', '12345', 'keuangan');
INSERT INTO `user` VALUES ('4', '12345', 'mandor');
INSERT INTO `user` VALUES ('123', '321', 'HRD');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `vburuh`
-- 

CREATE TABLE `vburuh` (
  `tanggal` date default NULL,
  `NIPBUruh` varchar(6) default NULL,
  `nama` varchar(30) default NULL,
  `id_departemen` varchar(6) default NULL,
  `nama_departemen` varchar(25) default NULL,
  `section` varchar(25) default NULL,
  `jam_masuk` time default NULL,
  `jam_keluar` time default NULL,
  `keterangan` varchar(15) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data untuk tabel `vburuh`
-- 

