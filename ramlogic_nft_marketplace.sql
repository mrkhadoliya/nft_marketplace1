-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2021 at 08:39 AM
-- Server version: 5.7.35
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramlogic_nft_marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `nft_detail`
--

CREATE TABLE `nft_detail` (
  `id` int(10) NOT NULL,
  `resell` int(10) NOT NULL DEFAULT '0',
  `status` int(10) NOT NULL DEFAULT '0',
  `Owner_address` varchar(255) DEFAULT 'TPdYm2WrZT2sok6oMmqGkeBrCeaUPs1fx9',
  `Token_id` int(10) NOT NULL,
  `Owner` varchar(255) NOT NULL,
  `artist` text NOT NULL,
  `NFT_owner_add` varchar(255) NOT NULL,
  `Token_name` text NOT NULL,
  `Token_image` varchar(255) NOT NULL,
  `Token_amount` int(10) NOT NULL,
  `trans_id` text,
  `contract_address` varchar(255) NOT NULL DEFAULT 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs',
  `discription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nft_detail`
--

INSERT INTO `nft_detail` (`id`, `resell`, `status`, `Owner_address`, `Token_id`, `Owner`, `artist`, `NFT_owner_add`, `Token_name`, `Token_image`, `Token_amount`, `trans_id`, `contract_address`, `discription`) VALUES
(19, 0, 0, '', 647663, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TBTD52hWqCULEh9K3gxtprfuvTUhEYMo9W', 'NyanCat', 'uploads/974052final_6039a4b26a140a00a1cffbd3_143170.gif', 15, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'This Is A NFT Of the NyanCat'),
(20, 0, 0, '', 373281, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'pramode', 'TPdYm2WrZT2sok6oMmqGkeBrCeaUPs1fx9', 'CHUBBIES', 'uploads/394580launch-banner-54c42072294c2a0675993328bbbba870.gif', 5, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'This Is A Group Of The Chubbies '),
(21, 0, 0, '', 222018, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'pramode', 'TPdYm2WrZT2sok6oMmqGkeBrCeaUPs1fx9', 'TRINITY ', 'uploads/985795chubbies.gif', 5, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'The Trinity of the Chubbies '),
(22, 0, 0, '', 543158, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'pramode', 'TPdYm2WrZT2sok6oMmqGkeBrCeaUPs1fx9', 'Deadpool', 'uploads/660684unnamed (1).png', 2, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'Bad Deadpool... Good Deadpool!-Deadpool'),
(23, 0, 0, '', 545579, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'ramlogics', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'SMEELLY CAT', 'uploads/489746unnamed.png', 4, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'Smelly Cat Smelly Cat it is not your fault - Phoebe Buffay'),
(24, -1, 0, '', 621140, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TBTD52hWqCULEh9K3gxtprfuvTUhEYMo9W', 'testing', 'uploads/893365gray2.png', 20, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this is testing purpose'),
(25, 0, 0, '', 845638, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'ramlogics', 'TLqW7eZSfVYT8cYSbbZibkasJfWcLghe9i', 'Iron man ', 'uploads/187273209934.gif', 400, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'AND I am iron man'),
(26, 0, 0, '', 200682, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'anurag chhipa ', 'uploads/560141anurag.jpeg', 3, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this is a image of anurag'),
(27, 0, 0, '', 993352, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'demp', 'uploads/686391images.png', 6, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'dmslfslvfm v'),
(28, 0, 0, '', 820965, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'ree', 'uploads/363135ppp.png', 6, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'safsf'),
(29, 0, 0, '', 776757, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'sourabh tirthani ', 'uploads/155679google-cloud-chronicle.jpg', 5, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'sdfsdfsdfdsf'),
(30, 0, 0, '', 440624, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'sourabh tirthani ', 'uploads/92861screenshot 3.jpg', 4, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'vmdkfvldmlfv'),
(31, 0, 0, '', 227070, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh tirthani ', 'uploads/268348screenshot 3.jpg', 2, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'vmdkfvldmlfv'),
(32, 0, 0, '', 756285, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'Sourabh NFT', 'uploads/353615mountains-under-mist-morning-amazing-260nw-1725825019.jpg', 3, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this is a demo nft'),
(33, 0, 0, '', 519312, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'nishant', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'SKT', 'uploads/450388mountains-under-mist-morning-amazing-260nw-1725825019.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this is '),
(34, 0, 0, '', 346188, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'nishant', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'birds', 'uploads/145956download (1).jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this is a image of bird '),
(35, 0, 0, '', 941865, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'nishant', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'birds', 'uploads/193190download (1).jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'jnekwnfk'),
(36, 0, 0, '', 349068, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'nishant', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'Tree', 'uploads/501274tree-736885__480.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this is a image of tree'),
(37, 0, 0, '', 568912, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'nishant', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'Tree', 'uploads/839153tree-736885__480.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this is a image of tree'),
(38, 0, 0, '', 600514, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'nishant', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'Hawa mahal', 'uploads/834733photo-1524229648276-e66561fe45a9.jpg', 2, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this is a hawa mahal'),
(39, 0, 0, '', 204291, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'okay', 'uploads/559241images.jpg', 2, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'Done'),
(40, 0, 0, '', 425572, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'demo', 'uploads/448451photo-1556103255-4443dbae8e5a.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'This is a demo '),
(41, 0, 0, '', 688796, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'demo', 'uploads/600658photo-1556103255-4443dbae8e5a.jpg', 10, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this is a demo '),
(42, 0, 0, '', 193924, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh tirthani', 'uploads/70952photo-1556103255-4443dbae8e5a.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this is a demo'),
(43, 0, 0, '', 529675, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh tirthani ', 'uploads/65260tree-736885__480.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'THiaddkandfkjnfk'),
(44, 0, 1, '', 386002, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'Sourabh SKT', 'uploads/670217photo-1556103255-4443dbae8e5a.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', '1'),
(45, 0, 1, '', 749481, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'bids ', 'uploads/download (1).jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this i qdknldfknlsdc'),
(46, 0, 0, '', 975167, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'hawa', 'uploads/photo-1524229648276-e66561fe45a9.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'fonfvnfvnfw'),
(47, 0, 0, '', 970355, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'a book ', 'uploads/download.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this is a book'),
(48, 0, 0, '', 644188, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'fesf1', 'uploads/download (1).jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'lknlsdl'),
(49, 0, 0, '', 536000, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sfrf', 'uploads/790575images.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'gdgewrgewrgew'),
(50, 0, 0, '', 357145, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'efasf', 'uploads/588695download (1).jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'sdfsfsf'),
(51, 0, 0, '', 622353, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sour', 'uploads/photo-1524229648276-e66561fe45a9.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'rgewgerg'),
(52, 0, 0, '', 810864, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh tirthani photo', 'uploads/photo-1556103255-4443dbae8e5a.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this is it'),
(53, 0, 0, '', 752591, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'nishant', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'hfwehj', 'uploads/testnet.png', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'ldsnflsnflnsfln'),
(54, 0, 0, '', 292954, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'nishant', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'mqmlmflmlad', 'uploads/download (1).jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'ktnjodansnflnfndfLNFLDNFL'),
(55, 0, 0, '', 269715, 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'nishant', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'safadf', 'uploads/images.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'afasdfadfAFdfd'),
(56, 0, 0, '', 229721, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'dfwf4', 'uploads/images (1).jpg', 4, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'vlmnvlsnvlnvln'),
(57, 0, 0, '', 436776, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'demo', 'uploads/_88615878_976x1024n0037151.jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'mwlmsdflwlk'),
(58, 0, 0, '', 951902, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'demo', 'uploads/free-images-featured.png', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'lmdmfwf'),
(59, 0, 0, '', 678549, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh tirthani ', 'uploads/images (1).jpg', 1, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'kmfkmff'),
(60, 0, 0, '', 891361, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh tirthani ', 'uploads/free-images-featured.png', 12, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'adsddwf'),
(61, 0, 0, '', 784410, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh tirthani ', 'uploads/images (1).jpg', 2, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'uyhgvtg'),
(62, 0, 0, '', 329994, 'pramod', 'pramod', 'TPD6sM5PYAYB2ZNcwmvmvNXDWBTc9xLPbJ', 'review', 'uploads/abstract1.jpg', 400, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', ' mdckd'),
(63, 0, 0, '', 252168, 'nishant', 'sourabh', 'TVtwVqGq8J787Cdrpna9PhGMWCXcpSfyKP', 'DEMO', 'uploads/eso1322a.jpg', 10, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'this is a demmo '),
(64, 0, 0, '', 211110, 'sourabh', 'nishant', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'swe', 'uploads/images (2).jpg', 2, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'nfskfnkfk'),
(65, 0, 0, '', 227426, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'demooooooooo', 'uploads/eso1322a.jpg', 11, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'smdfslmflmflemkglerkmglgtkmmlegmkmleqtgkmleqgkm'),
(66, 0, 0, '', 240108, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'demo', 'uploads/images (1).jpg', 12, 'fa967c8373800e4a804d866869dc40c8f11fc06bc175536d9f96be30babc77c2', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'lfnnflfld'),
(67, 0, 0, '', 557848, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sourabh', 'uploads/at23mar2010.jpg', 12, '0', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'wfndfndn'),
(68, 0, 0, '', 573161, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'hello', 'uploads/images (1).jpg', 12, 'ff5fd3f7def2191c801154a4e28097ce510fc2f61dd73499c6fdbf0672d960b4', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'nfwdfndwfnf'),
(69, 0, 0, '', 984574, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'afsdf', 'uploads/eso1322a.jpg', 2, '9ee5b7dbfb207f1084f99c5dcef50fd226b2f44dfc7265d04bda004fb5a5e659', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'efsfsf'),
(70, 0, 0, '', 436824, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sdfnlsn', 'uploads/images (2).jpg', 12, '0', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'sdlndlsadnflsnfl'),
(71, 0, 0, '', 231208, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'sdfnlsn', 'uploads/images (2).jpg', 12, '0', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'sdlndlsadnflsnfl'),
(72, 0, 0, '', 319709, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'demo', 'uploads/images (2).jpg', 12, '0', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'djnksnfksn'),
(73, 0, 0, '', 827347, 'sourabh', 'sourabh', 'TDZSG8VSP81d5V9mVARQtx1FGKghcpkAcL', 'kfml', 'uploads/free-images-featured.png', 12, '0', 'TZ2GCUuMbmbk9FmsFii1L7EZqGUhanFYjs', 'sdmmldmlw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nft_detail`
--
ALTER TABLE `nft_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nft_detail`
--
ALTER TABLE `nft_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
