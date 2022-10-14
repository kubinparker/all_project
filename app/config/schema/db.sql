-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2022 at 05:38 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `all_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL,
  `front_url` varchar(255) NOT NULL,
  `back_url` varchar(255) NOT NULL,
  `back_username` varchar(20) NOT NULL,
  `back_password` varchar(255) NOT NULL,
  `manager_url` varchar(255) DEFAULT NULL,
  `manager_username` varchar(20) NOT NULL,
  `manager_password` varchar(255) NOT NULL,
  `database_url` varchar(255) NOT NULL,
  `database_username` varchar(20) NOT NULL,
  `database_password` varchar(255) NOT NULL,
  `backlog_url` varchar(255) NOT NULL,
  `backlog_id` int(11) NOT NULL,
  `task_created` tinyint(1) DEFAULT '0',
  `git_url` varchar(255) NOT NULL,
  `test_front_url` varchar(255) DEFAULT NULL,
  `test_back_url` varchar(255) DEFAULT NULL,
  `test_back_username` varchar(20) DEFAULT NULL,
  `test_back_password` varchar(255) DEFAULT NULL,
  `test_manager_url` varchar(255) DEFAULT NULL,
  `test_manager_username` varchar(20) DEFAULT NULL,
  `test_manager_password` varchar(255) DEFAULT NULL,
  `test_database_url` varchar(255) DEFAULT NULL,
  `test_database_username` varchar(20) DEFAULT NULL,
  `test_database_password` varchar(255) DEFAULT NULL,
  `passwd_task_id` int(11) DEFAULT NULL,
  `passwd_is_setting` tinyint(1) DEFAULT '0',
  `honban_front_url` varchar(255) DEFAULT NULL,
  `honban_back_url` varchar(255) DEFAULT NULL,
  `honban_back_username` varchar(20) DEFAULT NULL,
  `honban_back_password` varchar(255) DEFAULT NULL,
  `honban_manager_url` varchar(255) DEFAULT NULL,
  `honban_manager_username` varchar(20) DEFAULT NULL,
  `honban_manager_password` varchar(255) DEFAULT NULL,
  `honban_database_url` varchar(255) DEFAULT NULL,
  `honban_database_username` varchar(20) DEFAULT NULL,
  `honban_database_password` varchar(255) DEFAULT NULL,
  `mail_setting_task_id` int(11) DEFAULT NULL,
  `mail_is_setting` tinyint(1) DEFAULT '0',
  `publish_task_id` int(11) DEFAULT NULL,
  `is_publish` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `created_at`, `updated_at`, `name`, `front_url`, `back_url`, `back_username`, `back_password`, `manager_url`, `manager_username`, `manager_password`, `database_url`, `database_username`, `database_password`, `backlog_url`, `backlog_id`, `task_created`, `test_front_url`, `test_back_url`, `test_back_username`, `test_back_password`, `test_manager_url`, `test_manager_username`, `test_manager_password`, `test_database_url`, `test_database_username`, `test_database_password`, `passwd_task_id`, `passwd_is_setting`, `honban_front_url`, `honban_back_url`, `honban_back_username`, `honban_back_password`, `honban_manager_url`, `honban_manager_username`, `honban_manager_password`, `honban_database_url`, `honban_database_username`, `honban_database_password`, `mail_setting_task_id`, `mail_is_setting`, `is_publish`) VALUES
(1, '2022-10-11 01:37:08', '2022-10-11 11:43:29', 'D2C dot アレクシードサイトリニューアル(D2CDOT_ALLEXCEED)', 'http://local.allexceed.loca/', 'http://local.allexceed.loca/user_admin', 'develop', 'caters040917', '', '', '', 'http://localhost/phpmyadmin/db_structure.php?db=allexceed', 'root', 'root', 'http://backlog.caters.jp:8969/backlog/projects/D2CDOT_ALLEXCEED', 1465, 1, '', '', '', '', '', '', '', '', '', '', NULL, 1, '', '', '', '', '', '', '', '', '', '', NULL, 1, 1),
(2, '2022-10-11 01:37:12', NULL, 'D2C dot アレクシードサイトリニューアル(D2CDOT_ALLEXCEED)', 'http://local.allexceed.loca/', 'http://local.allexceed.loca/user_admin', 'develop', 'caters040917', '', '', '', 'http://localhost/phpmyadmin/db_structure.php?db=allexceed', 'root', 'root', 'http://backlog.caters.jp:8969/backlog/projects/D2CDOT_ALLEXCEED', 1465, 0, '', '', '', '', '', '', '', '', '', '', NULL, 0, '', '', '', '', '', '', '', '', '', '', NULL, 0, 0),
(3, '2022-10-11 01:38:06', '2022-10-11 05:37:14', 'D2C dot アレクシードサイトリニューアル(D2CDOT_ALLEXCEED)', 'http://local.allexceed.loca/', 'http://local.allexceed.loca/user_admin', 'develop', 'caters040917', '', '', '', 'http://localhost/phpmyadmin/db_structure.php?db=allexceed', 'root', 'root', 'http://backlog.caters.jp:8969/backlog/projects/D2CDOT_ALLEXCEED', 1465, 0, 'http://local.allexceed.loca/', 'http://local.allexceed.loca/', 'aaa', 'aaa', 'http://local.allexceed.loca/', 'aaa', 'aa', 'http://local.allexceed.loca/', 'aa', 'aaa', NULL, 0, 'vvvv', 'asadas', '1111', '2222', 'sdaqweq', '3333', '444', 'sdasdasd', '5555', '333', NULL, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
