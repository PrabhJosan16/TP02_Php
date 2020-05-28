-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2020 at 08:47 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restauration`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_ID` int(155) NOT NULL,
  `Customer_Details` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Clients';

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_ID`, `Customer_Details`, `contact`) VALUES
(8, 'John', 'john@gmail.com'),
(9, 'Daniel', 'daniel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `Meal_ID` int(155) NOT NULL,
  `Customer_ID` int(155) DEFAULT NULL,
  `Staff_ID` int(155) DEFAULT NULL,
  `Date_of_meal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Cost_of_meal` varchar(255) NOT NULL,
  `Other_Details` text NOT NULL,
  `Meal_Details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`Meal_ID`, `Customer_ID`, `Staff_ID`, `Date_of_meal`, `Cost_of_meal`, `Other_Details`, `Meal_Details`) VALUES
(18, NULL, NULL, '2020-03-06 13:56:05', '15', 'Dessert', 'Gateau à la vanille'),
(19, NULL, NULL, '2020-04-22 20:32:05', '4', 'Entrée', 'Frites'),
(20, NULL, NULL, '2020-04-24 16:47:51', '25', 'Plat Principale', 'Pizza au fromage');

-- --------------------------------------------------------

--
-- Table structure for table `meal_dishes`
--

CREATE TABLE `meal_dishes` (
  `Meal_ID` int(155) NOT NULL,
  `Menu_item_ID` int(155) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meal_dishes`
--

INSERT INTO `meal_dishes` (`Meal_ID`, `Menu_item_ID`, `Quantity`) VALUES
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `Menu_ID` int(155) NOT NULL,
  `Menu_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Available_Date_From` date NOT NULL,
  `Available_Date_To` date NOT NULL,
  `Other_Details` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `Menu_items_ID` int(155) NOT NULL,
  `Menu_ID` int(155) NOT NULL,
  `Menu_item_Name` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Other_Details` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ref_datff_roles`
--

CREATE TABLE `ref_datff_roles` (
  `Staff_Role_Code` int(155) NOT NULL,
  `Staff_Role_Descripton` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` int(155) NOT NULL,
  `Staff_Role_Code` int(155) NOT NULL,
  `First_Name` varchar(40) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `Other_Detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`Meal_ID`),
  ADD KEY `Customer_ID` (`Customer_ID`),
  ADD KEY `Customer_ID_2` (`Customer_ID`);

--
-- Indexes for table `meal_dishes`
--
ALTER TABLE `meal_dishes`
  ADD KEY `Meal_ID` (`Meal_ID`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`Menu_ID`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`Menu_items_ID`);

--
-- Indexes for table `ref_datff_roles`
--
ALTER TABLE `ref_datff_roles`
  ADD PRIMARY KEY (`Staff_Role_Code`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_ID` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `Meal_ID` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `Menu_ID` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `Menu_items_ID` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_datff_roles`
--
ALTER TABLE `ref_datff_roles`
  MODIFY `Staff_Role_Code` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Staff_ID` int(155) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `meals`
--
ALTER TABLE `meals`
  ADD CONSTRAINT `id` FOREIGN KEY (`Customer_ID`) REFERENCES `customers` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
