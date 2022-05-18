-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 10:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theloopstudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

CREATE TABLE `create_account` (
  `account_id` int(99) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gstin` varchar(255) NOT NULL,
  `gst_reg_type` varchar(255) NOT NULL,
  `acc_type` varchar(255) NOT NULL,
  `pan_no` varchar(255) NOT NULL,
  `aadhar_no` bigint(20) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `contact_no1` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `acc_name` varchar(255) NOT NULL,
  `acc_no` bigint(20) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_account`
--

INSERT INTO `create_account` (`account_id`, `name`, `gstin`, `gst_reg_type`, `acc_type`, `pan_no`, `aadhar_no`, `contact_no`, `contact_no1`, `email`, `address`, `acc_name`, `acc_no`, `ifsc_code`, `bank_name`, `branch_name`) VALUES
(1, 'ss', '', '', '', '', 0, 0, 0, '', '', '', 0, '', '', ''),
(2, 'Raghu', 'hello', 'nejnff', 'versvr', '5415', 54654165, 54651515, 141841, 'devamparikh15@gmail.com', 'knjjce euwh cehf ewhf wefh wbefwbef wf vwhefu', 'kemven erreh', 645135181, 'clfce64', 'bgeb gn', 'fnvfej er'),
(3, 'Raghu', 'hello', 'nejnff', 'versvr', '5415', 54654165, 54651515, 141841, 'devamparikh15@gmail.com', 'knjjce euwh cehf ewhf wefh wbefwbef wf vwhefu', 'kemven erreh', 645135181, 'clfce64', 'bgeb gn', 'fnvfej er');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note_id` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`note_id`, `note`) VALUES
(1, 'sdfghsdfg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(99) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_company` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_unit` int(99) NOT NULL,
  `product_gst` varchar(255) NOT NULL,
  `product_sales_rate` int(99) NOT NULL,
  `product_mrp` int(99) NOT NULL,
  `product_purchase_rate` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_company`, `product_brand`, `product_unit`, `product_gst`, `product_sales_rate`, `product_mrp`, `product_purchase_rate`) VALUES
