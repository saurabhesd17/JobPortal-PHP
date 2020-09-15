-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 06:32 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
`id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(1000) NOT NULL,
  `desp` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `cprofile` varchar(1000) NOT NULL,
  `jname` varchar(500) NOT NULL,
  `number` int(12) NOT NULL,
  `db_email` varchar(50) NOT NULL,
  `work` varchar(50) NOT NULL,
  `logo` varchar(1000) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `date`, `name`, `desp`, `details`, `cprofile`, `jname`, `number`, `db_email`, `work`, `logo`, `location`) VALUES
(1, '2018-03-03', 'AvenDATA GmbH', 'Excellent Opportunity to join our amazing, innovative international team! We are looking for talented and dynamic Software Developers.  If you are interested in hearing more about this great opportunity, please apply today and one of our experienced recruiters will contact you immediately. ', 'As a Software Developer, you will be using the following technologies: ASP.NET (Web API), Entity Framework 6, C# (.NET 4.5), MySQL. You will perform development and day-to-day maintenance on large applications. You have multiple opportunities to work on cross-system single-page applications. ', 'AvenDATA GmbH AvenDATA GmbH is a Berlin-centered, with headquarters in Budapest, Hungary, specialist and market leader in legally compliant archiving of legacy systems. We provided our complex archiving solutions to more than 2500 companies worldwide. As part of our international growth strategy, we are going to open a branch office in Mumbai and are looking for high-skilled IT and non-IT personnel.', 'Software Developer', 2147483647, 'akshaythool8@gmail.com', '1', 'demo.jpg', 'Mumbai'),
(2, '2018-02-28', 'Axis Bank Limited', '     - Responsible for acquisition of new to bank Corporate Customers     - Candidate would be responsible for managing and developing relationships with new and existing customers     - Candidate must be well versed with the market and competitor products & pricing.     - Candidate must have knowledge of handling Current Accounts, Trade Finance, Forex transactions, Bill Discounting and Letter of Credit.      Forward your cv to jitendra.barve@axisbank.com & puneet.sehgal@axisbank.com  Salary: Not Disclosed by Recruiter  Industry: Banking / Financial Services / Broking  Functional Area: Sales , Retail , Business Development  Role Category:Channel Sales  Role:Client Relationship Manager  Employment Type: Permanent Job, Full Time', '  Salary: Not Disclosed by Recruiter  Industry: Banking / Financial Services / Broking  Functional Area: Sales , Retail , Business Development  Role Category:Channel Sales  Role:Client Relationship Manager  Employment Type: Permanent Job, Full Time', '  Axis Bank Limited At Axis Bank, we go much beyond addressing the financial needs of our customers. We give them reasons to strengthen their trust in us, at every step. This belief has paid us rich dividends, bringing with it steady growth, rapid expansion and an opportunity for you to propel your career further.  Axis Bank is expanding and with expansion comes the opportunity to grow and chart your own career path. So, if you are a self-motivated banking professional, looking for opportunities to redefine your career, you might just be the person we require.', 'Branch:relationship Manager - Transaction Banking - Pune,kolhapur,goa', 313181531, 'axisbank@gmail.com', '4', 'axis.gif', ' Pune, Kolhapur, Panjim '),
(8, '2018-03-03', 'Saurabh', 'gand mai ungli krna', 'kuch nhi', 'kanda lasun', 'ungli karna', 2147483647, 'akshaythool8@gmail.com', 'Fresher', '72152.jpg', ''),
(9, '2018-03-04', 'Tech Mahindra Ltd.', 'Greetings from Tech Mahindra  We are hiring Java Technical Developers. Details are below  Primary Role includes:  - Work actively with team members to analyze and resolve the application issues - Identify defects/discrepancies to identify the root cause by debug or analyzing logs - Manage incidents and effectively communicate with users, application owner and senior stake holders across all areas - Improve application stability by observing patterns, recurring alerts or issues for permanent fix or automation - Identify alerts / processes that can be automated and then work with AppBank Engineering team automation - Challenge existing application setup, processing and suggest different ways to solve problem or improve stability - Build/improve run books for Generalists to minimize operational errors  Mandatory Qualifications:  - Overall Experience: 5+ years - Working knowledge C or Java, SQL, KSH or other scripting languages - Demonstrate strong problem solving & analytical skills - Str', '	Work actively with team members to analyze and resolve the application issues - Identify defects/discrepancies to identify the root cause by debug or analyzing logs - Manage incidents and effectively communicate with users, application owner and senior stake holders across all areas - Improve application stability by observing patterns, recurring alerts or issues for permanent fix or automation - Identify alerts / processes that can be automated and then work with AppBank Engineering team automation - Challenge existing application setup, processing and suggest different ways to solve problem or improve stability - Build/improve run books for Generalists to minimize operational errors ', ' Company Profile Tech Mahindra Ltd. Tech Mahindra is part of the US $15.4 billion Mahindra Group and is a leading global systems integrator and business transformation consulting organization, focused primarily on the telecommunications industry. Tech Mahindra helps companies innovate and transform by leveraging its unique insights, differentiated services and flexible partnering models. This has helped customers reduce operating costs, generate new revenue streams and gain competitive advantage. Tech Mahindra expanded its IT portfolio in 2009 by acquiring the leading global business and information technology services company, Mahindra Satyam (earlier known as Satyam Computer Services).  Tech MahindraÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s capabilities spread across a broad spectrum, including Business Support Systems (BSS), Operations Support Systems (OSS), Network Design & Engineering, Next Generation Networks, Mobility Solutions, Security consulting and Testing.  Tech MahindraÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s solut', 'Hiring for Software Developer- Java-bangalore', 2147483647, 'techmahindra@gmail.com', '2', 'demo2.jpg', 'Bengaluru');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`id` bigint(20) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `phone` int(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `db_email` varchar(200) NOT NULL,
  `exp` varchar(10) NOT NULL,
  `edu` varchar(20) NOT NULL,
  `db_pass` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `mname`, `lname`, `phone`, `gender`, `dob`, `db_email`, `exp`, `edu`, `db_pass`) VALUES
(1, 'Akshay', 'dilip', 'Thool', 2147483647, 'Male', '2018-03-21', 'akshaythool8@gmail.com', 'Work', 'Education', 'asd'),
(2, 'Saurabh', 'Ramesh', 'bhende', 2147483647, 'Male', '2018-03-01', 'akshaythool8@gmail.com', 'Work', 'Education', '123'),
(4, 'Rohit ', 'Ashok', 'Shrivas', 2147483647, 'Male', '2018-03-01', 'akshaythool8@gmail.com', 'Work', 'Education', 'asd'),
(5, 'Pratik', 'Ashok', 'magar', 2147483647, 'Male', '2018-03-20', 'akshaythool8@gmail.com', 'Work', 'Education', 'qwe'),
(6, 'Akshay', 'dilip', 'Kalaskar', 2147483647, 'Female', '2018-03-27', 'akshaythool8@gmail.com', 'Work', 'Education', 'asd'),
(7, 'Nilesh', 'dilip', 'Thool', 2147483647, 'Male', '2017-01-31', 'akshaythool8@gmail.com', 'Work', 'Education', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
