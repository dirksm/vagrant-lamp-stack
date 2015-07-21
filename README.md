# Vagrant setup for Ubuntu 14.04, Apache, MySQL, and phpMyAdmin

## Description
This project is a boilerplate for setting up a web server using [Vagrant](http://www.vagrantup.com). 

The Vagrantfile:
* sets up a Ubuntu 14.04 LTS 32bit box
* makes the box accessable by the host at IP ```192.168.33.22```
* syncs the current folder with ```/var/www/html``` inside the box (permanently, in both directions)
* automatically perform all the commands in bootstrap.sh directly after setting up the box for the first time
* fixes the missing mcrypt error in phpmyadmin

## Example
* Clone this project to your workspace. 
* Modify the ```PASSWORD``` variable in ```bootstrap.sh``` to your chosen root password. 
* Modify the ```PROJECTFOLDER``` variable in ```bootstrap.sh``` to your chosen project name. 


To create a new virtual machine environment run:
```
vagrant up
```

Make sure you already have the ubuntu/trusty32 loaded.  If not do
```
vagrant box add ubuntu/trusty32
```
* Add your project files to the ```PROJECTFOLDER``` folder.

After that you will have a fully installed box, synced with your local project folder.

##PostScript
To safely stop the box simply run the command:
```vagrant halt```

To destroy the box run:
```vagrant destroy```

You can also reprovision the box by running:
```vagrant provision```