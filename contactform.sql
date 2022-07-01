-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 02 Μαρ 2021 στις 22:30:03
-- Έκδοση διακομιστή: 10.4.17-MariaDB
-- Έκδοση PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `test`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `contactform`
--

CREATE TABLE `contactform` (
  `title` varchar(3) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `usersname` varchar(8) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `confirmedpass` varchar(8) NOT NULL,
  `terms` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `contactform`
--

INSERT INTO `contactform` (`title`, `firstname`, `lastname`, `useremail`, `phone`, `usersname`, `pass`, `confirmedpass`, `terms`) VALUES
('Mr', 'Antonios', 'Georgiopoulos', 'georgiopoulosantonis94@gmail.com', '6980502421', 'Paralias', 'DekaSgro', 'DekaSgro', 'on'),
('Mr', 'Efstratios', 'Profyris', 'efprofiris@gmail.com', '6980502421', 'EfProf', 'DekaSgro', 'DekaSgro', 'on');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
