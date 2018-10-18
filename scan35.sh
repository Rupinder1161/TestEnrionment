#!/bin/sh

# Scan main.cpp assuming that the GNU C++ is the target compiler.

 rm -rf ./csharp/*
 #rm /var/www/html/abdul/*.zip
scan-build -o ./csharp mcs gurpreet.cs
#python zip_folder_03.py >folder2.txt
#cat test.txt folder2.txt >mypath.txt
#find . -name 'mypath.txt' -exec cat {} \;



