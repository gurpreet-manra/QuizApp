-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 23, 2017 at 07:35 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `option_1` varchar(100) NOT NULL,
  `option_2` varchar(100) NOT NULL,
  `option_3` varchar(100) NOT NULL,
  `option_4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `test_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `answer`, `test_id`) VALUES
(1, 'Which of the following is a legal identifier in java ?', '2variable', '#myvar', '+@$var', '$_myvar', 'd', '2'),
(2, 'Which of these is NOT a valid keyword or reserved word in Java?	', 'default', 'null', 'String', 'volatile', 'c', '1'),
(3, 'Which is the legal range of values for a short ?', '-128 to 127', '-256 to 255', '-32768 to 32767', '0 to 65535', 'c', '1'),
(4, 'Which of the following Array declaration statement is illegal ?', 'int [ ] a [ ] = new int [4] [4];', 'int a[ ][ ] = new int [4] [4];', 'int a[ ] [ ] = new int [ ] [4]; ', 'int [ ] a [ ] = new int [4] [ ]; ', 'c', '1'),
(5, 'What will happen if you try to compile and run the following code ?\r\npublic class Test \r\n{ \r\n  public static void main(String argv[])\r\n   { \r\n     int[] arr = new int[]{1,2,3};\r\n     System.out.printl', '1', 'Error: arr is referenced before it is initialized', '2', 'Error: size of array must be defined', 'c', '1'),
(6, 'In the given Array declaration, which expression returns the output as 5 ?\r\nint [] arr = { 23, 5, 78, 34, 2};\r\n', 'arr.length()', 'arr[].length()', 'arr[].length (Answer)', 'arr.length ', 'd', '1'),
(7, 'public class Test{ public static void main(String[] args) {  int j = 5;  for (int i = 0; i< j; i++)  {    if ( i <= j-- )       System.out.print(  (i*j)  + ', '0 3 2', '1 2 3', '0 3 4 ', '1 4 2 ', 'c', '1'),
(8, 'Which declaration of the main() method is valid ?', 'public void main( String args [] ) ', 'public void static main( String args [] )', 'final public static void main(String[] arr)', 'public static void main( String[] arr)', 'd', '1'),
(9, 'Which one of the following is invalid declaration of a char ?', 'char c1 = 064770;', 'char c2 = \'face\'; ', 'char c3 = 0xbeef;', 'char c4 = \'\\uface\';', 'b ', '1'),
(10, 'Which operator will always evaluate all the Operands?', '||', '&&', '?:', '%', 'd', '1'),
(11, 'Which class cannot be a subclass in java?', 'Abstract class', 'Parent class', 'Final class ', 'None of the above', 'c', '1'),
(12, 'A Suspended thread can be revived by using?', 'start() method', 'Suspend() method', 'resume() method ', 'yield() method', 'c', '1'),
(13, 'Which methods are utilized to control the access to an object in multi-threaded programming?', 'Asynchronized methods', 'Synchronized methods ', 'Serialized methods', 'None of above', 'b', '1'),
(14, 'class average {\r\n        public static void main(String args[])\r\n        {\r\n            double num[] = {5.5, 10.1, 11, 12.8, 56.9, 2.5};\r\n            double result;\r\n            result = 0;\r\n            for (int i = 0; i < 6; ++i) \r\n                result = result + num[i];\r\n	    System.out.print(result/6);\r\n \r\n        } \r\n    }', '16.34', '16.5555', '16.46666666666667', '16.4666666666', 'c', '1'),
(15, 'What is the output of this program?\r\nclass conversion {\r\n        public static void main(String args[]) \r\n        {    \r\n             double a = 295.04;\r\n             int  b = 300;\r\n             byte c = (byte) a;\r\n             byte d = (byte) b;\r\n             System.out.println(c + \" \"  + d);\r\n        } \r\n    }', '38 43', '39 44 ', '295 300', '295.4 300.6', 'b', '1'),
(16, 'What is the output of this program?\r\nclass increment {\r\n        public static void main(String args[]) \r\n        {        \r\n             int g = 3;\r\n             System.out.print(++g * 8);\r\n        } \r\n }', '25', '24', '32', '33', 'c', '1'),
(17, 'Which of these operators is used to allocate memory to array variable in Java?', 'malloc', 'new malloc', 'new', 'calloc', 'c', '1'),
(18, 'What is the output of this program?\r\nclass array_output {\r\n        public static void main(String args[]) \r\n        {\r\n            int array_variable [] = new int[10];\r\n	    for (int i = 0; i < 10; ++i) {\r\n                array_variable[i] = i;\r\n                System.out.print(array_variable[i] + \" \");\r\n                i++;\r\n            }\r\n        } \r\n    }', '0 2 4 6 8 ', '1 3 5 7 9', '0 1 2 3 4 5 6 7 8 9', '1 2 3 4 5 6 7 8 9 10', 'a', '1'),
(19, 'The class java.sql.Timestamp is associated with?', 'java.util.Time', ' java.sql.Time', 'java.util.Date', 'None of the above', 'c', '1'),
(20, 'Which method executes only once?', 'start()', 'stop()', 'init()', 'destroy()', 'c', '1'),
(21, 'Which of these is not a bitwise operator?', '&', '&=', '=', '<=', 'd', '2'),
(22, 'Which operator is used to invert all the digits in binary representation of a number?', '~', '<<<', '>>>', '^', 'a', '2'),
(23, 'How can you stop the finally() block from executing, after try-catch block execution?', 'by calling return statement from try or catch block', 'by calling System.exit from try or catch block', 'by Both return and System.exit', 'None of the above', 'b', '2'),
(24, 'What will happen when you attempt to compile and run the following code?\r\nint Output = 10;\r\nboolean b1 = false;\r\nif((b1 == true) && ((Output += 10) == 20))\r\n{\r\n    System.out.println(\"We are equal \" + Output);\r\n}\r\nelse\r\n{\r\n    System.out.println(\"Not equal! \" + Output);\r\n}', 'Compilation error, attempting to perform binary comparison on logical data type.', 'Compilation and output of \"We are equal 10\".', 'Compilation and output of \"Not equal! 20\".', 'Compilation and output of \"Not equal! 10\".', 'd', '2'),
(25, 'What is the output of this program?\r\nclass bitwise_operator {\r\n        public static void main(String args[])\r\n        {\r\n            int var1 = 42;\r\n            int var2 = ~var1;\r\n            System.out.print(var1 + \" \" + var2);     	\r\n        } \r\n    }', '42 42', '43 43', '42 -43 ', '42 -42', 'c', '2'),
(26, 'What is the output of this program?\r\nclass leftshift_operator {\r\n        public static void main(String args[]) \r\n        {        \r\n             byte x = 64;\r\n             int i;\r\n             byte y; \r\n             i = x << 2;\r\n             y = (byte) (x << 2);\r\n             System.out.print(i + \" \" + y);\r\n        } \r\n    }', '64 0', '0 64', '0 256', '256 0', 'd', '2'),
(27, 'What is the output of this program?\r\nclass selection_statements {\r\n        public static void main(String args[])\r\n        {\r\n            int var1 = 5; \r\n            int var2 = 6;\r\n            if ((var2 = 1) == var1)\r\n                System.out.print(var2);\r\n            else \r\n                System.out.print(++var2);\r\n        } \r\n    }', '1', '2', '3', '4', 'b', '2'),
(28, 'How do you ensure that N thread can access N resources without deadlock?', 'By acquiring resources in a particular order and release resources in reverse order.', 'By acquiring resources in a particular order and release resources in same order', 'By acquiring resources in a particular order and not releasing resources.', 'Not Possible', 'b', '2'),
(29, 'What is the stored in the object obj in following lines of code?\r\nbox obj;', 'Memory address of allocated memory.', 'NULL', 'Any arbitrary pointer ', 'Garbage', 'b', '2'),
(30, 'What is the Output of this program?\r\nclass Output {\r\n        public static void main(String args[]) \r\n        {    \r\n             int x, y = 1;\r\n             x = 10;\r\n             if (x != 10 && x / 0 == 0)\r\n                 System.out.println(y);\r\n             else\r\n                 System.out.println(++y);\r\n        } \r\n    }', '1', '2', 'Runtime error owing to division by zero', 'Unpredictable behavior', 'b', '2'),
(31, 'Can you pass List<String> to a method which accepts List<Object>?', 'Yes', 'No, but it wont give any error', 'This will lead to Compilation Error', 'This will lead to Runtime Error', 'c', '2'),
(32, 'class main_class {\r\npublic static void main(String args[])\r\n{\r\n         int x = 9;\r\n            if (x == 9) { \r\n                int x = 8;\r\n                System.out.println(x);\r\n            }\r\n     ', '9', '8', 'Compilation Error', 'Runtime Error', 'c', '2'),
(33, 'When we create String with new() Operator, where is it stored?', 'In to the String Pool', 'It is created in Heap but not added to String Pool', 'Not stored anywhere', 'None of the above', 'b', '2'),
(34, 'Which two methods you need to implement to use an Object as key in HashMap?', 'push() and pop()', 'get() and set()', 'equals() and hashcode()', 'put() and get()', 'c', '2'),
(35, 'Which keyword is used by method to refer to the object that invoked it?', 'import', 'catch', 'abstract', 'this', 'd', '2'),
(36, 'Which of the following is a method having same name as that of its class?', 'finalize', 'delete', 'class', 'constructor', 'd', '2'),
(37, 'Which method is used to perform some action when the object is to be destroyed?', 'finalize()', 'delete()', 'main()', 'None of the above mentioned', 'a', '2'),
(38, 'Which of the following stements are incorrect?', 'Default constructor is called at the time of declaration of the object if a constructor has not been', 'Constructor can be parameterized. ', 'finalize() method is called when a object goes out of scope and is no longer needed. ', 'finalize() method must be declared protected.', 'c', '2'),
(39, 'Which of the following statements are incorrect?', 'Variables declared as final occupy memory.', 'final variable must be initialized at the time of declaration.', 'Arrays in java are implemented as an object.', 'All arrays contain an attribute-length which contains the number of elements stored in the array.', 'a', '2'),
(40, 'Which of these cannot be declared static?', 'class', 'object', 'variable', 'variable', 'b', '2'),
(41, 'Which data type can be used to hold a wide character in C++?', 'unsigned char;', 'int', 'wchar_t', 'none of the above.', 'c', '4'),
(42, 'The pointer which stores always the current active object address is __', 'auto_ptr', 'this', 'p', 'none of the above.', 'b', '4'),
(43, 'What is the full form of RTTI.', 'Runtime type identification', 'Runtime template identification', 'Robust Template Type Inheritance', 'None of the above.', 'a', '4'),
(44, 'What is a generic class.', 'Function template', 'Class template', 'Inherited class', 'None of the above.', 'b', '4'),
(45, 'Special symbol permitted with in the identifier name.', '$', '@', ' _', '- .', 'c', '4'),
(46, 'Which data type can be used to hold a wide character in C++?', 'Virtual class', 'Abstract class', 'Singleton class	', 'Friend class', 'c', '4'),
(47, 'Which of the following is not a type of constructor?', 'Copy constructor', 'Friend constructor', 'Default constructor', 'Parameterized constructor', 'b', '4'),
(48, 'Which of the following statements is correct?', 'Base class pointer cannot point to derived class.', 'Derived class pointer cannot point to base class.	', 'Pointer to derived class cannot be created.', 'Pointer to base class cannot be created.', 'b', '4'),
(49, 'Which of the following is not the member of class?', 'Static function', 'Friend function', 'Const function', 'Virtual function', 'b', '4'),
(50, 'Which of the following concepts means determining at runtime what method to invoke?', 'Data hiding', 'Dynamic Typing', 'Dynamic binding	', 'Dynamic loading', 'c', '4');

