SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `Person` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Person` (`id`, `name`, `age`) VALUES
(1, 'Wanda', 32),
(2, 'IronMan', 35),
(3, 'Capitain America', 80),
(4, 'AntMan', 30),
(5, 'Hulk', 38),
(6, 'Black Widow', 27),
(7, 'Dr. Strange', 36),
(8, 'SpiderMan', 17),
(9, 'Vision', 0),
(10, 'Black Panther', 29),
(11, 'Groot', 15),
(12, 'Star Lord', 32),
(13, 'Drax', 35);