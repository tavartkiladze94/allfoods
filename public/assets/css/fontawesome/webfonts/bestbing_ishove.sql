-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2023 at 11:21 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestbing_ishove`
--

-- --------------------------------------------------------

--
-- Table structure for table `store_item`
--

CREATE TABLE `store_item` (
  `id` int(255) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `specy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `currency` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(255) NOT NULL,
  `description_ge` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reg_id` int(255) NOT NULL,
  `reg_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reg_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reg_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `store_item`
--

INSERT INTO `store_item` (`id`, `category`, `type`, `brand`, `model`, `specy`, `name`, `price`, `currency`, `quantity`, `description_ge`, `description_en`, `description_ru`, `file_name`, `status`, `reg_id`, `reg_name`, `reg_surname`, `reg_code`, `code`, `date`) VALUES
(1, 'Home Appliances', 'Small appliances', 'Arnicaa', 'adsd231236', 'Vacuum cleaner', '', 2346, 'USD', 6, '    qartuli', 'en', 'ru', '1_dXxu7bA7p1Ml1aTn7BT1.PNG', 'Active', 1, 'nika', 'tavartkiladze', '', 'QYUk1ACxth', '2023-06-02 18:50'),
(2, 'Home Appliances', 'Small appliances', 'Arnica', 'et11133', 'Vacuum cleaner', '', 300, 'GEL', 1, ' <p class=\"MsoNormal\"><span style=\"font-family:\"Arial\",sans-serif;color:#666666\">•850 W<p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ვიწრო</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">საქშენი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"></p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">მაღალი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ეფექტურობის</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ახალი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">საწმენდი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">წვერი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"><p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ფარდის</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ფუნჯი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"></p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">სავარძლების</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">საწმენდი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">აპარატი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"><p>• Hepa 13 </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ფილტრი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"></p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ელექტრონული</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">შეწოვის</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">სიმძლავრის</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">რეგულირება</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"><p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">დამატებითი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">მინი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ტურბო</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ჯაგრისი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"></p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ულტრა</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ბარიერული</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">შლანგი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"><p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">უხმო</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">რეზინის</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ბორბალი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"></p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">პედალი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\">, </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ლითონის</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">საყრდენი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">გამწმენდი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">საქშენი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"><p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">პარკეტისა</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">და</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">მყარი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">იატაკის</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">საწმენდი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">საქშენი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"></p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">დაპატენტებული</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ტელესკოპური</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">შეწოვის</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">მილი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"><p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">დაპატენტებული</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">სპეციალური</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">წყლის</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ფილტრის</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">სისტემა</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"></p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">კაბელის</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ავტომატური</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">სახვევი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"><p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ტურბო</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ჯაგრისი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"></p>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">სურნელოვანი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">სუნამო</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\">, </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">რომელიც</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ცვლის</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">თქვენი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ოთახის</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"> </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">ჰაერს</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\"><br>• </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">კაბელი</span><span style=\"font-family:\"Arial\",sans-serif;color:#666666\">: 6 </span><span style=\"font-family:\"Sylfaen\",serif;mso-bidi-font-family:Sylfaen;color:#666666\">მ<o:p></o:p></span></p>', ' <p>• 850 W</p><p>• Narrow nozzle</p><p>• New high performance sweeping tip</p><p>• Curtain brush</p><p>• Seat cleaner</p><p>• Hepa 13 filter</p><p>• Electronic suction power adjustment</p><p>• Additional mini-turbo brush</p><p>• Ultra barrier hose</p><p>• Silent rubber wheel</p><p>• Pedal, metal base sweeper</p><p>• Nozzle for sweeping parquet and hard floors</p><p>• Patented telescopic suction tube</p><p>• Patented special water filtration system</p><p>• Automatic cable winding</p><p>• Turbo brush</p><p>• Fragrant aroma that changes</p>', ' <p class=\"MsoNormal\"><span style=\"font-size:11.0pt;line-height:107%;font-family:\"Arial\",sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;color:#666666;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">• 850 Вт<p>• Узкая насадка</p>•Новыйвысокоэффективный подметающий наконечник<p>• Щетка для штор</p>• Устройство для чистки сидений<p>• Фильтр Hepa 13</p>• Электронная регулировка мощности всасывания<p>• Дополнительная мини-турбощетка</p>• Ультрабарьерный шланг<p>• Бесшумное резиновое колесо</p>• Педаль, металлическое основание насадка для подметания<p>• Насадка для подметания паркета и твердых полов</p>• Запатентованная телескопическая всасывающая трубка<p>• Запатентованная специальная система фильтрации воды</p>• Автоматическая намотка кабеля<p>• Турбощетка</p>• Ароматный аромат, изменяющий </span><br></p>', '16_TgE3L8qCd4rVCEz29zlQ.jpg', 'Active', 16, 'ჯუბა', 'თურმანიძე', '', 'JNfQvsnSQQ', '2023-06-02 22:22');

