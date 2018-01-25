-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 11:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dvla`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
('qSpecialE9032', 'admin', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('59ecacac10644', '59ecacac2547b'),
('59ecacac6b0f6', '59ecacac7e0ab'),
('59ecacacbb41f', '59ecacaccf533'),
('59ecacad64bd1', '59ecacad6d6c0'),
('59ecacadbb67b', '59ecacadd71b7'),
('59ecacae23f90', '59ecacae33da0'),
('59ecacae952cc', '59ecacaead6db'),
('59ecacaf0ab07', '59ecacaf13631'),
('59ecacaf43922', '59ecacaf4c465'),
('59ecacaf87529', '59ecacaf92b65'),
('59ecb1960b9e7', '59ecb1961bc65'),
('59ecb19657e63', '59ecb196609fe'),
('59ecb19698ec0', '59ecb196a45c0'),
('59ecb196d4908', '59ecb196dd3e7'),
('59ecb19734669', '59ecb197473bc'),
('59ecb197bc73a', '59ecb197e46b8'),
('59ecb1983c305', '59ecb19854198'),
('59ecb198a04d8', '59ecb198b57c1'),
('59ecb19910732', '59ecb199285b1'),
('59ecb19967d4e', '59ecb199799f5'),
('59ecbc00df896', '59ecbc0107b86'),
('59ecbc0163cb3', '59ecbc0174c19'),
('59ecbc01b87b0', '59ecbc01c2a9a'),
('59ecbc01f157e', '59ecbc0207716'),
('59ecbc0c74d5a', '59ecbc0c83d07'),
('59ecbc0ce1fa1', '59ecbc0cead40'),
('59ecbc0d26b64', '59ecbc0d42840'),
('59ecbc0d80d1e', '59ecbc0d8ad17'),
('59ecbc127cc72', '59ecbc128b59e'),
('59ecbc12cd948', '59ecbc12d7379'),
('59ecbc1347d65', '59ecbc135d5c4'),
('59ecbc13b4e6b', '59ecbc13bee8d'),
('59ecbc72d0813', '59ecbc72ddd4f'),
('59ecbc731c49a', '59ecbc73254c7'),
('59ecbc735d4d2', '59ecbc7366563'),
('59ecbc739fb2c', '59ecbc73b28a1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('55846be776610', 'testing', 'sunnygkp10@gmail.com', 'testing', 'testing stART', '2015-06-19', '09:22:15pm'),
('5584ddd0da0ab', 'netcamp', 'sunnygkp10@gmail.com', 'feedback', ';mLBLB', '2015-06-20', '05:28:16am'),
('558510a8a1234', 'sunnygkp10', 'sunnygkp10@gmail.com', 'dl;dsnklfn', 'fmdsfld fdj', '2015-06-20', '09:05:12am'),
('5585509097ae2', 'sunny', 'sunnygkp10@gmail.com', 'kcsncsk', 'l.mdsavn', '2015-06-20', '01:37:52pm'),
('5586ee27af2c9', 'vikas', 'vikas@gmail.com', 'trial feedback', 'triaal feedbak', '2015-06-21', '07:02:31pm'),
('5589858b6c43b', 'nik', 'nik1@gmail.com', 'good', 'good site', '2015-06-23', '06:12:59pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('aa@yahoo.com', '59eca6f2dd666', 4, 10, 4, 6, '2017-10-22 17:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE IF NOT EXISTS `lessons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `image`) VALUES
(1, 'BODY AND MAIN PARTS', 'public/images/seat-belt.svg'),
(2, 'ELECTRONICS', 'public/images/engine1.svg'),
(3, 'INTERIOR', 'public/images/steering-wheel.svg'),
(4, 'POWERTRAIN AND CHASIS', 'public/images/piston.svg'),
(5, 'MISCELLANEOUS AUTO PARTS', 'public/images/oil.svg');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_details`
--

CREATE TABLE IF NOT EXISTS `lesson_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(50000) NOT NULL,
  `lesson_topics` int(11) NOT NULL,
  `lessons` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lesson_topics` (`lesson_topics`),
  KEY `lessons` (`lessons`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lesson_details`
--

