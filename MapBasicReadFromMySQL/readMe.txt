You will need XAMPP if you are using PHP with HTML.

XAMPP is an apache http server with PHP and MYSQL.

You can grab “XAMPP” from http://www.apachefriends.org/en/xampp.html


How to host your website or webpages.

1. Install XAMPP.

2. Start XAMPP and start the apache server and the MySQL server. For PHP you will need the apache server running. And for using MySQL database, you will need the MySQL server running.

3. Open your browser, and go to the address: “http://localhost/phpmyadmin”. This is your MySQL main page. You can handle your database and tables using this address. Also you can export or import databases through this address/page. All your databases will be stored locally in your XAMPP installation. If you are migrating your database to another machine, make sure you “EXPORT” your database as sql, or csv file.

4. Also, make sure in USERS tab:
you use the username and password that are set in USERS page. If you wish to use your own username and password, you will need to create a new entry.
But I would recommend that you use the following username and password should be blank, as that will be the one I will be using on the system in the lab.
Username: root
Password: 

User the username and password in you PHP code to establish connection.

5. Copy the “MapBasicReadFromMySQL” folder into the “htdocs” folder in your xampp installation folder. (Your website name will be the name of the folder).

6. To go to the website, in your browser type:
http://localhost/<your-website-name>/<page-name>

So if you want to go to the “MapBasicReadFromFile” website, type:
http://localhost/MapBasicReadFromMySQL/index.php

index.php is the name of the page that you want to access. index.php file is in the “MapBasicReadFromMySQL”.




w3schools has nice tutorials on PHP, HTML5, SQL and javascript.
http://www.w3schools.com/



