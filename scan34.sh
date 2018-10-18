#!/bin/sh

# Scan main.cpp assuming that the GNU C++ is the target compiler.

 rm -rf ./cpp/*
 #rm /var/www/html/abdul/*.zip
scan-build -o ./cpp g++ -c gurpreet.cpp
#python zip_folder_03.py >folder2.txt
#cat test.txt folder2.txt >mypath.txt
#find . -name 'mypath.txt' -exec cat {} \;



