-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2016 at 04:24 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chefszone`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuisines`
--

CREATE TABLE IF NOT EXISTS `cuisines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `uploader` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `sub_category` varchar(20) NOT NULL,
  `ingredients` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `season` varchar(10) NOT NULL,
  `views` int(3) NOT NULL,
  `likes` int(3) NOT NULL,
  `cook_time` varchar(20) NOT NULL,
  `ing_quantity` varchar(500) NOT NULL,
  `serves` int(3) NOT NULL,
  `date` varchar(10) NOT NULL,
  `steps` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `cuisines`
--

INSERT INTO `cuisines` (`id`, `name`, `uploader`, `category`, `sub_category`, `ingredients`, `description`, `icon`, `season`, `views`, `likes`, `cook_time`, `ing_quantity`, `serves`, `date`, `steps`) VALUES
(1, 'pav bhaji', 'riya_shah', 'indian', 'dinner', 'potatoes,carrots,green Peas, Ginger-garlic paste,Green Chilli,Oil, Cumin Seeds/Jeera/Jeelakarra, Onion finely chopped, Capsicum finely chopped,Tomatoes finely chopped,Pav Bhaji Masala to taste,Chilli Powder, Salt to Taste, Coriander for garnish,pav', 'Pav bhaji is a fast food mostly famous in Maharashtra (mostly Mumbai and Pune). Pav in Marathi means bread. Bhaji is a term for a curry and vegetable dish. It is usually sold on the carts on the streets. My mom used to make this at home, as we don''t get it in Andhra Pradesh.', 'pav_bhaji', 'All', 46, 0, '45', '3,1-2,1 cup,1/2 tbsp,2 to 3,,1 tsp,1 large,1 large,2 medium,', 4, '', 'Boil the potatoes, carrots and green peas together in a pressure cooker until tender, and smash them.^Grind the ginger-garlic paste and green chilli together.^In a pan, heat little oil and fry the jeera. Add the ground paste and saute it a little. Add the finely chopped onions and fry until they become little brown. Now add the capsicum and keep it covered until its cooked. Keep stirring in between. After the capsicum is cooked, add the tomato pieces and a little water. Keep it on low flame until it becomes little thick. Add Pavbhaji masala and little chilli powder if needed. Stir in the boiled vegetables and simmer it for sometime. Season with salt to taste and garnish it with the chopped fresh coriander.^Slight toast the pav/bread with butter and serve while hot.'),
(2, 'pani puri', '', 'indian', 'snacks', 'puri, cold water,pudina leaves, coriander leaves,green chilies,salt as needed, imli (tamarind) chutney,shev', 'It is hard to find a person in India who does not crave for this popular street snack. Each Pani puri is a burst of spicy and sourly flavors with crispy puris. Enjoy with chilled iced colas.', 'pani_puri', 'All', 7, 0, '15', '7 to 8 ,2 cups,7 to 8,1 tablespoon,4 to 5,,4 tablespoons,3 tablespoons', 7, '', 'Make a fine paste out of pudina and coriander leaves and green chilies.^Now add cold water to it mix the ingredients well. In each puri, add 1 tablespoon of this pudina water. Then add 1/2 tablespoon of imli (tamarind) chutney to each puri.^Serve by sprinkling shev.'),
(3, 'dosa', '', 'indian', 'dinner', 'rice ( except basmati rice), udad dal or white lentils,poha or flattened rice,salt as needed,soybean oil ( for greasing tawa, and frying ingredients),cumin seeds,onions (medium sized onions),green chillies,haldi (turmeric powder),potatoes', 'Masala dosa is a popular snack item amongst young people, especially those in college. As the name suggests, it is spicy, with green chilies and fried potatoes. Enjoy with coconut chutney.', 'dosa', 'all', 7, 0, '730', '4 cups,2 cups,2 tablespoons,,,1 teaspoon,2 chopped,2 chopped,1/2 teaspoon,2 boiled and peeled', 4, '', 'Soak the rice, dal and poha for 8 hours ( overnight). Drain the water out and grind the dal, poha and rice to make a fine paste. Keep the paste in a moist place for 4 hours( far from windows or fan) to allow it to get fermented. Mix in a pinch of salt after the paste is fermented.^Heat a thick taw on medium flame. Grease it with 1 tablespoon of soybean oil. Spread a thin layer of the paste paste on tawa and cook it until it gets brown and crispy.^Heat a separate pan with 2 teaspoons of soybean oil. Add add cumin seeds and onion slices. Fry the ingredients until the onions turn pink in color.^Add green chillies, haldi (turmeric powder) and chopped boiled potatoes. Mix well and sprinkle salt.^Spread the fried masala mixture on the crispy dosa and serve with a coconut chutney.'),
(4, 'chole bhature', '', 'indian', 'lunch', 'white channa (chick peas),cinnamon stick,cloves,teabags,onions finely chopped,cloves garlic (crushed), ginger (crushed),tomatoes finely chopped,tamarind paste,turmeric powder,cumin seeds, vegetable oil,coriander leaves,channa masala,red chili powder, salt to taste', 'From Amritsar to Chennai, this recipe for ever popular Chhole goes great with rice, naan, bhature or even aloo tikkis! Slather on some imli chutney and they''re great even in sandwiches!', 'chole_bhature', 'All', 2, 0, '40', '1/2 kg,2 inch,4 ,2,2,3,3 inch,3,2 tsp,1/2 tsp,1 tsp,4 tbsp,1 sprig,5 tsp,2 tsp,,', 8, '', 'Soak the chick peas overnight.^Boil them in a pressure cooker with salt, cinnamon stick, clove and tea bags for 15 mins (2 whistles).^While the chick peas are boiling, saute onions, tomatoes, ginger, garlic, cumin seeds, turmeric powder and channa masala in oil.^Add the above mixture to the boiled chick peas.^Add tamarind paste , mix well and let it simmer for 5 minutes.^Garnish with coriander leaves and chopped onions.'),
(5, 'poha', '', 'indian', 'breakfast', 'cups poha, water as needed,soybean oil, cumin seeds,green chillies,onions,chopped tomatoes,curry leaves,toasted peanuts,chopped boiled and peeled potatoes,lemon juice, salt as needed, turmeric powder,coriander leaves,grated coconut', 'Poha is a common breakfast dish made in Maharashtra. It is made of flattened rice, spiced up with turmeric and cumin seeds. Enjoy it early morning with warm chai.', 'poha', 'All', 3, 0, '35 mins', '2 cups,2 tablespoons,1/2 teaspoon,2 chopped,2 chopped,2 tablespoons of,2-3,1 tablespoon of,2-3 tablespoons of,1 tablespoon of,1 teaspoon of,1 tablespoon of ,1 tablespoon of ', 4, '', 'Soak poha in a bowl with water.^Heat a pan with soybean oil. Add cumin seeds, green chillies and chopped onions and tomatoes. Also add curry leaves. Fry until the onions turn pinkish in color. The cumin seeds should not turn black, just darker in color.^Sprinkle toasted peanuts and potatoes. Stir and mix.^Drain the poha from water. Add the poha to the pan with the ingredients. Stir and pour in the lemon juice. Sprinkle salt, turmeric powder and coriander leaves. Stir and cook for a bit until the poha is mixed well with the ingredients.^Garnish with coconut.'),
(6, 'chocolate mousse ', '', 'indian', 'dessert', 'white chocolate,pasteurized curd (I used tangy greek style curd),whipping cream, white rum,chocolate curls or cocoa powder for decoration', 'Pasteurized curd and white chocolate with rum. Makes a gorgeous and easy dinner party dessert.', 'chocolate_mousse', 'summer', 1, 0, '183 mins', '250g,200g,250ml,1 tablespoon,,', 4, '', 'Melt the white chocolate until smooth for a total of 3 minutes in the microwave (stirring occasionally) or over a pan of hot water.^Whip the cream until stiff.^Stir in the melted chocolate.^Add the rum and finally the curd.^Mix until completely blended together and pour into small glass dishes or fancy coffee cups.^Chill for at least 3 hours before serving.^Sprinkle hot chocolate powder or use a peeler to get milk or dark chocolate curls from a solid bar.'),
(7, 'chilli paneer', '', 'indian', 'starters', 'Paneer cubes,Onion diced into squares,Capsicum diced into squares,Spring onion chopped,Hot chilli sauce,Soy sauce,Tomato ketchup,Pepper powder,Salt,Oil', 'A simple-to-make dry chilli paneer using easily available ingredients at home.', 'chilli_paneer', 'All', 4, 0, '20 mins', '200g,1 medium,1 medium,1 tablespoon,2 teaspoons,1 tablespoon,2 teaspoons,,2 tablespoons', 2, '', 'Heat 2 tablespoons of oil in a frying pan and fry the paneer cubes till they turn brown and crispy on both sides.^Remove them onto a tissue paper/kitchen towel and leave them aside.^Into the same pan add the diced onions and capsicum and stir fry them over a high flame for about 2-3 mins till they are slightly cooked. Do not overcook them as they need to hold their shape and remain crunchy.^Then add the soy sauce, tomato ketchup,hot chilli sauce and pepper powder. If you do not have hot chilli sauce, soak about 4-5 red chillies in 3 tablespoons of water for about 30 mins and grind them to a fine paste. Use this paste as a substitute for hot chilli sauce.^Once the sauces are well coated over the vegetables, add in the salt but be sure to add little since the sauces already have a good amount of salt in them.^Finally add the fried paneer and give it a good toss.^Switch off the heat , sprinkle with spring onions and serve as side dish for schezuan fried rice/noodles.'),
(8, 'missi roti', '', 'indian', 'breakfast', 'wheat flour (atta),gram flour (besan),kasoori methi leaves (crushed),red chilli powder,ajawin,Salt to taste,water for kneading', ' We make this couple of times a week as it is a good change from regular rotis and healthy option too.', 'missi_roti', 'All', 0, 0, '10 mins', '1 cup,1 cup,2 teaspoon,1 teaspoon,1/2 teaspoon,,,', 2, '', 'Mix all the ingredients and knead the dough. Divide it into equal 6-8 balls. Roll thick rotis out of it.^Cook it like paratha by brushing ghee/oil on the both sides. Eat hot with your favorite vegetable.'),
(9, 'noodles', '', 'chinese', 'snacks', 'rice noodles,vegetable oil,garlic minced,soy sauce, chilli sauce,salt and pepper to taste, green onion chopped', 'Noodles swimming in garlic, soy sauce and chilli. Garnish with chopped green onion and peanuts if you like.', 'noodles', 'All', 0, 0, '20 mins', '225g,2 tablespoons,1 clove,1 tablespoon ,1/2 tablespoon,,1', 4, '', 'Bring a large pot of water to the boil. Add noodles, and cook for 4 to 5 minutes or until al dente; drain. Al Dente is when noodles are firm to touch and are the polar opposite of ''squishy''.^Heat oil in a large frying pan over medium heat. Cook garlic until tender. Stir in noodles, and season with soy sauce, chilli sauce, salt and pepper. Sprinkle top with chopped green onion.'),
(10, 'fried rice', '', 'chinese', 'lunch', ' Cooked white Rice,Tender french beans,Green peas,small Chopped Carrot,onion,Green Chillies,Jeera,Salt to taste,oil', 'Simple Veg Fried rice indian version which does not require any kind of sauce.', 'alt', 'All', 29, 0, '80 mins', '1 Cup,1 small cup,1 small cup,1 small cup,1,3,1 tsp,,2 tsp', 2, '', 'Chop the onion and green chillies into long strands.^Cut french beans into small cubes,carrot into small cubes. Cook these along with green peas in an open vessel with water for 15 Mins.^On a frying pan add oil,and jeera. When jeera starts to spurt add green chillies followed by onion.Fry this untill onion turns golden brown in color.^Now add the cooked vegitables and fry along for another 5 mins. Add cooked rice and salt and stir well.Rice should turn to the color of onion that is golden brown. Sprinkle dhaniya leaves and its ready to serve.'),
(11, 'manchurian', '', 'chinese', 'starters', 'chopped cabbage,chopped cauliflower,chopped onions,chopped carrots, flour,salt as needed,water as needed,vegetable oil as needed,chopped ginger and garlic slices,soya sauce, chili sauce,tomato sauce,corn flour', ' Veg manchurians are yummy vegetable balls dipped in a equally yummy gravy. The veg manchurian can serve as amazing appetizers when served without the gravy. The gravy based ones go great with roti or rice.', 'manchurian', 'All', 24, 0, '40 mins', '1 cup,1 cup,1 cup,1 cup,2 cups,,,,1 tablespoon,2 tablespoons,2 tablespoons,2 tablespoons,2 tablespoons', 5, '', 'Mix the cabbage, cauliflower, onions and carrot slices with the flour and salt. Add a few tablespoons of water and mix with these ingredients.^Heat a deep frying pan with oil. Meanwhile, make medium sized balls out of the vegetables and flour mixture. Deep fry the balls in oil.^In a separate pan with 2 teaspoons of the oil, add chopped ginger-garlic slices. Stir and add soya, chili and tomato sauces. Stir and mix. Meanwhile, mix the corn flour with a little bit of water to make a thick paste. Add the paste to the ginger and garlic slices. Stir continously.^Now add the deep fried balls and mix well.'),
(13, 'mango lassi', '', 'indian', 'dessert', 'mango,sugar,yogurt,ice,', 'Smooth, creamy and absolutely delicious!', 'mango_lassi', 'summer', 1, 0, '10', '1,1/4  cup,1 cup,1/2 cup,', 1, '2016-04-05', 'In a blender, combine mango, yogurt, sugar and ice.^ Blend until smooth. Pour into glasses and serve.^');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `topic`, `message`, `rating`) VALUES
(1, 'Akash Shah', 'akash@gmail.com', 'Excellent', 'The website was very useful and helped me a lot in cooking', 5),
(11, 'Riya Shah', 'shahriya27021997@gmail.com', 'Excellent recipes', 'All recipes displayed are very interesting.Thank You!', 5);

-- --------------------------------------------------------

--
-- Table structure for table `random`
--

CREATE TABLE IF NOT EXISTS `random` (
  `number` int(11) NOT NULL,
  `date` date NOT NULL,
  UNIQUE KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `random`
--

INSERT INTO `random` (`number`, `date`) VALUES
(8, '2016-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `translator`
--

CREATE TABLE IF NOT EXISTS `translator` (
  `en` text NOT NULL,
  `fr` text NOT NULL,
  `hi` text NOT NULL,
  `mr` text NOT NULL,
  `gu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `translator`
