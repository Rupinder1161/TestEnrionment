#!/bin/sh

# Scan main.cpp assuming that the GNU C++ is the target compiler.

rm -rf ./reports/*
 #rm /var/www/html/abdul/*.zip
scan-build -o ./reports gcc -c gurpreet.c > stdout_01.txt 2> stderr_01.txt
#python zip_folder_03.py >folder2.txt
#cat test.txt folder2.txt >mypath.txt
#find . -name 'mypath.txt' -exec cat {} \;



