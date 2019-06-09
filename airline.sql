-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-06-09 07:09:44
-- 服务器版本： 10.1.37-MariaDB
-- PHP 版本： 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `airline`
--

-- --------------------------------------------------------

--
-- 表的结构 `air_books`
--

CREATE TABLE `air_books` (
  `id` int(11) NOT NULL,
  `depart` varchar(65) NOT NULL,
  `arrive` varchar(65) NOT NULL,
  `depart_day` date NOT NULL,
  `depart_time` time NOT NULL,
  `flight_time` time NOT NULL,
  `arrive_day` date NOT NULL,
  `arrive_time` time NOT NULL,
  `price` float NOT NULL,
  `airline_detail` varchar(65) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `air_books`
--

INSERT INTO `air_books` (`id`, `depart`, `arrive`, `depart_day`, `depart_time`, `flight_time`, `arrive_day`, `arrive_time`, `price`, `airline_detail`, `num`) VALUES
(1, 'Rotorua', 'Dairy Flat', '2019-05-01', '08:00:00', '01:15:00', '2019-05-01', '09:15:00', 45, 'Beechcraft Starship', 8),
(2, 'Rotorua', 'Dairy Flat', '2019-05-01', '14:00:00', '01:15:00', '2019-05-01', '15:15:00', 45, 'Beechcraft Starship', 8),
(3, 'Dairy Flat', 'Rotorua', '2019-05-01', '12:00:00', '01:30:00', '2019-05-01', '13:30:00', 45, 'Beechcraft Starship', 8),
(4, 'Dairy Flat', 'Rotorua', '2019-05-01', '17:00:00', '01:30:00', '2019-05-01', '18:30:00', 45, 'Beechcraft Starship', 8),
(5, 'Dairy Flat', 'Bay of Islands', '2019-05-01', '09:00:00', '01:15:00', '2019-05-01', '10:15:00', 52, 'Cessna 172', 3),
(6, 'Dairy Flat', 'Great Barrier', '2019-05-01', '10:15:00', '00:55:00', '2019-05-01', '11:10:00', 87, 'Cessna 172', 3),
(7, 'Bay of Islands', 'Dairy Flat', '2019-05-01', '12:00:00', '01:15:00', '2019-05-01', '13:15:00', 52, 'Cessna 172', 3),
(8, 'Bay of Islands', 'Great Barrier', '2019-05-01', '13:15:00', '01:15:00', '2019-05-01', '14:30:00', 87, 'Cessna 172', 3),
(9, 'Dairy Flat', 'Sydney', '2019-05-01', '10:45:00', '05:15:00', '2019-05-01', '14:00:00', 175, 'Piper Aerostar', 1),
(10, 'Sydney', 'Dairy Flat', '2019-05-01', '14:15:00', '04:45:00', '2019-05-01', '21:00:00', 175, 'Piper Aerostar', 5);

-- --------------------------------------------------------

--
-- 表的结构 `air_eachuser`
--

CREATE TABLE `air_eachuser` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(12) NOT NULL,
  `lastname` varchar(12) NOT NULL,
  `idtype` varchar(12) NOT NULL,
  `idnumber` varchar(12) NOT NULL,
  `phonecode` int(11) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `air_eachuser`
--

INSERT INTO `air_eachuser` (`user_id`, `firstname`, `lastname`, `idtype`, `idnumber`, `phonecode`, `phonenumber`, `pid`) VALUES
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 2),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 3),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 4),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 5),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 6),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 7),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 8),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 9),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 10),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 11),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 12),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 13),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 14),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 15),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 16),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 17),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 18),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 19),
(11, 'li', 'liu', 'passport', '347343870703', 64, 224571535, 20),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 21),
(11, 'li', 'liu', 'passport', '4657786454', 64, 224571535, 22);

-- --------------------------------------------------------

--
-- 表的结构 `air_payment`
--

CREATE TABLE `air_payment` (
  `user_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `eachuser_pid` int(11) NOT NULL,
  `buytime` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `air_payment`
--

INSERT INTO `air_payment` (`user_id`, `ticket_id`, `id`, `eachuser_pid`, `buytime`, `total_price`, `num`) VALUES
(11, 9, 22, 20, 1559010741, 175, 1),
(11, 1, 23, 21, 1559058074, 45, 1);

-- --------------------------------------------------------

--
-- 表的结构 `air_users`
--

CREATE TABLE `air_users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `family_name` varchar(50) NOT NULL,
  `birthday` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country_code` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `country` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `sex` int(11) NOT NULL,
  `reg_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `air_users`
--

INSERT INTO `air_users` (`user_id`, `first_name`, `family_name`, `birthday`, `email`, `country_code`, `phone`, `country`, `address`, `username`, `password`, `sex`, `reg_time`) VALUES
(9, 'asd', 'asdsd', 1555603200, 'as1SD2da@qq.com', 1234, 1234, '1234', 'erewr', 'rwrASDSD', 'SQWEWEW', 1, 1555405339),
(10, 'asd', 'asdsd', 0, 'asSSda@qq.com', 1234, 1234, '1234', 'erewr', 'rwr', 'b48e4aa52199b19ab21d', 1, 1555405495),
(11, 'asd', 'asdsd', 0, 'assssda@qq.com', 1234, 1234, '1234', 'erewr', 'axfbh', '1234567', 1, 1555405921),
(12, 'asd', 'asdsd', 0, 'asSSSSEda@qq.com', 1234, 1234, '1234', 'erewr', 'axfbh123', 'fcea920f7412b5da7be0', 1, 1555407939);

--
-- 转储表的索引
--

--
-- 表的索引 `air_books`
--
ALTER TABLE `air_books`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `air_payment`
--
ALTER TABLE `air_payment`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `air_users`
--
ALTER TABLE `air_users`
  ADD PRIMARY KEY (`user_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `air_books`
--
ALTER TABLE `air_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `air_payment`
--
ALTER TABLE `air_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 使用表AUTO_INCREMENT `air_users`
--
ALTER TABLE `air_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