-- --------------------------------------------------------

--
-- Table structure for table `store_item_categories`
--

CREATE TABLE `store_item_categories` (
  `id` int(255) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_ge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `store_item_categories`
--

INSERT INTO `store_item_categories` (`id`, `category`, `category_ge`, `category_en`, `category_ru`, `code`) VALUES
(1, 'Home Appliances', '', 'Home Appliances', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `store_item_images`
--

CREATE TABLE `store_item_images` (
  `id` int(255) NOT NULL,
  `file_name` varchar(30) NOT NULL,
  `reg_id` int(100) NOT NULL,
  `reg_name` varchar(100) NOT NULL,
  `reg_surname` varchar(100) NOT NULL,
  `reg_code` varchar(100) NOT NULL,
  `code` varchar(255) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store_item_images`
--

INSERT INTO `store_item_images` (`id`, `file_name`, `reg_id`, `reg_name`, `reg_surname`, `reg_code`, `code`, `date`) VALUES
(1, '1_vPi24VZreEmWB3XCgRi2.PNG', 1, 'nika', 'tavartkiladze', '', 'B1LIY7M89B', '2023-06-02 18:48'),
(2, '1_8lrwYAYgGVaVSR7lfIet.jpg', 1, 'nika', 'tavartkiladze', '', 'B1LIY7M89B', '2023-06-02 18:48'),
(4, '1_dXxu7bA7p1Ml1aTn7BT1.PNG', 1, 'nika', 'tavartkiladze', '', 'QYUk1ACxth', '2023-06-02 18:50'),
(5, '16_TgE3L8qCd4rVCEz29zlQ.jpg', 16, 'ჯუბა', 'თურმანიძე', '', 'JNfQvsnSQQ', '2023-06-02 22:22'),
(6, '16_xumzISo36lgEgjJKev2z.jpg', 16, 'ჯუბა', 'თურმანიძე', '', 'JNfQvsnSQQ', '2023-06-02 22:22'),
(7, '16_niO5lj3pDkp5OxYa1wPY.jpg', 16, 'ჯუბა', 'თურმანიძე', '', 'JNfQvsnSQQ', '2023-06-02 22:22'),
(8, '16_5jG3APNDdgtXoHU66mMn.jpg', 16, 'ჯუბა', 'თურმანიძე', '', 'JNfQvsnSQQ', '2023-06-02 22:22'),
(9, '16_astBEZcmNUiJwGbcxUoY.jpg', 16, 'ჯუბა', 'თურმანიძე', '', 'JNfQvsnSQQ', '2023-06-02 22:22'),
(10, '16_a3q4lqdtaHn7CfiU1gTV.jpg', 16, 'ჯუბა', 'თურმანიძე', '', 'JNfQvsnSQQ', '2023-06-02 22:22'),
(11, '16_tMe2zIDurQWWFZUXqXik.jpg', 16, 'ჯუბა', 'თურმანიძე', '', 'JNfQvsnSQQ', '2023-06-02 22:22');

-- --------------------------------------------------------

--
-- Table structure for table `store_item_species`
--

CREATE TABLE `store_item_species` (
  `id` int(255) NOT NULL,
  `specy` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `store_item_species`
--

INSERT INTO `store_item_species` (`id`, `specy`) VALUES
(1, 'Vacuum cleaner');

-- --------------------------------------------------------

--
-- Table structure for table `store_item_types`
--

CREATE TABLE `store_item_types` (
  `id` int(255) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_ge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `store_item_types`
--

INSERT INTO `store_item_types` (`id`, `type`, `type_ge`, `type_en`, `type_ru`) VALUES
(1, 'Large appliances', '', '', ''),
(2, 'Small appliances', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store_item`
--
ALTER TABLE `store_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_item_categories`
--
ALTER TABLE `store_item_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_item_images`
--
ALTER TABLE `store_item_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_item_species`
--
ALTER TABLE `store_item_species`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_item_types`
--
ALTER TABLE `store_item_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store_item`
--
ALTER TABLE `store_item`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `store_item_categories`
--
ALTER TABLE `store_item_categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `store_item_images`
--
ALTER TABLE `store_item_images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `store_item_species`
--
ALTER TABLE `store_item_species`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `store_item_types`
--
ALTER TABLE `store_item_types`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
