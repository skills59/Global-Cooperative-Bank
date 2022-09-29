-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 07:18 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `globalcoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_fname` varchar(35) NOT NULL,
  `Telephone` varchar(18) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_dollar` varchar(15) NOT NULL,
  `user_euro` varchar(15) NOT NULL,
  `user_pounds` varchar(15) NOT NULL,
  `LastRecieveDollar` varchar(15) NOT NULL,
  `LastSent` varchar(15) NOT NULL,
  `Reference` varchar(15) NOT NULL,
  `ref2` varchar(15) NOT NULL,
  `ref3` varchar(15) NOT NULL,
  `ref4` varchar(15) NOT NULL,
  `Transaction` varchar(15) NOT NULL,
  `Transaction2` varchar(15) NOT NULL,
  `Transaction3` varchar(20) NOT NULL,
  `Transaction4` varchar(20) NOT NULL,
  `ReciversName` varchar(30) NOT NULL,
  `ReciversName2` varchar(30) NOT NULL,
  `ReciversName3` varchar(30) NOT NULL,
  `ReciversName4` varchar(30) NOT NULL,
  `BeneficiaryBank` varchar(30) NOT NULL,
  `BeneficiaryBank2` varchar(30) NOT NULL,
  `BeneficiaryBank3` varchar(30) NOT NULL,
  `BeneficiaryBank4` varchar(30) NOT NULL,
  `Amount` varchar(13) NOT NULL,
  `Amount2` varchar(13) NOT NULL,
  `Amount3` varchar(13) NOT NULL,
  `Amount4` varchar(23) NOT NULL,
  `Status` varchar(14) NOT NULL,
  `status2` varchar(14) NOT NULL,
  `status3` varchar(20) NOT NULL,
  `status4` varchar(20) NOT NULL,
  `Date` varchar(12) NOT NULL,
  `Date2` varchar(12) NOT NULL,
  `Date3` varchar(12) NOT NULL,
  `Date4` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_fname`, `Telephone`, `user_email`, `user_pass`, `joining_date`, `user_dollar`, `user_euro`, `user_pounds`, `LastRecieveDollar`, `LastSent`, `Reference`, `ref2`, `ref3`, `ref4`, `Transaction`, `Transaction2`, `Transaction3`, `Transaction4`, `ReciversName`, `ReciversName2`, `ReciversName3`, `ReciversName4`, `BeneficiaryBank`, `BeneficiaryBank2`, `BeneficiaryBank3`, `BeneficiaryBank4`, `Amount`, `Amount2`, `Amount3`, `Amount4`, `Status`, `status2`, `status3`, `status4`, `Date`, `Date2`, `Date3`, `Date4`) VALUES
(1, 'xiashishio', 'administrator', '', 'Administrator@magnumcoopbank.ga', '$2y$10$j2WjDHSgAkoWXRYyCoKhxuMeFVcALkZlUf0Fa8X1yaV55a7E706yS', '2017-02-02 09:23:35', '760,742.24', '458,474.45', '90,457.45', '90,457.45', '', '', 'EB8542859625', 'EB8542859653', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '2217135087', 'Mark Holder', '', 'Administrator@magnumcoopbank.ga', '$2y$10$j2WjDHSgAkoWXRYyCoKhxuMeFVcALkZlUf0Fa8X1yaV55a7E706yS', '2017-02-02 09:23:35', '768,560.24', '0.01', '0.00', '90,457.45', '', 'EB8542834647', '', '', '', 'Local', '', '', '', 'Lynn A Eisenbraun', '', '', '', 'Chase Bank', '', '', '', '68,000.00', '', '', '', 'On Hold', '', '', '', '5/20/2018', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221750769;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
