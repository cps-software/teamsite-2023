# Teamsite
Teamsite web application via LAMP stack

Teamsite is a collaboration site that helps software development teams build great products. It is both a project management and an engineering methodology tool. It provides flexibility while also being somewhat opinionated in the overall execution process.

This technology stack may be used as a proof of concept, or may evolve into the final product. That's to be determined. A more robust platform to explore later is Java + Spring + React. For now, Java + Selenium will augment teamsite as an an automated testing service.

## Getting Started
Teamsite is a web application, primarily written in HTML5, CSS3, and JavaScript for the frontend. The backend component is written in PHP. The current version uses a MySQL database.

The core Teamsite capabilities rely on Apache HTTPD, PHP, and MySQL. These servers must be running as applications or services. This section provides installation, setup, and configuration information for running Teamsite on a local MacOS based machine.

### Apache HTTPD Web Server Setup
There are a number of ways to install and configure Apache HTTPd. For this new development effort, I've opted to install XAMPP (Linux + Apache + MariaDB + PHP + Perl), which can be found at [apachefriends.org](https://www.apachefriends.org/). This installation includes an administrator tool that allows you to configure, start, and stop the Apache HTTPd, PHP, and MariaDB services. You can also manually run these tasks by invoking the commands from the XAMPP bin directory, located at: `/Applications/XAMPP/bin`.

There will likely be required configuration tweaks to ensure that Apache + PHP + MariaDB are working as expected. I will document these as they are discovered.

#### Apache HTTPD Administration
**Start Apache**
```zsh
sudo /Applications/XAMPP/bin/apachectl start
```

**Stop Apache**
```zsh
sudo /Applications/XAMPP/bin/apachectl stop
```

**Graceful Stop Apache**
```zsh
sudo /Applications/XAMPP/bin/apachectl graceful-stop
```

**Restart Apache**
```zsh
sudo /Applications/XAMPP/bin/apachectl restart
```

**Graceful Restart Apache**
```zsh
sudo /Applications/XAMPP/bin/apachectl graceful
```  

The use of ‘graceful’ in stopping and restarting allows a less abrupt halt to the activity, allowing any existing web serving function to complete before the process is terminated.
