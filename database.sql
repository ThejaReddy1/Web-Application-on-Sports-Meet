CREATE TABLE IF NOT EXISTS `students` (
 `id` varchar(10),
 `name` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `dept` varchar(10) NOT NULL,
 `DOB` varchar(10) NOT NULL,
 PRIMARY KEY (`id`)
 );
