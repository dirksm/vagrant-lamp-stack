# Vagrant setup for Ubuntu 14.04, Apache, MySQL, and phpMyAdmin

## Description
This project is a boilerplate for setting up a web server using [Vagrant](http://www.vagrantup.com). 

The Vagrantfile:
* sets up a Ubuntu 14.04 LTS 32bit box
* makes the box accessable by the host at IP ```192.168.33.22```
* syncs the current folder with ```/var/www/html``` inside the box (permanently, in both directions)
* automatically perform all the commands in bootstrap.sh directly after setting up the box for the first time
* fixes the missing mcrypt error in phpmyadmin

##Requirements
* Clone this project to your workspace. 
* Add your project files to the ```myproject``` folder.
* To rename your project, modify the PROJECTFOLDER variable in ```bootstrap.sh``` 