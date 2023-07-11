-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2023 at 07:14 PM
-- Server version: 10.6.14-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foyezand_foyezand`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `textbox` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `textbox`, `created_at`, `updated_at`) VALUES
(1, '<div><strong style=\"color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px;\"><h3 style=\"text-align: center;\"><b style=\"font-size: 1.75rem;\"><u>ABOUT US</u></b><br></h3></strong><font face=\"Comic Sans MS\"><br style=\"color: rgb(0, 0, 0); font-size: 13px;\"><font color=\"#000000\"><span style=\"font-size: 13px;\">Dear Sir/ Madam</span></font></font></div><div><font color=\"#000000\" face=\"Comic Sans MS\"><span style=\"font-size: 13px;\">Good Day. Hope everything is fine.</span></font></div><div><p style=\"margin: 0in 0in 15pt; text-align: justify; line-height: 16.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-GB\"><b>Foyez &amp; Sons is one of the leading\r\nmanufacturers, exporters, and suppliers of garments. We have been producing\r\nhigh-quality garments for menswear, women, and kids, specializing in knitwear,\r\nsweater, and denim. Due to our strong focus on the best up-to-date quality and\r\nconstantly improving cutting-edge technology, that often exceeds customer\r\nexpectations, we now deliver products to a wide variety of respectable brands\r\nand clients throughout the world.</b><o:p></o:p></span></p>\r\n\r\n<span lang=\"EN-GB\" style=\"font-size:11.0pt;mso-bidi-font-size:10.5pt;line-height:\r\n107%;font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:\r\nminor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:EN-GB;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\"><b>Our\r\nexperience has given our management valuable insight into the markets’ needs,\r\nand combining international with local knowledge proved to be the key to\r\nachieving customer satisfaction. Our management maintains high professional competencies\r\nand is impeccable when it comes to meeting industry standards. Innovative\r\nthinking is the cornerstone of our corporate spirit.</b></span><font color=\"#7f6000\"><br></font></div><div><font face=\"Comic Sans MS\" color=\"#7f6000\"><span style=\"font-size: 13px;\"><br></span></font></div><div><p style=\"margin: 0in 0in 0.0001pt; text-align: justify; line-height: 16.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-GB\"><font color=\"#7f6000\">Quality is\r\nsomething we do not compromise. Meeting the highest quality standards is a\r\nresult of the latest technology, hardworking employees, and experienced\r\ndesigners and technicians, which educate the workers and supervise the entire\r\nprocess, from sample development all the way to goods leaving our warehouses.\r\nOur experienced sampling department creates our own, as well as patterns per\r\ncustomer design. In the past year, we have made a step forward and transformed\r\nall the acquired knowledge and feedback to its exclusive collections proved us\r\nto be on the right path.<o:p></o:p></font></span></p><p style=\"margin: 0in 0in 0.0001pt; text-align: justify; line-height: 16.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-GB\"><font color=\"#7f6000\">&nbsp;</font></span></p><p class=\"MsoNormal\" style=\"text-align:justify\">\r\n\r\n\r\n\r\n</p><p style=\"margin: 0in 0in 15pt; text-align: justify; line-height: 16.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-GB\"><font color=\"#7f6000\">Our road to becoming one of the leading\r\ngarment manufacturers was long and winding, our hard work and constant effort\r\nto meet the highest quality standards resulted in a wide variety of fashionable\r\nproducts, that can now be seen throughout the world.</font><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><font face=\"Comic Sans MS\"><span style=\"color:black;\r\nletter-spacing:-.1pt\">&nbsp;</span><span style=\"color: black; letter-spacing: -0.05pt; font-size: 1rem; text-align: left;\">We are thanking you with the hope of assuring the best\r\nservice possible.</span></font></p>\r\n\r\n<p class=\"MsoNormal\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font face=\"Comic Sans MS\"><span style=\"color: black; letter-spacing: -0.05pt;\">&nbsp;</span><span style=\"color: black; letter-spacing: -0.05pt; text-indent: -0.75in; font-size: 1rem;\">Sincerely,</span></font></p></div><div><font color=\"#000000\" face=\"Verdana, Arial, Helvetica, sans-serif\"><span style=\"font-size: 13px;\"><br></span></font></div>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `achoevements`
--

CREATE TABLE `achoevements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `textbox` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achoevements`
--

INSERT INTO `achoevements` (`id`, `textbox`, `created_at`, `updated_at`) VALUES
(1, '<div style=\"text-align: center;\"><span style=\"font-size: 1rem;\"><h1 style=\"text-align: center;\"><b style=\"font-size: 2.5rem;\"><span lang=\"EN-GB\"><font color=\"#0000ff\">Vision</font></span></b><font color=\"#e36c09\"><br></font></h1><h1><p class=\"MsoNormal\"><span lang=\"EN-GB\"><font color=\"#e36c09\">To be the most trusted and respected\r\nprofessional services recognized by our clients for delivering excellence.</font><o:p></o:p></span></p></h1><h1><span style=\"font-weight: bolder; font-size: 1rem;\"><span lang=\"EN-GB\"><font color=\"#008000\">Our Vision, Mission and Values</font></span></span></h1><h1><p class=\"MsoNormal\"><font color=\"#0000ff\"><b><span lang=\"EN-GB\"></span></b></font></p><div style=\"font-size: 16px;\"><p class=\"MsoNormal\"><span lang=\"EN-GB\"><font color=\"#0000ff\"><b>Our unique vision, mission, and values capture the essence of who we are and how we interact with one another. In addition, it speaks to how we go to market and our commitment to delivering excellence to our customers.</b></font></span></p><p class=\"MsoNormal\"><b><span lang=\"EN-GB\"><font color=\"#4f6128\">Mission</font><o:p></o:p></span></b></p><p class=\"MsoNormal\"><span lang=\"EN-GB\"><font color=\"#4bacc6\"><b>To serve our customers by providing the\r\nhighest quality professional services that address their business issues. We\r\nattract, recruit, and retain the most knowledgeable and passionate\r\nprofessionals, as we provide a collaborative culture the enables them to thrive\r\nprofessionally and personally. </b></font><o:p></o:p></span></p><p class=\"MsoNormal\"><b><span lang=\"EN-GB\"><font color=\"#31859b\">Values</font><o:p></o:p></span></b></p><p class=\"MsoNormal\"><span lang=\"EN-GB\">\r\n\r\n\r\n\r\n\r\n\r\n</span></p><p class=\"MsoNormal\"><b><span lang=\"EN-GB\"><font color=\"#3f3151\">Integrity:</font></span></b><span lang=\"EN-GB\"><font color=\"#3f3151\"><b> We do the right thing regardless of the consequence.</b></font><o:p></o:p></span></p><p class=\"MsoNormal\"><b><span lang=\"EN-GB\"><font color=\"#4f81bd\">Pursuit\r\nof Excellence:</font></span></b></p><p class=\"MsoNormal\"><span lang=\"EN-GB\"><b><font color=\"#f79646\"> We continually strive to exceed the\r\nexpectations of our people and our customers.</font></b><o:p></o:p></span></p><p class=\"MsoNormal\"><b><span lang=\"EN-GB\">Accountability:</span><span lang=\"EN-GB\">&nbsp;</span></b></p><p class=\"MsoNormal\"><span lang=\"EN-GB\"><b><font color=\"#4f81bd\">We take responsibility for individual and collective actions.</font></b><o:p></o:p></span></p><p class=\"MsoNormal\"><b><span lang=\"EN-GB\">Collaboration:</span></b></p><p class=\"MsoNormal\"><span lang=\"EN-GB\"><b><font color=\"#e36c09\"> We work together to achieve an individual goal.<o:p></o:p></font></b></span></p><p class=\"MsoNormal\"><span lang=\"EN-GB\"><b><font color=\"#e36c09\">\r\n\r\n\r\n\r\n\r\n\r\n</font></b></span></p><p class=\"MsoNormal\"><b><span lang=\"EN-GB\">Passion:</span></b></p><p class=\"MsoNormal\"><span lang=\"EN-GB\"> Our energy and enthusiasm are contagious;<a href=\"Foyez\" target=\"_blank\">http://foyezandsons.co.za/</a> we are inspired to make a\r\nlasting impact.<o:p></o:p></span></p></div></h1><div><font color=\"#ff0000\"></font></div></span></div>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carrier`
--

