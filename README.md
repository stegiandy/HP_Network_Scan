HP Network Scan
===============

quick and dirty solution for using HP Color LaserJet CM1312nfi network scan functionality

## Features

* the one and only feature: it let's you use your HP Color LaserJet CM1312nfi scan feature to do network scans plus the automatic document feeder

## Requirements

* a network
* some kind of linux-box with a webserver installed (apache, nginx, etc.)
* the printer driver installed on the box
* the [scanimage](http://www3.sane-project.org/man/scanimage.1.html) application installed

## Getting started

* check your file sharing settings on the linux box and make sure it is working
* grab a zip-file of this little project, copy it to a subfolder available to the webserver and unzip it
* change the settings in config.php
* happy scanning

## further notes

maybe you want to consider on of the following points:

* make sure you do not expose the scanner to the web
* create a cron job to delete scanned images after some time


## known bugs

* validation of return codes is pretty bad but I haven't had the time to look into that. feel free to contribute.