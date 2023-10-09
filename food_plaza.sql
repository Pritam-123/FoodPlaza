-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 07:20 AM
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
-- Database: `food_plaza`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sl_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `msg` blob NOT NULL,
  `dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `email`, `pwd`) VALUES
(1, 'admin@admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE `menu_item` (
  `mid` int(11) NOT NULL,
  `rid` int(20) NOT NULL,
  `mimg` varchar(200) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mprice` int(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` int(10) NOT NULL,
  `trend` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`mid`, `rid`, `mimg`, `mname`, `mprice`, `description`, `type`, `status`, `trend`) VALUES
(39, 8, 'product/1720969879_1.jpg', 'Kolkata Style Chicken Stew', 100, 'Braising and stewing are very similar methods of cooking. They both use the same process of searing to enhance color and flavor, and slow cooking in liquid to produce tender, moist meat. Once the meat is browned, it is cooked in a covered pan, either on top of the stove or in the oven.', 'Non Veg', 1, 0),
(40, 8, 'product/834165447_2.jpg', 'Grilled Sausage [2 Pieces]', 60, 'A sausage is a type of meat product usually made from ground meat—often pork, beef, or poultry—along with salt, spices and other flavourings', '', 0, 0),
(41, 8, 'product/537499046_3.jpg', 'Chicken Hyderabadi Biryani', 200, 'Hyderabadi biryani (also known as Hyderabadi dum biryani) is a style of biryani originating from Hyderabad, India made with basmati rice and meat. Originating in the kitchens of the Nizam of Hyderabad, it combines elements of Hyderabadi and Mughlai cuisines.', 'Non Veg', 1, 0),
(42, 8, 'product/1762059100_4.jpg', 'Mutton Handi Biryani', 330, 'This biryani is also known as kachay gosht ki biryani or dum biryani, where the meat is marinated and cooked along with short grain and fine rice. It is left on a slow fire or dum for a fragrant and aromatic flavour', '', 0, 0),
(43, 8, 'product/822703478_5.jpg', 'Saute Veggies', 80, 'Broccoli, corn, peas and zucchini.', '', 0, 1),
(44, 8, 'product/2136881718_6.jpg', 'Bread Toast with Jam', 80, 'A jam sandwich is usually composed of two slices of bread with jam (or jelly) in the middle. It is normally consumed at lunchtime or as a snack.', 'Veg', 1, 0),
(45, 8, 'product/1525473244_7.jpg', 'Poached Egg [2 Eggs]', 40, 'Egg Half Boil', '', 0, 0),
(46, 8, 'product/1213874051_8.jpg', 'Chicken Club Sandwich', 190, ' A sandwich that typically consists of boneless, skinless chicken breast or thigh served between slices of bread, on a bun, or on a roll', '', 0, 0),
(47, 10, 'product/670613957_9.jpg', 'Chicken Handi', 240, 'Chicken Handi translates to chicken in clay pot. Traditionally this curry is made in a terrocota pot which imparts its unique flavour to this dish.', 'Non Veg', 1, 0),
(48, 10, 'product/983602890_10.jpg', ' Chilly Chicken', 240, 'Chilli Chicken is a sweet, spicy and crispy appetizer, most popular in Indo-chinese cuisine. ', 'Non Veg', 1, 0),
(49, 10, 'product/362045307_11.jpg', 'Chicken Tandoori', 240, 'Tandoori chicken is a South Asian dish of chicken marinated in yogurt and spices and roasted in a tandoor, a cylindrical clay oven. The dish is now popular world-wide.', 'Non Veg', 1, 1),
(50, 10, 'product/339383965_12.jpg', 'Kadai Chicken', 240, 'Kadai chicken is a delicious, spicy & flavorful dish made with chicken, onions, tomatoes, ginger, garlic & fresh ground spices', '', 0, 0),
(51, 10, 'product/1108086708_13.jpg', 'Mixed Veg', 150, 'Mix veg curry is made by cooking a mixture of vegetables together in a traditional Indian onion-tomato gravy.', '', 0, 0),
(52, 10, 'product/986903631_14.jpg', 'Basmati Rice', 40, '“Basmati” is long grain aromatic rice grown for many centuries in a specific geographical area, in the Himalayan foothills of the Indian sub-continent, ', 'Veg', 1, 0),
(53, 10, 'product/2057219878_15.jpg', 'Butter Naan', 50, 'Butter naan is soft and extremely yummy, it is often served at buffets in festivals or special occasions.', '', 0, 0),
(54, 10, 'product/2084609831_16.jpg', 'Garlic Naan', 45, 'Garlic Naan bread is Indian leavened flatbread made with all-purpose flour and spiced with garlic.', '', 0, 0),
(55, 11, 'product/435254244_17.jpg', 'Veg Manchow Soup', 120, 'This vegan soup is spicy, with a thick broth, yummy fried noodles and a bunch of different stir fried vegetables.', '', 0, 1),
(56, 11, 'product/60090090_18.jpg', 'Egg Spicy Thukpa', 160, 'Thukpa is a soupy dish that originated in eastern Tibet. It is a combination of Tibetan-style noodles with vegetables or chicken stew in clear soup.', '', 0, 0),
(57, 11, 'product/1922435754_20.jpg', 'Schezwan Chicken Dry', 250, 'Schezwan chicken is a popular Chinese dish made by tossing crisp chicken in moderately hot, spicy, sweet and flavorful Sichuan sauce.', '', 0, 0),
(58, 11, 'product/249378793_21.jpg', 'Chicken Kung Pao with Peanut Dry', 260, 'This Kung Pao chicken is an easy, authentic Chinese dish made with crisp chicken breast, peanuts, and chile peppers in a sauce made from soy', '', 0, 0),
(59, 11, 'product/1233261019_22.jpg', 'Fish Chilli Dry [8 Pieces]', 350, 'chili fish is a popular Indian-chinese appetizer made by tossing fish in spicy chilli sauce. I', '', 0, 0),
(60, 11, 'product/499696528_23.jpg', 'Fish Lemon Chilli Coriander Dry [8 Pieces]', 350, ' Chilli lime fish is a quick and easy fish recipe made with pan fried fillets coated in a spicy sweet sauce with fresh lime', '', 0, 0),
(61, 11, 'product/1394149551_24.jpg', 'Prawns Chilli Dry [6 Pieces]', 400, 'This spicy chilli garlic prawns recipe is made with Prawns, Tomato Sauce and Soy Sauce.', '', 0, 0),
(62, 11, 'product/2075763570_25.jpg', 'Chicken Chilli Gravy [8 Pieces]', 230, 'It is a popular Indo-Chinese dish made with boneless chicken pieces. Chicken is marinated in soya sauce, black pepper, salt, vinegar, and egg', '', 0, 0),
(63, 12, 'product/465903548_26.jpg', 'Chicken Biryani', 70, 'Traditional chicken biryani is made by layering marinated chicken at the bottom of a pot followed by another layer of par-cooked rice.', '', 0, 1),
(64, 12, 'product/317603360_27.jpg', 'Egg Chicken Biryani', 75, ' Egg biryani recipe – Fragrant basmati rice cooked with aromatic biryani spices, herbs & boiled eggs to yield a delicious one pot egg biryani', '', 0, 0),
(65, 12, 'product/1428206819_28.jpg', 'Chicken Leg Biryani', 120, 'Chiken Briyani With leg peice', '', 0, 1),
(66, 12, 'product/898985028_29.jpg', 'Mutton Biryani', 75, 'Mutton Biryani is a royal dish with beautifully spiced and fragrant layers of biryani rice centered with juicy, tender mutton ', '', 0, 1),
(67, 12, 'product/1481181135_30.jpg', 'Egg Mutton Biryani', 80, 'Egg Mutton Biryani ', '', 0, 0),
(68, 12, 'product/1688602905_31.jpg', 'Chicken Chaap [1 Piece]', 55, 'Chicken Chaap is always about a special cut of the chicken which is having both body and leg ', '', 0, 0),
(69, 12, 'product/1552033661_32.jpg', 'Mutton Chaap [1 Piece]', 65, 'A mutton gravy dish cooked in cardamom, mace and cinnamon', '', 0, 0),
(70, 12, 'product/367883238_33.jpg', 'Chicken Steamed Momos [8 Pieces]', 150, ' These dumplings are soft and juicy and are traditionally steamed.', '', 0, 0),
(71, 13, 'product/2081361241_34.jpg', 'Vegetable Hot and Sour Soup', 150, 'Clear soup with vegetables, slightly sour and spicy', '', 0, 0),
(72, 13, 'product/389288766_35.jpg', 'Cream of Vegetable Soup', 130, 'Cream of tomato soup is a thick, creamy, soup made with tomato flesh and pieces, combined with milk [or cream] and flour', '', 0, 0),
(74, 13, 'product/829760365_37.jpg', 'Vegetable Noodles Soup', 143, 'Vegetable Noodles Soup', '', 0, 0),
(75, 13, 'product/1396786096_38..jpg', 'Paneer Tikka Kabab [6 Pieces]', 416, 'Enjoy the taste of this masala rich paneer appetizer grilled in tandoor.', '', 0, 0),
(76, 13, 'product/1105629102_39.jpg', 'Tandoori Chicken', 572, 'Tandoori Chicken Is Prepared By Roasting Chicken Marinated In Yoghurt And Spices In A Tandoor', '', 0, 0),
(77, 13, 'product/1934156867_40.jpg', 'Fish Tikka Kabab [4 Pieces]', 416, 'Enjoy the taste of this masala rich fish appetizer grilled in tandoor.', '', 0, 0),
(78, 13, 'product/1328608100_41.jpg', 'Dal Fry', 104, 'Dal Fry is made by adding boiled and softened Dal to a seasoning of onion, tomato and spices which have been fried in ghee or oil. Dal Fry is a simple Indian dish generally made using Arhar Dal', '', 0, 0),
(79, 14, 'product/776257813_42.jpg', 'Salt and Pepper Mushroom', 180, 'Mushroom pepper salt is a simple mushroom appetizer', '', 0, 0),
(80, 14, 'product/79563507_43.jpg', 'Chicken 65', 180, ' Chicken 65 is a popular South Indian Chicken appetizer made by deep frying marinated chicken with curry leaves and green chilies.', '', 0, 1),
(81, 14, 'product/747416918_44.jpg', 'Godavari Royyala Vepudu', 220, 'Godavari Royyala Vepudu is a delectable preparation of prawns, fried and sauteed with sub-continental spices, giving that irresistible aroma and rustic flavor.', '', 0, 0),
(82, 14, 'product/2076377435_45.jpg', 'Koli Sukka', 200, 'Mangalorean chicken sukka (Kori sukka) is a semi-dry Konkani chicken curry made with chicken, freshly ground sukka masala, and coconut.', '', 0, 0),
(83, 14, 'product/261808672_46.jpg', 'Kozhi Roast', 200, 'Kerala Chicken Roast Recipe is a no fuss recipe that is loaded with flavours. Chicken is marinated in spices and cooked in a onion tomato gravy.', '', 0, 0),
(84, 14, 'product/688796624_46.jpg', 'Naatu Kozhi Jeedipappu', 220, 'Naatu Kozhi Kuzhambu, the flavorful chicken curry made from cornish hen and indian spices.', '', 0, 0),
(85, 14, 'product/1295350667_47.jpg', 'Chicken Dum Biryani (Couple Pack)', 230, 'Chiken Briyani For two person', '', 0, 0),
(86, 14, 'product/163173384_48.jpg', 'Avakaya Chicken Biryani', 230, 'Heat oil in a deep vessel and add to it, Black Cardamom, Cardamom, Cloves, Cinnamon, marinated chicken, and water with a covered lid and cook on high flame for ', '', 0, 0),
(87, 15, 'product/214574731_49.jpg', 'Plain Tarka [Full] + Chicken Chaap [Half] + Rumali', 225, 'Cheap & Best · Recommended · Plain Tarka [Full] + Chicken Chaap [Half] + Rumali Roti [4 Pieces] · Combos · Chicken Biryani [Full] + Mutton Kasha [Half] · Chicken ', '', 0, 0),
(88, 15, 'product/284996289_50.jpg', 'Chicken Biryani [Full] + Mutton Kasha [Half]', 340, 'Chiken Briyani Mutton Kasha', '', 0, 0),
(89, 15, 'product/2031597465_51.jpg', 'Paneer Do Pyaza [Half] + Chilli Chicken [Half] + R', 270, 'Chicken Amritsari An authentic Punjabi dish, chicken is simply made in the unique Amritsari gravy ... Paneer Do Pyaza The Pyaza styled Paneer Curry Dish!', '', 0, 0),
(90, 15, 'product/1269072317_52.jpg', ' Plain Tarka [Full] + Chicken Chaap [Half] + Rumal', 225, 'Paneer tarka , Chiken Chaap, Rumali Roti', '', 0, 0),
(91, 15, 'product/1410687178_53.jpg', 'Mutton Biryani [Full] + Chicken Chaap [Half]', 375, 'Briyani and Chaap', '', 0, 0),
(92, 15, 'product/448603739_54.jpg', 'Chicken Biryani [Full] + Chicken Chaap [Half]', 275, 'Briyani and Chaap', '', 0, 0),
(93, 15, 'product/589512752_55.jpg', 'Chilli Paneer', 105, 'Chilli Paneer is a popular Indo-Chinese dish where cubes of fried crispy paneer are tossed in a spicy sauce made with soy sauce, vinegar, ', '', 0, 0),
(94, 15, 'product/1085133261_56.jpg', 'Boneless Chilli Chicken', 105, 'Crispy and flavorful is how I would describe this Chilli Chicken. Boneless chicken is marinated in flavorful sauces, fried until crispy,', '', 0, 0),
(95, 16, 'product/1698868928_57.jpg', 'Steamed Rice', 99, 'Prepared with basmati rice.', '', 0, 0),
(96, 16, 'product/475690539_58.jpg', 'Kashmiri Pulao', 250, 'Prepared with basmati rice.', '', 0, 0),
(97, 16, 'product/1388453237_59.jpg', 'Paneer Pulao', 230, 'Prepared with basmati rice with paneer', '', 0, 0),
(98, 16, 'product/724871341_60.jpg', 'Veg Biryani', 199, 'A traditional biryani has layers of marinated meat and fragrant rice, dum cooked with caramelized onions, spices, herbs and saffron-infused milk ', '', 0, 0),
(99, 16, 'product/796928682_61.jpg', 'Dawati Mutton Biryani [2 Pieces]', 350, 'ender mutton, languorously cooked over a low flame in its own juices, with a load of onions and a bouquet of whole spices.', '', 0, 0),
(100, 16, 'product/1659262088_62.jpg', 'Kumbh Butter Masala', 280, 'The richness of the gravy blends well with the mushrooms. ', '', 0, 0),
(101, 16, 'product/36418574_63.jpg', 'Shahi Paneer', 270, 'Shahi Paneer also known as Mughlai Paneer is a succulent Indian dish of soft, pillowy paneer floating in a creamy gravy.', '', 0, 0),
(102, 16, 'product/1818446860_65.jpg', 'Murgh Majedar [8 Pieces]', 299, 'Murgh ke Mazedar Tukray (Delicious Chicken Bits)', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `sl` int(11) NOT NULL,
  `order_id` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `landmark` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `pay` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `dt` date NOT NULL,
  `rid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(20) NOT NULL,
  `pro_id` int(10) NOT NULL,
  `quan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rid` int(11) NOT NULL,
  `rname` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ph` varchar(12) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `pwd` int(15) NOT NULL,
  `rimg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rid`, `rname`, `email`, `ph`, `addr`, `pwd`, `rimg`) VALUES
(8, 'Adda', 'adda@gmail.com', '9876543210', 'Bhangakuthi BSNL Tower, Indraprostho, Bardhaman, West Bengal 713104', 1234, 'restaurant/605460063_adda.jpg'),
(10, 'Jalsa', 'jalsa@gmail.com', '9876543210', 'Grand Trunk Road, Ghordaur Chati, DVC Road, Bardhaman, West Bengal 713103', 1234, 'restaurant/65319689_jalsa.jpg'),
(11, 'China 88', 'china88@gmail.com', '9876543210', 'Police station, 508, BC Rd, beside burdwan, Kalibazar, Bardhaman, West Bengal 713101', 1234, 'restaurant/363728549_China88.jpg'),
(12, 'Royal Biryani', 'royal@gmail.com', '9876543210', 'Jail Khana More, West Bengal 713101', 1234, 'restaurant/623184022_royal-biryani.jpg'),
(13, 'Canteen', 'canteen@gmail.com', '9876543210', 'Near Dhal Dighi Petrol Pump, Bardhaman Locality,  Perbirhata, Bardhaman, West Bengal 713101', 1234, 'restaurant/763819252_canteen.jpg'),
(14, 'The Second Wife', 'secondwife@gmail.com', '9876543210', 'Opp. Anandamela Lg Shoppe, Perbirhata, Bardhaman, West Bengal 713101', 1234, 'restaurant/1138805895_The Second Wife.jpg'),
(15, 'Cheap & Best', 'cheap&best@gmail.com', '9876543210', '37, Grand Trunk Road, Petrolpump, BL Hati Rd, Bardhaman, West Bengal 713101', 1234, 'restaurant/1167959832_Cheap & Best.jpg'),
(16, 'Pearl Restaurant', 'pearl@gmail.com', '9876543210', '140, Laxmipur Math, GT Road, near Bajaj Showroom, Benfed Lane, Bardhaman, West Bengal 713104', 1234, 'restaurant/690811423_Pearl Restaurant.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `ph_no` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pwd`, `ph_no`) VALUES
(1, 'abc', 'abc@gmail.com', '1234', '8250393248');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
