#!/bin/bash
# -*- ENCODING: UTF-8 -*-
#Script que restaura las bd de una carpeta al servidor

#MySQL
mysqlUser=""
mysqlPass=""
location=""

for i in "$location"/*
do
    echo "Preparando la restauracion de BD ... "
    bunzip2 -k $i
    archivo=$(echo ${i%%.bz2} | sed 's#^.*/##')
    
    nombre=$(echo ${archivo%%.sql})
    echo $nombre

    echo "Creando BD $archivo..."
    mysqladmin -h localhost -u"$mysqlUser" -p"$mysqlPass" create $nombre
    echo "Finalizado!"
    echo "-------------------------------------------------------------------------"
    echo "Subiendo BD $archivo"
    mysql -h localhost -u"$mysqlUser" -p"$mysqlPass" $nombre < $location/$archivo
    echo "Finalizado!"
done
echo "BD de $location restaurada!"

exit
