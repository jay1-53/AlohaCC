-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 04:39 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity level`
--

CREATE TABLE `activity level` (
  `activitylvl_id` int(11) NOT NULL,
  `activity_desc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity level`
--

INSERT INTO `activity level` (`activitylvl_id`, `activity_desc`) VALUES
(1, 'Not active'),
(2, 'Seldom active'),
(3, 'Sometimes'),
(4, 'Often'),
(5, 'Always');

-- --------------------------------------------------------

--
-- Table structure for table `food_diary`
--

CREATE TABLE `food_diary` (
  `fd_id` int(11) NOT NULL,
  `viand_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fd_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_diary`
--

INSERT INTO `food_diary` (`fd_id`, `viand_id`, `user_id`, `fd_date`) VALUES
(1, 1, 4, '2020-11-12 09:51:54'),
(2, 2, 5, '2020-11-12 09:51:54'),
(3, 3, 4, '2020-11-12 09:53:14'),
(4, 4, 5, '2020-11-12 09:53:04'),
(5, 8, 5, '2020-11-12 09:53:34'),
(6, 9, 4, '2020-11-12 09:53:34'),
(7, 16, 4, '2020-11-12 14:49:06'),
(8, 17, 4, '2020-11-12 14:49:06'),
(9, 8, 4, '2020-11-12 15:24:15'),
(10, 8, 4, '2020-11-12 15:24:33'),
(11, 6, 4, '2020-11-12 16:05:00'),
(12, 10, 4, '2020-11-12 16:05:12'),
(13, 1, 4, '2020-11-12 16:16:17'),
(14, 6, 5, '2020-11-12 17:50:36'),
(15, 7, 5, '2020-11-12 17:50:36'),
(16, 8, 5, '2020-11-12 17:50:36'),
(17, 9, 4, '2020-11-12 19:17:17'),
(18, 10, 4, '2020-11-12 19:37:13'),
(19, 6, 9, '2020-11-13 03:55:43'),
(20, 3, 9, '2020-11-13 03:56:02'),
(21, 7, 9, '2020-11-13 03:56:02'),
(22, 19, 4, '2020-11-13 08:58:20'),
(23, 3, 4, '2020-11-13 09:05:25'),
(24, 13, 10, '2020-11-13 09:08:41'),
(25, 4, 10, '2020-11-13 09:18:17'),
(26, 5, 10, '2020-11-13 09:18:17'),
(27, 6, 10, '2020-11-13 09:18:17'),
(28, 16, 10, '2020-11-13 09:18:17'),
(29, 22, 10, '2020-11-13 09:18:17'),
(30, 7, 10, '2020-11-13 09:18:28'),
(31, 8, 10, '2020-11-13 09:18:28'),
(32, 11, 10, '2020-11-13 09:18:28'),
(33, 18, 10, '2020-11-13 09:18:37'),
(34, 19, 10, '2020-11-13 09:18:37'),
(35, 20, 10, '2020-11-13 09:18:37'),
(36, 22, 10, '2020-11-13 09:18:37'),
(37, 10, 4, '2020-11-14 02:40:54'),
(38, 29, 4, '2020-11-14 03:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `user_password` varchar(45) NOT NULL,
  `user_birthdate` date DEFAULT NULL,
  `user_height` int(11) DEFAULT NULL,
  `user_weight` int(11) DEFAULT NULL,
  `Activity Level_activitylvl_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_birthdate`, `user_height`, `user_weight`, `Activity Level_activitylvl_id`) VALUES
(4, 'sadaanton', 'sadaanton@student.apc.edu.ph', 'sadaanton1125', '2000-11-25', 176, 52, 2),
(5, 'cpduria', 'cpduria@student.apc.edu.ph', 'cpduria11', '2001-12-10', 152, 50, 3),
(9, 'sgansay', 'sgansay@student.apc.edu.ph', 'sgansayhehe', '1999-11-24', 162, 92, 4),
(10, 'racervantes', 'racervantes@student.apc.edu.ph', 'racervanteshehe', '1991-11-11', 143, 69, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_food diary`
--

