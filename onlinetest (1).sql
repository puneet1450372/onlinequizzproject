-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2021 at 06:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinetest`
--

-- --------------------------------------------------------

--
-- Table structure for table `adddata`
--

CREATE TABLE `adddata` (
  `id` int(12) NOT NULL,
  `questons` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `c_ans` varchar(255) NOT NULL,
  `parent_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adddata`
--

INSERT INTO `adddata` (`id`, `questons`, `option1`, `option2`, `option3`, `option4`, `c_ans`, `parent_id`) VALUES
(13, 'What is the maximum possible length of an identifier?', '16', '32', '64', 'none', 'none', 3),
(14, 'Who developed the Python language?', 'Zim Den', 'Guido van Rossum', 'Niene Stom', 'Wick van Rossum', 'Guido van Rossum', 3),
(15, 'In which year was the Python language developed?', '1995', '1993', '1992', '1991', '1995', 3),
(16, ' In which language is Python written?', 'English', 'php', 'java', 'C', 'C', 3),
(17, 'Which one of the following is the correct extension of the Python file?', '.py', '.python', '.p', 'None of these', '.py', 3),
(18, 'In which year was the Python 3.0 version developed?', '2008', '2002', '2005', '2010', '2008', 3),
(19, ' Which of the following option leads to the portability and security of Java?', 'Bytecode is executed by JVM', 'The applet makes the Java code secure and portable', 'Use of exception handling', 'Dynamic binding between objects', 'Bytecode is executed by JVM', 2),
(20, 'Which of the following is not a Java features?', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', 'Object-oriented', 2),
(21, ' The u0021 article referred to as a', 'Unicode escape sequence', 'Octal escape', 'Hexadecimal', 'Line feed', 'Hexadecimal', 2),
(22, '_____ is used to find and fix bugs in the Java programs.', 'JVM', 'JRE', 'JDB', 'JDK', 'JDK', 2),
(23, 'What is the return type of the hashCode() method in the Object class?', 'Object', 'int', 'long', 'void', 'int', 2),
(24, 'Which of the following is a valid long literal?', 'ABH8097', 'L990023', '904423', '0xnf029L', '904423', 2),
(25, 'Which of the following is correct about PHP?', 'PHP can access cookies variables and set cookies.', 'Using PHP, you can restrict users to access some pages of your website.', ' It can encrypt data.', ' All of the above.', ' It can encrypt data.', 4),
(26, 'Which of the following type of variables have only two possible values either true or false?', 'Integers', 'Doubles', ' Booleans', 'Strings', ' Booleans', 4),
(27, 'What does PHP stand for?', 'Personal Home Page', 'Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Hypertext Preprocessor', 4),
(28, 'Who is the father of PHP?', 'Rasmus Lerdorf', 'Willam Makepiece', 'Drek Kolkevi', '. List Barely', 'Drek Kolkevi', 4),
(29, ' PHP files have a default file extension of.', 'html', 'xml', ' .php', ' .ph', ' .ph', 4),
(30, ' PHP files have a default file extension of.', 'html', 'xml', ' .php', ' .ph', ' .ph', 4),
(31, 'thtj', 'hjftg', 'fgj', 'fgjj', 'fgj', 'gfh', 3),
(32, 'thtj', 'hjftg', 'fgj', 'fgjj', 'fgj', 'gfh', 3),
(34, 'a = (1, 2) a[0] +=1', '2+2', '2', 'Type Error', 'Syntax Error', 'Syntax Error', 3),
(35, 'How can we generate random numbers in python using methods?', 'random.randint()', 'random.random()', ' All of the above', ' random.randint()', ' All of the above', 3),
(36, 'def total(initial = 5, *num, **key):    count = initial    for n in num:       count+=n    for k in key:       count+=key[k]    return count print(total(100,2,3, clouds=50, stars=100))', '260', '255', '234', '156', '255', 3),
(37, 'Which function can be used on the file to display a dialog for saving a file?', ' Filename = savefilename()', ' Filename = asksavefilename()', 'Fielname = asksaveasfilename()', 'No such option in python.', 'Fielname = asksaveasfilename()', 3),
(38, 'Which of the following is used to set cookies?', 'setcookie() function', '$_COOKIE variable', '$HTTP_COOKIE_VARS variable', '$HTTP_COOKIE', 'setcookie() function', 4),
(39, 'Which of the following contains a reference to every variable which is currently available within the global scope of the script?', '$GLOBALS', ' $_SERVER', '$_COOKIE', '$_SESSION', '$GLOBALS', 4),
(40, 'Which of the following method of Exception class returns source filename?', 'getFile()', 'getMessage()', 'getCode()', 'getLine()', 'getFile()', 4),
(41, 'Which of the following method acts as a constructor function in a PHP class?', '__construct', 'class_name()', 'constructor', ' None of the above.', '__construct', 4),
(62, 'What is the default value of short variable?', 'undefined', 'null', '0.0', '0', '0.0', 2),
(63, 'Which of the following is true about String?', 'String is mutable.', ' String is immutable.', 'String is a data type.', 'None of the above.', ' String is immutable.', 2),
(64, 'What is an Interface?', ' An interface is a collection of abstract methods.', ' Interface is an abstract class.', ' Interface is an concrete class.', 'None of the above.', ' Interface is an abstract class.', 2),
(65, ' Method Overloading is an example of', ' Static Binding.', 'Dynamic Binding.', 'Both of the above.', ' None of the above.', 'Dynamic Binding.', 2),
(66, 'Which of the following is a valid declaration of a char?', 'a', 'b', 'c', 'd', 'a', 13),
(74, 'Which of the following is true about variable naming conventions in JavaScript?', 'JavaScript variable names must begin with a letter or the underscore character.', 'JavaScript variable names are case sensitive.', 'None of the above.', 'Both of the above.', 'Both of the above.', 1),
(75, 'Which built-in method returns the character at the specified index?', 'characterAt()', 'getCharAt()', 'charAt()', 'None of the above.', 'charAt()', 1),
(76, 'Which built-in method reverses the order of the elements of an array?', 'changeOrder(order)', 'reverse()', 'sort(order)', 'None of the above.', 'reverse()', 1),
(77, 'Which of the following function of String object is used to match a regular expression against a string?', 'concat()', 'match()', 'search()', ' replace()', 'match()', 1),
(78, 'Which of the following function of String object returns the calling string value converted to lower case?', ' toLocaleLowerCase()', 'toLowerCase()', 'toString()', 'substring()', 'toLowerCase()', 1),
(79, 'Which of the following function of Array object adds one or more elements to the end of an array and returns the new length of the array?', 'pop()', 'push()', ' join()', 'map()', 'push()', 1),
(80, 'Which of the following function of Array object returns true if at least one element in this array satisfies the provided testing function?', 'reverse()', 'shift()', 'slice()', 'some()', 'some()', 1),
(81, 'JavaScript is a ___ -side programming language.', 'Client', 'Server', 'Both', 'None', 'Both', 1),
(82, 'How do you find the minimum of x and y using JavaScript?', 'min(x,y);', 'Math.min(x,y)', 'Math.min(xy)', 'min(xy);', 'Math.min(x,y)', 1),
(83, 'Which of the following statements will throw an error?', 'var fun = function bar( ){ }', 'var fun = function bar{ }', 'function fun( ){ }', 'function( ){ }', 'function( ){ }', 1),
(84, 'Which JavaScript label catches all the values, except for the ones specified?', 'catch', 'label', 'try', 'default', 'default', 1),
(85, 'Which are the correct \"if\" statements to execute certain code if “x” is equal to 2?', 'if(x 2)', 'if(x = 2)', 'if(x == 2)', 'if(x != 2 )', 'if(x == 2)', 1),
(86, 'what is js language or libraray', 'lan', 'lib', 'both', 'None of these', 'lan', 1),
(97, 'puneet', 'true', 'false', '', '', 'true', 1),
(98, 'html', 'dsbs', 'XML is used for exchanging data, HTML is not', 'Both of the above.', 'Enging Tag', 'choose your correct option', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat`) VALUES
(1, 'JAVASCRIPT'),
(2, 'java'),
(3, 'python'),
(4, 'Php'),
(9, 'html'),
(10, 'ruby rels'),
(11, 'DATA STRUCTURE'),
(12, 'database'),
(13, 'perl'),
(14, 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `mobile`, `password`, `is_admin`, `status`) VALUES
(26, 'admin', '9889846794', '$2y$10$0dVkxRJpscN0g.HKDfj/tOYLPTvxLrEtUpQoC.e5VV7Lme.wm1jxC', 1, 1),
(27, 'puneet yadav', '9889846790', '$2y$10$UkIyYeLaKCtd6z2cSgf1iux1oKiuCE5y0R/PgE0Im7ZHHAdelEh/6', 0, 1),
(28, 'kapil yadav', '9889846791', '$2y$10$uAG2cQLpEeWZaQT/HV42E.AIP.6.QFNWL78B/Kl6fLe0TxPsUEh/2', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adddata`
--
ALTER TABLE `adddata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adddata`
--
ALTER TABLE `adddata`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
