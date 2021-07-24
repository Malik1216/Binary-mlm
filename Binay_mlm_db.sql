-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 04:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pass`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `amt` varchar(50) DEFAULT NULL,
  `wallet_amt` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `email`, `detail`, `date`, `amt`, `wallet_amt`) VALUES
(32, 'mmehboob100ee30@gmail.com', 'bought package', '2021-06-14 12:22:50pm', '-100', '0'),
(33, 'mmehboob1000@gmail.com', 'Pair Bonus', '2021-06-14 08:37:10pm', '+20', '8220'),
(34, 'mmehboob100ee30@gmail.com', 'bought package', '2021-06-14 08:53:37pm', '-100', '0'),
(35, 'mmehboob100ee30@gmail.com', 'bought package', '2021-06-14 08:58:38pm', '-100', '9900'),
(36, 'mmehboob100ee30@gmail.com', 'bought package', '2021-06-14 08:58:44pm', '-100', '9800'),
(37, 'mmehboob100ee30@gmail.com', 'bought package', '2021-06-14 08:58:59pm', '-100', '9700'),
(38, 'mmehboob100ee30@gmail.com', 'bought package', '2021-06-14 09:00:37pm', '-100', '9600'),
(39, 'mmehboob100ee30@gmail.com', 'bought package', '2021-06-14 09:01:43pm', '-100', '9500'),
(40, 'mmehboob100ee30@gmail.com', 'bought package', '2021-06-14 09:03:20pm', '-100', '9400'),
(41, 'mmehboob100ee30@gmail.com', 'bought package', '2021-06-14 09:05:52pm', '-200', '9200'),
(42, 'mmehboob1000@gmail.com', 'Direct Bonus from Mehboob Hassan', '2021-06-14 09:05:52pm', '20', '$'),
(43, 'Û^;ãÍúã', 'Direct Bonus from Mehboob Hassan', '2021-06-14 09:05:52pm', '2', '$'),
(44, 'mmehboob100ee30@gmail.com', 'bought package', '2021-06-14 09:08:27pm', '-100', '9100'),
(45, 'mmehboob1000@gmail.com', 'Direct Bonus from test1', '2021-06-14 09:08:27pm', '+10', '8250'),
(46, 'Û^;ãÍúã', 'Direct Bonus from mehboob', '2021-06-14 09:08:27pm', '+1', ''),
(47, 'mmehboob1000@gmail.com', 'bought package', '2021-06-17 09:41:02pm', '-100', '8150'),
(48, 'Û^;ãÍúã', 'Direct Bonus from mehboob', '2021-06-17 09:41:02pm', '+10', ''),
(49, 'mmehboob1000@gmail.com', 'bought package', '2021-06-17 09:45:55pm', '-200', '7950'),
(50, 'Û^;ãÍúã', 'Direct Bonus from mehboob', '2021-06-17 09:45:55pm', '+20', ''),
(51, 'mmehboob1000@gmail.com', 'bought package', '2021-06-17 10:20:26pm', '-400', '7550'),
(52, 'Û^;ãÍúã', 'Direct Bonus from mehboob', '2021-06-17 10:20:26pm', '+40', ''),
(53, 'mmehboob1000@gmail.com', 'bought package', '2021-06-17 10:20:31pm', '-50', '7500'),
(54, 'Û^;ãÍúã', 'Direct Bonus from mehboob', '2021-06-17 10:20:31pm', '+5', ''),
(55, 'mmehboob1000@gmail.com', 'RIO Bonus form 100 Package', NULL, '0', '7500'),
(56, 'mmehboob1000@gmail.com', 'RIO Bonus form 200 Package', NULL, '0', '7500'),
(57, 'mmehboob1000@gmail.com', 'RIO Bonus form 400 Package', NULL, '0', '7500'),
(58, 'mmehboob1000@gmail.com', 'RIO Bonus form 50 Package', NULL, '0', '7500'),
(59, 'mmehboob1000@gmail.com', 'RIO Bonus form 100 Package', '2021-06-19 04:55:53pm', '5', '7505'),
(60, 'mmehboob1000@gmail.com', 'RIO Bonus form 200 Package', '2021-06-19 04:55:53pm', '12', '7517'),
(61, 'mmehboob1000@gmail.com', 'RIO Bonus form 400 Package', '2021-06-19 04:55:53pm', '0', '7517'),
(62, 'mmehboob1000@gmail.com', 'RIO Bonus form 50 Package', '2021-06-19 04:55:53pm', '0', '7517'),
(63, 'mmehboob1000@gmail.com', 'RIO Bonus form 100 Package', '2021-06-19 05:01:31pm', '0', '7500'),
(64, 'mmehboob1000@gmail.com', 'RIO Bonus form 200 Package', '2021-06-19 05:01:31pm', '0', '7500'),
(65, 'mmehboob1000@gmail.com', 'RIO Bonus form 400 Package', '2021-06-19 05:01:31pm', '0', '7500'),
(66, 'mmehboob1000@gmail.com', 'RIO Bonus form 50 Package', '2021-06-19 05:01:31pm', '1', '7501'),
(67, 'mmehboob1000@gmail.com', 'RIO Bonus form 100 Package', '2021-06-19 05:02:43pm', '0', '7500'),
(68, 'mmehboob1000@gmail.com', 'RIO Bonus form 200 Package', '2021-06-19 05:02:43pm', '0', '7500'),
(69, 'mmehboob1000@gmail.com', 'RIO Bonus form 400 Package', '2021-06-19 05:02:43pm', '0', '7500'),
(70, 'mmehboob1000@gmail.com', 'RIO Bonus form 50 Package', '2021-06-19 05:02:43pm', '1', '7501'),
(71, 'mmehboob1000@gmail.com', 'RIO Bonus form 100 Package', '2021-06-19 05:06:07pm', '0', '7501'),
(72, 'mmehboob1000@gmail.com', 'RIO Bonus form 200 Package', '2021-06-19 05:06:07pm', '0', '7501'),
(73, 'mmehboob1000@gmail.com', 'RIO Bonus form 400 Package', '2021-06-19 05:06:07pm', '8', '7509'),
(74, 'mmehboob1000@gmail.com', 'RIO Bonus form 50 Package', '2021-06-19 05:06:07pm', '0', '7509'),
(75, 'mmehboob1000@gmail.com', 'RIO Bonus form 100 Package', '2021-06-19 05:09:27pm', '5', '7514');

-- --------------------------------------------------------

--
-- Table structure for table `pkgs`
--

CREATE TABLE `pkgs` (
  `id` int(11) NOT NULL,
  `pkg_name` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `rio_date` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pkgs`