(1, 'oppo', '', '', 0, '', 0, 0, 0),
(2, 'one plus', '', '', 0, '', 0, 0, 0),
(3, 'redmi', '', '', 0, '', 0, 0, 0),
(4, 'lelovo', '', '', 0, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_entry`
--

CREATE TABLE `purchase_entry` (
  `purchase_id` int(99) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_contact` bigint(20) NOT NULL,
  `sales_acc` varchar(255) NOT NULL,
  `bill_date` date NOT NULL,
  `bill_number` int(99) NOT NULL,
  `invoice_type` varchar(255) NOT NULL,
  `paid_as` varchar(255) NOT NULL,
  `total` int(99) NOT NULL,
  `cgst` int(99) NOT NULL,
  `sgst` int(99) NOT NULL,
  `round_off` int(99) NOT NULL,
  `payable_amount` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_entry`
--

INSERT INTO `purchase_entry` (`purchase_id`, `supplier_name`, `supplier_contact`, `sales_acc`, `bill_date`, `bill_number`, `invoice_type`, `paid_as`, `total`, `cgst`, `sgst`, `round_off`, `payable_amount`) VALUES
(1, 'hello', 0, '', '0000-00-00', 0, '', '', 0, 0, 0, 0, 0),
(2, 'raftar', 9978816621, 'dnud', '0000-00-00', 0, 'gst', 'cash', 0, 0, 0, 0, 0),
(3, 'raftar', 86541358, 'dnud', '0000-00-00', 0, 'gst', 'card', 0, 0, 0, 0, 0),
(4, 'raftar', 8974598, 'dnud', '0000-00-00', 0, 'gst', 'cash', 0, 0, 0, 0, 0),
(5, 'raftar', 8974598, 'dnud', '0000-00-00', 0, 'gst', 'cash', 0, 0, 0, 0, 0),
(6, '', 0, '', '0000-00-00', 5, '', '', 0, 0, 0, 0, 0),
(7, '', 0, '', '0000-00-00', 0, '', '', 0, 0, 0, 0, 0),
(8, 'raftar bhai', 48468848, 'dnud', '0000-00-00', 0, 'gst', 'cash', 0, 0, 0, 0, 0),
(9, '', 0, '', '0000-00-00', 8, '', '', 0, 0, 0, 0, 0),
(10, 'raftar bhai', 8459858, 'dnud', '0000-00-00', 0, 'gst', 'cash', 0, 0, 0, 0, 0),
(11, '', 0, '', '0000-00-00', 10, '', '', 0, 0, 0, 0, 0),
(12, 'raftar bhai', 984568, 'dnud', '0000-00-00', 0, 'gst', 'cash', 0, 0, 0, 0, 0),
(13, 'raftar bhai', 984568, 'dnud', '0000-00-00', 0, 'gst', 'cash', 0, 0, 0, 0, 0),
(14, 'raftar bhai', 68488498, 'dnud', '0000-00-00', 0, 'gst', 'cash', 0, 0, 0, 0, 0),
(15, 'raftar', 5841861, 'kvje fi', '0000-00-00', 0, 'gst', 'cash', 0, 0, 0, 0, 0),
(16, 'raftar bhai', 6841986, 'kvje fi', '0000-00-00', 0, 'gst', 'cash', 0, 0, 0, 0, 0),
(17, 'raftar bhai', 234567, 'dnud', '0000-00-00', 0, 'gst', 'cash', 0, 0, 0, 0, 0),
(18, 'raftar', 23456, 'fgh', '0000-00-00', 0, 'gst', 'cash', 0, 0, 0, 0, 0),
(19, 'raftar bhai', 2345678, 'nbvcx', '0000-00-00', 0, 'gst', 'cash', 0, 0, 0, 0, 0),
(20, 'raftar bhai', 2345678, 'nbvcx', '0000-00-00', 20, 'gst', 'cash', 0, 0, 0, 0, 0),
(21, 'raftar bhai', 34567, 'sdfgh', '0000-00-00', 21, 'gst', 'cash', 0, 0, 0, 0, 0),
(22, 'raftar bhai', 23456, 'sdfgh', '0000-00-00', 22, 'gst', 'cash', 0, 0, 0, 0, 0),
(23, 'raftar bhai', 3456789, 'Zxcvbnm', '0000-00-00', 23, 'gst', 'cash', 0, 0, 0, 0, 0),
(24, 'raftar bhai', 234567, 'dnud', '0000-00-00', 24, 'gst', 'cash', 0, 0, 0, 0, 0),
(25, 'raftar bhai', 234567, 'dnud', '2020-12-29', 25, 'gst', 'cash', 0, 0, 0, 0, 0),
(26, 'raftar bhai', 234567, 'dnud', '2020-12-29', 26, 'gst', 'cash', 0, 0, 0, 0, 0),
(27, 'raftar bhai', 3456789, 'fghjkl', '2020-12-29', 27, 'gst', 'cash', 0, 0, 0, 0, 0),
(28, 'raftar bhai', 3456789, 'fghjkl', '2020-12-29', 28, 'gst', 'cash', 0, 0, 0, 0, 0),
(29, 'raftar bhai', 4567890, 'fghj', '2020-12-30', 29, 'gst', 'cash', 0, 0, 0, 0, 0),
(30, 'raftar bhai', 4567890, 'dfghjkl', '2020-12-30', 30, 'gst', 'cash', 0, 0, 0, 0, 0),
(31, 'raftar bhai', 234566, 'dfgh', '2021-01-01', 31, 'gst', 'cash', 0, 0, 0, 0, 0),
(32, 'kalif', 7426842, 'ghjk', '2021-01-01', 32, 'gst', 'cash', 0, 0, 0, 0, 0),
(33, 'kalif', 23456789, 'sdfghjk', '2021-01-01', 33, 'gst', 'cash', 0, 0, 0, 0, 0),
(34, 'raftar bhai', 2345678, '34567', '2021-01-01', 34, 'gst', 'cash', 0, 0, 0, 0, 0),
(35, 'deep patel', 9876543217, 'main', '2021-01-03', 35, 'nongst', 'card', 0, 0, 0, 0, 0),
(36, 'deep patel', 9876543217, 'main', '2021-01-03', 36, 'nongst', 'card', 0, 0, 0, 0, 0),
(37, 'deep patel', 9876543217, 'main', '2021-01-03', 37, 'nongst', 'card', 0, 0, 0, 0, 0),
(38, 'raftar bhai', 5478654, 'dnud', '2021-01-03', 38, 'nongst', 'card', 0, 0, 0, 0, 0),
(39, 'devam parikh', 9978816621, 'main', '2021-01-03', 39, 'gst', 'card', 0, 0, 0, 0, 0),
(40, 'raftar bhai', 4, 'dnud', '0000-00-00', 40, 'gst', 'cash', 0, 0, 0, 0, 0),
(41, 'rushabh mehta', 9978816621, 'main', '2021-01-04', 41, 'nongst', 'card', 0, 0, 0, 0, 0),
(42, 'shubh', 9978816621, 'main', '2021-01-04', 42, 'nongst', 'card', 0, 0, 0, 0, 0),
(43, 'shubh somaniya', 9978816621, 'main', '2021-01-04', 43, 'nongst', 'card', 500, 400, 400, 4, 1300),
(47, 'devam parikh', 9978816621, 'main', '2021-01-05', 47, 'gst', 'cash', 43, 4, 4, 74, 50),
(49, 'raftar bhai', 5426526, 'main', '2021-01-05', 49, 'gst', 'cash', 70000, 6300, 6300, 0, 82600),
(50, 'devam parikh', 9978816621, 'main', '2021-01-05', 50, 'nongst', 'card', 0, 0, 0, 0, 0),
(51, 'raftar bhai', 99888777, 'main', '2021-01-06', 51, 'gst', 'cash', 22222, 2000, 2000, 96, 26317),
(52, 'raftar bhai', 9988779988, 'main', '2021-01-06', 52, 'gst', 'cash', 2343, 211, 211, 74, 2838),
(53, 'devam parikh', 9978816621, 'main', '2021-01-06', 53, 'gst', 'cash', 1280000, 115200, 115200, 0, 1510400),
(54, 'devam parikh', 9978816621, 'main', '2021-01-06', 54, 'gst', 'cash', 544, 49, 49, 92, 733),
(55, 'visha parikh', 9988778877, 'main', '2021-01-06', 55, 'gst', 'cash', 2323, 209, 209, 14, 2755),
(56, 'raftar bhai', 997887788, 'main', '2021-01-07', 56, 'gst', 'cash', 23232, 2091, 2091, 76, 27489),
(57, 'Devam Parikh', 9978816621, 'Main', '2021-01-07', 57, 'gst', 'cash', 157000, 14130, 14130, 0, 185260);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_product`
--

CREATE TABLE `purchase_product` (
  `purchase_product_id` int(99) NOT NULL,
  `bill_number` int(99) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_varient` varchar(255) NOT NULL,
  `product_qty` int(99) NOT NULL,
  `product_discount` int(99) NOT NULL,
  `per_product_rate` int(99) NOT NULL,
  `product_amount` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_product`
--

INSERT INTO `purchase_product` (`purchase_product_id`, `bill_number`, `product_description`, `product_varient`, `product_qty`, `product_discount`, `per_product_rate`, `product_amount`) VALUES
(1, 20, '', '', 0, 0, 0, 0),
(2, 34, 'kgf', 'black', 1, 0, 1, 1),
(3, 38, 'kgf', 'black', 1, 0, 23, 23),
(4, 38, 'kgf', 'black', 1, 0, 23, 23),
(5, 38, 'kgf', 'black', 1, 0, 23, 23),
(6, 38, 'kgf', 'black', 1, 0, 23, 23),
(7, 38, 'kgf', 'black', 1, 0, 23, 23),
(8, 39, 'oneplus', 'black', 2, 0, 40, 80),
(9, 40, 'oneplus', 'black', 1, 0, 21, 21),
(10, 41, 'iphone', 'black', 5, 0, 50, 250),
(11, 41, 'oneplus', 'black', 4, 0, 75, 300),
(12, 42, 'redmi', 'white', 2, 0, 100, 200),
(13, 42, 'lenovo', 'blue', 1, 0, 75, 75),
(14, 43, 'oppo', 'black', 4, 0, 45, 180),
(24, 47, 'kgf', 'black', 1, 0, 43, 43),
(31, 49, 'oneplus', 'black', 1, 0, 40000, 40000),
(32, 49, 'kgf', 'black', 3, 0, 10000, 30000),
(34, 50, 'softwash', 'body', 1, 0, 160, 160),
(35, 51, 'oneplus', 'black', 1, 0, 22222, 22222),
(36, 52, 'kgf', 'black', 1, 0, 2343, 2343),
(37, 53, 'oneplus', 'black', 32, 0, 40000, 1280000),
(38, 54, 'kgf', 'black', 1, 0, 544, 544),
(39, 55, 'kgf', 'black', 1, 0, 2323, 2323),
(40, 56, 'kgf', 'black', 1, 0, 23232, 23232),
(41, 57, 'oppo', 'black', 2, 0, 5000, 10000),
(42, 57, 'one plus', 'black', 3, 0, 49000, 147000);

-- --------------------------------------------------------

--
-- Table structure for table `sale_entry`
--

CREATE TABLE `sale_entry` (
  `sale_id` int(99) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_contact` bigint(20) NOT NULL,
  `sales_acc` varchar(255) NOT NULL,
  `bill_date` date NOT NULL,
  `bill_number` int(99) NOT NULL,
  `invoice_type` varchar(255) NOT NULL,
  `paid_as` varchar(255) NOT NULL,
  `total` int(99) NOT NULL,
  `cgst` int(99) NOT NULL,
  `sgst` int(99) NOT NULL,
  `round_off` int(99) NOT NULL,
  `payable_amount` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale_entry`
--

INSERT INTO `sale_entry` (`sale_id`, `customer_name`, `customer_contact`, `sales_acc`, `bill_date`, `bill_number`, `invoice_type`, `paid_as`, `total`, `cgst`, `sgst`, `round_off`, `payable_amount`) VALUES
(1, 'Devam Parikh', 9988778899, 'Main', '2021-01-07', 1, 'gst', 'cash', 0, 0, 0, 0, 0),
(2, 'Devam Parikh', 9988778899, 'Main', '2021-01-07', 2, 'gst', 'cash', 0, 0, 0, 0, 0),
(3, 'Devam Parikh', 9988778899, 'Main', '2021-01-07', 3, 'gst', 'cash', 0, 0, 0, 0, 0),
(4, 'Devam Parikh', 9988778899, 'Main', '2021-01-07', 4, 'gst', 'cash', 0, 0, 0, 0, 0),
(6, 'Devam Parikh', 9988778899, 'Main', '2021-01-07', 6, 'gst', 'cash', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sale_product`
--

CREATE TABLE `sale_product` (
  `sale_product_id` int(99) NOT NULL,
  `bill_number` int(99) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_varient` varchar(255) NOT NULL,
  `product_qty` int(99) NOT NULL,
  `product_discount` double NOT NULL,
  `per_product_rate` double NOT NULL,
  `product_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale_product`
--

INSERT INTO `sale_product` (`sale_product_id`, `bill_number`, `product_description`, `product_varient`, `product_qty`, `product_discount`, `per_product_rate`, `product_amount`) VALUES
(4, 6, 'kgf', 'black', 4, 7, 45, 167.4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_account`
--
ALTER TABLE `create_account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase_entry`
--
ALTER TABLE `purchase_entry`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `purchase_product`
--
ALTER TABLE `purchase_product`
  ADD PRIMARY KEY (`purchase_product_id`);

--
-- Indexes for table `sale_entry`
--
ALTER TABLE `sale_entry`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `sale_product`
--
ALTER TABLE `sale_product`
  ADD PRIMARY KEY (`sale_product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_account`
--
ALTER TABLE `create_account`
  MODIFY `account_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchase_entry`
--
ALTER TABLE `purchase_entry`
  MODIFY `purchase_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `purchase_product`
--
ALTER TABLE `purchase_product`
  MODIFY `purchase_product_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sale_entry`
--
ALTER TABLE `sale_entry`
  MODIFY `sale_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sale_product`
--
ALTER TABLE `sale_product`
  MODIFY `sale_product_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
