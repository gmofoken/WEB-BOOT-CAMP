CREATE TABLE db_gmofoken.ft_table
(
id int PRIMARY KEY AUTO_INCREMENT,
login VARCHAR(20) DEFAULT 'toto' NOT NULL,
`group` ENUM ('staff', 'student', 'other') NOT NULL,
creation_date DATE NOT NULL
);