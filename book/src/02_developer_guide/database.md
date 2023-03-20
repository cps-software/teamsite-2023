# Database Setup

### Local Installation
MariaDB is bundled with the XAMPP distribution. Once XAMPP is installed, Application Manager can be used to start, restart, stop, and configure the MariaDB database server. It can also be administered from the command line. I'll add info on this later.

The MariaDB executable is located at: `/Applications/XAMPP/bin`

To check the MariaDB version and start an interactive shell:
```bash
/Applications/XAMPP/bin/mariadb -v
```

To quit the inteactive shell:
```bash
\q
```

#### Start MariaDB to Administer
Launch MacOS app, manager-osx.
This starts the MariaDB Application Manager
Start the desired servers

#### Set up a MySQL User Account
```text
sudo ./mariadb -v
Password: (my mac user sudo password)

MariaDB> create user 'csylvester'@'localhost' identified by 'AllieD#1993';
MariaDB> grant all on *.* to 'csylvester'@'localhost';
```

#### Use New User Account
```text
./mariadb -h localhost -u csylvester -p
Password: AllieD#1993
```

#### Add Password to Root User
```text
./mariadb-admin -u root password {new-password}
```

After resetting the root password, you may need to cycle the MariaDB server.

#### Use New User Account
```text
./mariadb -h localhost -u root -p
Password: {root-password}
```

#### Useful MySQL Commands
MariaDB> status
MariaDB> show databases;
MariaDB> use database;
MariaDB> show tables;
MariaDB> select [rest of statement]
MariaDB> select database();
MariaDB> describe [tablename];
MariaDB> desc [tablename];

#### Create NCA Magellan Database
Login as the new user that was created, e.g., csylvester, and run the sql DDL scripts to create the MariaDB database, tables, and sample data.

Run SQL DDL Scripts

At the MariaDB command prompt, execute the following command to run a DDL script:
```text
source [/full/path/file.sql]
```

Run each of the following scripts in this order:
```text
source /Library/WebServer/Documents/nca-magellan/dbscript/create_db_magellan.sql
source /Library/WebServer/Documents/nca-magellan/dbscript/insert_demo_data.sql
source /Library/WebServer/Documents/nca-magellan/dbscript/create_tbl_funeral_home.sql
source /Library/WebServer/Documents/nca-magellan/dbscript/create_tbl_zipcode.sql
```
