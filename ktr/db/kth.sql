-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 06:10 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
USE kth;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('mark', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(250) NOT NULL AUTO_INCREMENT,
  `comments` varchar(160) NOT NULL,
  `submission_date` timestamp NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comments`, `submission_date`) VALUES
(1, ',,,.\\\\\\,,,.//////???{{]09!!!!!', '2017-01-11 08:31:52'),
(2, 'we could like to have t again', '2017-01-11 08:32:12'),
(3, 'troubled by the wat stdents held ech other on thateve of ceremony', '2017-01-11 08:32:40'),
(4, 'i dont believe tah //,;;''all that is not well', '2017-01-11 08:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `dir_alumni`
--

CREATE TABLE IF NOT EXISTS `dir_alumni` (
  `firstname` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `admno` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `endyear` int(20) NOT NULL,
  PRIMARY KEY (`admno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dir_alumni`
--

INSERT INTO `dir_alumni` (`firstname`, `surname`, `admno`, `phone`, `address`, `year`, `img`, `endyear`) VALUES
('nairobi', 'tokyo', '756785678w4t8fg', '6764767658', 'chesire.marks@gmail.com', '2015/2018', 'alumniuploads/Chrysanthemum.jpg', 2018),
('Alice', 'Limo', 'ktr/203/00100', '0720436842', 'jesire.alice@gmail.com', '2009/2012', 'alumniuploads/alice1.jpeg', 2017),
('mark', 'chesire', 'ktr/203/00101', '0726179177', 'chesire.marks@gmail.com', '2007/2010', 'alumniuploads/FB_IMG_14634266040442714.jpg', 2017),
('Alex', 'Cheboi', 'ktr/203/00102', '0726179177', 'alex.cheboi@gmail.com', '2007/2011', 'alumniuploads/indexg.jpg', 2016),
('Duncan', 'Cherop', 'ktr/203/00103', '0726179177', 'cherop.dan@gmail.com', '2007/2011', 'alumniuploads/a2.jpeg', 2016),
('Jemtai', 'Chepsergon', 'ktr/203/00104', '0726179177', 'jemtai.chep@gmail.com', '2010/2013', 'alumniuploads/abstain.jpg', 2013),
('Kipkorir', 'Chepsergon', 'ktr/203/00105', '0726179177', 'kipkorir.chepsegon@gmail.com', '2006/2009', 'alumniuploads/IMG_20151223_084141.jpg', 2015),
('xjvb', 'vnbxm', 'ktr/203/00106', '0726179177', 'calistus@gmail.com', '2010/2013', 'alumniuploads/a2.jpeg', 2013),
('xjvb', 'vnbxm', 'ktr/203/00107', '0726179177', 'calistus@gmail.com', '2010/2013', 'alumniuploads/a2.jpeg', 2013),
('xjvb', 'vnbxm', 'ktr/203/00108', '0726179177', 'calistus@gmail.com', '2010/2013', 'alumniuploads/a2.jpeg', 2013),
('xjvb', 'vnbxm', 'ktr/203/00109', '0726179177', 'calistus@gmail.com', '2010/2013', 'alumniuploads/a2.jpeg', 2013),
('xjvb', 'vnbxm', 'ktr/203/00110', '0726179177', 'calistus@gmail.com', '2010/2013', 'alumniuploads/a2.jpeg', 2013),
('xjvb', 'vnbxm', 'ktr/203/00111', '0726179177', 'calistus@gmail.com', '2010/2013', 'alumniuploads/a2.jpeg', 2013),
('aaa', 'bbb', 'ktr/203/001117', '0726179177', 'chesire.marks@gmail.com', '2011/2014', 'alumniuploads/abstain.jpg', 2014),
('xjvb', 'vnbxm', 'ktr/203/00112', '0726179177', 'calistus@gmail.com', '2010/2013', 'alumniuploads/a2.jpeg', 2013),
('ddd', 'ccc', 'ktr/203/00113', '0720436842', 'cherop.dan@gmail.com', '2011/2014', 'alumniuploads/a2.jpeg', 2014),
('xjvb', 'vnbxm', 'ktr/203/00114', '0726179177', 'calistus@gmail.com', '2010/2013', 'alumniuploads/a2.jpeg', 2013),
('xjvb', 'vnbxm', 'ktr/203/00118', '0726179177', 'calistus@gmail.com', '2010/2013', 'alumniuploads/a2.jpeg', 2013),
('Calistus', 'Kiprop', 'ktr/203/00120', '0726179177', 'chesire.marks@gmail.com', '2012/2015', 'alumniuploads/mark.jpg', 2015),
('bbb', 'mmm', 'ktr/203/00122', '0726179177', 'chesire.marks@gmail.com', '2011/2014', 'alumniuploads/a2.jpeg', 2014),
('xjvb', 'vnbxm', 'ktr/203/00124', '0726179177', 'calistus@gmail.com', '2010/2013', 'alumniuploads/a2.jpeg', 2013),
('jdjkv', 'gsdkvs', 'ktr/203/00125', '0726179177', 'chesire.marks@gmail.com', '2009/2012', 'alumniuploads/abstain.jpg', 2012),
('hjzdvh', 'hvjh', 'ktr/203/00126', '0720436842', 'cherop.dan@gmail.com', '2009/2012', 'alumniuploads/1.jpg', 2012),
('ghjdsv', 'sdhvhs', 'ktr/203/00128', '0726179177', 'calistus@gmail.com', '2008/2011', 'alumniuploads/a2.jpeg', 2011),
('hdsjfgsb', 'bxcvb', 'ktr/203/00129', '0726179177', 'cherop.dan@gmail.com', '2007/2010', '', 2010),
('ghjaghjdv', 'jfgdakva', 'ktr/203/00130', '0745234567', 'kiprop.festus@gmail.com', '2011/2014', 'alumniuploads/a2.jpeg', 2014),
('gvjhd', 'hvjkdsbk', 'ktr/203/00131', '0726179177', 'chesire.kiprop@gmail.com', '2007/2010', '', 2010),
('ghjdsv', 'cgjz', 'ktr/203/00132', '0720436842', 'jesire.alice@gmail.com', '2014/2017', 'alumniuploads/alice1.jpeg', 2017),
('vhjz', 'vjkzbk', 'ktr/203/00134', '0726179177', 'chesire.marks@gmail.com', '2007/2010', 'alumniuploads/abstain.jpg', 2010),
('zghcjgahs', 'hsdjgv', 'ktr/203/001345', '0726179177', 'chesire.marks@gmail.com', '2008/2011', 'alumniuploads/a2.jpeg', 2011),
('ghjfds', 'dhvh', 'ktr/203/00135', '0726179177', 'chesire.marks@gmail.com', '2007/2010', 'alumniuploads/alice2.jpeg', 2010),
('ghdvhjd', 'gjaskvkd', 'ktr/203/00136', '0726179177', 'cherop.dan@gmail.com', '2006/2009', 'alumniuploads/alic.jpg', 20009),
('vhsd', 'guksu', 'ktr/203/00137', '0720436842', 'chytr@gmail.com', '2006/2009', 'alumniuploads/alice.jpeg', 2009),
('vgdsvjhds', 'vvsbjvjs', 'ktr/203/00138', '0720436842', 'cherop.dan@gmail.com', '2006/2009', 'alumniuploads/alice6.jpeg', 2009),
('gjkfb', 'bjkfbvjk', 'ktr/203/00139', '073452436', 'chesire.kiprop@gmail.com', '2005/2008', 'alumniuploads/alice7.jpeg', 2008),
('hjkbsdjk', 'vkjsbkj', 'ktr/203/00140', '0726179177', 'chesire.kiprop@gmail.com', '2005/2008', 'alumniuploads/alice8.jpeg', 2008),
('gdzhjgjafhav', 'shgcascavhk', 'ktr/203/00141', '0726179177', 'chesire.marks@gmail.com', '2004/2007', '', 2007),
('afgasvj', 'bchbhz', 'ktr/203/00142', '0720436842', 'cherop.dan@gmail.com', '2004/2007', '', 2007),
('hvah', 'vhjasug', 'ktr/203/00143', '0726179177', 'chytr@gmail.com', '2004/2007', 'alumniuploads/abstain.jpg', 2007),
('zchv', 'dhvajm', 'ktr/203/00144', '0720436842', 'calistus@gmail.com', '2004/2007', 'alumniuploads/avatar3.png', 2007),
('dhvhj', 'bjdasbfvja', 'ktr/203/00145', '0720436842', 'cherop.dan@gmail.com', '2004/2007', '', 2007),
('vjhvdsjch', 'gahvcjz', 'ktr/203/00146', '0720436842', 'jesire.alice@gmail.com', '2004/2007', 'alumniuploads/avert.png', 2007),
('vhdsjvgjs', 'gfsdgfu', 'ktr/203/00147', '073452436', 'jgjhb@yahoo.com', '2003/2006', 'alumniuploads/dori1.jpg', 2006),
('fghdgvj', 'cjskbfk', 'ktr/203/00148', '0734562536', 'jemtai.chep@gmail.com', '2003/2006', 'alumniuploads/dori.jpg', 2006),
('ad', 'cgjas', 'ktr/203/00149', '0722234', 'cherop.dan@gmail.com', '2002/2005', '', 2005),
('dsjgvuu', 'xgusfjbf', 'ktr/203/00150', '0720436842', 'jemtai.chep@gmail.com', '2002/2005', '', 2005),
('zvdhjv', 'hdzkjvkj', 'ktr/203/00151', '0720436842', 'chesire.marks@gmail.com', '2001/2004', 'alumniuploads/abstain.jpg', 2004),
('hjvchjcvaj', 'vbhzhjv', 'ktr/203/00153', '073452436', 'cherop.dan@gmail.com', '2001/2004', 'alumniuploads/a2.jpeg', 2004),
('vdhjv', 'bcjzbjvk', 'ktr/203/00154', '0734562536', 'chesire.marks@gmail.com', '2000/2003', 'alumniuploads/a2.jpeg', 2003),
('ghjvca', 'ajfaj', 'ktr/203/00155', '0720436842', 'cherop.dan@gmail.com', '2000/2003', 'alumniuploads/abstain.jpg', 2003),
('hjkvs', 'bvjdbajk', 'ktr/203/00156', '073452436', 'jemtai.chep@gmail.com', '1999/2002', 'alumniuploads/a2.jpeg', 2002),
('vbsjh', 'hvdjk', 'ktr/203/00157', '0734562536', 'chytr@gmail.com', '1999/2002', 'alumniuploads/abstain.jpg', 2002),
('vmz', 'cghh', 'ktr/203/00159', '0720436842', 'jesire.alice@gmail.com', '1998/2001', 'alumniuploads/yy.jpg', 2001),
('zchv', 'cbjzhhz', 'ktr/203/00160', '0734562536', 'chytr@gmail.com', '1998/2001', 'alumniuploads/index8.png', 2001),
('vbzv', 'bmzbn', 'ktr/203/00161', '0720436842', 'cherop.dan@gmail.com', '1997/2000', 'alumniuploads/index9.png', 2000),
('cghjvchj', 'bbb', 'ktr/203/00162', '0720436842', 'chesire.kiprop@gmail.com', '1996/1999', 'alumniuploads/abstain.jpg', 1999),
('hcvzs', 'cbsh', 'ktr/203/00163', '0726179177', 'chesire.marks@gmail.com', '1996/1999', 'alumniuploads/a2.jpeg', 1999),
('vvjdkzbvkjb', 'fgayg', 'ktr/203/00164', '0734562536', 'jemtai.chep@gmail.com', '1995/1998', 'alumniuploads/avatar3.png', 1998),
('vjkdd', 'njb', 'ktr/203/00165', '0720436842', 'cherop.dan@gmail.com', '1995/1998', 'alumniuploads/IMG_20151223_084141.jpg', 1998),
('vhjkds', 'vbbzm', 'ktr/203/00166', '0726179177', 'cherop.dan@gmail.com', '1994/1997', 'alumniuploads/a2.jpeg', 1997),
('vjzbk', 'zxjk', 'ktr/203/00167', '09757767657', 'cherop.dan@gmail.com', '1994/1997', 'alumniuploads/FB_IMG_14638283125012202.jpg', 1997),
('bnzx', 'dzjbvk', 'ktr/203/00169', '0720436842', 'chesire.kiprop@gmail.com', '1993/1996', 'alumniuploads/abstain.jpg', 1996),
('zbmvbzm', 'vbn', 'ktr/203/00170', '0726179177', 'chesire.nb@gmail.com', '1993/1996', 'alumniuploads/a2.jpeg', 1996),
('ghjvj', 'bvzmxb', 'ktr/203/00171', '0726179177', 'cherop.dan@gmail.com', '1993/1996', 'alumniuploads/a2.jpeg', 1996),
('bvzmbm', 'cnzbxm', 'ktr/203/00173', '0726179177', 'cherop.dan@gmail.com', '1992/1995', 'alumniuploads/a2.jpeg', 1995),
('gjhsdh', 'fkjajk', 'ktr/203/00174', '0720436842', 'chesire.marks@gmail.com', '1992/1995', 'alumniuploads/a2.jpeg', 1995),
('hvjdj', 'bvzbm', 'ktr/203/00175', '0720436842', 'jesire.alice@gmail.com', '1991/1994', 'alumniuploads/abstain.jpg', 1994),
('bcmn', 'xn', 'ktr/203/00176', '0720436842', 'jesire.alice@gmail.com', '1991/1994', 'alumniuploads/a2.jpeg', 1994),
('cbnmcm', 'bzb', 'ktr/203/00177', '0726179177', 'cherop.dan@gmail.com', '1990/1993', 'alumniuploads/a2.jpeg', 1993),
('bjkdsbvk', 'vv', 'ktr/203/00178', '0726179177', 'cherop.dan@gmail.com', '1990/1993', 'alumniuploads/abstain.jpg', 1993),
('xhzjvhjz', 'hzbvzj', 'ktr/203/00180', '0720436842', 'chesire.marks@gmail.com', '1989/1992', 'alumniuploads/a2.jpeg', 1992),
('hzbjvz', 'jbxzjkbkj', 'ktr/203/00181', '0720436842', 'jesire.alice@gmail.com', '1989/1992', 'alumniuploads/FB_IMG_14634266275955029.jpg', 1992),
('fdvjb', 'jvbjskb', 'ktr/203/00182', '073452436', 'jgjhb@yahoo.com', '1988/1991', 'alumniuploads/abstain.jpg', 1991),
('vhvzj', 'vjbcxk', 'ktr/203/00183', '0726179177', 'cherop.dan@gmail.com', '1988/1991', 'alumniuploads/a2.jpeg', 1991),
('vgjdb', 'vbcb', 'ktr/203/00184', '0720436842', 'cherop.dan@gmail.com', '1987/1990', 'alumniuploads/a2.jpeg', 1990),
('vhcvjz', 'gchjzv', 'ktr/203/00185', '09757767657', 'chesire.kiprop@gmail.com', '1987/1990', 'alumniuploads/a2.jpeg', 1990),
('vhcvhjz', 'cchzxvhc', 'ktr/203/00186', '073452436', 'chytr@gmail.com', '1985/1988', 'alumniuploads/a2.jpeg', 1988),
('vjcbvjx', 'vjbd', 'ktr/203/00187', '0726179177', 'chytr@gmail.com', '1986/1989', 'alumniuploads/a2.jpeg', 1989),
('jvbjvkjk', 'bkjvjk', 'ktr/203/00188', '0720436842', 'chesire.kiprop@gmail.com', '1986/1989', 'alumniuploads/abstain.jpg', 1989),
('hjvjhjv', 'vjbvjk', 'ktr/203/00189', '0734562536', 'calistus@gmail.com', '1985/1988', 'alumniuploads/a2.jpeg', 1988),
('bhvdbh', 'ssjzbkj', 'ktr/203/00190', '0720436842', 'chesire.marks@gmail.com', '1984/1987', 'alumniuploads/a2.jpeg', 1987),
('bmvzbn', 'chzhj', 'ktr/203/00191', '0720436842', 'calistus@gmail.com', '1984/1987', 'alumniuploads/abstain.jpg', 1987),
('vdhjj', 'vbbzm', 'ktr/203/00192', '0726179177', 'cherop.dan@gmail.com', '1983/1986', 'alumniuploads/a2.jpeg', 1986),
('hjxkvbxkjb', 'bjjkz', 'ktr/203/00193', '0726179177', 'chytr@gmail.com', '1983/1986', 'alumniuploads/a2.jpeg', 1986),
('cxvchxz', 'hvj', 'ktr/203/00194', '0726179177', 'chesire.marks@gmail.com', '1982/1985', 'alumniuploads/a2.jpeg', 1985),
('vzx', 'chzvchj', 'ktr/203/00195', '073452436', 'cherop.dan@gmail.com', '1982/1985', 'alumniuploads/abstain.jpg', 1985),
('ghg', 'ghjvdj', 'ktr/203/00196', '0722234', 'chytr@gmail.com', '1981/1984', 'alumniuploads/a2.jpeg', 1984),
('hgsd', 'jxcbvjx', 'ktr/203/00197', '0726179177', 'chesire.kiprop@gmail.com', '1981/1984', 'alumniuploads/abstain.jpg', 1984),
('hbaj', 'hjryja', 'ktr/203/00198', '0726179177', 'jesire.alice@gmail.com', '1980/1983', 'alumniuploads/abstain.jpg', 1983),
('bhbvhz', 'Chepsergon', 'ktr/203/00199', '0720436842', 'jemtai.chep@gmail.com', '1980/1983', 'alumniuploads/a2.jpeg', 1983),
('bvb', 'vnjkbkv', 'ktr/203/00200', '0726179177', 'chesire.marks@gmail.com', '1978/1982', 'alumniuploads/a2.jpeg', 1982),
('bvbvkj', 'jbj', 'ktr/203/00201', '0720436842', 'cherop.dan@gmail.com', '1978/1982', 'alumniuploads/abstain.jpg', 1982),
('hjvhj', 'hvchjz', 'ktr/203/00203', '0726179177', 'cherop.dan@gmail.com', '1978/1981', 'alumniuploads/a2.jpeg', 1981),
('jvbjk', 'bvjbkj', 'ktr/203/00204', '0726179177', 'jemtai.chep@gmail.com', '1978/1981', 'alumniuploads/abstain.jpg', 1981),
('jvbjk', 'jbndjk', 'ktr/203/00205', '0726179177', 'cherop.dan@gmail.com', '1977/1980', 'alumniuploads/a2.jpeg', 1980),
('hvjhj', 'bvbdjv', 'ktr/203/00206', '073452436', 'chytr@gmail.com', '1977/1980', 'alumniuploads/a2.jpeg', 1980),
('jdsbjk', 'vjdbvjk', 'ktr/203/00207', '0720436842', 'chesire.marks@gmail.com', '1976/1979', 'alumniuploads/abstain.jpg', 1979),
('vhbhj', 'hjxvzhj', 'ktr/203/00208', '0734562536', 'cherop.dan@gmail.com', '1976/1979', 'alumniuploads/a2.jpeg', 1979),
('bvhzhj', 'bhjvbzj', 'ktr/203/00209', '0726179177', 'chesire.kiprop@gmail.com', '1975/1978', 'alumniuploads/avert.png', 1978),
('hfvhjv', 'bzbvjz', 'ktr/203/00210', '0726179177', 'chytr@gmail.com', '1975/1978', 'alumniuploads/avatar3.png', 1978),
('vbcxj', 'hjzbjh', 'ktr/203/00211', '073452436', 'chesire.marks@gmail.com', '1974/1977', 'alumniuploads/a2.jpeg', 1977),
('hdsj', 'vhsdb', 'ktr/203/00212', '0726179177', 'calistus@gmail.com', '1974/1977', 'alumniuploads/abstain.jpg', 1977),
('chvhjcv', 'bmbz', 'ktr/203/00213', '0726179177', 'cherop.dan@gmail.com', '1973/1976', 'alumniuploads/a2.jpeg', 1976),
('hjhd', 'ghvj', 'ktr/203/00214', '0726179177', 'chytr@gmail.com', '1973/1976', 'alumniuploads/abstain.jpg', 1976),
('hdsjfgsb', 'hjvj', 'ktr/203/00215', '073452436', 'chytr@gmail.com', '1971/1975', 'alumniuploads/a2.jpeg', 1975),
('hvhs', 'fjF', 'ktr/203/00216', '0720436842', 'chesire.kiprop@gmail.com', '1972/1975', 'alumniuploads/a2.jpeg', 1975),
('zvczvjc', 'bvbz', 'ktr/203/00217', '0720436842', 'jesire.alice@gmail.com', '11971/1974', 'alumniuploads/a2.jpeg', 1974),
('chjvhj', 'hgh', 'ktr/203/00218', '0720436842', 'jemtai.chep@gmail.com', '11971/1974', 'alumniuploads/abstain.jpg', 1974),
('bhdb', 'bhvzdj', 'ktr/203/00219', '0720436842', 'jgjhb@yahoo.com', '1970/1973', 'alumniuploads/a2.jpeg', 1973),
('vhbsd', 'bvnbcn', 'ktr/203/00220', '0726179177', 'jgjhb@yahoo.com', '1970/1973', 'alumniuploads/abstain.jpg', 1973),
('bb', 'jkbfkj', 'ktr/203/00221', '0720436842', 'chesire.marks@gmail.com', '1966/1969', 'alumniuploads/a2.jpeg', 1969),
('bcab', 'hvdsvjb', 'ktr/203/00222', '0726179177', 'cherop.dan@gmail.com', '1966/1969', 'alumniuploads/a2.jpeg', 1969),
('vcb', 'nh', 'ktr/203/00223', '0734562536', 'jgjhb@yahoo.com', '1965/1968', 'alumniuploads/a2.jpeg', 1968),
('jvjhb', 'jvbjk', 'ktr/203/00224', '0720436842', 'jgjhb@yahoo.com', '1965/1968', 'alumniuploads/abstain.jpg', 1968),
('bvbd', 'hvbsd', 'ktr/203/00226', '0720436842', 'jesire.alice@gmail.com', '1968/1972', 'alumniuploads/a2.jpeg', 1972),
('vjhchj', 'bvjs', 'ktr/203/00228', '073452436', 'jemtai.chep@gmail.com', '1968/1972', 'alumniuploads/abstain.jpg', 1972),
('fhsaj', 'vbsj', 'ktr/203/00229', '0726179177', 'jgjhb@yahoo.com', '1968/1971', 'alumniuploads/a2.jpeg', 1971),
('jhv', 'bchjab', 'ktr/203/00230', '0720436842', 'jgjhb@yahoo.com', '1968/1971', 'alumniuploads/abstain.jpg', 1971),
('jvbjk', 'vhjk', 'ktr/203/00231', '0720436842', 'jgjhb@yahoo.com', '1967/1970', 'alumniuploads/a2.jpeg', 1970),
('hvjc', 'vbcxb', 'ktr/203/00234', '0764423786', 'alice.jesire@gmail.com', '1967/1970', 'alumniuploads/abstain.jpg', 1970),
('vghvgjh', 'ghjfvdhj', 'ktr/203/00239', '0726179177', 'chesire.marks@gmail.com', '1964/1967', 'alumniuploads/a2.jpeg', 1967),
('fhdsv', 'hfasvh', 'ktr/203/00241', '0764423786', 'jgjhb@yahoo.com', '1963/1966', 'alumniuploads/a2.jpeg', 1966),
('xhzhj', 'hjzj', 'ktr/203/00242', '0720436842', 'jemtai.chep@gmail.com', '1963/1966', 'alumniuploads/abstain.jpg', 1966),
('nvbj', 'jkbjdk', 'ktr/203/00243', '0720436842', 'jesire.alice@gmail.com', '1962/1965', 'alumniuploads/a2.jpeg', 1965),
('bhjbsd', 'jdsbjk', 'ktr/203/00244', '0726179177', 'chesire.marks@gmail.com', '1962/1965', 'alumniuploads/abstain.jpg', 1965),
('hjvbhjs', 'nbc', 'ktr/203/00245', '0720436842', 'jemtai.chep@gmail.com', '1961/1964', 'alumniuploads/a2.jpeg', 1964),
('vhjsbj', 'vbhjhk', 'ktr/203/00246', '073452436', 'jemtai.chep@gmail.com', '1961/1964', 'alumniuploads/abstain.jpg', 1964),
('djfhvdsj', 'vjbxj', 'ktr/203/00247', '0726179177', 'jgjhb@yahoo.com', '1960/1963', 'alumniuploads/a2.jpeg', 1963),
('ghjzvhjz', 'bvbdjv', 'ktr/203/00248', '0720436842', 'jgjhb@yahoo.com', '1959/1962', 'alumniuploads/a2.jpeg', 1962),
('cvzv', 'bvhjdbsj', 'ktr/203/00250', '0726179177', 'jgjhb@yahoo.com', '1959/1962', 'alumniuploads/abstain.jpg', 1962),
('dghfh', 'vjhdbvhj', 'ktr/203/0027', '0726179177', 'chesire.marks@gmail.com', '2008/2011', 'alumniuploads/abstain.jpg', 2011),
('fghsdfh', 'fgsgd', 'ktr/203/0034', '0726179177', 'chesire.marks@gmail.com', '2008/2011', 'alumniuploads/a2.jpeg', 2011),
('bjhbj', 'hvdbsj', 'ktr/203/0040', '0734562536', 'jemtai.chep@gmail.com', '1964/1967', 'alumniuploads/abstain.jpg', 1967),
('gxfhd', 'vjdsbvkj', 'ktr/203/675', '0734562536', 'ght@gmail.com', '2008/2011', 'alumniuploads/a2.jpeg', 2011),
('mc', 'bt', 'ktr/456/799', '0764423786', 'chytr@gmail.com', '2008/2011', 'alumniuploads/632d1ad443718bc9a71a29b60eb08d4b.jpg', 2011),
('Robert', 'Mugai', 'trtrygcbf', '0726179177', 'chesire.marks@gmail.com', '2008/2011', 'alumniuploads/Hydrangeas.jpg', 2011);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `user_id` int(250) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email_address` varchar(140) NOT NULL,
  `phone` int(10) NOT NULL,
  `responsibility` varchar(140) NOT NULL,
  `message` varchar(160) NOT NULL,
  `submission_date` timestamp NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`user_id`, `firstname`, `surname`, `email_address`, `phone`, `responsibility`, `message`, `submission_date`) VALUES
