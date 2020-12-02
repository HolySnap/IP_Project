-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 10:45 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quize`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `qno` int(11) NOT NULL,
  `question` text NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `ans4` text NOT NULL,
  `correct_answer` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `qno`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_answer`) VALUES
(34, 5, 'What is a correct way to add a comment in PHP?', '&lt;!--&hellip;--&gt;', '/*&hellip;*/', '*\\..\\*', '&lt;comment&gt;&hellip;&lt;/comment&gt;', 'b'),
(33, 3, 'The PHP syntax is most similar to:', 'Perl and C', 'VBscript', 'Javascript', 'none of these', 'a'),
(32, 2, 'How do you write "Hello World" in PHP?', 'echo "Hello World";', 'Document.Write("Hello World");', '"Hello World";', 'none of these', 'a'),
(31, 1, 'What does PHP stand for?', 'Personal Hypertext Processor\r\n', 'Private Home Page', 'Personal Home Page', 'PHP: Hypertext Preprocessor', 'd'),
(30, 4, 'How do you get information from a form that is submitted using the &quot;get&quot; method?', '$_GET[];', 'Request.Form;', 'Request.QueryString;', 'none of these', 'a'),
(35, 6, 'What does CSS stand for?', 'Colorful Style Sheets', 'Computer Style Sheets', 'Creative Style Sheets', 'Cascading Style Sheets', 'd'),
(36, 7, 'Which HTML attribute is used to define inline styles?', 'class', 'style', 'font', 'styles', 'b'),
(37, 8, 'Which is the correct CSS syntax?', '{body:color=black;}', 'body:color=black;','{body;color:black;}','body {color: black;} ', 'a'),
(38, 9, 'Which HTML attribute is used to define inline styles?', 'class', 'style', 'font', 'styles', 'b'),
(39, 10, 'How do you insert a comment in a CSS file?', '/* this is a comment */ ', '// this is a comment //', '// this is a comment', ' this is a comment', 'a'),
(40, 11, 'What does HTML stand for?', 'Home Tool Markup Language', 'Hyper Text Markup Language  ', 'Hyperlinks and Text Markup Language', 'Hyper Translate Machine Learning', 'b'),
(41, 12, 'In HTML, onblur and onfocus are:', 'Event attributes ', 'Style attributes', 'HTML elements', 'js elements', 'a'),
(42, 13, 'In HTML, which attribute is used to specify that an input field must be filled out?', 'placeholder', 'validate', 'required ', 'formvalidate', 'c'),
(43, 14, 'Which input type defines a slider control?', 'search', 'range', 'slider', 'controls', 'b'),
(44, 15, 'Graphics defined by SVG is in which format?', 'CSS', 'HTML', 'XML', 'GPH', 'c'),
(45,16,'How do you write "Hello World" in an alert box?','alert("Hello World");','alertBox("Hello World");','msg("Hello World");','msgBox("Hello World");','a'),
(46,17,'How do you create a function in JavaScript?','function = myFunction()','function myFunction()','function:myFunction()','function="function()"','b'),
(47,18,'How to write an IF statement in JavaScript?','if i = 5','if i = 5 then','if i == 5 then','if (i == 5)','d'),
(48,19,'How to write an IF statement for executing some code if "i" is NOT equal to 5?','if (i <> 5)','if (i != 5)','if i <> 5','if i =! 5 then','b'),
(49,20,'How does a FOR loop start?','for (i = 0; i <= 5)','for (i <= 5; i++)','for (i = 0; i <= 5; i++)','for i = 1 to 5','c');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `played_on` varchar(225) NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `played_on`, `score`) VALUES
(69, 'dishantv13@gmail.com', '2020-12-02 03:52:45', 0),
(68, '8713.dishant.it@gmail.com', '2020-12-31 03:45:43', 0),
(70, 'urvesh.trivedi@gmail.com', '2020-12-02 04:01:09', 1),
(71, '8709.urvesh.it@gmail.com', '2020-12-02 04:18:32', 3),
(72, 'aditya.subr@gmail.com', '2020-12-02 04:25:41', 1),
(73, '8706.aditya.it@gmail.com', '2020-12-02 04:37:27', 3),
(74, 'akashmehta2000@gmail.com', '2020-12-02 04:43:01', 0),
(75, 'iamawesome@gmail.com', '2020-12-02 05:05:35', 6),
(76, 'corona.virus@gmail.com', '2020-12-02 05:25:37', 5),
(77, 'ihate2020@gmail.com', '2020-12-02 06:58:18', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
