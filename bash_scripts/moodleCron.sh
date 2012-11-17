#!/bin/bash
# -*- ENCODING: UTF-8 -*-
#
# Author: Johann Ramos <johann.ramos.r@gmail.com>
# <http://liceovirtualnew.wordpress.com/>
# <https://linuxandsoftwaredevelopment.blogspot.com/>
#
# Description: Moodle cron for linux.
# Instructions: crontab -e
# to execute every 5 minutes
# */5 * * * * /path/to/script.sh
#

echo -e "\nMoodle Cron execution\n"

#-------------------------------------------------------------------------------
#           Setting Variables
#-------------------------------------------------------------------------------

# Moodle admin password
pass=""

# Cluster Server
#server="example.com"
server=""
echo -e "Moodle server: $server"

# Moodle sites that executes cron
# sites="moodle moodle2"
sites=""
echo -e "Moodle sites: $sites\n"

# Log directory
# logdir $HOME/moodle/logs
logdir=""

# Checking if log directory exists
if [ ! -d "$logdir" ]; then
    mkdir -p "$logdir"
fi

#-------------------------------------------------------------------------------
#           Cron execution
#-------------------------------------------------------------------------------
# Searching cluster node available
for s in $server
do
    ping -c 1 -w 5 $s &>/dev/null
    if [ $? -ne 0 ] ; then
    host=$s
    fi
done

# Cron execution
for s in $sites
do
    echo -n "Cron of $s executed ... "
    wget -q "http://$server/$s/admin/cron.php?password=$pass" -O "$logdir/`date '+%Y-%m-%d_%H:%M:%S'`-$s.log"
    echo "done"
done

echo -e "\nlogs in $logdir"
echo "All done"

exit
