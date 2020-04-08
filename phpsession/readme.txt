This project presents the use of session's and 
the process of entering data into a database! 

First of all, create a mysql database and then from your apache server
run localhost/register.php file



//mysql, create table in database

CREATE TABLE `user_cred` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


