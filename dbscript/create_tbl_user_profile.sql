USE teamsite;

CREATE TABLE user_profile
(
   id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   user_account_id int NOT NULL,
   firstname varchar(32) NOT NULL,
   lastname varchar(32) NOT NULL,
   station_id varchar(8) NOT NULL,
   work_phone varchar(24) NULL,
   mobile_phone varchar(24) NULL,
   email_address varchar(32) NULL,
   user_role varchar(32) NOT NULL,
   primary_computer varchar(20) NULL,
   favorite_color varchar(20) NULL,
   INDEX
   (
   	user_account_id,
   	lastname
   )
);