--

INSERT INTO `pkgs` (`id`, `pkg_name`, `date`, `email`, `rio_date`) VALUES
(38, '100', '2021-06-10 09:41:02pm', 'mmehboob1000@gmail.com', '2021-06-19 05:09:27pm'),
(39, '200', '2021-06-03 09:45:55pm', 'mmehboob1000@gmail.com', '2021-06-19 05:06:07pm'),
(40, '400', '2021-06-16 10:20:26pm', 'mmehboob1000@gmail.com', '2021-06-19 05:06:07pm'),
(41, '50', '2021-06-17 10:20:31pm', 'mmehboob1000@gmail.com', '2021-06-19 05:06:07pm');

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE `tree` (
  `id` int(11) NOT NULL,
  `parent` varchar(50) DEFAULT NULL,
  `node` varchar(50) DEFAULT NULL,
  `positon` int(11) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`id`, `parent`, `node`, `positon`, `date`) VALUES
(49, 'use3@test.com', 'mmehboob100ee0@gmail.com', 1, '2021/06/14'),
(50, 'mmehboob100ee0@gmail.com', 'mmehboob100ee30@gmail.com', 1, '2021/06/14'),
(43, 'mmehboob1000@gmail.com', 'mmehboob10@gmaill.com', 1, '2021/06/09'),
(44, 'mmehboob10@gmaill.com', 'mmehboob1@gmaill.com', 1, '2021/06/09'),
(45, 'mmehboob1000@gmail.com', 'junaid@test.com', 2, '2021/06/09'),
(46, 'junaid@test.com', 'sufyain@gmail.com', 1, '2021/06/09'),
(47, 'mmehboob1@gmaill.com', 'user@test.com', 1, '2021/06/13'),
(48, 'user@test.com', 'use3@test.com', 1, '2021/06/13'),
(51, 'junaid@test.com', 'last_test@test.com', 2, '2021/06/19'),
(52, 'last_test@test.com', 'Nasirpd77@gmail.com', 2, '2021/06/19'),
(53, 'Nasirpd77@gmail.com', 'Mumtaznazar786@gmail.com', 2, '2021/06/19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `sid` text DEFAULT NULL,
  `left_Sid` text DEFAULT NULL,
  `right_Sid` text DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `pass`, `phone`, `sid`, `left_Sid`, `right_Sid`, `uname`, `city`, `country`) VALUES