CREATE TABLE `carrier` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `natinality` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `ins` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carrier`
--

INSERT INTO `carrier` (`id`, `title`, `name`, `phone`, `email`, `dob`, `natinality`, `education`, `ins`, `file`) VALUES
(1, 'Test', 'test', '01767078222', 'admin@gmail.com', '2021-11-25', 'Bangladeshi', 'Bsc in CSE', 'test', 'assets/backend/img/1717755010329103.docx'),
(2, 'test', 'test', '01767078222', 'admin@gmail.com', '2021-11-25', 'Bangladeshi', 'Bsc in CSE', 'test', 'assets/backend/img/1717762940369151.docx'),
(3, 'test', 'test', '01767078222', 'admin@gmail.com', '2021-11-25', 'Bangladeshi', 'Bsc in CSE', 'test', 'assets/backend/img/1717763030423555.docx'),
(4, 'test', 'test', '01767078222', 'admin@gmail.com', '2021-11-25', 'Bangladeshi', 'Bsc in CSE', 'test', 'assets/backend/img/1717763072496033.docx');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catagory`, `created_at`, `updated_at`) VALUES
(6, 'sdsdsdasasd', NULL, NULL),
(7, 'maar oathsala', NULL, NULL),
(8, 'dsafsdafsdaf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `textbox` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `textbox`, `created_at`, `updated_at`) VALUES
(1, '<h4 style=\"text-align: center;\"><div style=\"text-align: left;\"></div></h4><h4 style=\"text-align: center;\"><div style=\"text-align: left;\"><font color=\"#000000\">UK office Address: Z.Islam&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style=\"font-size: 1.5rem; text-align: center;\">Bangladesh Office Address:&nbsp;</span><span style=\"font-size: 1.5rem;\">Saiful Islam</span></font></div><div style=\"text-align: left;\"><font color=\"#000000\"><span style=\"font-size: 1.5rem; text-align: center;\">russel_bpc@yahoo.com&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style=\"font-size: 1.5rem; text-align: center;\">info@foyezandsons.co.za</span></font></div><div style=\"text-align: left;\"><font color=\"#000000\"><span style=\"font-size: 1.5rem; text-align: center;\">+4407872834304&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style=\"font-size: 1.5rem; text-align: center;\">+88 01713-313599</span></font></div><div style=\"text-align: left;\"><font color=\"#000000\"><span style=\"font-size: 1.5rem; text-align: center;\">40 Bursland Road&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style=\"font-size: 1.5rem; text-align: center;\">House-25, Road-01, Block-F,&nbsp;Banasree,</span></font></div><div style=\"text-align: left;\"><font color=\"#000000\"><span style=\"font-size: 1.5rem; text-align: center;\">Enfiled&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style=\"font-size: 1.5rem; text-align: center;\">Rumpura, Dhaka- 1219, Bangladesh</span></font></div><div style=\"text-align: left;\"><span style=\"font-size: 1.5rem; text-align: center;\"><font color=\"#000000\">EN37EX</font></span></div><div style=\"text-align: left;\"><span style=\"font-size: 1.5rem; text-align: center;\"><font color=\"#000000\">London&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</font></span></div></h4>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `poasition` varchar(255) NOT NULL,
  `education` longtext NOT NULL,
  `director_msg` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`id`, `name`, `poasition`, `education`, `director_msg`, `image`) VALUES
(3, 'Md Jobayer Hossain', 'DIRECTOR', 'B.A: Bengali Literature (India)<br>\r\nM.A: Bengali Literature (India)', '<b>Directors Message</b>  <br>\r\nIt is with a great sense of pride that I am able to introduce Foyez & Sons as one of the leading manufacturers and exporters of premier apparel products. With a vision to build a prominent presence in the world apparel market.\r\n<br><br>\r\n\r\nFoyez & Sons have instituted all necessary requirements to strengthen the entire manufacturing processes of the garment division of the organization, based on improved integration to achieve better synergy and a devoted focus on building and maintaining relationships with its customers, suppliers, principal, and employees.\r\n<br><br>\r\n\r\nAs a business, we have a strong commitment to Corporate Social Responsibility which is our core value as well as the source of our pride as reflected in our organizational management, labour, and environmental practices.\r\n<br><br>\r\n\r\nI am optimistic that our sincerity, diligence, and resilience will drive the organization forward to emerge further as one of the most prominent organizations in the apparel sector and play a significant role in the socio-economic arena of the country with employment generation as well as its multi-dimensional business activities.', 'public/assets/backend/img/1721458199437022.jpeg'),
(4, 'Md Alamin', 'MANAGING DIRECTOR', '<p class=\"description\"> B. Tech: Mechanical Engineering (South Africa) <br>MSc: Mechanical Engineering [On Course] – (China)</p>', '<strong>Managing Director\'s Message</strong>\r\n                                <p class=\"\" style=\"text-align: justify;\">It is with a great sense of pride that I am able to introduce Foyez & Sons as one of the leading manufacturers and exporters of premier apparel products. With a vision to build a prominent presence in the world apparel market. </p>\r\n                                <p class=\"\" style=\"text-align: justify;\">Foyez & Sons have instituted all necessary requirements to strengthen the entire manufacturing processes of the garment division of the organization, based on improved integration to achieve better synergy and a devoted focus on building and maintaining relationships with its customers, suppliers, principal, and employees. </p>\r\n                                <p class=\"\" style=\"text-align: justify;\">As a business, we have a strong commitment to Corporate Social Responsibility which is our core value as well as the source of our pride as reflected in our organizational management, labour, and environmental practices.</p>\r\n                                <p class=\"\" style=\"text-align: justify;\">I am optimistic that our sincerity, diligence, and resilience will drive the organization forward to emerge further as one of the most prominent organizations in the apparel sector and play a significant role in the socio-economic arena of the country with employment generation as well as its multi-dimensional business activities.</p>', 'public/assets/backend/img/1721458769073298.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_image`
--

CREATE TABLE `home_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `catgory` varchar(50) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `Product_price` varchar(255) NOT NULL,
  `Product_detils` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_image`
--

INSERT INTO `home_image` (`id`, `image`, `catgory`, `product_name`, `Product_price`, `Product_detils`, `created_at`, `updated_at`) VALUES
(107, 'public/assets/backend/img/1717022140289416.jpg', '16', '', '', '', NULL, NULL),
(108, 'public/assets/backend/img/1717022145693011.jpg', '16', '', '', '', NULL, NULL),
(109, 'public/assets/backend/img/1717022229163900.jpg', '17', '', '', '', NULL, NULL),
(110, 'public/assets/backend/img/1717022236084268.jpg', '17', '', '', '', NULL, NULL),
(111, 'public/assets/backend/img/1717022242864768.jpg', '17', '', '', '', NULL, NULL),
(112, 'public/assets/backend/img/1717022252827469.jpg', '17', '', '', '', NULL, NULL),
(113, 'public/assets/backend/img/1717022259459252.jpg', '17', '', '', '', NULL, NULL),
(114, 'public/assets/backend/img/1717022349386855.jpg', '16', '', '', '', NULL, NULL),
(115, 'public/assets/backend/img/1717022357091023.jpg', '16', '', '', '', NULL, NULL),
(116, 'public/assets/backend/img/1717022365091579.jpg', '16', '', '', '', NULL, NULL),
(117, 'public/assets/backend/img/1717022370706943.jpg', '16', '', '', '', NULL, NULL),
(118, 'public/assets/backend/img/1717022713711090.jpg', '20', '', '', '', NULL, NULL),
(119, 'public/assets/backend/img/1717022733906688.jpg', '20', '', '', '', NULL, NULL),
(120, 'public/assets/backend/img/1717022742506598.jpg', '20', '', '', '', NULL, NULL),
(121, 'public/assets/backend/img/1717022750600855.jpg', '20', '', '', '', NULL, NULL),
(122, 'public/assets/backend/img/1717022885789223.jpg', '19', '', '', '', NULL, NULL),
(123, 'public/assets/backend/img/1717022894266363.jpg', '19', '', '', '', NULL, NULL),
(124, 'public/assets/backend/img/1717022902028367.jpg', '19', '', '', '', NULL, NULL),
(125, 'public/assets/backend/img/1717022909456433.jpg', '19', '', '', '', NULL, NULL),
(126, 'public/assets/backend/img/1717022918804543.jpg', '19', '', '', '', NULL, NULL),
(127, 'public/assets/backend/img/1717023067456526.jpg', '21', '', '', '', NULL, NULL),
(128, 'public/assets/backend/img/1717023077497623.jpg', '21', '', '', '', NULL, NULL),
(129, 'public/assets/backend/img/1717023089831380.jpg', '21', '', '', '', NULL, NULL),
(130, 'public/assets/backend/img/1717023098294499.jpg', '21', '', '', '', NULL, NULL),
(131, 'public/assets/backend/img/1717023110199356.jpg', '21', '', '', '', NULL, NULL),
(132, 'public/assets/backend/img/1717023196396081.jpg', '22', '', '', '', NULL, NULL),
(133, 'public/assets/backend/img/1717023204753371.jpeg', '22', '', '', '', NULL, NULL),
(134, 'public/assets/backend/img/1717023210762100.jpg', '22', '', '', '', NULL, NULL),
(135, 'public/assets/backend/img/1717023217438675.jpg', '22', '', '', '', NULL, NULL),
(136, 'public/assets/backend/img/1717023224242402.jpg', '22', '', '', '', NULL, NULL),
(137, 'public/assets/backend/img/1717023366810055.jpg', '23', '', '', '', NULL, NULL),
(138, 'public/assets/backend/img/1717023375543470.jpeg', '23', '', '', '', NULL, NULL),
(140, 'public/assets/backend/img/1717023390416349.jpg', '23', '', '', '', NULL, NULL),
(142, 'public/assets/backend/img/1717397320419042.jpg', '19', 'WHITE PEPLUM TOP', '1000', '<p style=\"margin-bottom: 25px; font-size: 14px; color: rgb(143, 143, 143); line-height: 1.8; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p><p style=\"margin-bottom: 25px; font-size: 14px; color: rgb(143, 143, 143); line-height: 1.8; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Approx length 66cm/26\" (Based on a UK size 8 sample)</p><p style=\"margin-bottom: 25px; font-size: 14px; color: rgb(143, 143, 143); line-height: 1.8; font-family: &quot;Josefin Sans&quot;, sans-serif;\">Mixed fibres</p><p style=\"margin-bottom: 25px; font-size: 14px; color: rgb(143, 143, 143); line-height: 1.8; font-family: &quot;Josefin Sans&quot;, sans-serif;\">The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5\'8\"</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(600) DEFAULT NULL,
  `message` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(1, 'test', '01767078222', 'admin@gmail.com', 'test', 'test'),
(2, 'test', '01767078222', 'admin@gmail.com', 'test', 'dfgdgdfg'),
(3, 'Rashedul Islam', '01767078222', 'admin@gmail.com', 'fderf', 'dsfsdfsdf'),
(4, 'Rashedul Islam', '01721-911998', 'hasibvai48@gmail.com', 'Domain reg', '67iyhiyuiyi'),
(5, 'Saiful Islam', '+27 684 179 531', 'sarminasa18@gmail.com', 'iuouioui', 'uiouiouio');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_23_114303_create_home_image_table', 2),
(5, '2020_02_24_091916_create_about_table', 3),
(6, '2020_02_24_092309_create_strengths_table', 4),
(7, '2020_02_24_092428_create_achoevements_table', 4),
(8, '2020_02_24_092557_create_contact_us', 4),
(9, '2020_02_29_063956_create_category_table', 5),
(10, '2020_03_01_044105_create_strenghs_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `posation` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `map_link` longtext NOT NULL,
  `address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `location`, `name`, `posation`, `phone`, `email`, `images`, `map_link`, `address`) VALUES
(3, 'South Africa Office', 'Md Alamin', 'Director', '+27 684 179 531', 'Info@gmail.com', 'public/assets/backend/img/1718030552435454.jpg', 'https://maps.google.com/maps?q=40%20Mint%20Road,%20Fordsburg,%20Johannesburg,%202093,%20South%20Africa&t=&z=13&ie=UTF8&iwloc=&output=embed', '40 Mint Road, Fordsburg, Johannesburg, 2093, South Africa'),
(4, 'United Kingdom Office', 'Anm Zahirul Islam', 'Foreign Delegate', '+440 787 283 4304', 'europe@foyezandsons.co.za', 'public/assets/backend/img/1718031227420268.jpeg', 'https://maps.google.com/maps?q=40%20Bursland%20Road,%20Enfiled,%20EN37EX,%20London&t=&z=13&ie=UTF8&iwloc=&output=embed', '40 Bursland Road, Enfiled, EN37EX, London'),
(5, 'Guinea Office', 'Sandouno Dimika Faya', 'Foreign Delegate', '+22 462 706 2973', 'africa@foyezandsons.co.za', 'public/assets/backend/img/1719748875524663.jpg', 'https://maps.google.com/maps?q=Ratoma%20,%20Conakry,%20Guinea&t=&z=13&ie=UTF8&iwloc=&output=embed', 'Sonfonia Centre, 3rd Floor of Pharmacy Kima Building, C/Ratoma, Conakry, Guinea'),
(6, 'Bangladesh Office', 'Saiful Islam', 'Country Director', '+880 171 331 3599', 'asia@foyezandsons.co.za', 'public/assets/backend/img/1719746190995403.jpeg', 'https://maps.google.com/maps?q=House%2025,%20Road%2001,%20Block%20F,%20Banasree,%20Rampura,%20Dhaka,%201219,%20Bangladesh&t=&z=13&ie=UTF8&iwloc=&output=embed', 'House # 25, Road # 01, Block # F, Banasree, Rampura, Dhaka, 1219, Bangladesh'),
(7, 'Cyprus Office', 'Obayed Ullah', 'Foreign Delegate', '+35796567334', 'europe@foyezandsons.co.za', 'public/assets/backend/img/1719836397195998.jpg', 'https://maps.google.com/maps?q=13%20Konstantinou%20Palaiologou,1040%20Nicosia,%20Cyprus&t=&z=13&ie=UTF8&iwloc=&output=embed', '13 Konstantinou Palaiologou,1040 Nicosia, Cyprus');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_name`
--

CREATE TABLE `product_name` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `short_description` text NOT NULL,
  `images` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `product_name`
--

INSERT INTO `product_name` (`id`, `name`, `short_description`, `images`, `created_at`) VALUES
(18, 'Other', 'We accept your custom order and fulfill your requirements in the time period.', 'public/assets/backend/img/1718194484285224.png', '2021-11-21 08:22:09'),
(19, 'Kids', 'Baby girl clothes and baby boy clothes to the cutest baby gifts, we carry all different styles for kids.', 'public/assets/backend/img/1718194444353008.png', '2021-11-21 08:23:17'),
(20, 'Girls', 'We provide best girls dress t shirt, skirt, frock, jeans pant and variety of clothes available.', 'public/assets/backend/img/1718194397364905.png', '2021-11-21 08:25:53'),
(21, 'Boys', 'Boys Pants, Shirts, Sweaters, Jeans and variety of clothes available.', 'public/assets/backend/img/1718194352617168.png', '2021-11-21 08:26:29'),
(22, 'Ladies', 'Ladies Coats & Jackets, Jeans, Jumpsuits & Rompers, Pants, Skirts and variety of clothes available .', 'public/assets/backend/img/1718194299126676.png', '2021-11-21 08:27:33'),
(23, 'Mens', 'You can order variety of pants, shirts, Sweaters, and jeans, as well as other apparel .', 'public/assets/backend/img/1718194250386721.png', '2021-11-21 08:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `images`) VALUES
(18, 'T-shirts', 'public/assets/backend/img/1719741498120464.png'),
(19, 'Workers', 'public/assets/backend/img/1719741548866744.jpg'),
(20, 'Automated Textile Machines', 'public/assets/backend/img/1719741607239056.jpg'),
(21, 'Textile Production', 'public/assets/backend/img/1719741711182973.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `detils` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `strenghs`
--

CREATE TABLE `strenghs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `textbox` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `strengths`
--

CREATE TABLE `strengths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `textbox` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `strengths`
--

INSERT INTO `strengths` (`id`, `textbox`, `created_at`, `updated_at`) VALUES
(1, '<div><strong style=\"color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px;\"><br></strong></div><div><strong style=\"color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px;\"><br></strong></div><div><span style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px;\"><u><b><h2 style=\"\"><font color=\"#ff0000\">STRENGTHS</font></h2></b></u></span></div><div><p align=\"justify\" style=\"font-size: 13px; color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif;\"></p><ul style=\"font-size: 13px; color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; line-height: 2.5em;\"><li>Strong network of established suppliers &amp; manufacturers.</li><li>Socially compliant and certified vendors as per International requirements.</li><li>Leverage and diversity in our vendor base to source volume production at competitive prices as also meet the challenges of sensitive product categories including high end merchandise.</li><li>Strategic tie-ups with Market, Office, Hospital, mills, process houses and manufacturers for dedicated capacities.</li><li>Stringent quality checks at all levels to meet Quality Standards as per customers’ requirements.</li><li>Thorough monitoring of all shipments for consolidation, faster movements and freight optimization.</li></ul><div><font color=\"#000000\" face=\"Verdana, Arial, Helvetica, sans-serif\"><span style=\"font-size: 13px;\"><br></span></font></div></div><div><font color=\"#000000\" face=\"Verdana, Arial, Helvetica, sans-serif\"><span style=\"font-size: 13px;\"><br></span></font></div>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mamun', 'admin@gmail.com', NULL, '$2b$10$vV645nxqDWWdzUSrG2tcWuoYb4xLjoCLI6ETcQGz2KBlwA18uVN3e', 'f960Sk1T94xf0Xtp0uDvMIODYhuMMga3qvR1HMN0jljvBV3WCqaqkMseqtad', '2020-02-23 04:42:37', '2020-03-01 00:24:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achoevements`
--
ALTER TABLE `achoevements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrier`
--
ALTER TABLE `carrier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_image`
--
ALTER TABLE `home_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product_name`
--
ALTER TABLE `product_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strenghs`
--
ALTER TABLE `strenghs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strengths`
--
ALTER TABLE `strengths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `achoevements`
--
ALTER TABLE `achoevements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carrier`
--
ALTER TABLE `carrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_image`
--
ALTER TABLE `home_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_name`
--
ALTER TABLE `product_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `strenghs`
--
ALTER TABLE `strenghs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `strengths`
--
ALTER TABLE `strengths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
