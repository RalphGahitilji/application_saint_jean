CREATE TABLE `user` (
  `user_id` int(1) NOT NULL PRIMARY,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user`(`user_id`, `username`, `email`, `password`) VALUES 
('1','eudes','username','jkjkll');

CREATE TABLE `admin` (
  `admin_id` int(1) NOT NULL PRIMARY,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `moyenne` (
  `moy_id` int(1) NOT NULL PRIMARY,
 `trimestre` varchar(3) NOT NULL,
  `moyenne` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `eleve` (
  `eleve_id` int(11) NOT NULL PRIMARY,
  `nom` varchar(30) NOT NULL,
  `prenom(s)` varchar(50) NOT NULL,
  `classe` varchar(3) NOT NULL,
  `parent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `trimestre` (
  `trim_id` int(1) NOT NULL PRIMARY,
  `eleve` varchar(3) NOT NULL,
  `moyenne` varchar(3) NOT NULL, 
  `trimestre` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `parents` (
  `parent_id` int(11) NOT NULL PRIMARY,
  `nom` varchar(30) NOT NULL,
  `prenom(s)` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;