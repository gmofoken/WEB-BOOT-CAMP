CREATE TABLE `admin_user` (
	  `LOGIN` varchar(20) NOT NULL,
	  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `user` (
	  `LOGIN` varchar(100) NOT NULL,
	  `PASSWORD` varchar(30) NOT NULL,
	  `EMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `product` (
	  `NO` int(100) NOT NULL,
	  `PRICE` int(100) NOT NULL,
	  `QTY` int(100) NOT NULL,
	  `DESC` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `sales` (
	  `NO` int(100) NOT NULL,
	  `PRICE` int(100) NOT NULL,
	  `QTY` int(100) NOT NULL,
	  `TOTAL`int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admin_user` (`LOGIN`, `PASSWORD`) VALUES ('cmayo', 'cmayo'), ('', '');
INSERT INTO `admin_user` (`LOGIN`, `PASSWORD`) VALUES ('gmofoken', 'gmofoken'), ('', '');