-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 05:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supplementfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `message`) VALUES
(2, 'ABC', 'abc@gmail.com', 'Hello dear'),
(3, 'ABC', 'abc@gmail.com', 'Hello dear'),
(4, 'xyz', 'xyz@gmail.com', 'helloo'),
(5, 'aaa', 'ss@gmail.com', 'kaksjgajkg'),
(6, 'sas', 'jkhjkg@gmail.com', 'lkhlkhg'),
(7, 'sasa', 'asas@gmail.com', 'l;hjlhlk'),
(9, 'Ben James', 'ben@gmail.com', 'HI, Please tell me about the status of my order. ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `size` varchar(20) NOT NULL,
  `flavor` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL,
  `custname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `p_name`, `image`, `size`, `flavor`, `quantity`, `price`, `total`, `custname`, `phone`, `address`, `email`) VALUES
(30689, 'GOLD STANDARD 100% CASEIN', 'product3.jpg', '30 Servings', 'Fruits', 1, 53.99, 53.99, 'sas', '4324', 'asasa', 'aaxax@gmail.com'),
(35667, 'Post-Workout Muscle Support ', 'product2.jpg', '20 Servings', 'Chocolate', 1, 84.99, 84.99, 'XYZ', '77777', 'ABCD', 'abcrer@gmail.com'),
(46969, 'Post-Workout Muscle Support ', 'product2.jpg', '20 Servings', 'Chocolate', 1, 84.99, 84.99, 'hhh', 'hfhfh', 'hhh', 'hfhf@gmail.com'),
(58628, 'SERIOUS MASS GAINER', 'product4.jpg', '20 Servings', 'Chocolate', 2, 30.99, 61.98, 'Nosherman', '77665544', 'Kuwait', 'abc@gmail.com'),
(71162, 'Post-Workout Muscle Support ', 'product1.jpg', '20 Servings', 'Banana', 1, 79.99, 79.99, 'Ben James', '667577447', 'Kuwait', 'ben@gmail.com'),
(92285, 'Post-Workout Muscle Support ', 'product2.jpg', '20 Servings', 'Chocolate', 1, 84.99, 84.99, 'as', '23213', 'asas', 'asas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_image` varchar(50) NOT NULL,
  `p_description` varchar(200) NOT NULL,
  `p_price` float NOT NULL,
  `p_flavor` varchar(30) NOT NULL,
  `p_size` varchar(30) NOT NULL,
  `p_overview` varchar(1000) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_image`, `p_description`, `p_price`, `p_flavor`, `p_size`, `p_overview`, `category`) VALUES
(1, 'Post-Workout Muscle Support & Recovery', 'product1.jpg', 'GOLD STANDARD 100% WHEY PROTEIN', 79.99, 'Banana', '20 Servings', 'Each serving of the world’s best-selling whey protein powder provides 24 grams of high-quality whey protein primarily from Whey Protein Isolate, which has had excess carbohydrates, fat, and lactose ‘isolated’ out using sophisticated filtering technologies. The powder is also instantized for easy mixing using just a glass and spoon. With more than 20 different flavors – including naturally flavored options – there’s no doubt this is the Optimum Nutrition Gold Standard 100% Whey Protein.', 'weight'),
(2, 'Post-Workout Muscle Support & Recovery', 'product2.jpg', 'GOLD STANDARD 100% WHEY PROTEIN', 84.99, 'Chocolate', '20 Servings', 'Each serving of the world’s best-selling whey protein powder provides 24 grams of high-quality whey protein primarily from Whey Protein Isolate, which has had excess carbohydrates, fat, and lactose ‘isolated’ out using sophisticated filtering technologies. The powder is also instantized for easy mixing using just a glass and spoon. With more than 20 different flavors – including naturally flavored options – there’s no doubt this is the Optimum Nutrition Gold Standard 100% Whey Protein.', 'weight'),
(3, 'GOLD STANDARD 100% CASEIN', 'product3.jpg', 'Slow-Digesting Protein for Overnight Muscle Recovery', 53.99, 'Fruits', '30 Servings', 'Casein, a slower digesting and absorbing protein can be used after exercise, between meals or before bed to help support satiety and muscle recovery. GOLD STANDARD 100% CASEIN™ delivers BCAAs to recovering muscles for several hours. By using only premium micellar casein as a protein source, we’ve created a protein powder that sets the GOLD STANDARD® for slow digesting protein support.', 'weight'),
(4, 'SERIOUS MASS GAINER', 'product4.jpg', 'For Muscle Building & Weight Gain Goals', 30.99, 'Chocolate', '20 Servings', 'SERIOUS MASS is the ultimate muscle building and weight gain formula. With 1,250 calories per 2-scoop serving and 50 grams of protein to support muscle recovery, this powder makes the ideal post-workout and between meals shake for sizing up your goals. SERIOUS MASS provides you with the tools you need to support your weight gains goals.', 'weight'),
(5, 'High-Protein Ready to Drink Shake', 'product5.jpg', 'GOLD STANDARD READY TO DRINK PROTEIN SHAKE', 30.99, 'Chocolate', '12 Servings', 'Gold Standard ready to drink shake is thoughtfully crafted for healthy adults and active individuals to reach their daily protein goals, whatever they may be. Kick off your day with a quick and easy indulgence, enjoy a convenient snack in between meals, or power up before or after activity with this grab-and-go shake that comes in delicious chocolate and vanilla flavors. With 24 grams of high-quality protein, 24 essential vitamins and minerals and only 1 gram of sugar, Gold Standard Protein Shake is the premium way to help fuel your day.\r\n\r\n', 'protein'),
(6, 'Premier Protein 100% Whey Protein Powder', 'product6.jpg', 'Premier Protein Powder, Vanilla Milkshake, 30g Protein', 39.99, 'Vanilla', '17 Servings', '30g Protein per serving, with all the essential amino acids 100% of protein from Whey.\r\nAvailable in three delicious flavors: Chocolate milkshake, vanilla milkshake, and cafe latte. Try it mixed with water or milk, blended into your favorite smoothie recipe, or baked into protein packed recipes\r\nNo Soy ingredients, GLUTEN FREE', 'protein'),
(7, 'Orgain Organic Protein Powder', 'product7.jpg', 'Organic Protein™ Protein Powder - Cookies \'n Cream', 28.49, 'Cookies \'n Cream', '17 Servings', 'Don’t get caught with your hand in the cookie jar ever again. Our original plant-based protein powder is shaking things up with even more of the Cookies ‘n Cream flavor that you crave. Treat yourself to the irresistible flavors of chocolate cookies dipped in sweet cream! Loaded with 21g of plant-based protein, every scoop of this protein powder is crafted from hand-picked ingredients for maximum nutrition and taste', 'protein'),
(8, 'Thorne MediBolic', 'product8.jpg', 'Includes nutrients and botanicals designed to support blood sugar levels', 29.99, 'vanilla', '10 Servings', 'Medibolic is great for weight loss because it is packed not only with protein, but fiber as well, keeping you full and satisfied,” says Davis. “It also contains a wide blend of key nutrients and botanicals to help with blood sugar and lipid level regulations, as well as to benefit gut health.” She recommends combining it with fruits and vegetables for a smoothie', 'protein'),
(9, 'Energy + Muscle Recovery + Electrolytes', 'product9.jpg', 'ESSENTIAL AMIN.O. ENERGY + ELECTROLYTES', 28.99, 'Strawberry', '30 Servings', 'Mix up ESSENTIAL AMIN.O. ENERGY + ELECTROLYTES anytime you want a boost of energy, muscle recovery and electrolyte support. Each serving provides 100 mg of caffeine from natural sources to support energy and focus along with 5 grams of amino acids for muscle recovery support—plus electrolytes to help replace what’s lost through sweat.¹\r\n\r\n', 'energy'),
(10, 'ESSENTIAL AMIN.O. ENERGY\n', 'product10.jpg', 'Anytime Energy & Muscle Recovery', 27.99, 'Lemonade', '30 Servings', 'Mix up ESSENTIAL AMIN.O. ENERGY anytime you want a boost of energy, focus and muscle recovery support. Each serving provides 100 mg of caffeine from natural sources to support energy and focus along with 5 grams of amino acids for muscle support.¹\r\n\r\n', 'energy'),
(11, 'NATURALLY FLAVORED ESSENTIAL', 'product11.jpg', 'No Artificial Flavors, Sweeteners or Colors\r\n', 27.99, 'Watermelon', '25 Servings', 'Mix up Naturally Flavored ESSENTIAL AMIN.O. ENERGY anytime you want a naturally flavored boost of energy and alertness. Each serving provides 100 mg of caffeine from natural sources to support energy and focus along with 5 grams of amino acids for muscle support. Choose from a variety of fruit flavors that contain no artificial sweeteners and colors.¹\r\n\r\n', 'energy'),
(12, 'ESSENTIAL AMIN.O. ENERGY + UC-II', 'product12.jpg', 'Energy + Muscle Recovery + Joint Support\r\n', 31.99, 'Mix Fruit', '30 Servings', 'Mix 2 scoops of this Anytime Energy powder into cold water anytime you want 100 milligrams of caffeine from natural sources to support energy and focus along with 5 grams of amino acids for muscle support and UC-II collagen to support joint and cartilage health. We’ve also included anti-oxidant vitamin C to support collagen synthesis. \r\n\r\n', 'energy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
