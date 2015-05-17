

CREATE TABLE'user'(
'id' int(11) NOT NULL AUTO_INCREMENT,
'fullname' varchar(255) NOT NULL,
'email' varchar(255) NOT NULL,
'password' varchar(255) NOT NULL,
'experience' varchar(255) NOT NULL,
`ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY ('id')
Engine=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4_general_ci AUTO_INCREMENT=3;