(11, 'Mehboob', 'Hassan', 'mmehboob1000@gmail.com', '202cb962ac59075b964b07152d234b70', '03312312121', '1', 'bW1laGJvb2IxMDAwQGdtYWlsLmNvbSxsZWZ0', 'bW1laGJvb2IxMDAwQGdtYWlsLmNvbSxyaWdodA==', 'mehboob', 'Lahore', 'Pakistan'),
(77, 'Mehboob', 'Hassan', 'mmehboob100ee0@gmail.com', '202cb962ac59075b964b07152d234b70', '03404305100', 'bW1laGJvb2IxMDAwQGdtYWlsLmNvbSxsZWZ0', 'bW1laGJvb2IxMDBlZTBAZ21haWwuY29tLGxlZnQ=', 'bW1laGJvb2IxMDBlZTBAZ21haWwuY29tLHJpZ2h0', 'Mark', 'Lahore', 'Pakistan'),
(71, 'Mehboob', 'Hassan', 'mmehboob10@gmaill.com', '202cb962ac59075b964b07152d234b70', '03312312312', 'bW1laGJvb2IxMDAwQGdtYWlsLmNvbSxsZWZ0', 'bW1laGJvb2IxMEBnbWFpbGwuY29tLGxlZnQ=', 'bW1laGJvb2IxMEBnbWFpbGwuY29tLHJpZ2h0', 'mehboob22', 'Lahore', 'Pakistan'),
(72, 'Mehboob', 'Hassan', 'mmehboob1@gmaill.com', '202cb962ac59075b964b07152d234b70', '03312312312', 'bW1laGJvb2IxMDAwQGdtYWlsLmNvbSxsZWZ0', 'bW1laGJvb2IxQGdtYWlsbC5jb20sbGVmdA==', 'bW1laGJvb2IxQGdtYWlsbC5jb20scmlnaHQ=', 'mehboob222', 'Lahore', 'Pakistan'),
(73, 'test', 'user', 'junaid@test.com', '202cb962ac59075b964b07152d234b70', '03312312312', 'bW1laGJvb2IxMDAwQGdtYWlsLmNvbSxyaWdodA==', 'anVuYWlkQHRlc3QuY29tLGxlZnQ=', 'anVuYWlkQHRlc3QuY29tLHJpZ2h0', 'junaid', 'Lahore', 'Pakistan'),
(74, 'Mehboob', 'Hassan', 'sufyain@gmail.com', '202cb962ac59075b964b07152d234b70', '03231231231', 'anVuYWlkQHRlc3QuY29tLGxlZnQ=', 'c3VmeWFpbkBnbWFpbC5jb20sbGVmdA==', 'c3VmeWFpbkBnbWFpbC5jb20scmlnaHQ=', 'junaid23', 'Lahore', 'Pakistan'),
(75, 'Mehboob', 'Hassan', 'user@test.com', '202cb962ac59075b964b07152d234b70', '03404305100', 'bW1laGJvb2IxMDAwQGdtYWlsLmNvbSxsZWZ0', 'dXNlckB0ZXN0LmNvbSxsZWZ0', 'dXNlckB0ZXN0LmNvbSxyaWdodA==', 'user1214', 'Lahore', 'Pakistan'),
(76, 'Mehboob232', 'Hassan', 'use3@test.com', '202cb962ac59075b964b07152d234b70', '03404305100', 'bW1laGJvb2IxMDAwQGdtYWlsLmNvbSxsZWZ0', 'dXNlM0B0ZXN0LmNvbSxsZWZ0', 'dXNlM0B0ZXN0LmNvbSxyaWdodA==', 'user121423', 'Lahore', 'Pakistan'),
(78, 'Mehboob', 'Hassan', 'mmehboob100ee30@gmail.com', '202cb962ac59075b964b07152d234b70', '03404305100', 'bW1laGJvb2IxMDAwQGdtYWlsLmNvbSxsZWZ0', 'bW1laGJvb2IxMDBlZTMwQGdtYWlsLmNvbSxsZWZ0', 'bW1laGJvb2IxMDBlZTMwQGdtYWlsLmNvbSxyaWdodA==', 'test1', 'Lahore', 'Pakistan'),
(79, 'last', 'test', 'last_test@test.com', '202cb962ac59075b964b07152d234b70', '03404305100', 'bW1laGJvb2IxMDAwQGdtYWlsLmNvbSxyaWdodA==', 'bGFzdF90ZXN0QHRlc3QuY29tLGxlZnQ=', 'bGFzdF90ZXN0QHRlc3QuY29tLHJpZ2h0', 'last_test', 'Lahore', 'Pakistan'),
(80, 'Muhammad ', 'Nasir', 'Nasirpd77@gmail.com', '33d403e86a266347fe3d264951eb0720', '03074588279', 'bW1laGJvb2IxMDAwQGdtYWlsLmNvbSxyaWdodA==', 'TmFzaXJwZDc3QGdtYWlsLmNvbSxsZWZ0', 'TmFzaXJwZDc3QGdtYWlsLmNvbSxyaWdodA==', 'Nasir77', 'Lahore', 'Pakistan'),
(81, 'Nazar', 'Mumtaz', 'Mumtaznazar786@gmail.com', 'b981058085fdf8a3d0576cdbc8b3be0c', '03030004002', 'bW1laGJvb2IxMDAwQGdtYWlsLmNvbSxyaWdodA==', 'TXVtdGF6bmF6YXI3ODZAZ21haWwuY29tLGxlZnQ=', 'TXVtdGF6bmF6YXI3ODZAZ21haWwuY29tLHJpZ2h0', 'Mumtaz2', 'Burewala', 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(11) NOT NULL,
  `amt` double DEFAULT NULL,
  `points_left` double DEFAULT NULL,
  `direct_bonus` double DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `points_right` double NOT NULL,
  `pair_bonus` int(11) DEFAULT NULL,
  `rio` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `amt`, `points_left`, `direct_bonus`, `email`, `points_right`, `pair_bonus`, `rio`) VALUES
(1, 7514, 0, 40, 'mmehboob1000@gmail.com', 300, 80, '14'),
(15, 0, 500, 0, 'mmehboob10@gmaill.com', 0, 0, '0'),
(16, 0, 400, 0, 'mmehboob1@gmaill.com', 0, 0, '0'),
(17, 0, 100, 0, 'junaid@test.com', 300, 0, '0'),
(18, 0, 0, 0, 'sufyain@gmail.com', 0, 0, '0'),
(19, 0, 300, 0, 'user@test.com', 0, 0, '0'),
(21, 0, 100, 0, 'mmehboob100ee0@gmail.com', 0, 0, '0'),
(20, 0, 200, 0, 'use3@test.com', 0, 0, '0'),
(22, 9100, 0, 0, 'mmehboob100ee30@gmail.com', 0, 0, '0'),
(23, 0, 0, 0, 'last_test@test.com', 200, 0, '0'),
(24, 0, 0, 0, 'Nasirpd77@gmail.com', 100, 0, '0'),
(25, 0, 0, 0, 'Mumtaznazar786@gmail.com', 0, 0, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pkgs`
--
ALTER TABLE `pkgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `pkgs`
--
ALTER TABLE `pkgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
