-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 01:59 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_my_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowances`
--

CREATE TABLE `allowances` (
  `id` int(11) NOT NULL,
  `allowance_name` varchar(100) NOT NULL,
  `allowance_desc` varchar(100) NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allowances`
--

INSERT INTO `allowances` (`id`, `allowance_name`, `allowance_desc`, `date_updated`, `date_created`, `updated_from_ip`, `created_from_ip`) VALUES
(1, 'Food Allowance', 'Food Allowance', '2017-08-01 00:29:03', '2017-08-01 00:29:03', '::1', '::1'),
(2, 'Transportation Allowance', 'Transportation Allowance', '2017-08-01 00:29:19', '2017-08-01 00:29:19', '::1', '::1'),
(3, 'Bonus', 'Bonus', '2017-08-01 00:29:47', '2017-08-01 00:29:47', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `appl_name` varchar(100) NOT NULL,
  `appl_desc` varchar(100) NOT NULL,
  `pos_id` int(11) NOT NULL,
  `appl_dt` datetime NOT NULL,
  `pos_status_id` int(11) NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `appl_name`, `appl_desc`, `pos_id`, `appl_dt`, `pos_status_id`, `date_updated`, `date_created`, `updated_from_ip`, `created_from_ip`) VALUES
(2, 'asdfasdf', 'asdfasdf', 5, '2017-09-09 00:00:00', 5, '2017-07-30 04:35:43', '2017-07-30 04:34:39', '::1', '::1'),
(3, 'tyuryuityui', 'tyuityui', 88, '2016-08-08 00:00:00', 99, '2017-07-30 04:37:01', '2017-07-30 04:37:01', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(11) NOT NULL,
  `attd_dt` datetime NOT NULL,
  `emp_id` int(11) NOT NULL,
  `attd_status_id` int(11) NOT NULL,
  `absence_reason` varchar(200) NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `award_name` varchar(100) NOT NULL,
  `gift` varchar(100) NOT NULL,
  `gift_amt` decimal(10,2) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `award_dT` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `award_name`, `gift`, `gift_amt`, `emp_id`, `award_dT`, `date_updated`, `date_created`, `updated_from_ip`, `created_from_ip`) VALUES
