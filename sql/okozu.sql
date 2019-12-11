SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `userData` (
  `id` int(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `userData` (`id`, `name`, `password`) VALUES
(1, 'karsay', '$2y$10$38maXmAJmjrU/pvUgjSY7e0wh3zTH/aVaZ8LGoSW2r3PyCwsXoycy'),
(2, 'test', '$2y$10$66CZTKaAhvBi.C6AgQud1.4cYtsZGlxBGYvmjnUKqTs3aaXh.Pfsm');


ALTER TABLE `userData`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);


ALTER TABLE `userData`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