(1, 'mark', 'chesire', 'chesire.marks@gmail.com', 726179177, 'parent', '///\\\\I could not make.;;to com today in the morning', '2017-01-11 08:30:01'),
(2, 'chesire', 'mark', 'markchesire20@gmail.com', 726179177, 'teacher', 'Tell al student to report back on monday', '2017-01-11 08:30:41'),
(3, 'mark', 'chesire', 'markchesire20@gmail.com', 726179177, 'student', '\\\\\\\\\\\\///.,,,,;;;[]]]]]]000999...,;;''\\''', '2017-01-11 08:31:25'),
(4, 'dan', 'mark', 'markchesire20@gmail.com', 726179177, 'parent', 'good perforancr', '2017-01-15 15:03:35'),
(5, 'mark', 'chesire', 'markchesire20@gmail.com', 726179177, 'student', 'we go', '2017-01-21 09:42:13'),
(6, 'mark', 'chesire', 'markchesire20@gmail.com', 726179177, 'student', 'htghj', '2017-01-21 17:21:12'),
(7, 'mark', 'chesire', 'markchesire20@gmail.com', 726179177, 'student', 't me', '2017-01-22 05:00:39'),
(8, '', '', '', 0, '', '', '2019-02-23 21:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
  `idnumber` int(100) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  PRIMARY KEY (`idnumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1011 ;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`idnumber`, `firstname`, `surname`) VALUES
(1000, 'mark', 'chesire'),
(1001, 'Victor', 'Munyau'),
(1002, 'Calistus', 'Asembo'),
(1003, 'Deno', 'Juma'),
(1004, 'sam', 'Simiyu'),
(1005, 'Joseph', 'Peter''s'),
(1006, 'James', 'Walker'),
(1007, 'Caren', 'Dan'),
(1008, 'Wambua', 'Victor'),
(1009, 'Daniel', 'Kimaru'),
(1010, 'Onesmus', 'Thomas');

-- --------------------------------------------------------

--
-- Table structure for table `school_population`
--

CREATE TABLE IF NOT EXISTS `school_population` (
  `form_id` int(250) NOT NULL,
  `form_name` varchar(250) NOT NULL,
  `male` int(250) NOT NULL,
  `female` int(250) NOT NULL,
  `total` int(250) NOT NULL,
  PRIMARY KEY (`form_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_population`
--

INSERT INTO `school_population` (`form_id`, `form_name`, `male`, `female`, `total`) VALUES
(1, 'form one', 100, 100, 200),
(2, 'form two', 100, 100, 200),
(3, 'form three', 100, 100, 200),
(4, 'form four', 100, 100, 200);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `username` varchar(200) NOT NULL,
  `mobilenumber` varchar(15) NOT NULL,
  `staffno` int(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`staffno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`username`, `mobilenumber`, `staffno`, `password`) VALUES
('mark', '+254726179177', 1000, 'tXH4sE2G');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `admnumber` varchar(250) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `surname` varchar(250) NOT NULL,
  PRIMARY KEY (`admnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`admnumber`, `firstname`, `surname`) VALUES
('KTR/203/00100', 'Joseph', 'clare'),
('KTR/203/00101', 'Mark', 'chesire'),
('KTR/203/00102', 'Calvin', 'Harris'),
('KTR/203/00103', 'Peter', 'Kinyua'),
('KTR/203/00104', 'Simiyu', 'Joseph'),
('KTR/203/00105', 'Chain', 'Smokers'),
('KTR/203/00106', 'Uhuru', 'Kucha'),
('KTR/203/00107', 'Mwangi', 'Keneth'),
('KTR/203/00108', 'Williams', 'Kennedy'),
('KTR/203/00109', 'Juliet', 'Kisang'),
('KTR/20300110', 'Suns', 'Sevens');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