CREATE TABLE `user_has_food diary` (
  `User_user_id` int(11) NOT NULL,
  `Food Diary_fd_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `viand`
--

CREATE TABLE `viand` (
  `viand_id` int(11) NOT NULL,
  `viand_name` varchar(45) NOT NULL,
  `viand_recommendation` varchar(60) NOT NULL,
  `viand_description` varchar(255) NOT NULL,
  `viand_cc` varchar(45) NOT NULL,
  `viand_image` varchar(45) NOT NULL,
  `sugg_tag` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `viand`
--

INSERT INTO `viand` (`viand_id`, `viand_name`, `viand_recommendation`, `viand_description`, `viand_cc`, `viand_image`, `sugg_tag`) VALUES
(1, 'Pinakbet', 'Pinakbet', 'Pinakbet Tagalog is a Filipino vegetable dish. It is composed of a variety of vegetables like eggplant, okra, kalabasa and ampalaya and it also has a protein component. ', '110', 'pinakbet.jpg', 'Suggested'),
(2, 'Chicken Tinola', 'Tinola', 'Chicken Tinola is a Filipino soup dish. It involves cooking chicken pieces in ginger broth. It is popular when the weather is cold because you will feel awarm and cozy everytime you eat it.', '210', 'Chicken_Tinola.jpg', 'Not Suggested'),
(3, 'Ginisang Ampalaya', 'Ginisa', 'Ginisang Ampalaya is a vegetable dish and one of the healthiest recipes around. It is known for anti-diabetes effects and contains chemical known as insulin like peptide that is similar in shape and function to animal-produced insulin.', '80', 'Ginisang_Ampalaya.jpg', 'Sugessted'),
(4, 'Sinigang na Isda', 'Sinigang', 'Sinigang na isda is a type of Filipino fish soup wherein fish is cooked in a sour broth together with vegetables like okra and eggplant. ', '271', 'sinigang_na_isda.jpeg', 'Suggested'),
(5, 'Chicken Adobo', 'Adobo', 'Chicken Adobo is a type of Filipino chicken stew marinated in soy sauce and other spices until tender.', '224', 'Chicken_adobo.jpg', 'Not suggested'),
(6, 'Pork Adobo', 'Adobo', 'Pork Adobo is a type of Filipino pork stew marinated in soy sauce and other spices until tender.', '342', 'Pork_Adobo.jpg', 'Not suggested'),
(7, 'Balut', 'Egg', 'Balut is a fertilized duck egg which is incubated for a period of 14 to 21 days then boiled or steamed.', '130', 'Balut.jpg', 'Suggested'),
(8, 'Hard Boiled Egg', 'Egg', 'Hard Boild egg is cooked with their shells unbroken usually by immersion in boiling water until the egg yolk and white become solidify.', '80', 'Hard_Boiled_Egg.jpg', 'Suggested'),
(9, 'Soft Boiled Egg', 'Egg', 'Soft Boiled egg is cooked with their shells unbroken by immersion in boiling water but not until it will become solidify.', '70', 'Soft_Boiled_Egg.jpg', 'Suggested'),
(10, 'Sunny side up', 'Egg', 'Sunngy side up is a fried egg good for breakfast', '100', 'Sunny_side_up.jpg', 'Suggested.'),
(11, 'Scrambled egg', 'Egg', 'Scrambled egg is a fried egg whose whites and yolks are stirred together while cooking.', '150', 'Scrambled_egg.jpg', 'Suggested'),
(12, 'Kare-Kare', 'Kare-Kare /stew', 'Kare kare is a type of Filipino stew with a rich and thick peanut sause with vegetable such as string benas, egg plant, bok choy and banana blossoms.', '180', 'Kare-Kare.jpg', 'Suggested'),
(13, 'Pork Sinigang', 'Sinigang', 'Sinigang is a sour native to the Philippines that uses prok as the main ingredient', '290', 'Pork_Sinigang.png', 'Not Suggested'),
(14, 'Sinigang na Kangkong', 'Sinigang', 'Sinigang na Kangkong is a sour dish but uses Kang kung as a main ingredient', '150', 'sinigang_na_kangkong.jpg', 'Suggested'),
(15, 'Sinigang na Bangus', 'Sinigang', 'Sinigang na Bangus is a type of Filipino fish soup wherein fish is cooked in a sour broth together with vegetables such as okra, eggplant and radish. ', '160', 'Sinigang_na_Bangus.jpg', 'Suggested'),
(16, 'Sinigang na Baka', 'Sinigang', 'Sinigang na Baka is a type of Filipino stew wherein Baka is the main ingredient is cooked in a sour broth together with vegetables such as okra, eggplant, and radish.', '240', 'Sinigang_na_Baka.jpg', 'Not Suggested'),
(17, 'Sinigang na Hipon', 'Sinigang', 'Sinigang na isda is a type of Filipino fish soup wherein fish is cooked in a sour broth together with vegetables like okra and eggplant.', '170', 'Sinigang_na_Hipon.jpg', 'Suggested'),
(18, 'Lechon', 'Lechon', 'Lechon is a whole roasted pork dish cooked over charcoal.', '160', 'Lechon.jpg', 'Not Suggested'),
(19, 'Lechon Kawali', 'Lechon', 'Lechon kawali is a crispy and hot deep fried pork.', '160', 'Lechon_Kawali.jpg', 'Not Suggested'),
(20, 'Paksiw na Isda', 'Paksiw', 'Paksiw na isda is a type of Filipino stew using fish as a main ingredient cooked in vinegar and garlic.', '197', 'Paksiw_na_Isda.jpg', 'Suggested'),
(22, 'Pork Tinola', 'Tinola', 'Pork Tinola is a Filipino soup dish involves cooking pork pieces in ginger broth.', '300', 'Pork_Tinola.jpg', 'Not suggested'),
(23, 'Fried Chicken', 'Chicken', 'A dish consisting of chicken pieces wich have been coated in a seasoned batter and fried. This flavorful dish is famous and favorite of almost everyone because of its crunchiness on the outside with moist and juicy meat in the inside. ', '247', 'Fried_Chicken.jpeg', 'Not Suggested'),
(24, 'Nilagang Baka', 'Nilaga', 'Nilagang baka is a Filipino-style boiled soup consists of fork tender beef shanks, tendon, and vegetables such as potatoes, corn, pechay, cabbage, green beans, and carrots.', '250', 'Nilagang_Baka.jpg', 'Suggested'),
(25, 'Nilagang Manok', 'Nilaga', 'Nilagang manok is one of the simplest Filipino dish and it is also known as boiled chicken soup. You can have this tasty nilagang manok by just boiling the chicken and add potatoes, bananas, cabbage, pechay, green onions, green beans and spices in it and ', '160', 'Nilagang_Manok.jpg', 'Not Suggested'),
(26, 'Nilagang Baboy', 'Nilaga', 'Also known as boiled pork soup and commonly served for lunch or dinner on regular days. This Filipino-style boiled soup is perfect for cold weather. This is made of fork tender pork belly, kalabasa, pechay, and flavorful meat broth. It is delicious on its', '260', 'Nilagang_Baboy.jpg', 'Not Suggested'),
(27, 'Inihaw na Liempo', 'Liempo', ' Inihaw na Liempo is also a popular and favorite dish in the Philippines. It is perfect alternative for pork BBQ. The liempo or pork belly is marinated in citrus juice, fish sauce, and spices and grilled to juicy perfection.', '100', 'Inihaw_na_Liempo.jpg', 'Suggested'),
(28, 'Pork Sisig', 'Sisig', 'It is a Kapampangan delicacy and usually served as an appetizer but can also be enjoyed as a main dish with a cup of warm white rice on the side.', '130', 'Pork_Sisig.jpg', 'Suggested'),
(29, 'Banana cue', 'Meryenda', 'Banana cue is a one of the most popular street foods in the Philippines. A snack made out of fried banana in caramelized brown sugar served on a skewer or known as barbecue stick.', '70', 'Banana_cue.jpg', 'Suggested'),
(30, 'Filipino Spaghetti', 'Pasta', 'It is a Filipino adaptation of the Italian spaghetti. This spaghetti has a distinctively sweet sauce, usually made from tomato sauce sweetened with brown sugar or banana ketchup. It is typically topped with sliced hotdogs and ground meat. You can also add', '350', 'Filipino_Spaghetti.jpg', 'Not Suggested'),
(31, 'Beef Papaitan', 'Papaitan', 'The name of this dish derived from the Filipino word \"pait\", which means \"bitter\". It is called as papaitan because of its bitter taste that comes from the bile. It is a soup composed of cow or goat innards. It consists of a bitter juice extracted by the ', '340', 'Papaitan.jpg', 'Not Suggested'),
(32, 'Pork Giniling', 'Giniling', 'Giniing is typically a pork dish that uses ground pork as its main ingridient. Groundpork is stewed in tomato sauce and water to bring out the taste while vegetable, such as carrots and potatoes are added for addional flavor and nutrition.', '180', 'Giniling.jpg', 'Suggested'),
(33, 'Lumpia Shanghai', 'Meryenda', 'Lumpiang Shanghai is a Filipino deep-fried appetizer consisting of a mixture of giniling wrapped in a thin egg crepe. It is a very famous and common dish made during any occasion, due to its easiness to cook.', '140', 'Lumpiang_Shanghai.jpg', 'Not Suggested'),
(34, 'Daing na Bangus', 'Daing', 'Daing na bangus refers to the Milkfish that is marinated in vinegar, peppercorn, garlic and salt overnight, and then then fried until crispy. Unlike traditional daing na bangus doesnt need to be dried under the sun.', '260', 'Daing_na_Bangus.jpg', 'Suggested'),
(35, 'Daing na Lamayo', 'Daing', 'Daing also known as dried fish is a Filipino cuisine that is known as fishes that are split open, gutted, salted and then sundried. There are also boneless variants which is more expensive and popular.', '180', 'Daing.jpg', 'Not Suggested'),
(36, 'Daing na Tulingan', 'Daing', 'The usual daing, but it a tulingan version. Daing na tulingan provides the advantage of lesser fish bones allowing for more time to taste the delicious dish.', '250', 'Daing_na_Tulingan.jpg', 'Not Suggested'),
(37, 'Tortang Talong', 'Torta', 'Tortang talong is a type of eggplant omelet wherein grilled eggplants are soaked in a beaten egg mixture and then fried. This is a simple yet delicious Filipino recipe.', '150', 'Tortang_Talong.jpg', 'Not Suggested'),
(38, 'Champorado', 'Kakanin', 'Champorado is a sweet chocolate rice porridege in the Philippines that uses a pure chocolate known as tablea. Champorado is normally served during breakfast which kids highly enjoy.', '90', 'Champorado.jpg', 'Suggested'),
(39, 'Puto', 'Kakanin', 'Puto are Filipino steamed rice cakes, traditionally made from slightly fermented rice dough, It is eaten as is or as an accompaniment to a number of other savoury dishes', '20', 'Puto.jpg', 'Not Suggested'),
(40, 'Kutsinta', 'Kakanin', 'Kutsinta is a brown rice cake type of kakanin that uses lye water as an ingridient. It is somewhat sticky yet chewy at the same time and is best eated with grated coconut on top also known as niyog', '50', 'Kutsinta.jpg', 'Not Suggested');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity level`
--
ALTER TABLE `activity level`
  ADD PRIMARY KEY (`activitylvl_id`);

--
-- Indexes for table `food_diary`
--
ALTER TABLE `food_diary`
  ADD PRIMARY KEY (`fd_id`),
  ADD KEY `viand_id_idx` (`viand_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`,`Activity Level_activitylvl_id`),
  ADD KEY `fk_User_Activity Level1_idx` (`Activity Level_activitylvl_id`);

--
-- Indexes for table `user_has_food diary`
--
ALTER TABLE `user_has_food diary`
  ADD PRIMARY KEY (`User_user_id`,`Food Diary_fd_id`),
  ADD KEY `fk_User_has_Food Diary_Food Diary1_idx` (`Food Diary_fd_id`),
  ADD KEY `fk_User_has_Food Diary_User1_idx` (`User_user_id`);

--
-- Indexes for table `viand`
--
ALTER TABLE `viand`
  ADD PRIMARY KEY (`viand_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_diary`
--
ALTER TABLE `food_diary`
  MODIFY `fd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `viand`
--
ALTER TABLE `viand`
  MODIFY `viand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_diary`
--
ALTER TABLE `food_diary`
  ADD CONSTRAINT `viand_id` FOREIGN KEY (`viand_id`) REFERENCES `viand` (`viand_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_User_Activity Level1` FOREIGN KEY (`Activity Level_activitylvl_id`) REFERENCES `activity level` (`activitylvl_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_has_food diary`
--
ALTER TABLE `user_has_food diary`
  ADD CONSTRAINT `fk_User_has_Food Diary_Food Diary1` FOREIGN KEY (`Food Diary_fd_id`) REFERENCES `food_diary` (`fd_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_User_has_Food Diary_User1` FOREIGN KEY (`User_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