(1, 'asdfjkl;', 'k;ljlk', '900.00', 1, '2017-09-09 00:00:00', '2017-07-31 23:17:25', '2017-07-31 23:11:37', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `description`, `created_from_ip`, `updated_from_ip`, `date_created`, `date_updated`) VALUES
(2, 'aliquid', '168.45.80.73', '153.189.48.235', '2009-05-13 00:00:00', '1970-03-08 00:00:00'),
(3, 'modi', '101.86.99.108', '208.11.43.236', '1974-02-12 00:00:00', '1998-07-22 00:00:00'),
(4, 'dolor', '12.247.201.66', '164.34.38.149', '2013-01-24 00:00:00', '1985-06-05 00:00:00'),
(5, 'consequuntur', '194.128.71.184', '155.3.152.125', '1976-11-15 00:00:00', '1970-04-13 00:00:00'),
(6, 'beatae', '207.67.119.4', '237.166.152.114', '1994-06-26 00:00:00', '2007-07-21 00:00:00'),
(7, 'odit', '200.239.62.8', '99.123.192.8', '1983-02-22 00:00:00', '1978-04-25 00:00:00'),
(8, 'et', '246.1.223.180', '76.74.63.35', '1978-05-31 00:00:00', '2009-01-15 00:00:00'),
(9, 'quaerat', '156.5.93.228', '105.248.118.108', '1972-03-31 00:00:00', '2008-11-10 00:00:00'),
(10, 'voluptatibus', '253.101.33.210', '76.99.166.22', '1983-12-17 00:00:00', '1987-04-01 00:00:00'),
(11, 'earum', '92.217.95.242', '73.93.154.68', '2009-02-07 00:00:00', '1978-01-28 00:00:00'),
(12, 'quidem', '7.101.52.236', '30.20.219.248', '1993-06-04 00:00:00', '1986-08-20 00:00:00'),
(13, 'dolores', '117.17.112.37', '178.203.143.135', '2009-09-16 00:00:00', '1998-06-07 00:00:00'),
(15, 'aaaaaaaaaaaa', '::1', '::1', '2017-07-28 21:14:45', '2017-07-28 21:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `description`, `created_from_ip`, `updated_from_ip`, `date_created`, `date_updated`) VALUES
(14, '1111111111', '::1', '::1', '2017-07-28 21:33:28', '2017-07-28 21:33:28'),
(2, 'vel', '71.174.67.6', '45.95.31.17', '2007-07-20 00:00:00', '1972-03-26 00:00:00'),
(3, 'id', '85.144.86.39', '189.234.2.218', '1982-09-01 00:00:00', '1989-06-30 00:00:00'),
(4, 'quam', '221.214.173.187', '52.230.79.146', '1974-10-25 00:00:00', '1985-08-05 00:00:00'),
(6, 'rerum', '195.169.154.171', '5.214.166.122', '1983-07-19 00:00:00', '1996-07-25 00:00:00'),
(7, 'est', '241.23.97.20', '119.210.95.6', '2009-07-25 00:00:00', '1997-02-24 00:00:00'),
(8, 'ea', '242.75.143.134', '103.23.130.96', '1982-07-09 00:00:00', '1986-12-30 00:00:00'),
(10, 'velit', '255.80.99.62', '246.76.236.87', '2012-04-20 00:00:00', '1980-02-01 00:00:00'),
(11, 'ut', '250.251.138.208', '250.62.20.125', '2006-05-03 00:00:00', '1988-11-10 00:00:00'),
(12, 'et', '31.137.72.235', '63.106.161.16', '1992-05-20 00:00:00', '2014-03-14 00:00:00'),
(13, 'cupiditate', '254.247.140.34', '185.191.241.119', '2013-12-24 00:00:00', '1988-01-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` int(11) NOT NULL,
  `deduction_name` varchar(100) NOT NULL,
  `deduction_desc` varchar(100) NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `deduction_name`, `deduction_desc`, `date_updated`, `date_created`, `updated_from_ip`, `created_from_ip`) VALUES
(1, 'SSS', 'SSS', '2017-08-01 00:29:56', '2017-08-01 00:29:56', '::1', '::1'),
(2, 'Pag-ibig', 'Pag-ibig', '2017-08-01 00:30:07', '2017-08-01 00:30:07', '::1', '::1'),
(3, 'Phil Health', 'Phil Health', '2017-08-01 00:30:18', '2017-08-01 00:30:18', '::1', '::1'),
(4, 'Income Tax', 'Income Tax', '2017-08-01 00:30:32', '2017-08-01 00:30:32', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `dept_desc` varchar(100) NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_name`, `dept_desc`, `date_updated`, `date_created`, `updated_from_ip`, `created_from_ip`) VALUES
(4, 'sadfa', 'dfgsdgfsd', '2017-08-02 11:55:15', '2017-08-02 11:55:15', '::1', '::1'),
(2, 'asdfs', 'asdfsadf', '2017-07-30 04:05:31', '2017-07-30 04:05:17', '::1', '::1'),
(3, 'qwerqwerwq', 'qwerwqerewr', '2017-07-30 04:05:58', '2017-07-30 04:05:46', '::1', '::1'),
(1, 'Techonology', 'asdlfjaklsd;', '2017-07-31 23:08:36', '2017-07-31 23:08:36', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `suffix` varchar(100) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `birthday` datetime NOT NULL,
  `gender` char(1) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `addrline1` varchar(100) NOT NULL,
  `addrline2` varchar(100) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `citytown` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip` varchar(15) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `maritalstatus` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `hire_date` datetime NOT NULL,
  `starting_salary` decimal(10,0) NOT NULL,
  `emp_status` int(11) NOT NULL,
  `acct_name` varchar(100) NOT NULL,
  `acct_no` varchar(50) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `lname`, `mname`, `suffix`, `contact_name`, `birthday`, `gender`, `phone`, `addrline1`, `addrline2`, `barrio`, `citytown`, `province`, `country`, `zip`, `nationality`, `maritalstatus`, `email`, `dept_id`, `designation_id`, `hire_date`, `starting_salary`, `emp_status`, `acct_name`, `acct_no`, `bank_name`, `branch_name`, `date_updated`, `date_created`, `updated_from_ip`, `created_from_ip`) VALUES
(1, 'asdf', 'asdf', 'sdf', '', '', '1966-12-14 00:00:00', '', '', '', '', '', '', '', '', '', '', 0, '', 2, 0, '0000-00-00 00:00:00', '0', 0, '', '', '', '', '2017-08-02 11:55:41', '2017-08-02 11:55:41', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `exp_title` varchar(100) NOT NULL,
  `exp_desc` varchar(200) NOT NULL,
  `exp_amt` decimal(10,2) NOT NULL,
  `exp_dt` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`, `created_from_ip`, `updated_from_ip`) VALUES
(1, 'admin', 'Administrator', '1', '1'),
(2, 'members', 'General User', '2', '2'),
(3, 'Employees', 'Employee Access', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `leave_start_dt` datetime NOT NULL,
  `leave_end_dt` datetime NOT NULL,
  `leave_desc` varchar(200) NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `leave_start_dt`, `leave_end_dt`, `leave_desc`, `date_updated`, `date_created`, `updated_from_ip`, `created_from_ip`) VALUES
(1, '2017-09-09 00:00:00', '2017-10-10 00:00:00', 'no reason at all', '2017-07-30 17:16:42', '2017-07-30 17:16:42', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(20170730003003),
(20170731190056);

-- --------------------------------------------------------

--
-- Table structure for table `payslips`
--

CREATE TABLE `payslips` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `pay_month` int(11) NOT NULL,
  `pay_year` int(11) NOT NULL,
  `salary` decimal(11,0) NOT NULL,
  `deduction_type_1` varchar(30) NOT NULL,
  `deduction_amt_1` decimal(10,0) NOT NULL,
  `deduction_type_2` varchar(30) NOT NULL,
  `deduction_amt_2` decimal(10,0) NOT NULL,
  `deduction_type_3` varchar(30) NOT NULL,
  `deduction_amt_3` decimal(10,0) NOT NULL,
  `deduction_type_4` varchar(30) NOT NULL,
  `deduction_amt_4` decimal(10,0) NOT NULL,
  `allowance_type_1` varchar(30) NOT NULL,
  `allowance_amt_1` decimal(10,0) NOT NULL,
  `allowance_type_2` varchar(30) NOT NULL,
  `allowance_amt_2` decimal(10,0) NOT NULL,
  `allowance_type_3` varchar(30) NOT NULL,
  `allowance_amt_3` decimal(10,0) NOT NULL,
  `allowance_type_4` varchar(30) NOT NULL,
  `allowance_amt_4` decimal(10,0) NOT NULL,
  `payslip_status` int(11) NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `pos_name` varchar(100) NOT NULL,
  `pos_desc` varchar(100) NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model` varchar(150) NOT NULL,
  `tag_line` varchar(250) NOT NULL,
  `features` varchar(350) NOT NULL,
  `price` int(11) NOT NULL,
  `qty_at_hand` int(11) NOT NULL,
  `editorial_reviews` varchar(750) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `brand_id`, `model`, `tag_line`, `features`, `price`, `qty_at_hand`, `editorial_reviews`, `created_from_ip`, `updated_from_ip`, `date_created`, `date_updated`) VALUES
(19, 'BrightStar Christian Academy', 13, 5, 'asdfa', 'asdf', 'asdf asdfas asd asdf asd asdf asdf ', 243345, 0, '', '::1', '::1', '2017-07-29 02:09:52', '2017-07-29 02:09:52'),
(3, 'animdddddd', 0, 0, 'numquam', 'molestiae', 'rerum', 0, 0, 'enim', '139.119.191.91', '::1', '2001-02-02 00:00:00', '2017-07-27 02:44:53'),
(4, 'soluta fasd ewrt sadfasd ', 0, 0, 'quaerat', 'odit', 'voluptas', 0, 0, 'quos', '65.240.19.249', '::1', '2012-04-29 00:00:00', '2017-07-27 02:45:00'),
(5, 'doloribus', 21313, 19798, 'alias', 'minima', 'cum', 0, 0, 'blanditiis', '127.152.219.139', '55.198.96.135', '1970-05-14 00:00:00', '1995-01-15 00:00:00'),
(17, 'admin', 4, 2, 'asdfa', 'asdf', 'asdfasd asdfasd f', 2323, 0, '', '::1', '::1', '2017-07-29 02:08:52', '2017-07-29 02:08:52'),
(14, 'eeee', 9, 11, 'eee', 'eee', 'adfasdfad', 44, 0, '', '::1', '::1', '2017-07-27 02:59:33', '2017-07-27 02:59:33'),
(18, 'adfa  asda a asd f', 6, 5, 'asdfa', 'asdf', 'asdfasd asdfas d', 234234234, 0, '', '::1', '::1', '2017-07-29 02:09:21', '2017-07-29 02:09:21'),
(9, 'eos', 21120, 19830, 'asperiores', 'delectus', 'autem', 0, 0, 'mollitia', '216.145.59.176', '142.14.4.108', '1994-03-12 00:00:00', '1973-07-02 00:00:00'),
(10, 'expedita', 43119, 2143, 'harum', 'debitis', 'magni', 0, 0, 'illum', '141.33.193.46', '158.191.55.222', '1996-12-10 00:00:00', '2014-12-04 00:00:00'),
(15, 'zzzz', 10, 10, 'zzzz', 'zzzz', 'zzzzzzzzzzzzzz', 22, 0, '', '::1', '::1', '2017-07-27 03:00:24', '2017-07-27 03:00:24'),
(12, 'velit', 151178, 44119, 'sapiente', 'dolor', 'ex', 0, 0, 'occaecati', '19.16.196.147', '74.51.66.219', '1970-04-18 00:00:00', '1986-12-14 00:00:00'),
(13, 'non', 167239, 84149, 'reiciendis', 'quisquam', 'reprehenderit', 0, 0, 'fuga', '237.15.209.12', '154.169.165.230', '1998-02-15 00:00:00', '2013-06-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `prof_name` varchar(100) NOT NULL,
  `prof_email` varchar(100) NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `systems`
--

CREATE TABLE `systems` (
  `id` int(11) NOT NULL,
  `sys_name` varchar(100) NOT NULL,
  `sys_title` varchar(100) NOT NULL,
  `sys_addr` varchar(100) NOT NULL,
  `sys_phone` varchar(100) NOT NULL,
  `sys_email` varchar(100) NOT NULL,
  `sys_lang` varchar(100) NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1501674890, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'employee@employee.com', '$2y$08$avrBJG9RqgrFBOT8PVGdPebSBwpB.K1E/T0eAF/v0KIVTnFZ9ledm', '', 'employee@employee.com', NULL, NULL, NULL, NULL, 1501298312, 1501434962, 1, 'Noriel', 'Galang', NULL, '8563259235');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(11) NOT NULL,
  `vacancy_name` varchar(100) NOT NULL,
  `vacancy_desc` varchar(100) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `pos_id` int(11) NOT NULL,
  `last_appl_dt` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`id`, `vacancy_name`, `vacancy_desc`, `dept_id`, `pos_id`, `last_appl_dt`, `date_updated`, `date_created`, `updated_from_ip`, `created_from_ip`) VALUES
(2, 'adsf', 'asdfasdf', 0, 0, '2017-09-09 00:00:00', '2017-07-30 04:19:20', '2017-07-30 04:19:20', '::1', '::1'),
(3, '666666666666666', '55', 55, 55, '2017-10-10 00:00:00', '2017-07-30 04:20:36', '2017-07-30 04:20:22', '::1', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowances`
--
ALTER TABLE `allowances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payslips`
--
ALTER TABLE `payslips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `systems`
--
ALTER TABLE `systems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allowances`
--
ALTER TABLE `allowances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payslips`
--
ALTER TABLE `payslips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `systems`
--
ALTER TABLE `systems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
