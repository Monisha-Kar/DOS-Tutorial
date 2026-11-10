
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET NAMES utf8 */;

--
-- Database: `dos_tutorial`
--

CREATE DATABASE IF NOT EXISTS `dos_tutorial`;
USE `dos_tutorial`;

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE IF NOT EXISTS `chapters` (
  `chapter_id` int(11) NOT NULL AUTO_INCREMENT,
  `chapter_name` varchar(255) NOT NULL,
  `chapter_file` varchar(255) NOT NULL,
  `chapter_order` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`chapter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters`
(`chapter_id`, `chapter_name`, `chapter_file`, `chapter_order`, `status`)
VALUES
(1, 'Introduction', 'Introduction.php', 1, 1),
(2, 'DOS Commands Overview', 'DOSCommands.php', 2, 1),
(3, 'Internal Commands', 'InternalCommands.php', 3, 1),
(4, 'External Commands', 'ExternalCommands.php', 4, 1),
(5, 'Batch Files', 'BatchFiles.php', 5, 1),
(6, 'Windows Operating System', 'WindowsOS.php', 6, 1),
(7, 'Characteristics of Windows', 'WindowsCharacteristics.php', 7, 1);