--

INSERT INTO `translator` (`en`, `fr`, `hi`, `mr`, `gu`) VALUES
('salt', 'sel', '', '', ''),
('tomato', 'tomate', '', '', ''),
('cucumber', 'concombre', '', '', ''),
('sugar', 'sucre', '', '', ''),
('yogurt', 'yaourt', '', '', ''),
('milk', 'lait', '', '', ''),
('turmeric', 'cureuma', '', '', ''),
('okra', 'gombo', '', '', ''),
('pois', 'peas', '', '', ''),
('beans', 'des haricots', 'phaliyaan', 'soyabinace', 'bija'),
('water', 'eau', '', '', ''),
('rice', 'riz', '', '', ''),
('wheat', 'blé', '', '', ''),
('butter', 'beurre', 'makkhan', 'loni', 'makhana'),
('buttermilk', 'babeurre', 'chhaachh', 'taka', 'chasa'),
('honey', 'miel', '', '', ''),
('baking powder', 'levure', 'beking paudar\n', 'Bekinga pavdara\r\n', 'khavano soda'),
('baking soda', 'bicarbonate de soude', 'beking soda\r\n', 'bekinga soda\r\n', 'khavano soda'),
('cheese', 'fromage', '', '', ''),
('cooking oil', 'huile de cuisson', '', '', ''),
('onion', 'oignon', '', '', ''),
('mayonnaise', 'mayonnaise', '', '', ''),
('potatoes', 'patates', '', '', ''),
('sesame seeds', 'graines de sesame', '', '', ''),
('garlic', 'ail', '', '', ''),
('rice flour', 'farine de riz', '', '', ''),
('coriander', 'coriandre', '', '', ''),
('cumin', 'cumin', '', '', ''),
('spinach', 'epinards', '', '', ''),
('fenugreek', 'fenugree', '', '', ''),
('lemon', 'citron', '', '', ''),
('lime', 'citron vert', '', '', ''),
('apple', 'pomme', 'seb', 'Sapharacanda', 'sapharjan'),
('cabbage', 'chou', 'gobhee', 'kobi', 'kobi'),
('cauliflower', 'chou-fleur', '', '', ''),
('carrot', 'carotte', '', '', ''),
('radish', 'un radis', '', '', ''),
('brinjal', 'aubergine', 'baingan', 'vangi', 'ringana'),
('pumpkin', 'citrouille', '', '', ''),
('grapes', 'les raisins', '', '', ''),
('watermelon', 'pasteque', '', '', ''),
('mushroom', 'champignon', '', '', ''),
('corn', 'ble', '', '', ''),
('pepper mint leaves', 'feuilles de menthe', '', '', ''),
('bananas', 'bananes', 'kele', 'keli', 'kela'),
('capsicum', 'piment doux', 'shimala mirch\r\n', 'miraci', 'maracum'),
('tea', 'the', '', '', ''),
('tea', 'the', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `date` date NOT NULL,
  `change_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `icon`, `level`, `experience`, `about`, `date`, `change_date`) VALUES
(1, 'riya shah', 'riya shah', 'riya@123', 'shahriya27021997@gmail.com', 'riya_shah', 'intermediate', '5yr', 'abc xyz', '2016-04-04', '2016-04-05'),
(2, 'akash shah', 'akash shah', 'akash@123', '', '', '', '', '', '2016-04-05', '2016-04-03'),
(3, 'sagar parmar', 'sagar parmar', 'sagar@123', '', 'sagar_parmar', 'not rated', '5yr', 'Hello! I am Sagar Parmar', '2016-04-05', '2016-04-05'),
(4, 'romil shah', 'romil shah', 'romil@123', 'romil.j.cool@gm', '', '', '', '', '2016-04-05', '2016-04-24'),
(5, 'vrushti shsh', 'vrushti shah', 'vrushti@123', 'vrushti@gmail.c', '', '', '', '', '2016-04-05', '2016-04-19'),
(6, '', 'smit shah', 'smit@123', 'shahsmit2@gmail', '', '', '', '', '2016-04-05', '2016-04-28'),
(7, '', 'hetvi shah', 'hetvi@123', 'hetvi7@gmail.co', '', '', '', '', '2016-04-05', '2016-04-22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
