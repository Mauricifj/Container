SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `Person` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Person` (`id`, `name`, `age`) VALUES
(1, 'Loki', 32),
(2, 'Homem de Ferro', 35),
(3, 'Capitão América', 80),
(4, 'Homem Formiga', 30),
(5, 'Hulk', 41);