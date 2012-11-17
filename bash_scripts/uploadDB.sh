#!/bin/bash
# -*- ENCODING: UTF-8 -*-
#
# Author: Johann Ramos <johann.ramos.r@gmail.com>
# <http://liceovirtualnew.wordpress.com/>
# <https://linuxandsoftwaredevelopment.blogspot.com/>
#
# Description: This script restore moodle with the files from the previous
# backup script.
#

echo -e "\nRestore moodle\n"

#-------------------------------------------------------------------------------
#           Setting Variables
#-------------------------------------------------------------------------------
# Mysql user
mysqlUser=""

# Mysql pass
mysqlPass=""

# Mysql server
mysqlServer=""

# db.sql folder location
dbLocation=""

#-------------------------------------------------------------------------------
#           Restore
#-------------------------------------------------------------------------------

for i in "$dbLocation"/*
do
    echo " Preparing Restoration... "
    bunzip2 -k $i
    file=$(echo ${i%%.bz2} | sed 's#^.*/##')
    
    name=$(echo ${file%%.sql})
    echo $name

    echo "Creating db $file..."
    mysqladmin -h localhost -u"$mysqlUser" -p"$mysqlPass" create $name
    echo "done"
    echo "-------------------------------------------------------------------------"
    echo "Uploading $file db"
    mysql -h $mysqlServer -u"$mysqlUser" -p"$mysqlPass" $name < $dbLocation/$file
    echo "done"
done
echo "DB $dbLocation restored!"

exit
