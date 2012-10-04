#!/bin/bash

#Usuario
#Al utilizar variable $USER se utilizará el nombre del usuario actual

USUARIO=""

#Moodle admin password
PASS=""

#Ubicacion del log
location=""

# SERVER's del cluster
#Ejemplo SERVERS="thesun.dyndns-server.com"
SERVERS=""

# Sites de Moodle que hemos de ejecutar el cron
# Ejemplo SITES="liceovirtualnew liceovirtualold"
SITES=""

# Directorio donde se almacenarán los logs.
LOGDIR=$location/

# Buscamos el nodo del clúster que este disponible
for SERVER in $SERVERS
 do
 ping -c 1 -w 5 $SERVER &>/dev/null
 if [ $? -ne 0 ] ; then
 HOST=$SERVER
 fi
done

# Comprobamos que el directorio de logs este creado
if [ ! -e "$LOGDIR" ]
 then
 mkdir -p "$LOGDIR"
fi

# Para cada uno de los sites, ejecutaremos el CRON
for SITE in $SITES
 do
 wget -q "http://$SERVER/$SITE/admin/cron.php?password=$PASS" -O "$LOGDIR/`date '+%Y-%m-%d_%H:%M:%S'`-$SITE.log"
done
