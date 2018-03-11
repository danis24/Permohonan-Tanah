-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: 172.23.0.2    Database: tanahdb
-- ------------------------------------------------------
-- Server version	5.5.5-10.2.13-MariaDB-10.2.13+maria~jessie

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `arsip_surat_tanah`
--

DROP TABLE IF EXISTS `arsip_surat_tanah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arsip_surat_tanah` (
  `id_arsip` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tgl_arsip` date NOT NULL,
  `file` varchar(100) NOT NULL,
  `stat_ambil` varchar(30) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `id_perm` varchar(10) NOT NULL,
  PRIMARY KEY (`id_arsip`),
  KEY `id_perm` (`id_perm`),
  CONSTRAINT `arsip_surat_tanah_ibfk_1` FOREIGN KEY (`id_perm`) REFERENCES `permohonan_alih_hak_tanah` (`idpermohonan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arsip_surat_tanah`
--

LOCK TABLES `arsip_surat_tanah` WRITE;
/*!40000 ALTER TABLE `arsip_surat_tanah` DISABLE KEYS */;
/*!40000 ALTER TABLE `arsip_surat_tanah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bukti_pengambilan`
--

DROP TABLE IF EXISTS `bukti_pengambilan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bukti_pengambilan` (
  `id_bukti` int(11) NOT NULL,
  `nama_p` varchar(50) NOT NULL,
  `tgl_ambil` date NOT NULL,
  `file_bukti` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `f_kuasa` varchar(100) NOT NULL,
  `id_perm` varchar(10) NOT NULL,
  KEY `id_perm` (`id_perm`),
  CONSTRAINT `bukti_pengambilan_ibfk_1` FOREIGN KEY (`id_perm`) REFERENCES `permohonan_alih_hak_tanah` (`idpermohonan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bukti_pengambilan`
--

LOCK TABLES `bukti_pengambilan` WRITE;
/*!40000 ALTER TABLE `bukti_pengambilan` DISABLE KEYS */;
/*!40000 ALTER TABLE `bukti_pengambilan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_layanan`
--

DROP TABLE IF EXISTS `detail_layanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_layanan` (
  `idlayanan` varchar(100) NOT NULL,
  `nama_l` varchar(100) NOT NULL,
  `syarat` text NOT NULL,
  PRIMARY KEY (`idlayanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_layanan`
--

LOCK TABLES `detail_layanan` WRITE;
/*!40000 ALTER TABLE `detail_layanan` DISABLE KEYS */;
INSERT INTO `detail_layanan` VALUES ('L0000001','Pembuatan AJB','<p>Dokumen yang harus disiapkan oleh penjual atau pemberi hak atas tanah:</p>\r\n\r\n<p>1. Fotokopi KTP penjual (suami dan istri).</p>\r\n\r\n<p>2. Fotokopi KK</p>\r\n\r\n<p>3. Fotokopi Akta nikah</p>\r\n\r\n<p>4. Asli Sertipikat atau bukti kepemilikan tanah lainnya jika belum sertipikat.</p>\r\n\r\n<p>5. STTS Pajak Bumi dan Bangungan</p>\r\n\r\n<p>6. Surat persetujuan suami atau istri</p>\r\n\r\n<p>Dokumen yang harus disiapkan oleh pembeli:</p>\r\n\r\n<p>1. Fotokopi KTP</p>\r\n\r\n<p>2. Fotokopi KK</p>\r\n\r\n<p>3. Fotokopi Akta Nikah, jika sudah menikah.</p>\r\n\r\n<p>4. Fotokopi NPWP</p>\r\n');
/*!40000 ALTER TABLE `detail_layanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `masyarakat`
--

DROP TABLE IF EXISTS `masyarakat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masyarakat` (
  `user_id` int(11) NOT NULL,
  `datejoin` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namal` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` int(15) NOT NULL,
  `f_ktp` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `masyarakat`
--

LOCK TABLES `masyarakat` WRITE;
/*!40000 ALTER TABLE `masyarakat` DISABLE KEYS */;
INSERT INTO `masyarakat` VALUES (1,'2018-03-10','ginata21','jagahati','Ginanjar Natasasmita','Jalan Raya Pacet no. 247',857947660,'');
/*!40000 ALTER TABLE `masyarakat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pemilik`
--

DROP TABLE IF EXISTS `pemilik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pemilik` (
  `nokohir` int(15) NOT NULL,
  `nama_wp` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pencatat` varchar(30) NOT NULL,
  PRIMARY KEY (`nokohir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pemilik`
--

LOCK TABLES `pemilik` WRITE;
/*!40000 ALTER TABLE `pemilik` DISABLE KEYS */;
/*!40000 ALTER TABLE `pemilik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permohonan_alih_hak_tanah`
--

DROP TABLE IF EXISTS `permohonan_alih_hak_tanah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permohonan_alih_hak_tanah` (
  `idpermohonan` varchar(10) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status_syarat` varchar(50) DEFAULT NULL,
  `syarat_belum` text NOT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `progres` varchar(50) DEFAULT NULL,
  `statperm` varchar(50) NOT NULL,
  `tgl_aju` date NOT NULL,
  `pencatat` varchar(50) NOT NULL,
  `status_tanah` varchar(50) NOT NULL,
  `idlayanan` varchar(100) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idpermohonan`),
  KEY `idlayanan` (`idlayanan`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `permohonan_alih_hak_tanah_ibfk_1` FOREIGN KEY (`idlayanan`) REFERENCES `detail_layanan` (`idlayanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permohonan_alih_hak_tanah_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `masyarakat` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permohonan_alih_hak_tanah`
--

LOCK TABLES `permohonan_alih_hak_tanah` WRITE;
/*!40000 ALTER TABLE `permohonan_alih_hak_tanah` DISABLE KEYS */;
INSERT INTO `permohonan_alih_hak_tanah` VALUES ('P0000001','Asep Saepulloh','Jalan sukapura no. 22','Lengkap','','085794766044','Mengajukan Permohonan','Permohonan Disetujui','2018-03-11','Ginanjar Natasasmita','','L0000001',NULL,'suckhack24@gmail.com'),('P0000002','Asep Saepulloh','Jalan Buah Batu no. 123','Lengkap','','086794766044','Mengajukan Permohonan','Permohonan Disetujui','2018-03-10','Ginanjar Natasasmita','','L0000001',NULL,NULL),('P0000003','Asep Rahmat','Jalan Buah Batu no. 12','Lengkap','','086794766044','Mengajukan Permohonan','Permohonan Disetujui','2018-03-11','Ginanjar Natasasmita','','L0000001',NULL,'danistutorial@gmail.com');
/*!40000 ALTER TABLE `permohonan_alih_hak_tanah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petugas`
--

DROP TABLE IF EXISTS `petugas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petugas` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_p` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `jenis_akses` varchar(40) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petugas`
--

LOCK TABLES `petugas` WRITE;
/*!40000 ALTER TABLE `petugas` DISABLE KEYS */;
INSERT INTO `petugas` VALUES ('admin56','admin','Henri','Jalan sukapura no.44 RT. 01 RW.02','085794766044',3,'Kepala Desa','null',''),('fatih21','jagahati','Muhammad Alfatih','Jalan Buah Batu no. 303','086794766555',1,'Petugas Seksi','',''),('ginanjarn56','admin','Ginanjar Natasasmita','Jalan Raya Pacet no. 247, Kp. Cengkrong RT.01 RW.02','085794766044',2,'Kepala Seksi','','');
/*!40000 ALTER TABLE `petugas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tanah`
--

DROP TABLE IF EXISTS `tanah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tanah` (
  `no_persil` varchar(10) NOT NULL,
  `kelas_t` varchar(10) NOT NULL,
  `jenis_t` varchar(10) NOT NULL,
  `pencatat` varchar(30) NOT NULL,
  PRIMARY KEY (`no_persil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tanah`
--

LOCK TABLES `tanah` WRITE;
/*!40000 ALTER TABLE `tanah` DISABLE KEYS */;
/*!40000 ALTER TABLE `tanah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_mhs`
--

DROP TABLE IF EXISTS `tb_mhs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_mhs` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_mhs`
--

LOCK TABLES `tb_mhs` WRITE;
/*!40000 ALTER TABLE `tb_mhs` DISABLE KEYS */;
INSERT INTO `tb_mhs` VALUES (67011401,'Ginanjar N','Informatika'),(67011402,'Agung','ABC'),(67011403,'Basuki','SSS');
/*!40000 ALTER TABLE `tb_mhs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksitanah`
--

DROP TABLE IF EXISTS `transaksitanah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksitanah` (
  `id_transaksi` varchar(10) NOT NULL,
  `kelas_t` varchar(10) NOT NULL,
  `jenis_t` varchar(10) NOT NULL,
  `luas_t` int(15) NOT NULL,
  `pajak` int(15) DEFAULT NULL,
  `sebab_alih` varchar(100) NOT NULL,
  `tgl_alih` date NOT NULL,
  `kohir_parent` int(15) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `pencatat` varchar(30) NOT NULL,
  `persetujuan` varchar(30) DEFAULT NULL,
  `bukti_surat` varchar(100) DEFAULT NULL,
  `statustanah` varchar(30) DEFAULT NULL,
  `nokohir` int(15) NOT NULL,
  `no_persil` varchar(10) NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `nokohir` (`nokohir`),
  KEY `no_persil` (`no_persil`),
  CONSTRAINT `transaksitanah_ibfk_1` FOREIGN KEY (`nokohir`) REFERENCES `pemilik` (`nokohir`),
  CONSTRAINT `transaksitanah_ibfk_2` FOREIGN KEY (`no_persil`) REFERENCES `tanah` (`no_persil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksitanah`
--

LOCK TABLES `transaksitanah` WRITE;
/*!40000 ALTER TABLE `transaksitanah` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksitanah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'tanahdb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-11 11:40:44
