USE teamsite;

CREATE TABLE user_account
(
   id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   username varchar(20),
   password varchar(32),
   create_date date
);