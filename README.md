# php-rest-api
Create table query 

CREATE TABLE `employee` (
 `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
 `employee_name` varchar(255) NOT NULL COMMENT 'employee name',
 `employee_salary` double NOT NULL COMMENT 'employee salary',
 `employee_age` int(11) NOT NULL COMMENT 'employee age',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 COMMENT='datatable demo table'
