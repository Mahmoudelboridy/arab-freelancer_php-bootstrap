-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 07:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelance`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_3ard`
--

CREATE TABLE `add_3ard` (
  `3ard_id` int(100) NOT NULL,
  `project_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `tagr_id` int(100) NOT NULL,
  `tagr_name` varchar(255) NOT NULL,
  `3ard_title` varchar(255) NOT NULL,
  `3ard_description` varchar(255) NOT NULL,
  `3ard_money` varchar(255) NOT NULL,
  `3ard_time` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_3ard`
--

INSERT INTO `add_3ard` (`3ard_id`, `project_id`, `user_id`, `user_name`, `tagr_id`, `tagr_name`, `3ard_title`, `3ard_description`, `3ard_money`, `3ard_time`, `date`) VALUES
(1, 1, 3, 'mahmoud', 2, 'hassen', 'انا مبرمج ', 'استطيع تنفيذ المطلوب', '420', '32', '2023-01-04 21:55:34'),
(2, 1, 1, 'ali120', 2, 'hassen', 'استطيع تنفيذ المشروع ', 'ساستخدم php bootstrap', '400', '40', '2023-01-04 21:58:16'),
(3, 8, 1, 'ali120', 4, 'yasser', 'اهلا استطيع فعل ذلك ', 'عندى خبرة كبيرة فى جافا سكريبت  ورياكت ', '320', '22', '2023-01-04 21:59:42'),
(4, 7, 6, 'rew', 4, 'yasser', 'انا جاهز', 'استطيع تنفيذ مطلوب ', '10', '2', '2023-01-04 22:00:18'),
(5, 10, 1, 'ali120', 2, 'hassen', 'استطيع تنفيذ المطلوب ', 'انا عندى خبرة باللغة الفرنسية ', '150', '45', '2023-01-05 11:00:14'),
(6, 14, 1, 'ali120', 2, 'hassen', 'استطيع تنفيذ المطلوب ', 'انا محترف فى فوتشوب ', '25', '7', '2023-01-05 11:35:17'),
(7, 15, 1, 'ali120', 2, 'hassen', 'انا مبرمج فلاتر', 'استطيع تنفيذ المطلوب ', '550', '60', '2023-01-05 11:48:09'),
(8, 10, 10, 'hani', 2, 'hassen', 'انا مترجم ', 'استطيع تنفيذ المطلوب باتقان ', '160', '40', '2023-01-05 11:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `add_project`
--

CREATE TABLE `add_project` (
  `project_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_description` varchar(255) NOT NULL,
  `project_category` int(100) NOT NULL,
  `project_time` varchar(100) NOT NULL,
  `project_money` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `project_done` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_project`
--

INSERT INTO `add_project` (`project_id`, `user_id`, `user_name`, `project_name`, `project_description`, `project_category`, `project_time`, `project_money`, `status`, `date`, `project_done`) VALUES
(1, 2, 'hassen', 'موقع متجر الكترونىا', 'اريد انشاء متجر الكترونى متكامل مع امكانية الدفع اون لاين ', 2, '30', '500', 'تم النشر', '2023-01-05 10:57:25', 'تم الدفع وسيتم التنفيذ ان شاء الله'),
(2, 4, 'yasser', 'ادخال بيانات', 'اريد كتابة محاضرات صوتية وتحويلها ل pdf ', 7, '5', '25', 'تم النشر', '2023-01-03 12:39:39', 'لم يكتمل انهاء المشروع من الفرى لانسر'),
(3, 4, 'yasser', 'ترجمة', 'اريد ترجمة كتاب من الانجليزية الى العربية ', 6, '40', '100', 'تم النشر', '2023-01-02 20:28:47', 'لم يكتمل انهاء المشروع من الفرى لانسر'),
(4, 4, 'yasser', 'تسويق', 'اريد تسويق منتج لغسيل سيارات عن طريق النت ', 5, '30', '80', 'تم النشر', '2023-01-03 13:08:17', 'لم يكتمل انهاء المشروع من الفرى لانسر'),
(5, 4, 'yasser', 'موقع الكترونى للتعريف بى وبمنتجاتى ', 'موقع الكترونى للتعريف بى وبمنتجاتى مع وجود لوحة تحكم للادمن ', 2, '15', '55', 'تم النشر', '2023-01-03 13:08:32', 'لم يكتمل انهاء المشروع من الفرى لانسر'),
(6, 4, 'yasser', 'اريد تصميم فيديو ', 'تصميم فيديو للاطفال', 4, '8', '25', 'تم النشر', '2023-01-03 13:08:35', 'لم يكتمل انهاء المشروع من الفرى لانسر'),
(7, 4, 'yasser', 'اريد استشارة قانوينة ', 'عندى مشكلة قانوينة واحتاج استشارة ', 1, '2', '10', 'تم النشر', '2023-01-04 22:54:16', 'تم الدفع وسيتم التنفيذ ان شاء الله'),
(8, 4, 'yasser', 'اريد حد يعطينى كورس', 'اريد كورس رياكت عندى خبرة فى جافا سكريبت', 8, '60', '400', 'تم النشر', '2023-01-03 13:08:39', 'لم يكتمل انهاء المشروع من الفرى لانسر'),
(9, 8, 'salah', 'اريد رسم تصميم لفيلا', 'اريد تصميم فيلا وحمام سباحه داخلها ', 3, '20', '150', 'تم النشر', '2023-01-05 10:48:05', 'لم يكتمل انهاء المشروع من الفرى لانسر'),
(10, 2, 'hassen', 'اريد ترجمة كتاب باللغة الفرنسية ', 'اريد ترجمة كتاب باللغة الفرنسية الى العربية الكتاب 100 صفحة', 6, '40', '110', 'تم النشر', '2023-01-05 11:51:28', 'تم الدفع وسيتم التنفيذ ان شاء الله'),
(11, 8, 'salah', 'تطبيق لمحلى', 'اريد انشاء تطبيق عرض منتجات محلى وامكانية البيع والتوصيل للزبون', 2, '30', '200', 'تم النشر', '2023-01-05 11:04:18', 'لم يكتمل انهاء المشروع من الفرى لانسر'),
(12, 8, 'salah', 'أريد تسويق منتجاتى ', 'عندى محل واريد من يسوق منتجاتى ', 5, '30', '100', 'لم يتم تاكيد من الادمن ', '2023-01-05 11:07:28', 'لم يكتمل انهاء المشروع من الفرى لانسر'),
(13, 8, 'salah', 'انشاء موقع لى ولمنتجاتى ', 'اريد انشاء موقع لى ولمنتجاتى وامكانية الشراء عن طريق كارت الفيزا او بايبال', 2, '20', '150', 'لم يتم تاكيد من الادمن ', '2023-01-05 11:11:20', 'لم يكتمل انهاء المشروع من الفرى لانسر'),
(14, 2, 'hassen', 'احتاج مصمم فوتشوب', 'اريد مصمم فوتشوب محترف لتنفيذ بعض الصور لى ', 4, '7', '20', 'تم النشر', '2023-01-05 11:36:02', 'تم الدفع وسيتم التنفيذ ان شاء الله'),
(15, 2, 'hassen', 'اريد برمجة تطبيق مثل اوبر ', 'تطبيق مثل اوبر مع وجود لوحة تحكم سهلة لى ', 2, '60', '500', 'تم النشر', '2023-01-05 11:48:33', 'تم الدفع وسيتم التنفيذ ان شاء الله');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_title`) VALUES
(1, ' أعمال وخدمات استشارية'),
(2, ' برمجة، تطوير المواقع والتطبيقات'),
(3, ' هندسة، عمارة وتصميم داخلي'),
(4, ' تصميم، فيديو وصوتيات'),
(5, ' تسويق إلكتروني ومبيعات'),
(6, ' كتابة، تحرير، ترجمة ولغات'),
(7, ' دعم، مساعدة وإدخال بيانات'),
(8, ' تدريب وتعليم عن بعد');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_profile`
--

CREATE TABLE `freelancer_profile` (
  `profile_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `mosama_wazefy` varchar(100) NOT NULL,
  `shara7` varchar(255) NOT NULL,
  `maharat` varchar(100) NOT NULL,
  `maharat_tfseel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelancer_profile`
--

INSERT INTO `freelancer_profile` (`profile_id`, `user_id`, `user_name`, `mosama_wazefy`, `shara7`, `maharat`, `maharat_tfseel`) VALUES
(1, 1, 'ali120', 'مهندس برمجة', 'انا مهندس برمجة وعندى كثير من المشاريع', '2', 'html,css,js,bootstrap,php,mysql'),
(2, 3, 'mahmoud', 'مبرمج', 'مبرمج خبرة', '2', 'php mysql html css js bootstrap'),
(3, 6, 'rew', 'مصمم فوتشوب', 'استطيع تصميم فيديو او صور', '4', 'فوتشوب,جرافيك'),
(4, 5, 'ramy', 'مدخل بيانات', 'مدخل بيانات سريع جدا ', '7', 'ادخال بيانات'),
(5, 7, 'ron', 'مهندس معمارى', 'مهندس معمارى استطيع تقديم استشارات', '3', 'مهندس'),
(6, 10, 'hani', 'مترجم', 'انا مترجم لغة انجليزية وفرنسية الى العربية ', '6', 'لغة فرنسية لغة انجليزية باتقان ');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(100) NOT NULL,
  `3ard_id` int(100) NOT NULL,
  `project_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `tagr_id` int(100) NOT NULL,
  `tagr_name` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `3ard_title` varchar(255) NOT NULL,
  `3ard_money` varchar(255) NOT NULL,
  `how_pay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `3ard_id`, `project_id`, `user_id`, `user_name`, `tagr_id`, `tagr_name`, `project_name`, `3ard_title`, `3ard_money`, `how_pay`) VALUES
(1, 4, 7, 6, 'rew', 4, 'yasser', 'اريد استشارة قانوينة ', 'انا جاهز', '10', 'vodafone cash'),
(2, 2, 1, 1, 'ali120', 2, 'hassen', 'موقع متجر الكترونىا', 'استطيع تنفيذ المشروع ', '400', 'bank cart'),
(3, 6, 14, 1, 'ali120', 2, 'hassen', 'احتاج مصمم فوتشوب', 'استطيع تنفيذ المطلوب ', '25', 'vodafone cash'),
(4, 7, 15, 1, 'ali120', 2, 'hassen', 'اريد برمجة تطبيق مثل اوبر ', 'انا مبرمج فلاتر', '550', 'bank cart'),
(5, 8, 10, 10, 'hani', 2, 'hassen', 'اريد ترجمة كتاب باللغة الفرنسية ', 'انا مترجم ', '160', 'vodafone cash');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_mode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_image`, `user_password`, `user_mode`) VALUES
(1, 'ali120', 'ali120@gmail.com', '0.jpg', '$2y$10$QOkbwwkLrFMoVCVJBffK1ekkJ7IC27pDyTgBQ4O09yCK/WWX.wgtS', 2),
(2, 'hassen', 'hassen@gmail.com', '5.jpg', '$2y$10$jPygoy.7138V1.bSc83ivOOm99FV8582FRFVUlA7NWxwsk5RcaaGy', 1),
(3, 'mahmoud', 'mahmoud.elboridy@gmail.com', '2.jpg', '$2y$10$23lG9P6xXnUXfJquI1Yl1.kildHMPmnmrDgLMz86y2upHB7IE0J32', 2),
(4, 'yasser', 'yasser@gmail.com', '11.jpg', '$2y$10$Pj4yd5Iks4nXhGGd/Sf.E.z2xtn7.g9tyoKGF3W/ZDPGk/TID1oTC', 1),
(5, 'ramy', 'ramy@gmail.com', '4.jpg', '$2y$10$lGN.HRNPY58skcKQrhfluO5XZ5Yvozxqp85YOviTjw28OH3clBxWu', 2),
(6, 'rew', 'rew@gmail.com', '1.png', '$2y$10$2wa6u1Fr6whuleKoxU2liO2fOo4mJc7efCtQOKPragvIwFDm9E60S', 2),
(7, 'ron', 'ron@gmail.com', 'ro.jpg', '$2y$10$QcIfyR8O6dp48IAyx1UZhe0ytFw2cdEnj2JA/Gm71Ghol3VsQr4o2', 2),
(8, 'salah', 'salah@gmail.com', 'sa.jpg', '$2y$10$WZooQRGjPUL/rntG71Hmk.zMbvgBI2r17usTmCg8Jho.s.dzZwklm', 1),
(10, 'hani', 'hani@gmail.com', 'bnm.jpg', '$2y$10$BS/ACE8hi7WCzS9f88ovXOQOyENXgzAmdn/Y1FkZq7Rngucx.OJgG', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_3ard`
--
ALTER TABLE `add_3ard`
  ADD PRIMARY KEY (`3ard_id`);

--
-- Indexes for table `add_project`
--
ALTER TABLE `add_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `freelancer_profile`
--
ALTER TABLE `freelancer_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_3ard`
--
ALTER TABLE `add_3ard`
  MODIFY `3ard_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `add_project`
--
ALTER TABLE `add_project`
  MODIFY `project_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `freelancer_profile`
--
ALTER TABLE `freelancer_profile`
  MODIFY `profile_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
