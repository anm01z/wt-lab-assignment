<h1>Date-of-Assignment: June 19</h1>
<h1>Date of Submission: June 20</h1>
<h2>Terminology:</h2>
<h3>PHP:</h3>
PHP is a general-purpose scripting language geared toward web development.It is known as a general-purpose scripting language that can be used to develop dynamic and >interactive websites. It was among the first server-side languages that could be embedded into HTML, making it easier to add functionality to web pages without needing >to call external files for data.

My steps to setup local host file:
Download and install the latest version of XAMPP.
Run Apache and MySQL.
Goto C:\xampp\htdocs and create a folder eg: "wt-lab-assignment"
Inside I created two folders >hello with hello.php file and >second with second.php file.I created the .php file from a text editor.
Goto C:\xampp\apache\conf\extra\httpd-vhosts.conf then write
<VirtualHost *:80>

DocumentRoot "C:/xampp/htdocs/wt-lab-assignment/Assignment/Assignment 7/hello"

ServerName hello.local

</VirtualHost

<VirtualHost *:80>

DocumentRoot "C:/xampp/htdocs/wt-lab-assignment/Assignment/Assignment 7/second"

ServerName second.local

</VirtualHost

Goto C:\Windows\System32\drivers\etc\hosts and write:
127.0.0.1 hello.local
127.0.0.1 second.local
This is to give ip address to our local server so that we can directly access the file through web brower by simply typing the domain name.
Restart Apache and MySQl.Assignment is concluded.

# XXAMPP
XAMPP is an abbreviation where X stands for Cross-Platform, A stands for Apache, M stands for MYSQL, and the Ps stand for PHP and Perl, respectively.It is a platform that furnishes a suitable environment to test and verify the working of projects based on Apache, Perl, MySQL database, and PHP through the system of the host itself. The detailed description of these components is given below.

# Appache
Apache is open source software and available for free. It is the most widely used webserver software .It is developed and maintained by Apache Software Foundation.It’s fast, reliable, and secure.

# Host File
The hosts file is usually the first process in the domain name resolution procedure.The hosts file is a local plain text file that maps servers or hostnames to IP addresses.

# Virtual Host
An Apache web server can host multiple websites on the SAME server. You do not need separate server machine and apache software for each website. This can achieved using the concept of Virtual Host or VHost.
