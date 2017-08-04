-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2017 at 12:35 AM
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
  `award_dt` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `award_name`, `gift`, `gift_amt`, `emp_id`, `award_dt`, `date_updated`, `date_created`, `updated_from_ip`, `created_from_ip`) VALUES
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
(1, 'Techonology', 'asdlfjaklsd;', '2017-07-31 23:08:36', '2017-07-31 23:08:36', '::1', '::1'),
(2, 'asdfd', 'fghdf', '2017-07-31 23:08:44', '2017-07-31 23:08:44', '::1', '::1');

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
(1, 'jkl;', 'kjl;', 'lkj;l', '', '', '0000-00-00 00:00:00', '', '23495-98045', '12 aster way', '', 'sta inex', 'mabalacat ', 'pampanga', '', '', 'United States', 0, 'norielsg1214@gmail.com', 2, 0, '0000-00-00 00:00:00', '0', 0, '', '', '', '', '2017-07-31 23:11:05', '2017-07-31 23:10:00', '::1', '::1'),
(2, 'ioi', 'pipio', 'opiop', '', '', '0000-00-00 00:00:00', 'M', '', '', '', '', '', '', '', '', '', 0, '', 1, 0, '0000-00-00 00:00:00', '0', 0, '', '', '', '', '2017-07-31 23:10:23', '2017-07-31 23:10:23', '::1', '::1'),
(4, 'Peter', 'Curler', '', '', '', '1990-09-09 00:00:00', 'M', '', '16 Aster Way', '', 'Dayton', 'Dayton', 'Pampanga', 'PHilippines', '', '', 0, '', 1, 0, '0000-00-00 00:00:00', '0', 0, '', '', '', '', '2017-08-02 16:19:07', '2017-08-02 16:19:07', '::1', '::1'),
(3, 'John', 'Doe', 'D', '', '', '1966-12-14 00:00:00', '', '', '', '', '', '', '', '', '', '', 0, '', 4, 0, '0000-00-00 00:00:00', '0', 0, '', '', '', '', '2017-08-02 14:43:42', '2017-08-02 14:43:42', '::1', '::1');

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
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

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
(20170731190056),
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
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1501683608, 1, 'Admin', 'istrator', 'ADMIN', '0');

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
(2, 1, 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
