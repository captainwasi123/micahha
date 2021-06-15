-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 10:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `micahha_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accommodation_address_info`
--

CREATE TABLE `tbl_accommodation_address_info` (
  `id` int(11) NOT NULL,
  `accommodation_id` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `post_code` varchar(15) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_accommodation_address_info`
--

INSERT INTO `tbl_accommodation_address_info` (`id`, `accommodation_id`, `address`, `city`, `state`, `post_code`, `country_id`) VALUES
(10, 12, 'test', 'deomo', 'test', '65156', 1),
(11, 13, 'tee st', 'asda', 'Sindh', '156', 162),
(12, 14, 'tee st', 'asda', 'Sindh', '156', 162),
(13, 15, 'asda', 'deomo', 'Arkansas', '92618', 1),
(14, 16, '324234', '32423', '423423', '4234234234', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accommodation_amenities_info`
--

CREATE TABLE `tbl_accommodation_amenities_info` (
  `id` int(11) NOT NULL,
  `accom_id` int(11) NOT NULL,
  `amenity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_accommodation_amenities_info`
--

INSERT INTO `tbl_accommodation_amenities_info` (`id`, `accom_id`, `amenity_id`) VALUES
(28, 12, 1),
(29, 12, 2),
(30, 12, 5),
(31, 13, 2),
(32, 13, 6),
(33, 13, 3),
(34, 13, 4),
(58, 14, 2),
(59, 14, 6),
(60, 14, 3),
(61, 14, 4),
(62, 14, 5),
(63, 15, 1),
(64, 15, 2),
(65, 15, 6),
(66, 15, 3),
(67, 15, 4),
(70, 16, 1),
(71, 16, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accommodation_enquiry`
--

CREATE TABLE `tbl_accommodation_enquiry` (
  `id` int(11) NOT NULL,
  `enquiry_type_id` int(11) NOT NULL,
  `list_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_accommodation_enquiry`
--

INSERT INTO `tbl_accommodation_enquiry` (`id`, `enquiry_type_id`, `list_id`, `user_id`, `username`, `email`, `details`, `created_at`, `updated_at`) VALUES
(1, 1, 14, 3, 'owais', 'admin@admin.com', 'askdhasih aois fhaoisfhasoihfoi', '2021-06-12 15:11:17', '2021-06-12 15:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accommodation_gallery_info`
--

CREATE TABLE `tbl_accommodation_gallery_info` (
  `id` int(11) NOT NULL,
  `accom_id` int(11) NOT NULL,
  `image` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_accommodation_gallery_info`
--

INSERT INTO `tbl_accommodation_gallery_info` (`id`, `accom_id`, `image`) VALUES
(8, 12, '030621060400.png'),
(9, 12, '030621060400.jpg'),
(10, 12, '030621060400.jpg'),
(11, 13, '030621072142.jpg'),
(12, 13, '030621072142.png'),
(13, 14, '030621072710.jpg'),
(14, 14, '030621072710.png'),
(16, 14, '030621112314.jpg'),
(17, 14, '030621112314.png'),
(18, 15, '030621170734.jpg'),
(19, 15, '030621170734.jpg'),
(20, 15, '030621170734.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accommodation_info`
--

CREATE TABLE `tbl_accommodation_info` (
  `id` int(11) NOT NULL,
  `property_type` int(11) NOT NULL,
  `feature_img` varchar(75) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `unit` varchar(15) NOT NULL,
  `description` longtext DEFAULT NULL,
  `landlord_id` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=pending, 2=publish, 3=reject, 4=payment_due',
  `publish_days` int(11) NOT NULL,
  `publish_start` date DEFAULT NULL,
  `publish_end` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_accommodation_info`
--

INSERT INTO `tbl_accommodation_info` (`id`, `property_type`, `feature_img`, `title`, `price`, `unit`, `description`, `landlord_id`, `status`, `publish_days`, `publish_start`, `publish_end`, `created_at`, `updated_at`) VALUES
(12, 2, '12-030621060400.jpg', 'asdasd', 100, '/ Night', 'asdasdadasd', 3, 2, 15, NULL, NULL, '2021-06-12 16:02:11', '2021-06-12 16:02:11'),
(13, 2, '13-030621072142.jpg', 'We\'re all working together, that\'s the secret.', 5000, '/ Month', 'sdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssdsdfsfs ssd', 3, 2, 15, NULL, NULL, '2021-06-10 07:39:06', '2021-06-10 07:39:06'),
(14, 3, '14-030621103958.jpg', 'We\'re all working together, that\'s the secret. update', 5000, '/ Month', 'dsadasdsada sds adsad sa dsa dsa dsa d sad dsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d saddsadasdsada sds adsad sa dsa dsa dsa d sad', 3, 2, 90, NULL, NULL, '2021-06-10 07:39:06', '2021-06-10 07:39:06'),
(15, 4, '15-030621170734.jpg', 'A Friend With Weed Is A Friend Indeed', 10, '/ Month', 'sads sad sad ad sdsa da sads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa dasads sad sad ad sdsa da', 3, 2, 30, NULL, NULL, '2021-06-10 07:39:06', '2021-06-10 07:39:06'),
(16, 1, '16-040621170044.jpg', 'asdfs', 250, '/ Month', 'ewqeqweqwe', 3, 2, 15, NULL, NULL, '2021-06-12 15:57:58', '2021-06-12 15:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accommodation_reservation_info`
--

CREATE TABLE `tbl_accommodation_reservation_info` (
  `id` int(11) NOT NULL,
  `list_id` int(11) NOT NULL,
  `landlord_id` int(11) NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `ph_number` varchar(50) NOT NULL,
  `no_of_people` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `infants` int(11) NOT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '0=pending,1=approve, 2=rejected',
  `reserved_by` int(11) NOT NULL DEFAULT 0 COMMENT '0= landlord , 0 = user',
  `customer_status` int(11) DEFAULT 0 COMMENT '0=Reserved, 1=Checked-In, 2=Checked-Out',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_accommodation_reservation_info`
--

INSERT INTO `tbl_accommodation_reservation_info` (`id`, `list_id`, `landlord_id`, `user_name`, `ph_number`, `no_of_people`, `children`, `infants`, `check_in`, `check_out`, `status`, `reserved_by`, `customer_status`, `created_at`, `updated_at`) VALUES
(1, 14, 3, 'admin', '3434', 34, 0, 0, '2021-06-04', '1970-01-01', 0, 0, 1, '2021-06-03 23:49:16', '2021-06-03 23:49:16'),
(2, 14, 3, 'pkroll', '343434234', 34, 0, 0, '2021-06-03', '2021-07-01', 1, 0, 0, '2021-06-03 23:50:54', '2021-06-03 23:50:54'),
(3, 14, 3, 'asdasd', '213213123123', 43, 0, 0, '2021-06-01', '2021-06-10', 1, 0, 1, '2021-06-04 23:13:19', '2021-06-04 23:13:19'),
(4, 14, 3, 'asdad', 'asdasd', 34, 0, 0, '2021-06-01', '2021-06-18', 1, 0, 0, '2021-06-04 23:14:24', '2021-06-04 23:14:24'),
(5, 14, 3, '334434', '3434', 343434, 0, 0, '2021-06-04', '2021-06-30', 1, 0, 0, '2021-06-04 23:15:11', '2021-06-04 23:15:11'),
(8, 14, 3, 'Muhammad Waseem', '123456789', 5, 3, 0, '2021-07-06', '2021-07-14', 0, 3, 0, '2021-06-13 00:05:20', '2021-06-13 00:05:20'),
(9, 14, 3, 'Muhammad Waseem', '123456789', 2, 1, 1, '2021-06-15', '2021-06-24', 0, 3, 0, '2021-06-13 00:13:17', '2021-06-13 00:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins_info`
--

CREATE TABLE `tbl_admins_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) DEFAULT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(225) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_admins_info`
--

INSERT INTO `tbl_admins_info` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `is_active`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 'admin', 'admin@gmail.com', '$2y$10$XJoxXmqeuavf9fkRzxUpT.Dyg1jXlFd/Q2rNEGCzdETqsy9CwNgR.', 1, NULL, '2021-04-24 19:38:30', '2021-05-04 04:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_amenities`
--

CREATE TABLE `tbl_amenities` (
  `id` int(11) NOT NULL,
  `icon_img` varchar(50) DEFAULT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_amenities`
--

INSERT INTO `tbl_amenities` (`id`, `icon_img`, `name`) VALUES
(1, NULL, 'Dish-washer'),
(2, NULL, 'Furnished'),
(3, NULL, 'Microwave'),
(4, NULL, 'Pantry'),
(5, NULL, 'Renovated'),
(6, NULL, 'Linen Closet');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country_info`
--

CREATE TABLE `tbl_country_info` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `country` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_country_info`
--

INSERT INTO `tbl_country_info` (`id`, `iso`, `country`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry_type`
--

CREATE TABLE `tbl_enquiry_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_enquiry_type`
--

INSERT INTO `tbl_enquiry_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'sometihing', '2021-06-12 19:21:49', '2021-06-12 19:21:49'),
(2, 'anytihing', '2021-06-12 19:21:49', '2021-06-12 19:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_type`
--

CREATE TABLE `tbl_property_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_property_type`
--

INSERT INTO `tbl_property_type` (`id`, `name`) VALUES
(1, 'House'),
(2, 'Apartment and Unit'),
(3, 'Town House'),
(4, 'Villa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_info`
--

CREATE TABLE `tbl_user_info` (
  `id` int(11) NOT NULL,
  `profile_image` varchar(75) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `address` varchar(150) DEFAULT NULL,
  `city` varchar(75) DEFAULT NULL,
  `state` varchar(75) DEFAULT NULL,
  `post_code` varchar(25) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1=Buyer, 2=landloard, 3=Artist, 4=seller',
  `newsletter` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_info`
--

INSERT INTO `tbl_user_info` (`id`, `profile_image`, `first_name`, `last_name`, `email`, `phone`, `password`, `address`, `city`, `state`, `post_code`, `country_id`, `user_type`, `newsletter`, `status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Anas', 'Mojo', 'anas@gmail.com', NULL, '$2y$10$rkbpybfXpCeW27m5EmIgfuWd/jF.p3djWKv0xLSGwyGW7G0TK8Z6G', NULL, NULL, NULL, NULL, 162, 1, 1, 1, '2021-05-31 11:37:21', '2021-05-31 11:37:21'),
(3, '3-030621053950.jpg', 'Muhammad', 'Waseem', 'wasi@gmail.com', '123456789', '$2y$10$XJoxXmqeuavf9fkRzxUpT.Dyg1jXlFd/Q2rNEGCzdETqsy9CwNgR.', 'Street 123', 'Karachi', 'Sindh', '76400', 162, 2, 1, 1, '2021-06-01 05:58:04', '2021-06-03 15:29:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accommodation_address_info`
--
ALTER TABLE `tbl_accommodation_address_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_accommodation_amenities_info`
--
ALTER TABLE `tbl_accommodation_amenities_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_accommodation_enquiry`
--
ALTER TABLE `tbl_accommodation_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_accommodation_gallery_info`
--
ALTER TABLE `tbl_accommodation_gallery_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_accommodation_info`
--
ALTER TABLE `tbl_accommodation_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_accommodation_reservation_info`
--
ALTER TABLE `tbl_accommodation_reservation_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admins_info`
--
ALTER TABLE `tbl_admins_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`username`);

--
-- Indexes for table `tbl_amenities`
--
ALTER TABLE `tbl_amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_country_info`
--
ALTER TABLE `tbl_country_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_enquiry_type`
--
ALTER TABLE `tbl_enquiry_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_property_type`
--
ALTER TABLE `tbl_property_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accommodation_address_info`
--
ALTER TABLE `tbl_accommodation_address_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_accommodation_amenities_info`
--
ALTER TABLE `tbl_accommodation_amenities_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbl_accommodation_enquiry`
--
ALTER TABLE `tbl_accommodation_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_accommodation_gallery_info`
--
ALTER TABLE `tbl_accommodation_gallery_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_accommodation_info`
--
ALTER TABLE `tbl_accommodation_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_accommodation_reservation_info`
--
ALTER TABLE `tbl_accommodation_reservation_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_admins_info`
--
ALTER TABLE `tbl_admins_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_amenities`
--
ALTER TABLE `tbl_amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_country_info`
--
ALTER TABLE `tbl_country_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `tbl_enquiry_type`
--
ALTER TABLE `tbl_enquiry_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_property_type`
--
ALTER TABLE `tbl_property_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
