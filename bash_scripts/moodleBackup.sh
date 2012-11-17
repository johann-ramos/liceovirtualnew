#!/bin/bash
# -*- ENCODING: UTF-8 -*-
#
# Author: Johann Ramos <johann.ramos.r@gmail.com>
# <http://liceovirtualnew.wordpress.com/>
# <https://linuxandsoftwaredevelopment.blogspot.com/>
#
# Description: Moodle Backup.This scripts backups up the moodle folders and dumps the DB
# to a selected locations. You have to set the Mysql user and password, the folders to backup
# and the destiny folder before execution.
#

echo -e "\nBackup Moodle: DB, moodledata and www/moodle\n"
sudo echo -e "Sudo pass entered\n"

#-------------------------------------------------------------------------------
#           Setting up Mysql Variables
#-------------------------------------------------------------------------------
#DB user
mysqlUser="user"
#DB pass
mysqlPass="pass"
#DB to backup
moodleDB=(db1 db2)

#-------------------------------------------------------------------------------
#           Date
#-------------------------------------------------------------------------------
fecha=$(date '+%Y-%m-%d')

#-------------------------------------------------------------------------------
#           Folders to Backup
#-------------------------------------------------------------------------------
#Folders to backup
folder[0]="/path/to/moodledata/"
folder[1]="/path/to/moodle/"
echo -e "\nFolders to backup:"

for i in ${folder[@]}; do
    echo $i
done

#-------------------------------------------------------------------------------
#           Backup Locations
#-------------------------------------------------------------------------------
#Backup Location
backup="/path/to/backup/folder/"

#Checks if $backup exists otherway creates folder
if [ ! -d $backup ]; then
    mkdir -p $backup
fi

echo -e "\nBackup Location: $backup"

backupCurrent=$backup$fecha

if [ ! -d "$backupCurrent" ]; then
    mkdir "$backupCurrent"
fi

mkdir "$backupCurrent/mysql"

temp="$PWD/backup.tmp"

#-------------------------------------------------------------------------------
#           DB Dump
#-------------------------------------------------------------------------------

#DBs to backup
databases=($(mysql -u"$mysqlUser" -p"$mysqlPass" --skip-column-names --batch -e "show databases;" 2>"$temp"));
for i in ${databases[@]}; do
    for j in ${moodleDB[@]}; do
        if [ $i = $j ]; then
        echo -ne "\nBacking up db: $i ..."
            mysql -u"$mysqlUser" -p"$mysqlPass" -D "$i" --skip-column-names --batch -e "optimize table $i" 2>"$temp" >/dev/null
            mysqldump -u"$mysqlUser" -p"$mysqlPass" --opt $i | bzip2 -c > "$backupCurrent/mysql/$i.sql.bz2"
            echo -n "done"
        fi
    done
done
echo -e "\nDB DUMP COMPLETE!\n"

#-------------------------------------------------------------------------------
#           Folders Backup
#-------------------------------------------------------------------------------

#Folder compression
for f in "${folder[@]}"; do
    if [ -d "$f" ]; then
        echo -ne "Backing up folder: $f ..."
        d=$(basename $f)
        d="$d.tar.bz2"
    elif [ -f "$f" ]; then
        echo -ne "Backing up file: $f ..."
        d=${f##*/}
        d="$d.tar.bz2"
    else
        echo "Error! $f Not found"
        exit 1
    fi
    sudo tar -cjf "$backupCurrent/$d" -C / ${f:1}
    echo "done"
    sudo chown "$USER":"$USER" "$backupCurrent/$d"
done
echo -e "FOLDER BACKUP COMPLETE!\n"

rm -f "$temp"

echo -e "ALL DONE\n"

<<<<<<< HEAD
exit
=======
exit
>>>>>>> ca1d69e118ef7122f31274db47282800ef06db92
