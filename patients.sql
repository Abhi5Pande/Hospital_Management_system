-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 07:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patients_id` int(11) NOT NULL,
  `patients_Mobile_number` varchar(11) NOT NULL,
  `patients_Full_Name` text NOT NULL,
  `patients_DOB` date NOT NULL,
  `patients_Gender` varchar(10) NOT NULL,
  `patients_Address` text NOT NULL,
  `patients_Email_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patients_id`, `patients_Mobile_number`, `patients_Full_Name`, `patients_DOB`, `patients_Gender`, `patients_Address`, `patients_Email_id`) VALUES
(1, '1234567890', 'Utkarsh Kharcheeeee', '2021-07-10', 'Male', 'datala', 'abhi.pachpande@gmail.com'),
(2, '1234567890', 'Utkarsh Kharche', '2021-07-10', 'Male', 'datala', 'abhi.pachpande@gmail.com'),
(3, '1234567890', 'a b', '2021-07-10', 'Male', 'a', 'abhi.pachpande@gmail.com'),
(4, '1234567890', 'gbgybbbbb', '2021-07-10', 'Male', 'a', 'abhi.pachpande@gmail.com'),
(5, '1234567890', 'Abhijit Pachpande', '2021-07-02', 'Others', 'hbbhb', 'a@b.c'),
(6, '1234567890', 'Abhijit Pachpande', '2021-07-02', 'Male', 'hbbhb', 'a@b.c'),
(7, '1234567890', 'Abhijit Pachpande', '2021-07-02', 'Male', 'hbbhb', 'a@b.c'),
(8, '1234567890', 'Abhijit Pachpande', '2021-07-02', 'Male', 'hbbhb', 'a@b.c'),
(9, '1234567890', 'Abhijit Pachpande', '2021-07-02', 'Male', 'hbbhb', 'a@b.c'),
(10, '1234567890', 'Abhijit Pachpande', '2021-07-02', 'Male', 'hbbhb', 'a@b.c'),
(11, '1234567890', 'Abhijit Pachpande', '2005-01-12', 'Male', 'E-1001', 'a@b.c'),
(12, '1234567890', 'gjm', '2020-09-02', 'Male', 'asdfghjkl;', 'd@g.c'),
(13, '0987654321', 'gbgyb', '2020-10-22', 'Others', 'asdfghjk', 'asdfghjk@mnbvcxz.qwertyuio'),
(14, '0987654321', 'gbgyb', '2020-10-22', 'Others', 'asdfghjk', 'asdfghjk@mnbvcxz.qwertyuio'),
(15, '0987654321', 'gbgyb', '2020-10-22', 'Others', 'asdfghjk', 'asdfghjk@mnbvcxz.qwertyuio'),
(16, '1234565432', 'gjm', '2021-07-10', 'Female', 'asdfghjk', 'sdfgy@sdgn'),
(17, '9689357955', 'Abhijit Pachpande', '2021-07-15', 'Female', 'sdasd', 'd@g.c'),
(18, '1234554321', 'Abhijit Pachpande', '2021-07-02', 'Female', 'qwertyujhgfdszxcvb', 'asdf@gfds.asd'),
(19, '9822453925', 'Sanjay Pachpande', '1969-01-29', 'Male', 'Rohan Garima , shiv hsg soc , pune -411016 , Maharashtra', 'sanjayp.pachpande@gmail.com'),
(20, '8263850266', 'Priyanka Pachpande', '1996-05-10', 'Female', 'Yelahanka , Banglore', 'pitu@gmu.in'),
(21, '8263850266', 'Priyanka Pachpande', '1996-05-10', 'Female', 'Yelahanka , Banglore', 'pitu@gmu.in'),
(22, '8263850266', 'Priyanka Pachpande', '1996-05-10', 'Female', 'Yelahanka , Banglore', 'pitu@gmu.in'),
(23, '8263850266', 'Priyanka Pachpande', '1996-05-10', 'Female', 'Yelahanka , Banglore', 'pitu@gmu.in'),
(24, '8765436543', 'weweqwe', '2021-07-01', 'Male', 'hygtfrdesw', 'sdfgy@sdgn'),
(25, '8765436543', 'weweqwe', '2021-07-01', 'Male', 'hygtfrdesw', 'sdfgy@sdgn'),
(26, '9876543211', 'Abhijit Pachpande', '2021-07-22', 'Male', 'ou7y6t5resa', 'kjhg@sdfh'),
(27, '9876543211', 'Abhijit Pachpandekk', '2021-07-22', 'Male', 'ou7y6t5resa', 'kjhg@sdfh'),
(28, '1234567890', 'Abhijit Pachpande', '2021-06-30', 'Female', 'asdfvgbhjk', 'sdfgy@sdgn'),
(29, '1234567890', 'Abhijit Pachpande', '2021-06-30', 'Female', 'asdfvgbhjk', 'sdfgy@sdgn'),
(30, '2345628733', 'Abhijit Pachpande', '2021-07-01', 'Male', 'asdv', 'asdfghjk@mnbvcxz.qwertyuio'),
(31, '2345628733', 'Abhijit Pachpande', '2021-07-01', 'Male', 'asdv', 'asdfghjk@mnbvcxz.qwertyuio'),
(32, '1234567890', 'Priyanka Pachpande', '2021-07-04', 'Female', 'ert', 'pitu@gmu.in'),
(33, '1234567890', 'Priyanka Pachpande', '2021-07-04', 'Female', 'ert', 'pitu@gmu.in'),
(34, '1234567890', 'Priyanka Pachpande', '2021-07-04', 'Female', 'ert', 'pitu@gmu.in'),
(35, '1234567890', 'Abhijit Pachpande', '2021-07-03', 'Others', 'ytrds', 'd@g.c'),
(36, '1234567890', 'Abhijit Pachpande', '2021-07-03', 'Others', 'ytrds', 'd@g.c'),
(37, '1234567890', 'Abhijit Pachpande', '2021-07-03', 'Others', 'ytrds', 'd@g.c'),
(38, '8263850266', 'Abhijit Pachpande', '2021-07-15', 'Male', 'asda', 'asdfghjk@mnbvcxz.qwertyuio'),
(39, '1234567890', 'asdasd', '2021-07-15', 'Male', 'ads', 'abhi.pachpande@gmail.com'),
(40, '1234567890', 'asdasd', '2021-07-15', 'Male', 'ads', 'abhi.pachpande@gmail.com'),
(41, '0987654321', 'Priyanka Pachpande', '2021-07-15', 'Female', 'dsffsd', 'asdfghjk@mnbvcxz.qwertyuio'),
(42, '1234123451', 'Abhijit Pachpande', '2021-07-15', 'Others', 'asdfg', 'abhi.pachpande@gmail.com'),
(43, '1234123451', 'Abhijit Pachpande', '2021-07-15', 'Others', 'asdfg', 'abhi.pachpande@gmail.com'),
(44, '8263850266', 'Abhijit Pachpande', '2021-07-15', 'Male', '1234562345', 'asdfghjk@mnbvcxz.qwertyuio'),
(45, '8263850266', 'Abhijit Pachpande', '2021-07-15', 'Male', '123456123456', 'pitu@gmu.in'),
(46, '1234567890', 'artyuk;', '2021-07-01', 'Male', 'zx,', 'sdfgy@sdgn'),
(47, '1234567890', 'artyuk;', '2021-07-01', 'Male', 'zx,', 'sdfgy@sdgn'),
(48, '0987654321', 'Abhijit Pachpande', '2021-07-15', 'Male', 's', 'sdfgy@sdgn'),
(49, '0987654321', 'Amey Pachpande', '2021-07-15', 'Male', 's', 'sdfgy@sdgn'),
(50, '0987654321', 'Amey Pachpande', '2021-07-15', 'Male', 's', 'sdfgy@sdgn'),
(51, '0987654321', 'Amey Pachpande', '2021-07-15', 'Male', 's', 'sdfgy@sdgn'),
(52, '6543216543', 'Abhijit Pachpande', '2021-07-02', 'Male', 'datala', 'asdfghjk@mnbvcxz.qwertyuio'),
(53, '1234567890', 'Priyanka Pachpande', '2021-07-09', 'Female', 'dsaz', 'd@g.c'),
(54, '98765432116', 'sanjaypp', '2001-07-17', 'Male', 'dysuialkk', 'a@bkk'),
(55, '1234567890', 'Abhijit Pachpande', '2021-07-02', 'Male', 'anamika building', 'sdfgy@sdgn'),
(56, '8765432987', 'Amey Pachpande', '2021-07-03', 'Female', 'Sun SAtellite', 'd@g.c'),
(57, '1234567890', 'Utkarsh Kharche', '2021-07-10', 'Male', 'datala', 'abhi.pachpande@gmail.com'),
(58, '1234567890', 'Priyanka Pachpande', '2021-07-03', 'Female', 'aa', 'abhi.pachpande@gmail.com'),
(59, '1234567890', 'Amey Pachpandeeee', '2021-06-30', '', 'gghfh', 'sdfgy@sdgn'),
(64, '12345678900', '', '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patients_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patients_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
