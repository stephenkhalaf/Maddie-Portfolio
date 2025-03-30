-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2025 at 07:11 PM
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
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `degree` varchar(64) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `experience` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `freelance` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `unique_id`, `name`, `degree`, `phone`, `address`, `birthday`, `experience`, `email`, `freelance`, `image1`, `image2`) VALUES
(4, 1718213185, 'Miss Maddie', 'bsc', '+23429028015', '34, Adeoyo street, Mushin, Lagos.', '1995-03-27', '1 Year ', 'stephenkhalaf@gmail.com', 'Available', '1720728714176165447_312142956975005_8117812553368853010_n.jpg', '172098870518011682_1332369300183660_3741923048991752192_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `unique_id`, `full_name`, `email`, `password`, `type`) VALUES
(7, 1720987785, 'khalaf', 'stephenkhalaf@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Normal Admin'),
(9, 1720988551, 'Maddie', 'maddie@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `unique_id`, `description`, `link`, `image`, `date`) VALUES
(1, 1721877324, 'Does anybody know what this cap means? #noogler #stem #cap #doraemon #birdcap #tech #google', 'https://www.instagram.com/p/CN-r9xzANPt/?img_index=1', '17221039691720728714176165447_312142956975005_8117812553368853010_n.jpg', '2021-04-22'),
(3, 1721880531, 'Spending a few days at home with my family #Code', 'https://www.instagram.com/p/Br9CUVZhv20/', '172188053147690571_224840675098449_977460055515162952_n.jpg', '2018-12-29'),
(4, 1721882034, 'Bought a new chair. 📚🧘‍♀️👩🏽‍💻 #computerScience #DataScience #python #r #JavaScript #ES6 #books', 'https://www.instagram.com/p/BpnQ5Z0B_Lt/', '1721882034maddienew.jpg', '2018-10-31'),
(5, 1721882157, 'Merry Christmas!', 'https://www.instagram.com/p/CJLg9WpAEEh/', '1721882157Merry Christmas!.jpg', '2020-12-24'),
(6, 1721882482, 'Algorithms and powder day! #Siam #ai #maths #utah #datascience', 'https://www.instagram.com/p/B7CciAegH9H/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '1721882558Algorithms.jpg', '2020-01-08'),
(7, 1721882653, 'Working on linear regression and colour-picking 🐍 #matplotlib #pandas #python #jupyter', 'https://www.instagram.com/p/BvBosaahSrV/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '1721882698working.jpg', '2019-03-15'),
(8, 1723853590, 'If sleeping beauty were a developer she would have woken up for suuuuure 😹', 'https://www.instagram.com/p/CONEkiCgnFP/', '1723853590insta.webp', '2021-04-28'),
(9, 1723853985, 'The most misunderstood profession. Like for part 2! 👩🏽‍💻', 'https://www.instagram.com/p/COEEkIcgZoL/', '1723853985insta.webp', '2021-04-24'),
(10, 1723854067, 'Choose carefully those variables or they’ll come back after you. Let me know your nightmare legacy code stories so I know I’m not alone 😂#bestpractices #development #softwaredeveloper #tech #coding', 'https://www.instagram.com/p/CN-oBVegHga/', '1723854067insta.webp', '2021-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `unique_id`, `type`, `title`, `description`, `link`, `image`) VALUES
(12, 1720745639, 'Data Science', 'Python Data Science Hand Book', 'This book is written by Jake VanderPlas. It is the best data science book for begineers.', 'https://drive.google.com/file/d/1jT-Lz7IScnbyFNMPkNfXdDAl0zWF-5dH/view?usp=drive_link', '1720745639python data science handbook.jfif'),
(13, 1720745866, 'Web Development', 'Ajax Definitive Guide', 'This book is written by Anthony T. Holdener. This book is for anyone who wants to know every nooks and crannies of Ajax.', 'https://drive.google.com/file/d/1UQf6iSPodlt3itJzgxHbVCqlpafRGFPL/view?usp=drive_link', '1720745866ajax definitive guide.jfif'),
(14, 1720746040, 'Data Science', 'Learning Python', 'This book is written by Mark Lutz. This book is very good for python', 'https://drive.google.com/file/d/1ssi_lmnSfwmGZUHX6CWVbqotA968oXrv/view?usp=drive_link', '1720746040learning python.jfif'),
(15, 1720746129, 'Data Science', 'Learning R', 'This book is written by Richard Cotton. ', 'https://drive.google.com/file/d/1yzCr4bz7LkxPk_xshBkBllOfz6NkF9-9/view?usp=drive_link', '1720746129learning r.jfif'),
(16, 1720746382, 'Data Science', 'Machine Learning with Scikit Learn', 'This book is written by Aurelien Geron. In my opinion, i feel this is the best data science book ever. I realy love it.', 'https://drive.google.com/file/d/1Q9Iv5yxJPhb53WGdxOt3ZPh6YWQMuAUn/view?usp=drive_link', '1720746382scikit.jfif'),
(17, 1720746555, 'Data Science', 'Natural Language Processing with Python', 'This book is written by  Steven Bird, Ewan Klein and Edward Loper. I really love this book', 'https://drive.google.com/file/d/1sz-ceXpw8nEZWHQYukZlZrSXghI5cDyu/view?usp=drive_link', '1720746555natural language processing.jfif'),
(18, 1720746671, 'Data Science', 'R cookbook', 'This book is written by Paul Teetor. it is really amazing!', 'https://drive.google.com/file/d/1Td2ZMdIKOAK1RiOOrbo4jD8gV5BlFbiS/view?usp=drive_link', '1720746671r cookbook.png'),
(19, 1720746852, 'Web Development', 'Eloquent Javascript', 'This book is written by Marijn Haverbeke. It is one of a kind. ', 'https://drive.google.com/file/d/1ud7ZE1TUFU1vLcjMVt0WSpQ93vOEbSix/view?usp=drive_link', '1720746852eloquent javascript.jfif'),
(20, 1720747001, 'Web Development', 'PHP, MySQL, Javascript', 'This book is written by Robin Nixon. I really love it', 'https://drive.google.com/file/d/1jbaJIIPvvIdgtcBFhNyOmRYZb8h6pDC1/view?usp=drive_link', '1720747001phpmysql.jfif'),
(21, 1720747200, 'Web Development', 'MongoDB Definitive Guide', 'This book is written by Kristina Chodorow and Michael Dirolf. it is an amazing masterpiece', 'https://drive.google.com/file/d/13AwpjfpoSNZ0c0-rigEmJkQSiqu7ygW7/view?usp=drive_link', '1720747200mongodb.jfif'),
(22, 1720747356, 'Web Development', 'HTML and XHTML Definitive Guide', 'This book is written by Chuck Musciano and Bill Kennedy. It is one of the first books to read when starting to learn programming', 'https://drive.google.com/file/d/13nUNZGvCzIcOZUbE6peSjo2HZ8X501ZC/view?usp=drive_link', '1720747356html.jfif'),
(23, 1720747657, 'Web Development', 'Statistics', 'This book is written by Sophie Goldie', 'https://drive.google.com/file/d/1wyJMwFX70dS2PIP_Rd41T2SF7-Qxp7VE/view?usp=drive_link', '1720747657statistics.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `unique_id`, `title`, `price`, `image`) VALUES
(5, 1721986361, 'Burger', 45.7, '1721986361pexels-photo-1640772.jpeg'),
(6, 1721986390, 'Sweet Fruits', 13.5, '1721986390pexels-photo-709567.jpeg'),
(7, 1721986411, 'Stock Jeans', 23, '1721986411jeans-pants-blue-shop-52518.jpeg'),
(8, 1721986433, 'Donuts', 10, '1721986433pexels-photo-3338681.jpeg'),
(9, 1721986450, 'Pizza', 12, '1721986450pexels-photo-1633525.jpeg'),
(10, 1721986484, 'Pepper', 15, '1721986484pexels-photo-4033046.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `pri_name` varchar(255) NOT NULL,
  `pri_start_date` date NOT NULL,
  `pri_end_date` date NOT NULL,
  `pri_desc` varchar(255) NOT NULL,
  `sec_name` varchar(255) NOT NULL,
  `sec_start_date` date NOT NULL,
  `sec_end_date` date NOT NULL,
  `sec_desc` varchar(255) NOT NULL,
  `tet_name` varchar(255) NOT NULL,
  `tet_start_date` date NOT NULL,
  `tet_end_date` date NOT NULL,
  `tet_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `unique_id`, `pri_name`, `pri_start_date`, `pri_end_date`, `pri_desc`, `sec_name`, `sec_start_date`, `sec_end_date`, `sec_desc`, `tet_name`, `tet_start_date`, `tet_end_date`, `tet_desc`) VALUES
(4, 1720735462, 'Zion comprehensive school', '2000-03-17', '2005-06-01', 'Second Class Upper', 'P & P High School', '2007-02-02', '2010-11-04', 'First Class', 'University of Lagos', '2015-01-15', '2025-01-31', 'First Class');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `unique_id`, `name`, `start_date`, `end_date`, `description`) VALUES
(4, 1720743385, 'BCG X', '2024-05-02', '2024-06-28', 'I learnt the basics of Business and hypothesis framing, Exploratory Data Analysis and Feature Engineering & Modelling'),
(5, 1720743573, 'Cognizant', '2024-07-01', '2024-07-05', 'I learnt Exploratory Data Analysis, Data Modelling, Model Building, Machine Learning Production and Quality Assurance'),
(6, 1720743762, 'British Airways', '2024-06-12', '2024-07-04', 'I learnt Web Scraping to gain comapny insights and predicted customer buying behaviour');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `unique_id`, `name`, `email`, `subject`, `message`) VALUES
(4, 1720751538, 'Omosehin Stephen Olumide', 'stephenkhalaf@gmail.com', 'Hi Boss', 'This is Stephen from Nigeria '),
(5, 1721878071, 'stephen', 'stephenkhalaf@gmail.com', 'hep your self', 'i am a student of the law school'),
(6, 1722222677, 'Chloe Rempel', 'your.email+fakedata41790@gmail.com', 'Tempore et veniam sequi nostrum dolorem dolores quas ducimus aperiam.', 'Ratione itaque rem.'),
(7, 1722478349, 'Dallin Reynolds', 'your.email+fakedata45386@gmail.com', 'Consequuntur aliquam temporibus autem natus iure maxime laboriosam ipsam veritatis.', 'Voluptatum asperiores rerum beatae totam iusto.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender` int(255) NOT NULL,
  `receiver` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `files` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `seen` int(11) NOT NULL DEFAULT 0,
  `received` int(11) NOT NULL DEFAULT 0,
  `deleted_sender` int(11) NOT NULL DEFAULT 0,
  `deleted_receiver` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `receiver`, `message`, `files`, `date`, `seen`, `received`, `deleted_sender`, `deleted_receiver`) VALUES
(1, 1089976562, 903548553, 'gi', NULL, '2024-07-30', 0, 0, 0, 0),
(2, 1089976562, 903548553, 'hi my friend', NULL, '2024-07-30', 0, 0, 0, 0),
(3, 1089976562, 903548553, 'i am coming very soon', NULL, '2024-07-30', 0, 0, 0, 0),
(8, 1334921327, 1089976562, 'my agent', NULL, '2024-07-30', 1, 1, 0, 0),
(15, 1089976562, 1334921327, 'i am good , so what about you and your whole family', NULL, '2024-07-30', 1, 1, 0, 0),
(16, 1089976562, 1334921327, 'this is my file', '1722443357Data Scientist.pdf', '2024-07-31', 1, 1, 0, 0),
(22, 1334921327, 903548553, 'hi nigga', NULL, '2024-08-08', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `unique_id`, `image`) VALUES
(0, 1723859510, '1723859510maddie1.jpg'),
(0, 1723859521, '1723859521maddie2.jpg'),
(0, 1723859532, '1723859532maddie3.jpg'),
(0, 1723859541, '1723859541maddie4.jpg'),
(0, 1723859552, '1723859552maddie5.jpg'),
(0, 1723859565, '1723859565maddie6.jpg'),
(0, 1723859577, '1723859577maddie7.jpg'),
(0, 1723859587, '1723859587maddie8.jpg'),
(0, 1723859600, '1723859600maddie9.jpg'),
(0, 1723859613, '1723859613maddie10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `unique_id`, `title`, `description`, `link`) VALUES
(7, 1723849966, 'Data Science Tricks', 'This includes all the codes i use to tackle data science problems. I use the codes to juggle my memo', 'https://www.kaggle.com/code/stephenkhalaf/data-sci...'),
(8, 1723850011, 'Data Visualization Tricks', 'This involves codes that i use in visualizing images, charts,  how model does it classification, Clu', 'https://www.kaggle.com/code/stephenkhalaf/data-visualization-tricks'),
(9, 1723850037, 'R Tricks', 'It involves the codes i use in tackling R problems such as Dplyr, Base plots, ggplots, Linear Regres', 'https://www.kaggle.com/code/stephenkhalaf/r-tricks'),
(10, 1723850065, 'Git Tricks', 'This includes all the commands i use for Git operations and some Jquery codes that i mainly use for ', 'https://www.kaggle.com/code/stephenkhalaf/git-tricks'),
(11, 1723850098, 'Housing Price Prediction', 'I used pycaret to determine the best models such as CatBoost, LightGradientBoost and ExtremeGradient', 'https://colab.research.google.com/drive/1aKhTVlER5ckZZz1AtOP7PfPOnK_43kdc?usp=sharing'),
(12, 1723850123, 'Sentiment Analysis', 'This is a typical NLP problem that uses BeautifulSoup to fetch data, text preprocessing on it such a', 'https://colab.research.google.com/drive/1HcIN5WYAyYgrdv0XjK9tZPCyGxhbopqv?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `story` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `unique_id`, `story`, `image`) VALUES
(1, 1723860807, '<p>My name is <b>Omosehin Stephen Olumide</b>.&nbsp; I was a very intelligent and hard working student in school. I was beating on the <b>28th of April, 2016</b> by my family members which left my right shoulder dislocated, broken ribs and i had conjuvitis. It affected me so bad that i failed my exams in school that year. My CGPA dropped from <b>4.94 </b>to <b>4.38.</b>&nbsp;I was so depressed and i had to defer my academics.<br></p>', ''),
(6, 1723863769, '<p>These are the pictures of the incident in 2016...</p><p><br></p>', '1723863769IMG_20240817_172428.jpg'),
(7, 1723864070, '<p style=\"text-align: center; \">My head was slashed here&nbsp;</p>', '1723864070IMG_20240817_172441.jpg'),
(8, 1723864301, '<p>Along the line, my mom died, things got tougher for me so i was working and saving money to get back to school. I saved up to&nbsp;<b>2 million naira(about 1,200 dollars)</b>&nbsp;within 4 years of being away from school.<br></p>', ''),
(9, 1723864470, '<p>In 2020, I applied for reabsorption, but unknown to me, it was not properly granted.&nbsp; My school portal was working fine, I paid my school fees and everything seemed fine</p><p><br></p>', ''),
(11, 1723864630, '<p>In 2021,&nbsp;<b>Miss Maddie</b>&nbsp;popped up on my instagram timeline indicating that she\'s a Javascript queen. I sent a message to her,&nbsp; telling her that i need a programming job even if it\'s a one dollar job. Miraculously, she replied me... i was so shocked and she changed my life that day.</p><p><br></p><p><br></p>', ''),
(12, 1723864671, '<p style=\"text-align: center; \">Miss Maddie</p>', '1723864671maddie1.jpg'),
(13, 1723864729, '<p style=\"text-align: center; \">The message that i sent to her</p>', '1723864729madd1.png'),
(14, 1723865103, '<p>She gave me books on programming. She told me that if i could build a solid project, that she would further my studies abroad. I\'ve held on to that belief since 2021. I started reading like a mad man because i don\'t want to lose that opportunity.&nbsp; Link</p>', ''),
(15, 1723865166, '<p>She gave me books on programming. She told me that if i could build a solid project, that she would further my studies abroad. I\'ve held on to that belief since 2021. I started reading like a mad man because i don\'t want to lose that opportunity.&nbsp;<a href=\"https://drive.google.com/drive/folders/1f35Iio5Ae0a-PVxFkL4PfJPFW26xaEgP\" target=\"_blank\" style=\"background-color: rgb(255, 255, 255); font-family: sans-serif; font-weight: 400;\">Book Link</a><br></p>', ''),
(16, 1723865267, '<blockquote>There is a proverb that says <i> Opportunity comes but once....and i\'m not gonna fucking lose it</i></blockquote>', ''),
(17, 1723865437, '<p>On the 24th of July, 2021. I was bullied by the same guy that beat me in 2017. He almost blinded my eye but God saved me. I was helpless....&nbsp;<br></p>', '1723865437khalaf1.jpg'),
(18, 1723865456, '<p>But that didn\'t stop me from studying Javascript....<br></p>', '1723865456khalaf2.jpg'),
(19, 1723865481, '', '1723865481khalaf3.jpg'),
(20, 1723865496, '', '1723865496khalaf4.jpg'),
(21, 1723865511, '', '1723865511khalaf5.jpg'),
(22, 1723865523, '', '1723865523khalaf6.jpg'),
(23, 1723865619, '<p>In 2022, After writing my first semester examination, My result was not uploaded on my student portal. I made a complaint and i was told that the reabsorption letter that i wrote in 2020 was only approved in the faculty level but was not forwarded to the senate for approval.<br></p>', ''),
(24, 1723865671, '<p>The school said the maximum number of semester that a student can be away from school is 6, and unfortunately as at 2022, it was already 8 semesters. Hence, i was withdrawn from school and handed the withdrawal letter in 2023.<br></p>', ''),
(25, 1723865723, '<p style=\"text-align: center; \">This is my withdrawal letter(Right Click on the Image to view Properly)</p>', '1723865723stephen_001.jpg'),
(26, 1723865916, '<p>I applied for multiple reabsorptions in 2023 but it was all denied....</p><div><br></div>', ''),
(27, 1723866017, '<p>I was so depressed and was about to commit the unthinkable...A mysterious Bird appeared in my room and my hope was&nbsp; rekindled&nbsp;<br></p>', '1723866017IMG_20231202_222738.jpg'),
(28, 1723866088, '<p>God sent&nbsp; <b>Prof. Adeosun</b> to me... and my life changed for good.<br></p>', '1723866088Samson-Adeosun.png'),
(29, 1723866134, '<p>I wrote another letter of reabsorption through the H.O.D,&nbsp; through the Dean of Engineering, then through the DSA to the Deputy Vice Chancellor (Academic and Research)<br></p>', ''),
(30, 1723866218, '<p style=\"text-align: center; \">My Letter of Reabsorption (Right click on the Image to view properly)</p>', '1723866218stephen 2_001.jpg'),
(31, 1723866319, '<p style=\"text-align: center; \">I was very happy and my life changed forever...&nbsp;&nbsp;Glory be to God.....<br></p>', '1723866368HD-wallpaper-jesus-christ-jesus-christ-christian-god-religious-thumbnail.jpg'),
(32, 1723866404, '<p style=\"text-align: center; \"><i><b>The End&nbsp; </b></i><br></p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `gender`, `img`, `status`, `date`) VALUES
(3, 1089976562, 'maddie', 'queen', 'maddie@gmail.com', 'password', 'male', '17223184702jz0qrjkzot9zxs90tykbxoi9m0i31cnoi2cz3glyxm1xonx.jpg', 'Online', '2024-07-30'),
(4, 903548553, 'Ellis', 'Tremblay-Schimmel', 'your.email+fakedata96184@gmail.com', 'ybvCZA5vn2wiKOB', 'undefined', '17223185105lq36dtr2694o4u929iti07eink3mqcsf42rzh03awunh.jpg', 'Offline', '2024-07-30'),
(5, 1334921327, 'stephen', 'khalaf', 'stephenkhalaf@gmail.com', 'password', 'male', '1723091206Samson-Adeosun.png', 'Online', '2024-07-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
