-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 01:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testi`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `fees` int(11) NOT NULL DEFAULT 50000,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_no`, `user`, `fees`, `date_created`) VALUES
(1, 23, '', 50000, '2021-11-06 20:09:48'),
(2, 67, '', 50000, '2021-11-06 20:09:48'),
(3, 44, '', 50000, '2021-11-06 20:10:18'),
(4, 78, '', 50000, '2021-11-06 20:10:43'),
(5, 91, '', 50000, '2021-11-06 20:10:43'),
(6, 79, '', 50000, '2021-11-06 20:22:11'),
(7, 90, '', 50000, '2021-11-06 20:22:48'),
(8, 15, '', 50000, '2021-11-06 20:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gender` varchar(255) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `reg_num`, `first_name`, `last_name`, `student_email`, `dept`, `course`, `date`, `gender`, `contact_no`) VALUES
(1, 'SH-IT-007574', 'Abdulsalam', 'Baruwa', 'abdulsalam.baruwa190541028@st.lasu.edu.ng', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148987845'),
(2, 'SH-IT-0051538', 'Treasure', 'Uvietobore', 'uvietoboretreasure@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148987901'),
(3, 'SH-IT-0044392', 'Dorcas', 'Chosend', 'chosendorcas@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148987957'),
(4, 'SH-IT-0084183', 'Abdullah', 'Olatunde', 'olatundeabdullah920@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988013'),
(5, 'SH-IT-0079048', 'Chiyere', 'Aven', 'chinyeraven@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988069'),
(6, 'SH-IT-0011689', 'Nnaemeka', 'Uzuegbu', 'nnaemekauzuegbu59@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988125'),
(7, 'SH-IT-004484', 'Olusanya', 'Olayinka', 'soolusanya@student.lautech.edu.ng', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988181'),
(8, 'SH-IT-0061595', 'Prodev', 'Gofor', 'goforprodev@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988237'),
(9, 'SH-IT-0072999', 'Gideon', 'Olaiya', 'olaiyagideon@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988293'),
(10, 'SH-IT-0031269', 'Gbenga', 'Femi', 'grggmmnl@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988349'),
(11, 'SH-IT-0016584', 'Stephen', 'Akinjiola', 'akinjiolastephen94@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988405'),
(12, 'SH-IT-0060588', 'Abdussamad', 'Professional', 'professionalabdussamad@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988461'),
(13, 'SH-IT-0044440', 'Ovalentino', 'Gambler', 'ovalentino385@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988517'),
(14, 'SH-IT-0013139', 'Kevin', 'Samuels', 'amoskevinsamuel@yahoo.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988573'),
(15, 'SH-IT-0050364', 'Tolanoni', 'Despera', 'desperatolanoni@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988629'),
(16, 'SH-IT-008387', 'Janet', 'Babalola', 'janetbabalola26@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988685'),
(17, 'SH-IT-0070406', 'Adex', 'Omosoji', 'adexomosojimvp@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988741'),
(18, 'SH-IT-0076085', 'Daniel', 'Idahosa', 'danielidahosa98@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988797'),
(19, 'SH-IT-0034332', 'Samuel', 'Adeleke', 'samueladeleke27@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988853'),
(20, 'SH-IT-02164', 'Clementina', 'Igadi', 'clementinaigadi@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988909'),
(21, 'SH-IT-0096229', 'Helen', 'Okereke', 'okerekehelenugoeze@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148988965'),
(22, 'SH-IT-0037184', 'Olalekan', 'Nabsm', 'Olalekanabsm@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989021'),
(23, 'SH-IT-0032292', 'Samuel', 'Nanaosie', 'samuelnanaosei6@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989077'),
(24, 'SH-IT-0089800', 'Dammy', 'Owen', 'dammyowen@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989133'),
(25, 'SH-IT-0035600', 'Joseph', 'Adinoyi', 'j.adinoyi.jnr@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989189'),
(26, 'SH-IT-0034642', 'Favour', 'Rite', 'phevhourwite@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989245'),
(27, 'SH-IT-0044284', 'Oluwafunmito', 'Taiwo', 'oluwafunmitotaiwo123@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989301'),
(28, 'SH-IT-0049548', 'Joshua', 'Okoeguale', 'joshuaokoeguale@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989357'),
(29, 'SH-IT-0022344', 'Tunji', 'Adedayo', 'tunjiadedayo@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989413'),
(30, 'SH-IT-0084918', 'Okechukwu', 'Joseph', 'okechukwujoseph365@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989469'),
(31, 'SH-IT-0040553', 'Ogbonna', 'Nelson', 'ogbonnanelson46664@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989525'),
(32, 'SH-IT-0076557', 'Esspecial', 'Esspecial', 'esspecial7124@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989581'),
(33, 'SH-IT-0015156', 'Soriakukay', 'Soriakukay', 'soriakukay@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989637'),
(34, 'SH-IT-0091426', 'Saheed', 'Azeez', 'saheedazeez2003@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989693'),
(35, 'SH-IT-0074209', 'Ybadzi', 'Ybadzi', 'ybadzi@stu.ucc.edu.gh', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Female', '2348148989749'),
(36, 'SH-IT-0108445', 'Promise', 'Temilola', 'promisetemilolaoluwa23@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989805'),
(37, 'SH-IT-0105995', 'Dejmakins', 'Dejmakins', 'dejmakins@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148989861'),
(38, 'SH-IT-0028275', 'Kjoboku', 'Kjboku', 'kjboku@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Female', '2348148989917'),
(39, 'SH-IT-0096834', 'Mercy', 'Daramola', 'mercydaramola23@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Female', '2348148989973'),
(40, 'SH-IT-0109571', 'George', 'Fayia', 'georgefayia23@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148990029'),
(41, 'SH-IT-0051594', 'Olufemi', 'Sulaimon', 'olufemisulaimon813@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148990085'),
(42, 'SH-IT-0056603', 'Ymakinta', 'Ymakinta', 'ymakinta@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148990141'),
(43, 'SH-IT-0037817', 'Ogunyemi', 'Toyin', 'ogunyemi31toyin@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Female', '2348148990197'),
(44, 'SH-IT-0111419', 'Goodness', 'Akanimo', 'goodnessakanimo@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148990253'),
(45, 'SH-IT-0087352', 'Victor', 'Adameji', 'victoradameji2014@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148990309'),
(46, 'SH-IT-0058191', 'Ibrahim', 'Umaru', 'ibrahimumaru57@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148990365'),
(47, 'SH-IT-0017956', 'Micheal', 'Asami', 'michealdami441@gmail.com', 'Compt. Eng', 'Telecommunication', '2021-11-07 01:05:45', 'Male', '2348148990421');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(50) NOT NULL,
  `room_num` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