INSERT INTO `lesson_details` (`id`, `content`, `lesson_topics`, `lessons`) VALUES
(1, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, 3),
(2, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lesson_topics`
--

CREATE TABLE IF NOT EXISTS `lesson_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topics` varchar(120) NOT NULL,
  `lessons` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lessons` (`lessons`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `lesson_topics`
--

INSERT INTO `lesson_topics` (`id`, `topics`, `lessons`) VALUES
(1, 'internal body parts', 1),
(2, 'External Body Parts', 1),
(3, 'alternator', 2),
(4, 'Charging Systems', 2),
(5, 'Electrical Supply Systems', 2),
(6, 'Gauges and meters', 2),
(7, 'Ignition electronic systems', 2),
(8, 'Lighting and signaling systems', 2),
(9, 'Sensors', 2),
(10, 'Starting Systems', 2),
(11, 'Switches', 2),
(12, 'Wiring harnesses', 2),
(13, 'Miscellaneous', 2);

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) DEFAULT NULL,
  `questions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answers` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `falseasw1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `falseasw2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `falseasw3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `falseasw4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagelink` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `imagelink` (`imagelink`),
  KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `category`, `questions`, `answers`, `falseasw1`, `falseasw2`, `falseasw3`, `falseasw4`, `imagelink`, `date`) VALUES
(33, 6, 'To avoid confusing other drivers you should:', 'Make sure your turn signal turns off after you finish a turn.', 'Increase \r\n\r\nthe following distance between your motorcycle and the vehicle in front of you if you are being tailgated.', 'Use your horn only \r\n\r\nin emergency situations.', 'None of the above', NULL, NULL, '2016-05-30 07:07:19'),
(34, 6, '_________ is a major factor in \r\n\r\ncollisions caused by motorcycles.', 'Following too closely', 'Lane sharing', 'Not being seen by other drivers', 'Using the left \r\n\r\nlane always', NULL, NULL, '2016-05-30 07:13:58'),
(35, 6, 'If your motorcycle starts to wander back and forth while riding over \r\n\r\nmetal bridge gratings you should:', 'Relax, stay on course and ride straight across.', 'Downshift immediately to a lower gear to \r\n\r\nimprove traction.', 'Proceed in a zig-zag pattern until you cross the bridge.', 'Jump off the Bike', NULL, NULL, '2016-05-30 07:22:03'),
(36, 6, 'If you must carry a load it should be:', 'Either over or in front of the rear axle.', 'Carried on the gas tank in \r\n\r\nfront of the driver.', 'Piled up against a sissy bar or frame on the back of the seat.', 'None of the above', NULL, NULL, '0000-00-00 00:00:00'),
(37, 6, 'When should you use your horn', 'when necessary to avoid a crash', 'To show other drivers that made a \r\n\r\nmistake', 'When another driver is driving too slowly', 'When you get upset by another driver.', NULL, NULL, '2016-05-30 07:41:26'),
(39, 3, 'Traffic light with a flashing red signal means:', 'Stop.', 'Slow down.', 'Yield.', 'Be prepared to change lane.', NULL, NULL, '2016-05-30 08:03:27'),
(40, 6, 'Consuming alcohol greatly affects:', 'All of the above.', 'Reaction', 'Vision', 'Coordination', NULL, NULL, '2016-05-30 08:05:32'),
(41, 6, 'To check your blind spot when changing lanes to the left you \r\n\r\nshould glance:', 'Over your left shoulder.', 'At your left view mirror', 'At your right view mirror.', 'Over your right shoulder', NULL, NULL, '2016-05-30 08:07:55'),
(42, 6, 'You must turn on your headlights:', 'When windshield wipers are in use because \r\n\r\nof rain, sleet, or snow.', 'When you come within 500 feet of an oncoming vehicle', 'A half-hour after sunrise.', 'All of the \r\n\r\nabove.', NULL, NULL, '2016-05-30 08:11:07'),
(43, 6, 'When you park on a hill headed uphill and there is no curb, you should \r\n\r\nturn your front wheels:', 'Toward the side of the road.', 'Parallel to and touching the curb.', 'Away from the side of the road.', 'Parallel to and at least 12 inches away from the side of the road.', NULL, NULL, '2016-05-30 08:15:27'),
(44, 6, 'Sharing a lane \r\n\r\nwith a motorcyclist:', 'Is against the law.', 'Is permitted in business and residential districts.', 'Is permitted where the posted \r\n\r\nspeed limit is 35 mph or lower.', 'Is permitted if you keep a distance of three feet or more.', NULL, NULL, '2016-05-30 08:18:20'),
(45, 6, 'A driver is turning at an intersection without traffic lights, and a pedestrian is crossing. Who must yield?', 'The driver.', 'Whoever entered the intersection last.', 'The pedestrian', 'Whoever is slower.', NULL, NULL, '2016-05-30 08:22:38'),
(46, 4, 'what colour is the car', 'red', 'reen', 'blue', 'yellow', 'black', 'VEHICLE_LAW_TEST/animated-car-image-\r\n\r\n0141.gif', '2016-09-07 11:56:13'),
(47, 6, 'Upshifting or downshifting in a curve:', 'Should only be done if it can be done \r\n\r\nsmoothly.', 'Is better than shifting before the curve.', 'Is the best way to control your speed.', 'Shift the gear upwards', NULL, NULL, '2016-10-27 05:26:04'),
(48, 6, 'To avoid confusing other drivers you should:', 'Make sure your turn signal turns off after \r\n\r\nyou finish a turn.', 'Use your horn only in emergency situations.', 'Increase the following distance between your motorcycle \r\n\r\nand the vehicle in front of you if you are being tailgated.', 'Horn repeatedly', NULL, NULL, '2016-10-27 05:35:15'),
(49, 6, '_________ is a major factor in collisions caused by motorcycles.', 'Following too closely', 'Lane sharing', 'Not being seen by \r\n\r\nother drivers', 'Over taking', NULL, NULL, '2016-10-27 05:38:21'),
(50, 6, 'Brightly colored, reflective helmets and clothing:', 'Can make motorcycle riders easier to see.', 'Do not increase a motorcycle rider''s safety.', 'Should only be worn while riding \r\n\r\nat night.', 'Should be worn in the sun', NULL, NULL, '2016-10-27 05:40:08'),
(51, 3, 'What does this sign mean', 'Always bring \r\n\r\nyour car to a complete stop', 'Slow down and yield', 'Slow down and proceed with caution', 'Pack your car', NULL, 'ROAD_SIGN_TEST/stop_sign.png', '2016-10-27 05:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('59ecacac10644', 'a prescription drug', '59ecacac2544f'),
('59ecacac10644', 'alcohol', '59ecacac25469'),
('59ecacac10644', 'an over the counter medicine', '59ecacac25472'),
('59ecacac10644', 'all of the above', '59ecacac2547b'),
('59ecacac6b0f6', 'To show other drivers that made a mistake', '59ecacac7e0a1'),
('59ecacac6b0f6', 'When necessary to avoid a crash', '59ecacac7e0ab'),
('59ecacac6b0f6', 'When another driver is driving too slowly', '59ecacac7e0b1'),
('59ecacac6b0f6', 'When you get upset by another driver.', '59ecacac7e0b6'),
('59ecacacbb41f', 'The car in the extreme left lane (marked D).', '59ecacaccf533'),
('59ecacacbb41f', 'No car is allowed to make a left turn.', '59ecacaccf53d'),
('59ecacacbb41f', 'Any of the cars in the three lower lanes (marked B, C, and D)', '59ecacaccf543'),
('59ecacacbb41f', 'Any of the cars in the two left lanes (marked C and D).', '59ecacaccf549'),
('59ecacad64bd1', '60 mph', '59ecacad6d6ad'),
('59ecacad64bd1', '50 mph.', '59ecacad6d6ba'),
('59ecacad64bd1', '35 mph.', '59ecacad6d6c0'),
('59ecacad64bd1', '70mph', '59ecacad6d6ca'),
('59ecacadbb67b', 'Coordination', '59ecacadd71a0'),
('59ecacadbb67b', 'Reaction.', '59ecacadd71ac'),
('59ecacadbb67b', 'Vision.', '59ecacadd71b1'),
('59ecacadbb67b', 'All of the above.', '59ecacadd71b7'),
('59ecacae23f90', 'Is against the law.', '59ecacae33da0'),
('59ecacae23f90', 'Is permitted in business and residential districts', '59ecacae33dab'),
('59ecacae23f90', ' Is permitted where the posted speed limit is 35 mph or lower. ', '59ecacae33db1'),
('59ecacae23f90', 'Is permitted if you keep a distance of three feet or more.', '59ecacae33db7'),
('59ecacae952cc', 'Open a window. ', '59ecacaead6c4'),
('59ecacae952cc', 'Play loud music. ', '59ecacaead6cf'),
('59ecacae952cc', 'Call someone on your cell phone.   ', '59ecacaead6d5'),
('59ecacae952cc', 'Pull over and take a nap.', '59ecacaead6db'),
('59ecacaf0ab07', 'Follow closely. ', '59ecacaf13626'),
('59ecacaf0ab07', 'Dim your headlights. ', '59ecacaf13631'),
('59ecacaf0ab07', 'Flash your headlights. ', '59ecacaf13637'),
('59ecacaf0ab07', 'Use high-beam headlights.', '59ecacaf1363c'),
('59ecacaf43922', 'They have shorter stopping distance than most cars. ', '59ecacaf4c459'),
('59ecacaf43922', 'They need more room to maneuver. ', '59ecacaf4c465'),
('59ecacaf43922', 'They have smaller blind spots than most cars.', '59ecacaf4c46a'),
('59ecacaf43922', 'all of the above', '59ecacaf4c470'),
('59ecacaf87529', 'Within 5-10 seconds. ', '59ecacaf92b56'),
('59ecacaf87529', 'Within the distance you can see ahead.', '59ecacaf92b65'),
('59ecacaf87529', 'Within the distance lighted by your parking lights. ', '59ecacaf92b70'),
('59ecacaf87529', 'Within 20-30 seconds', '59ecacaf92b79'),
('59ecb1960b9e7', 'Stop, unless you are too close to the intersection to stop safely.', '59ecb1961bc65'),
('59ecb1960b9e7', 'Keep speed and continue through the intersection.', '59ecb1961bc72'),
('59ecb1960b9e7', 'Always stop immediately.', '59ecb1961bc79'),
('59ecb1960b9e7', 'Speed up and enter the intersection before the red light comes on.', '59ecb1961bc7e'),
('59ecb19657e63', 'More than 500 feet.', '59ecb196609fe'),
('59ecb19657e63', 'At least 50 feet.', '59ecb19660a08'),
('59ecb19657e63', '100 feet or more.', '59ecb19660a0f'),
('59ecb19657e63', ' 250 feet.', '59ecb19660a14'),
('59ecb19698ec0', 'Checking your rear view mirrors.', '59ecb196a45b0'),
('59ecb19698ec0', 'Using a three-car-length rule.', '59ecb196a45ba'),
('59ecb19698ec0', 'Using a two-second rule.', '59ecb196a45c0'),
('59ecb19698ec0', 'Flashing your headlights.', '59ecb196a45c6'),
('59ecb196d4908', 'Parallel to and by the side of the road.', '59ecb196dd3dc'),
('59ecb196d4908', 'Toward the side of the road.', '59ecb196dd3e7'),
('59ecb196d4908', 'Away from the side of the road.', '59ecb196dd3ec'),
('59ecb196d4908', 'Parallel to and at least 12 inches away from the side of the road.', '59ecb196dd3f2'),
('59ecb19734669', 'When your air conditioner is broken.', '59ecb197473ab'),
('59ecb19734669', 'When your brakes stop working.', '59ecb197473b6'),
('59ecb19734669', 'When your tires lose traction on wet pavement.', '59ecb197473bc'),
('59ecb19734669', 'When your car overheats.', '59ecb197473c1'),
('59ecb197bc73a', 'You are allowed to proceed, if you are not stopped by a red light or a stop sign.', '59ecb197e4687'),
('59ecb197bc73a', 'You must stop before entering the intersection.', '59ecb197e469e'),
('59ecb197bc73a', 'You must proceed slowly.', '59ecb197e46ab'),
('59ecb197bc73a', 'You must stop before entering the intersection.', '59ecb197e46b8'),
('59ecb1983c305', 'Focus on the reason for your anger or excitement.', '59ecb19854188'),
('59ecb1983c305', 'Drive 5-10 mph slower than the speed limit.', '59ecb19854192'),
('59ecb1983c305', 'Take time to cool off before getting behind the wheel.', '59ecb19854198'),
('59ecb1983c305', 'Drive faster ', '59ecb198541a1'),
('59ecb198a04d8', 'Fumes from the exhaust system.', '59ecb198b57c1'),
('59ecb198a04d8', 'Brake failure.', '59ecb198b57d1'),
('59ecb198a04d8', 'Heat from the engine.', '59ecb198b57db'),
('59ecb198a04d8', 'Battery exhaustion.', '59ecb198b57e5'),
('59ecb19910732', '20 feet from a fire hydrant.', '59ecb199285b1'),
('59ecb19910732', 'On a crosswalk.', '59ecb199285d6'),
('59ecb19910732', 'On a sidewalk that is not used.', '59ecb199285f0'),
('59ecb19910732', 'None of the above', '59ecb19928607'),
('59ecb19967d4e', 'There is less traffic at night.', '59ecb199799cc'),
('59ecb19967d4e', 'Drivers tend to be more alert at night.', '59ecb199799e7'),
('59ecb19967d4e', 'It is harder to see at night.', '59ecb199799f5'),
('59ecb19967d4e', 'All of the above.', '59ecb19979a01'),
('59ecbc00df896', 'Stay where you are until the light turns green.', '59ecbc0107b7a'),
('59ecbc00df896', 'Complete the turn when safe.', '59ecbc0107b86'),
('59ecbc00df896', 'Back up.', '59ecbc0107b8d'),
('59ecbc00df896', 'Change direction and go straight ahead.', '59ecbc0107b93'),
('59ecbc0163cb3', 'Stop at railroad crossings.', '59ecbc0174bfc'),
('59ecbc0163cb3', 'Yield at intersections.', '59ecbc0174c0a'),
('59ecbc0163cb3', 'Drive at night.', '59ecbc0174c11'),
('59ecbc0163cb3', 'Follow another vehicle.', '59ecbc0174c19'),
('59ecbc01b87b0', 'That he plans to turn right.', '59ecbc01c2a9a'),
('59ecbc01b87b0', 'That he plans to turn left.', '59ecbc01c2aa9'),
('59ecbc01b87b0', 'That there is an emergency.', '59ecbc01c2ab1'),
('59ecbc01b87b0', 'That he is preparing to slow down or stop', '59ecbc01c2ab8'),
('59ecbc01f157e', 'Stop and take regular breaks, even if you are not tired.', '59ecbc0207716'),
('59ecbc01f157e', 'Keep your eyes focused straight ahead at all times.', '59ecbc0207724'),
('59ecbc01f157e', 'Turn off radio and avoid other irregular sounds.', '59ecbc020772c'),
('59ecbc01f157e', 'Always keep your car windows closed', '59ecbc0207733'),
('59ecbc02361c7', ' Adjust your instrument lights so they are brighter.', '59ecbc024056e'),
('59ecbc0c74d5a', 'Stay where you are until the light turns green.', '59ecbc0c83cf6'),
('59ecbc0c74d5a', 'Complete the turn when safe.', '59ecbc0c83d07'),
('59ecbc0c74d5a', 'Back up.', '59ecbc0c83d12'),
('59ecbc0c74d5a', 'Change direction and go straight ahead.', '59ecbc0c83d1b'),
('59ecbc0ce1fa1', 'Stop at railroad crossings.', '59ecbc0ceacef'),
('59ecbc0ce1fa1', 'Yield at intersections.', '59ecbc0cead10'),
('59ecbc0ce1fa1', 'Drive at night.', '59ecbc0cead27'),
('59ecbc0ce1fa1', 'Follow another vehicle.', '59ecbc0cead40'),
('59ecbc0d26b64', 'That he plans to turn right.', '59ecbc0d42840'),
('59ecbc0d26b64', 'That he plans to turn left.', '59ecbc0d42857'),
('59ecbc0d26b64', 'That there is an emergency.', '59ecbc0d42864'),
('59ecbc0d26b64', 'That he is preparing to slow down or stop', '59ecbc0d42870'),
('59ecbc0d80d1e', 'Stop and take regular breaks, even if you are not tired.', '59ecbc0d8ad17'),
('59ecbc0d80d1e', 'Keep your eyes focused straight ahead at all times.', '59ecbc0d8ad3c'),
('59ecbc0d80d1e', 'Turn off radio and avoid other irregular sounds.', '59ecbc0d8ad55'),
('59ecbc0d80d1e', 'Always keep your car windows closed', '59ecbc0d8ad6b'),
('59ecbc0dd2133', ' Adjust your instrument lights so they are brighter.', '59ecbc0ddc170'),
('59ecbc127cc72', 'Stay where you are until the light turns green.', '59ecbc128b592'),
('59ecbc127cc72', 'Complete the turn when safe.', '59ecbc128b59e'),
('59ecbc127cc72', 'Back up.', '59ecbc128b5a4'),
('59ecbc127cc72', 'Change direction and go straight ahead.', '59ecbc128b5aa'),
('59ecbc12cd948', 'Stop at railroad crossings.', '59ecbc12d7363'),
('59ecbc12cd948', 'Yield at intersections.', '59ecbc12d736d'),
('59ecbc12cd948', 'Drive at night.', '59ecbc12d7373'),
('59ecbc12cd948', 'Follow another vehicle.', '59ecbc12d7379'),
('59ecbc1347d65', 'That he plans to turn right.', '59ecbc135d5c4'),
('59ecbc1347d65', 'That he plans to turn left.', '59ecbc135d5de'),
('59ecbc1347d65', 'That there is an emergency.', '59ecbc135d5eb'),
('59ecbc1347d65', 'That he is preparing to slow down or stop', '59ecbc135d5fe'),
('59ecbc13b4e6b', 'Stop and take regular breaks, even if you are not tired.', '59ecbc13bee8d'),
('59ecbc13b4e6b', 'Keep your eyes focused straight ahead at all times.', '59ecbc13beea3'),
('59ecbc13b4e6b', 'Turn off radio and avoid other irregular sounds.', '59ecbc13beeb0'),
('59ecbc13b4e6b', 'Always keep your car windows closed', '59ecbc13beebc'),
('59ecbc14121be', ' Adjust your instrument lights so they are brighter.', '59ecbc141ba0d'),
('59ecbc72d0813', 'Stay where you are until the light turns green.', '59ecbc72ddd42'),
('59ecbc72d0813', 'Complete the turn when safe.', '59ecbc72ddd4f'),
('59ecbc72d0813', 'Back up.', '59ecbc72ddd55'),
('59ecbc72d0813', 'Change direction and go straight ahead.', '59ecbc72ddd5b'),
('59ecbc731c49a', 'Stop at railroad crossings.', '59ecbc73254af'),
('59ecbc731c49a', 'Yield at intersections.', '59ecbc73254ba'),
('59ecbc731c49a', 'Drive at night.', '59ecbc73254c1'),
('59ecbc731c49a', 'Follow another vehicle.', '59ecbc73254c7'),
('59ecbc735d4d2', 'That he plans to turn right.', '59ecbc7366563'),
('59ecbc735d4d2', 'That he plans to turn left.', '59ecbc736656e'),
('59ecbc735d4d2', 'That there is an emergency.', '59ecbc7366574'),
('59ecbc735d4d2', 'That he is preparing to slow down or stop', '59ecbc736657a'),
('59ecbc739fb2c', 'Stop and take regular breaks, even if you are not tired.', '59ecbc73b28a1'),
('59ecbc739fb2c', 'Keep your eyes focused straight ahead at all times.', '59ecbc73b28ab'),
('59ecbc739fb2c', 'Turn off radio and avoid other irregular sounds.', '59ecbc73b28b1'),
('59ecbc739fb2c', 'Always keep your car windows closed', '59ecbc73b28b6'),
('59ecbc7426c3a', ' Adjust your instrument lights so they are brighter.', '59ecbc742fc58');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('59eca6f2dd666', '59ecacac10644', 'You may be arrested for driving under the influence of:', 4, 1),
('59eca6f2dd666', '59ecacac6b0f6', 'When should you use your horn?', 4, 2),
('59eca6f2dd666', '59ecacacbb41f', 'Which car or cars are best positioned for a left turn on this one-way street?', 4, 3),
('59eca6f2dd666', '59ecacad64bd1', 'When it is raining or the road is wet, most tires have good traction up to about:', 4, 4),
('59eca6f2dd666', '59ecacadbb67b', 'Consuming alcohol greatly affects:\r\n', 4, 5),
('59eca6f2dd666', '59ecacae23f90', 'Sharing a lane with a motorcyclist:', 4, 6),
('59eca6f2dd666', '59ecacae952cc', 'What is the best thing to do if you experience signs of sleepiness behind the wheel?', 4, 7),
('59eca6f2dd666', '59ecacaf0ab07', 'When following a large vehicle at night, you should always', 4, 8),
('59eca6f2dd666', '59ecacaf43922', 'What is true about large trucks?', 4, 9),
('59eca6f2dd666', '59ecacaf87529', 'When driving at night, be sure that you can stop:', 4, 10),
('59ecad0d2ac4b', '59ecb1960b9e7', 'When approaching an intersection where the traffic light changes from green to yellow, you should:\r\n\r\n\r\n\r\n', 4, 1),
('59ecad0d2ac4b', '59ecb19657e63', '\r\nWhat distance should you keep from an emergency vehicle on its way to an emergency?\r\n\r\n\r\n\r\n\r\n', 4, 2),
('59ecad0d2ac4b', '59ecb19698ec0', 'When driving at higher speeds, which method helps you determine a safe following distance between you and vehicle ahead?\r\n\r\n\r\n\r\n\r\n', 4, 3),
('59ecad0d2ac4b', '59ecb196d4908', 'When you park on a hill headed downhill and there is no curb, you should turn your front wheels:\r\n\r\n\r\n\r\n\r\n', 4, 4),
('59ecad0d2ac4b', '59ecb19734669', 'Hydroplaning occurs:\r\n\r\n\r\n\r\n\r\n', 4, 5),
('59ecad0d2ac4b', '59ecb197bc73a', 'If an intersection is blocked and you cannot drive through the intersection without having to stop in the intersection:\r\n\r\n\r\n\r\n', 4, 6),
('59ecad0d2ac4b', '59ecb1983c305', 'Emotions affect your driving. If you feel angry, excited or upset, you should:\r\n\r\n\r\n', 4, 7),
('59ecad0d2ac4b', '59ecb198a04d8', 'It can be dangerous to leave a motor running in a garage because of:\r\n\r\n', 4, 8),
('59ecad0d2ac4b', '59ecb19910732', 'You can park and leave your car:\r\n\r\n\r\n\r\n\r\n', 4, 9),
('59ecad0d2ac4b', '59ecb19967d4e', 'Night driving is more dangerous than daytime driving because:\r\n\r\n\r\n\r\n\r\n', 4, 10),
('59ecb31941483', '59ecbc00df896', 'If you have entered an intersection to make a turn, and the signal turns from yellow to red, you should:\r\n\r\n\r\n', 4, 1),
('59ecb31941483', '59ecbc0163cb3', 'The two-second rule refers to how you should:\r\n\r\n\r\n\r\n\r\n', 4, 2),
('59ecb31941483', '59ecbc01b87b0', 'The driver in front of you signals (left arm extended, with elbow bent upward, at about a 90-degree angle):\r\n\r\n\r\n\r\n', 4, 3),
('59ecb31941483', '59ecbc01f157e', 'To avoid getting tired on a long trip, you should:\r\n', 4, 4),
('59ecb31941483', '59ecbc02361c7', 'When driving in fog, you should:\r\n\r\n', 4, 5),
('59ecb31941483', '59ecbc0c74d5a', 'If you have entered an intersection to make a turn, and the signal turns from yellow to red, you should:\r\n\r\n\r\n', 4, 1),
('59ecb31941483', '59ecbc0ce1fa1', 'The two-second rule refers to how you should:\r\n\r\n\r\n\r\n\r\n', 4, 2),
('59ecb31941483', '59ecbc0d26b64', 'The driver in front of you signals (left arm extended, with elbow bent upward, at about a 90-degree angle):\r\n\r\n\r\n\r\n', 4, 3),
('59ecb31941483', '59ecbc0d80d1e', 'To avoid getting tired on a long trip, you should:\r\n', 4, 4),
('59ecb31941483', '59ecbc0dd2133', 'When driving in fog, you should:\r\n\r\n', 4, 5),
('59ecb31941483', '59ecbc127cc72', 'If you have entered an intersection to make a turn, and the signal turns from yellow to red, you should:\r\n\r\n\r\n', 4, 1),
('59ecb31941483', '59ecbc12cd948', 'The two-second rule refers to how you should:\r\n\r\n\r\n\r\n\r\n', 4, 2),
('59ecb31941483', '59ecbc1347d65', 'The driver in front of you signals (left arm extended, with elbow bent upward, at about a 90-degree angle):\r\n\r\n\r\n\r\n', 4, 3),
('59ecb31941483', '59ecbc13b4e6b', 'To avoid getting tired on a long trip, you should:\r\n', 4, 4),
('59ecb31941483', '59ecbc14121be', 'When driving in fog, you should:\r\n\r\n', 4, 5),
('59ecb31941483', '59ecbc72d0813', 'If you have entered an intersection to make a turn, and the signal turns from yellow to red, you should:\r\n\r\n\r\n', 4, 1),
('59ecb31941483', '59ecbc731c49a', 'The two-second rule refers to how you should:\r\n\r\n\r\n\r\n\r\n', 4, 2),
('59ecb31941483', '59ecbc735d4d2', 'The driver in front of you signals (left arm extended, with elbow bent upward, at about a 90-degree angle):\r\n\r\n\r\n\r\n', 4, 3),
('59ecb31941483', '59ecbc739fb2c', 'To avoid getting tired on a long trip, you should:\r\n', 4, 4),
('59ecb31941483', '59ecbc7426c3a', 'When driving in fog, you should:\r\n\r\n', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('59eca6f2dd666', 'Test Level 1', 1, 0, 10, 10, 'Test level is a test for beginners ', '#Test Level 1', '2017-10-22 14:10:58'),
('59ecad0d2ac4b', 'Test Level 2', 1, 0, 10, 10, 'Test Level 2', '#Test Level 2', '2017-10-22 14:37:01'),
('59ecb31941483', 'Test Level 2 Plus ', 1, 1, 10, 10, 'Test Level 2 PLUS : one mark for one and minus one mark for wrong answer', '#Test Level 2 PLUS', '2017-10-22 15:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE IF NOT EXISTS `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('aa@yahoo.com', 10, '2017-10-22 17:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `reg_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `country` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `region` varchar(20) NOT NULL,
  `name_school` varchar(50) NOT NULL,
  `level` int(5) NOT NULL,
  `hostel` varchar(50) NOT NULL,
  `student_schoolid` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `picture` blob NOT NULL,
  `b_SelectBank` varchar(15) NOT NULL,
  `mm_SelectNetwork` varchar(15) NOT NULL,
  `mm_LastName` varchar(15) NOT NULL,
  `mm_FirstName` varchar(15) NOT NULL,
  `mm_MiddleName` varchar(15) NOT NULL,
  `mm_Number` int(13) NOT NULL,
  `mm_ConfNumber` int(13) NOT NULL,
  `mm_Amt` float(255,19) NOT NULL,
  `mm_Pin` int(8) NOT NULL,
  `mm_ConfPin` int(8) NOT NULL,
  `mm_RefNumber` int(10) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tertiary_schools`
--

CREATE TABLE IF NOT EXISTS `tertiary_schools` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `tertiary_schools`
--

INSERT INTO `tertiary_schools` (`ID`, `name`) VALUES
(1, 'University of Ghana'),
(2, 'Kwame Nkrumah University of Science and Technology'),
(3, 'University of Cape Coast'),
(4, 'University of Education, Winneba'),
(5, 'University for Development Studies'),
(6, 'University of Professional Studies'),
(7, 'University of Mines and Technology'),
(8, 'University of Health and Allied Sciences'),
(9, 'University Of Energy And Natural Resources'),
(10, 'Accra Technical University'),
(11, 'Cape Coast Technical University'),
(12, 'Kumasi Technical University'),
(13, 'Koforidua Technical University'),
(14, 'Tamale Technical University'),
(15, 'Ho Technical University'),
(16, 'Takoradi Technical University'),
(17, 'Sunyani Technical University'),
(18, 'Ghana Armed Forces Command and Staff College'),
(19, 'Ghana Institute of Journalism'),
(20, 'Ghana Institute of Languages'),
(21, 'Ghana Institute of Management and Public Administr'),
(22, 'Ghana Institute of Surveying and Mapping'),
(23, 'Institution of Local Government Studies'),
(24, 'University of Professional Studies, Accra'),
(25, 'Kofi Annan International Peacekeeping Training Cen'),
(26, 'National Film and Television Institute'),
(27, 'Regional Maritime University'),
(28, 'Valley View University'),
(29, 'Akrofi-Christaller Institute of Theology, Mission '),
(30, 'Accra Institute of Technology'),
(31, 'African University College of Communications'),
(32, 'Anglican University College of Technology'),
(33, 'Catholic University College of Ghana'),
(34, 'Christian Service University College'),
(35, 'Family Health Medical School'),
(36, 'Good News Theological Seminary'),
(37, 'Islamic University College'),
(38, 'Knutsford University College'),
(39, 'Lancaster University'),
(40, 'Methodist University College Ghana'),
(41, 'Pentecost University College'),
(42, 'Presbyterian University College'),
(43, 'Wisconsin International University College'),
(44, 'Central University College'),
(45, 'Catholic Institute of Business and Technology'),
(46, 'National Film and Television Institute'),
(47, 'Institute Of Accountancy Training'),
(48, 'Narh-Bita School Of Nursing'),
(49, 'Ghana Institute of Languages'),
(50, 'St. Victor’s Seminary'),
(51, 'St. Peters Seminary'),
(52, 'St. Paul Seminary'),
(53, 'Ghana Armed Forces Command and Staff College - Mas'),
(54, 'Regional Maritime University'),
(55, 'Blue Crest College'),
(56, 'Accra Institute of Technology'),
(57, 'Osei Tutu II Institute for Advanced ICT Studies'),
(58, 'KAAF University College'),
(59, 'All Nations University College'),
(60, 'Radford University College'),
(61, 'Garden City University College'),
(62, 'Regent University College of Science and Technolog'),
(63, 'Technical University College'),
(64, 'Spiritan University College'),
(65, 'Data Link University College'),
(66, 'Mountcrest University College'),
(67, 'University College of Agriculture and Environmenta'),
(68, 'Central University College'),
(69, 'Ashesi University'),
(70, 'Entrepreneurship Training Institute'),
(71, 'Deltas University College'),
(72, 'Evangelical Presbyterian University College'),
(73, 'Ghana Baptist University College['),
(74, 'Kings University College'),
(75, 'Maranatha University College'),
(76, 'Meridian (Insaaniyya) University College'),
(77, 'Pan African Christian University College'),
(78, 'Wisconsin International University College'),
(79, 'Advanced Business University College'),
(80, 'BlueCrest University College'),
(81, 'Jayee University College'),
(82, 'University College of Management Studies'),
(83, 'Webster University Ghana Campus'),
(84, 'Sikkim Manipal University Ghana LC'),
(85, 'Sikkim Manipal University, Kumasi'),
(86, 'Ghana Christian University College'),
(87, 'Zenith University College'),
(88, 'China Europe International Business School'),
(89, 'Ghana Christian University College'),
(90, 'The Bible University College of Ghana'),
(91, 'Catholic Institute of Business and Technology'),
(92, 'Ghana Telecom University College'),
(93, 'North American Center for Professional Studies'),
(94, 'Premier Institute of Law Enforcement Management an');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Aa', 'M', 'vvu', 'aa@yahoo.com', 1234567898, '035a564be61ef2b8a9c67ba8376d4be5');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lesson_details`
--
ALTER TABLE `lesson_details`
  ADD CONSTRAINT `lesson_details_ibfk_1` FOREIGN KEY (`lesson_topics`) REFERENCES `lesson_topics` (`id`),
  ADD CONSTRAINT `lesson_details_ibfk_2` FOREIGN KEY (`lessons`) REFERENCES `lessons` (`id`);

--
-- Constraints for table `lesson_topics`
--
ALTER TABLE `lesson_topics`
  ADD CONSTRAINT `lesson_topics_ibfk_1` FOREIGN KEY (`lessons`) REFERENCES `lessons` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
