-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 02:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hism`
--

-- --------------------------------------------------------

--
-- Table structure for table `gmail`
--

CREATE TABLE `gmail` (
  `username` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gmail`
--

INSERT INTO `gmail` (`username`) VALUES
('mukul.cse.1728@iiitbh.ac.in'),
('m.cse.1745@iiitbh.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `hostel1`
--

CREATE TABLE `hostel1` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hostel` varchar(250) DEFAULT NULL,
  `type` enum('caretaker','warden') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel1`
--

INSERT INTO `hostel1` (`username`, `password`, `hostel`, `type`) VALUES
('Girls Hostel', 'Girls Hostel', 'Ganga Hall of Residence (Girls Hostel)', 'caretaker'),
('hostel1', 'hostel1', 'Chanakya Hall of Residence (Boys Hostel-I)', 'caretaker'),
('hostel2', 'hostel2', 'Chandragupta Hall of Residence (Boys Hostel-II)', 'caretaker'),
('hostel3', 'hostel3', 'Ashoka Hall of Residence (Boys Hostel-III)', 'warden'),
('hostel4', 'hostel4', 'Aryabhata Hall of Residence (Boys Hostel-IV)', 'caretaker'),
('hostel5', 'hostel5', 'Vikramaditya Hall of Residence (Boys Hostel-V)', 'caretaker');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `sno` int(5) NOT NULL,
  `item` varchar(30) NOT NULL,
  `order_date` varchar(30) NOT NULL,
  `received` varchar(30) DEFAULT NULL,
  `price` float(7,2) DEFAULT NULL,
  `quantity` int(3) NOT NULL,
  `total` float(8,2) DEFAULT NULL,
  `hostel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`sno`, `item`, `order_date`, `received`, `price`, `quantity`, `total`, `hostel`) VALUES
(25, 'fan', '23-oct-2019', 'mn pvt ltd', 500.00, 23, 20000.00, 'Chanakya Hall of Residence (Boys Hostel-I)');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`username`, `password`) VALUES
('abc', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `login_student`
--

CREATE TABLE `login_student` (
  `name` varchar(40) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_student`
--

INSERT INTO `login_student` (`name`, `username`, `password`) VALUES
('Roushan Kumar', 'roushan.cse.1745@iiitbh.ac.in', '170101045'),
('Mukul Sharma', 'mukul.cse.1728@iiitbh.ac.in', '170101028'),
('Vipul Kumar', 'vipul.cse.1754@itbh.ac.in', '170101054'),
('Abhay Anand Tripathi', 'abhay.cse.1701@iiitbh.ac.in', '170101001'),
('Abhishek Kumar', 'abhishek.cse.1745@iiitbh.ac.in', '170101002'),
('Abhishek Kumar', 'a.kumar.cse.1745@iiitbh.ac.in', '170101003'),
('Abhrojeet Bose', 'a.bose.cse.1704@iiitbh.ac.in', '170101004'),
('Akash Kumar Shahu', 'akash.cse.1705@iiitbh.ac.in', '170101005'),
('Alok Ranjan', 'alok.cse.1707@iiitbh.ac.in', '170101007'),
('Aman Mishra', 'aman.cse.1708@iiitbh.ac.in', '170101008'),
('Amit Vikram Singh', 'amit.cse.1709@iiitbh.ac.in', '170101009'),
('Anand Kumar', 'anand.cse.1710@iiitbh.ac.in', '170101010'),
('Animesh Ranjan', 'animesh.cse.1711@iiitbh.ac.in', '170101011'),
('Anuranjan Kumar', 'anuranjan.cse.1713@iiitbh.ac.in', '170101013'),
('Ashutosh Kumar Ravat', 'ashutosh.cse.1714@iiitbh.ac.in', '170101014'),
('Hemant Vermagottimukkala', 'hemant.cse.1715@iiitbh.ac.in', '170101015'),
('Himanshu Ranjan', 'himanshu.cse.1717@iiitbh.ac.in', '170101017'),
('Kamroop Kumar Iyer', 'kamroop.cse.1718@iiitbh.ac.in', '170101018'),
('Krishang Agarwal', 'k.agarwal.cse.1720@iiitbh.ac.in', '170101020'),
('Kumar Shushant samir', 'k.samir.cse.1721@iiitbh.ac.in', '170101021'),
('Manish Nandan', 'manish.cse.1722@iiitbh.ac.in', '170101022'),
('Md Ashif Reza', 'm.reza.cse.1723@iiitbh.ac.in', '170101023'),
('Mehul Tyagi', 'mehul.cse.1724@iiitbh.ac.in', '170101024'),
('Miriyala Sai Chetan Reddy', 'm.reddy.cse.1725@iiitbh.ac.in', '170101025'),
('Mithilesh Kumar Basfor', 'mithilesh.cse.1726@iiitbh.ac.in', '170101026'),
('MOhit Kumar', 'mohit.cse.1727@iiitbh.ac.in', '170101027'),
('Nikunj Kumar', 'nikunj.cse.1729@iiitbh.ac.in', '170101029'),
('Nitish Rawat', 'nitish.cse.1733@iiitbh.ac.in', '170101033'),
('Prajwal Bairagi', 'prajwal.cse.1737@iiitbh.ac.in', '170101037'),
('Pritam Pal', 'pritam.cse.1740@iiitbh.ac.in', '170101040'),
('Rishabh Singh', 'rishabh.cse.1744@iiitbh.ac.in', '170101044'),
('Siddharth Singh', 'siddharth.cse.1749@iiitbh.ac.in', '170101049'),
('Sumit Kumar Kushwaha', 'sumit.cse.1750@iiitbh.ac.in', '170101050'),
('Sunny Kumar', 'sunny.cse.1751@iiitbh.ac.in', '170101051'),
('Suraj Kumar', 'suraj.cse.1752@iiitbh.ac.in', '170101052'),
('Suraj Kumar', 's.kumar.cse.1753@iiitbh.ac.in', '170101053'),
('Kanishk Tyagi', 'kanishk.ece.1721@iiitbh.ac.in', '170102021'),
('Hitesh Kumar Sahu', 'hitesh.ece.1719@iiitbh.ac.in', '170102019'),
('Rashi Krishna', 'rashi.ece.1737@iiitbh.ac.in', '170102037');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(10) NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `sender_id` varchar(255) DEFAULT NULL,
  `hostel_id` varchar(255) DEFAULT NULL,
  `subject_h` varchar(255) DEFAULT NULL,
  `message` varchar(2500) DEFAULT NULL,
  `msg_date` varchar(255) DEFAULT NULL,
  `msg_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `sender_name`, `sender_id`, `hostel_id`, `subject_h`, `message`, `msg_date`, `msg_time`) VALUES
(10, 'xyz', '17011028', 'girls hostle', 'Room Near Toilet', 'cnjwebckjbwkejc', '2019-11-02', '05:39 PM'),
(11, 'xyz', '17011028', 'Hostel2', 'chair related problem', 'plz proive me one chair in my room', '2019-11-02', '05:41 PM'),
(12, 'xyz', '170101054', 'Hostel5', 'Toilet near room', 'Plz change my room.', '2019-11-02', '05:45 PM'),
(13, 'xyz', '170101010', 'Hostel4', 'room related', 'I want to change my from hostel 4 to hostel 5. plz allote me a room in hostel 5 if available.\r\nthankyou.', '2019-11-02', '05:50 PM');

-- --------------------------------------------------------

--
-- Table structure for table `room_inventory`
--

CREATE TABLE `room_inventory` (
  `hostel_no` varchar(250) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `room_type` varchar(20) DEFAULT NULL,
  `occupied_status` varchar(20) DEFAULT NULL,
  `occupant_rollno` varchar(20) DEFAULT NULL,
  `chair` int(11) DEFAULT NULL,
  `tables` int(11) DEFAULT NULL,
  `fans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_inventory`
--

INSERT INTO `room_inventory` (`hostel_no`, `room_no`, `room_type`, `occupied_status`, `occupant_rollno`, `chair`, `tables`, `fans`) VALUES
('Chanakya Hall of Residence (Boys Hostel-I)', '206', 'Double', 'full', '1045&2024', 2, 1, 1),
('Chandragupta Hall of Residence (Boys Hostel-II)', '204', 'Double', 'full', '1014&2031', 2, 1, 1),
('Ashoka Hall of Residence (Boys Hostel-III)', '304', 'Double', 'full', '1007&2003', 2, 1, 1),
('Ashoka Hall of Residence (Boys Hostel-III)', 'D101', 'single', 'full', '170101017', 1, 1, 1),
('Ashoka Hall of Residence (Boys Hostel-III)', 'D102', 'double', 'full', '170101024&170101020', 1, 1, 1),
('Ashoka Hall of Residence (Boys Hostel-III)', 'D103', 'single', 'full', '170101053', 1, 1, 1),
('Ashoka Hall of Residence (Boys Hostel-III)', 'D104', 'double', 'full', '170101045&170102024', 1, 1, 1),
('Ashoka Hall of Residence (Boys Hostel-III)', 'D113', 'single', 'vacant', ' ', 1, 1, 1),
('Ashoka Hall of Residence (Boys Hostel-III)', 'D110', 'double', 'full', '170101008', 1, 1, 1),
('Ashoka Hall of Residence (Boys Hostel-III)', 'D109', 'single', 'full', '17101017', 1, 1, 1),
('Aryabhata Hall of Residence (Boys Hostel-IV)', 'E211', 'Double', 'full', '1728', 5, 4, 3),
('Vikramaditya Hall of Residence (Boys Hostel-V)', 'E211', 'Double', 'full', '1728', 5, 4, 3),
('Ganga Hall of Residence (Girls Hostel)', 'E211', 'Double', 'full', '1728', 5, 4, 3),
('Ganga Hall of Residence (Girls Hostel)', 'E211', 'Double', 'full', '1728', 5, 4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hostel1`
--
ALTER TABLE `hostel1`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `hostel_id` (`hostel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