-- --------------------------------------------------------

--
-- Table structure for table `questions_2`
--

CREATE TABLE `questions_2` (
  `question_id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `option_1` varchar(150) NOT NULL,
  `option_2` varchar(100) NOT NULL,
  `option_3` varchar(100) NOT NULL,
  `option_4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `test_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_2`
--

INSERT INTO `questions_2` (`question_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `answer`, `test_id`) VALUES
(21, 'Which of these is not a bitwise operator?', '&', '&=', '=', '<=', '<=', 2),
(22, 'Which operator is used to invert all the digits in binary representation of a number?', '~', '<<<', '>>>', '^', '~', 2),
(23, 'How can you stop the finally() block from executing, after try-catch block execution?', 'by calling return statement from try or catch block', 'by calling System.exit from try or catch block', 'by Both return and System.exit', 'None of the above', 'by calling System.exit from try or catch block', 2),
(24, 'What will happen when you attempt to compile and run the following code?\r\nint Output = 10;\r\nboolean b1 = false;\r\nif((b1 == true) && ((Output += 10) == 20))\r\n{\r\n    System.out.println(\"We are equal \" +', 'Compilation error, attempting to perform binary comparison on logical data type.', 'Compilation and output of \"We are equal 10\".', 'Compilation and output of \"Not equal! 20\".', 'Compilation and output of \"Not equal! 10\".', 'Compilation and output of \"Not equal! 10\".', 2),
(25, 'What is the output of this program?\r\nclass bitwise_operator {\r\n        public static void main(String args[])\r\n        {\r\n            int var1 = 42;\r\n            int var2 = ~var1;\r\n            System.', '42 42', '43 43', '42 -43 ', '42 -42', '42 -43 ', 2),
(26, 'What is the output of this program?\r\nclass leftshift_operator {\r\n        public static void main(String args[]) \r\n        {        \r\n             byte x = 64;\r\n             int i;\r\n             byte y', '64 0', '0 64', '0 256', '256 0', '256 0', 2),
(27, 'What is the output of this program?\r\nclass selection_statements {\r\n        public static void main(String args[])\r\n        {\r\n            int var1 = 5; \r\n            int var2 = 6;\r\n            if ((va', '1', '2', '3', '4', '2', 2),
(28, 'How do you ensure that N thread can access N resources without deadlock?', 'By acquiring resources in a particular order and release resources in reverse order.', 'By acquiring resources in a particular order and release resources in same order', 'By acquiring resources in a particular order and not releasing resources.', 'Not Possible', 'By acquiring resources in a particular order and release resources in same order', 2),
(29, 'What is the stored in the object obj in following lines of code?\r\nbox obj;', 'Memory address of allocated memory.', 'NULL', 'Any arbitrary pointer ', 'Garbage', 'NULL', 2),
(30, 'What is the Output of this program?\r\nclass Output', '1', '2', 'Runtime error owing to division by zero', 'Unpredictable behavior', '2', 2),
(31, 'Can you pass List<String> to a method which accepts List<Object>?', 'Yes', 'No, but it wont give any error', 'This will lead to Compilation Error', 'This will lead to Runtime Error', 'This will lead to Compilation Error', 2),
(32, 'class main_class {\r\npublic static void main(String args[])\r\n{\r\n         int x = 9;\r\n            if (x == 9) { \r\n                int x = 8;\r\n                System.out.println(x);\r\n            }\r\n     ', '9', '8', 'Compilation Error', 'Runtime Error', 'Compilation Error', 2),
(33, 'When we create String with new() Operator, where is it stored?', 'In to the String Pool', 'It is created in Heap but not added to String Pool', 'Not stored anywhere', 'None of the above', 'It is created in Heap but not added to String Pool', 2),
(34, 'Which two methods you need to implement to use an Object as key in HashMap?', 'push() and pop()', 'get() and set()', 'equals() and hashcode()', 'put() and get()', 'equals() and hashcode()', 2),
(35, 'Which keyword is used by method to refer to the object that invoked it?', 'import', 'catch', 'abstract', 'this', 'this', 2),
(36, 'Which of the following is a method having same name as that of its class?', 'finalize', 'delete', 'class', 'constructor', 'constructor', 2),
(37, 'Which method is used to perform some action when the object is to be destroyed?', 'finalize()', 'delete()', 'main()', 'None of the above mentioned', 'finalize()', 2),
(38, 'Which of the following stements are incorrect?', 'Default constructor is called at the time of declaration of the object if a constructor has not been defined.', 'Constructor can be parameterized. ', 'finalize() method is called when a object goes out of scope and is no longer needed. ', 'finalize() method must be declared protected.', 'finalize() method is called when a object goes out of scope and is no longer needed. ', 2),
(39, 'Which of the following statements are incorrect?', 'Variables declared as final occupy memory.', 'final variable must be initialized at the time of declaration.', 'Arrays in java are implemented as an object.', 'All arrays contain an attribute-length which contains the number of elements stored in the array.', 'Variables declared as final occupy memory.', 2),
(40, 'Which of these cannot be declared static?', 'class', 'object', 'variable', 'variable', 'object', 2);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `session_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `user_id`, `score`, `status`, `date`) VALUES
(1, 1, 4, 'fail', '2017-10-02'),
(2, 1, 9, 'pass', '2017-10-11'),
(1, 2, 5, 'fail', '2017-10-01'),
(2, 2, 10, 'pass', '2017-10-05'),
(2, 88, 2, 'fail', '2017-10-10'),
(1, 88, 8, 'pass', '2017-10-18'),
(1, 88, 3, 'fail', '2017-10-20'),
(2, 88, 4, 'fail', '2017-10-20'),
(4, 88, 3, 'fail', '2017-10-21'),
(1, 88, 0, 'fail', '2017-10-21'),
(1, 88, 4, 'fail', '2017-10-21'),
(1, 88, 4, 'fail', '2017-10-21'),
(1, 88, 0, 'fail', '2017-10-21'),
(1, 88, 0, 'fail', '2017-10-21'),
(1, 88, 0, 'fail', '2017-10-21'),
(1, 88, 0, 'fail', '2017-10-21'),
(1, 88, 1, 'fail', '2017-10-21'),
(1, 88, 5, 'fail', '2017-10-21'),
(1, 88, 2, 'fail', '2017-10-21'),
(1, 88, 0, 'fail', '2017-10-21'),
(1, 88, 4, 'fail', '2017-10-21'),
(1, 88, 3, 'fail', '2017-10-21'),
(1, 88, 2, 'fail', '2017-10-21'),
(1, 1, 2, 'fail', '2017-10-21'),
(4, 1, 3, 'fail', '2017-10-21'),
(1, 92, 5, 'fail', '2017-10-21'),
(1, 92, 1, 'fail', '2017-10-21'),
(1, 92, 3, 'fail', '2017-10-21'),
(1, 92, 4, 'fail', '2017-10-21'),
(1, 92, 3, 'fail', '2017-10-21'),
(1, 92, 3, 'fail', '2017-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `testinfo`
--

CREATE TABLE `testinfo` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testinfo`
--

INSERT INTO `testinfo` (`test_id`, `test_name`, `status`) VALUES
(1, 'JAVA', 'Enable'),
(2, 'JAVA2', 'Enable'),
(3, 'C#', 'Disable'),
(4, 'C++', 'Enable'),
(5, 'HTML', 'Disable'),
(6, 'Swift', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `contact`, `address`, `password`) VALUES
(1, 'Guneet', 'Singh', 'guneet.jass@gmail.com', '6479790790', '27 fern meadow road', '123'),
(2, 'Rajan', 'Wadhwa', 'rjnwadhwa@gmail.com', '6478985405', '470 sentinel', 'asdfgh'),
(89, 'wefd', 'dvdv', 'fsdvf', '345', 'bb', 'dfb'),
(90, 'Gurpreet', 'dvdv', 'gupreet677@gmail.com', '86534533', 'ffh fsdcj sd sd . sdjfsdfj sdknsd', '1234'),
(92, 'Gurpreet', 'verma', 'gurpreet602@gmail.com', '6477839879', 'Scarborough', 'jaanam12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `questions_2`
--
ALTER TABLE `questions_2`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testinfo`
--
ALTER TABLE `testinfo`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `questions_2`
--
ALTER TABLE `questions_2`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testinfo`
--
ALTER TABLE `testinfo`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
