-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 01:45 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_testing`
--

CREATE TABLE `user_testing` (
  `userno` int(11) NOT NULL,
  `dateactuelle` date NOT NULL,
  `societe` varchar(50) NOT NULL,
  `agencemaritime` varchar(60) NOT NULL,
  `numberbobl` varchar(50) NOT NULL,
  `numberco` varchar(25) NOT NULL,
  `datereceptionbl` date NOT NULL,
  `datearriveeco` date NOT NULL,
  `redaac` varchar(100) NOT NULL,
  `ddljaac` date NOT NULL,
  `ddscpl4jada` date NOT NULL,
  `ddsr` date NOT NULL,
  `jdpddsrmddsn` varchar(150) NOT NULL,
  `ddrc` date NOT NULL,
  `drdrc` date NOT NULL,
  `jdpddrcrmddrn` varchar(150) NOT NULL,
  `tdc` varchar(100) NOT NULL,
  `poids` varchar(25) NOT NULL,
  `nombredecolis` varchar(150) NOT NULL,
  `nam` varchar(255) NOT NULL,
  `ctd` varchar(100) NOT NULL,
  `ndc` varchar(55) NOT NULL,
  `plaque` varchar(255) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `joiql` varchar(55) NOT NULL,
  `jaal` varchar(100) NOT NULL,
  `jourdepotag` varchar(55) NOT NULL,
  `arpo` varchar(255) NOT NULL,
  `arpv` varchar(255) NOT NULL,
  `arps` varchar(255) NOT NULL,
  `t_30_arpa` varchar(55) NOT NULL,
  `t_31_sdna` varchar(55) NOT NULL,
  `t_32_daak` varchar(55) NOT NULL,
  `t_33_ddk` varchar(55) NOT NULL,
  `t_34_daal` varchar(55) NOT NULL,
  `t_35_rcei` varchar(55) NOT NULL,
  `t_36_cdlenf` varchar(55) NOT NULL,
  `t_37_cdda` varchar(55) NOT NULL,
  `t_38_cdpl` varchar(55) NOT NULL,
  `t_39_cdtl` varchar(55) NOT NULL,
  `t_40_autdep` varchar(55) NOT NULL,
  `t_41_cdt` varchar(55) NOT NULL,
  `t_42_cdpdt` varchar(55) NOT NULL,
  `t_43_cdf` varchar(55) NOT NULL,
  `t_44_cdpf` varchar(55) NOT NULL,
  `t_45_cdsf` varchar(55) NOT NULL,
  `t_46_cdf` varchar(55) NOT NULL,
  `t_47_immd` varchar(55) NOT NULL,
  `t_48_feri` varchar(55) NOT NULL,
  `t_49_douane` varchar(55) NOT NULL,
  `t_50_numed` varchar(55) NOT NULL,
  `t_51_bulletin` varchar(55) NOT NULL,
  `t_52_occlabo` varchar(55) NOT NULL,
  `t_53_redressocc` varchar(55) NOT NULL,
  `t_54_cautionco` varchar(55) NOT NULL,
  `t_55_peagelufu` varchar(55) NOT NULL,
  `t_56_peagenoki` varchar(55) NOT NULL,
  `t_57_peageken` varchar(55) NOT NULL,
  `t_58_peagekasan` varchar(55) NOT NULL,
  `t_59_assurance` varchar(55) NOT NULL,
  `t_60_federoute` varchar(55) NOT NULL,
  `form_id` varchar(20) NOT NULL,
  `t_62` varchar(25) NOT NULL,
  `t_63` varchar(25) NOT NULL,
  `t_64` varchar(25) NOT NULL,
  `t_65` varchar(25) NOT NULL,
  `t_66` varchar(25) NOT NULL,
  `t_67` varchar(25) NOT NULL,
  `t_68` varchar(25) NOT NULL,
  `t_69` varchar(25) NOT NULL,
  `t_70` varchar(25) NOT NULL,
  `t_71` varchar(25) NOT NULL,
  `t_72` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_testing`
--

INSERT INTO `user_testing` (`userno`, `dateactuelle`, `societe`, `agencemaritime`, `numberbobl`, `numberco`, `datereceptionbl`, `datearriveeco`, `redaac`, `ddljaac`, `ddscpl4jada`, `ddsr`, `jdpddsrmddsn`, `ddrc`, `drdrc`, `jdpddrcrmddrn`, `tdc`, `poids`, `nombredecolis`, `nam`, `ctd`, `ndc`, `plaque`, `telephone`, `joiql`, `jaal`, `jourdepotag`, `arpo`, `arpv`, `arps`, `t_30_arpa`, `t_31_sdna`, `t_32_daak`, `t_33_ddk`, `t_34_daal`, `t_35_rcei`, `t_36_cdlenf`, `t_37_cdda`, `t_38_cdpl`, `t_39_cdtl`, `t_40_autdep`, `t_41_cdt`, `t_42_cdpdt`, `t_43_cdf`, `t_44_cdpf`, `t_45_cdsf`, `t_46_cdf`, `t_47_immd`, `t_48_feri`, `t_49_douane`, `t_50_numed`, `t_51_bulletin`, `t_52_occlabo`, `t_53_redressocc`, `t_54_cautionco`, `t_55_peagelufu`, `t_56_peagenoki`, `t_57_peageken`, `t_58_peagekasan`, `t_59_assurance`, `t_60_federoute`, `form_id`, `t_62`, `t_63`, `t_64`, `t_65`, `t_66`, `t_67`, `t_68`, `t_69`, `t_70`, `t_71`, `t_72`) VALUES
(1, '2020-10-05', 'test', '20:08:22', 'teste', 'tetse', '2020-10-07', '2020-10-07', 'asdasdasd', '2020-10-07', '2020-10-01', '2020-10-05', 'teste', '2020-10-14', '2020-10-26', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_testing`
--
ALTER TABLE `user_testing`
  ADD PRIMARY KEY (`userno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_testing`
--
ALTER TABLE `user_testing`
  MODIFY `userno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
