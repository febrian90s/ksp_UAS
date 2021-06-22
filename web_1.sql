/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.18-MariaDB : Database - web1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`web1` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `web1`;

/*Table structure for table `data_login` */

DROP TABLE IF EXISTS `data_login`;

CREATE TABLE `data_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=235 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `data_login` */

insert  into `data_login`(`id`,`username`,`password`) values 
(123,'admin01','admin'),
(234,'user','user');

/*Table structure for table `tb_anggota` */

DROP TABLE IF EXISTS `tb_anggota`;

CREATE TABLE `tb_anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `no` int(5) DEFAULT NULL,
  `nama_anggota` varchar(32) DEFAULT NULL,
  `jenis_kelamin` varchar(16) DEFAULT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `kota` varchar(32) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pengurus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_anggota`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tb_anggota` */

insert  into `tb_anggota`(`id_anggota`,`no`,`nama_anggota`,`jenis_kelamin`,`alamat`,`kota`,`telepon`,`email`,`pengurus`) values 
(1,NULL,'roam','laki-laki','denpasar','bali','08123456789','roam@gmail.com',0);

/*Table structure for table `tb_bayar` */

DROP TABLE IF EXISTS `tb_bayar`;

CREATE TABLE `tb_bayar` (
  `id_bayar` int(11) NOT NULL,
  `id_pinjaman` int(11) DEFAULT NULL,
  `tangal` date DEFAULT NULL,
  `angsuran` int(11) DEFAULT NULL,
  `jumlah_bayar` double DEFAULT NULL,
  `keterangan` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_bayar`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tb_bayar` */

/*Table structure for table `tb_jenis` */

DROP TABLE IF EXISTS `tb_jenis`;

CREATE TABLE `tb_jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` int(32) DEFAULT NULL,
  `keterangan` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tb_jenis` */

/*Table structure for table `tb_pinjaman` */

DROP TABLE IF EXISTS `tb_pinjaman`;

CREATE TABLE `tb_pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `bunga` double DEFAULT NULL,
  `jangka_waktu` int(6) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `kondisi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pinjaman`) USING BTREE,
  KEY `id_anggota` (`id_anggota`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tb_pinjaman` */

/*Table structure for table `tb_simpanan` */

DROP TABLE IF EXISTS `tb_simpanan`;

CREATE TABLE `tb_simpanan` (
  `id_simpanan` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `keterangan` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tb_simpanan` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
