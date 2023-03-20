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
