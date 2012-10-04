#!/bin/bash
# -*- ENCODING: UTF-8 -*-

####### CONFIGURACION ######
#Nombre del usuario que quiere realizar el respaldo
systemUser=""

# MySQL:
mysqlUser=""
mysqlPass=""

# Directorio donde se almacenaran los respaldos:
backup=""

# Directorios a respaldar:
#carpeta[0]="/path/to/moodledata/"
#carpeta[1]="/path/to/www/folder/"
carpeta[0]=""
carpeta[1]=""

# Configuracion de fecha
fecha=$(date '+%Y-%m-%d')

backupCurrent=$backup$fecha

####### FIN CONFIGURACION #######

temp="$PWD/backup.tmp"
echo "Inicio del Respaldo..."

#Comprueba si existen los directorios de destino, sino los crea
if [ ! -d "$backup" ]; then
    mkdir "$backup"
fi

if [ ! -d "$backupCurrent" ]; then
    mkdir "$backupCurrent"
fi

if [ ! -d "$backupCurrent/mysql" ]; then
    mkdir "$backupCurrent/mysql"
fi

echo "-------------------------------------------------------------------------------"
echo -ne "Preparando el respaldo de BD MySQL ... "
databases=( $(mysql -u"$mysqlUser" -p"$mysqlPass" --skip-column-names --batch -e "show databases;" 2>"$temp") );
echo "Se han encontrado ${#databases[@]} BD.";
for i in ${databases[@]}; do
    if [ $i != "information_schema" ] && [ $i != "mysql" ] && [ $i != "phpmyadmin" ] && [ $i != "performance_schema" ]; then
        echo -ne "Respaldando BD $i ... "
        mysql -u"$mysqlUser" -p"$mysqlPass" -D "$i" --skip-column-names --batch -e "optimize table $i" 2>"$temp" >/dev/null
	    mysqldump -u"$mysqlUser" -p"$mysqlPass" --opt $i | bzip2 -c > "$backupCurrent/mysql/$i.sql.bz2"
	    echo "Finalizado."
	fi
done

echo "-------------------------------------------------------------------------------"
for f in "${carpeta[@]}"; do
    if [ -d "$f" ]; then
        echo -ne "Respaldando directorio $f ... "
        d=$(basename $f)
        d="$d.tar.bz2"
    elif [ -f "$f" ]; then
        echo -ne "Respaldando archivo $f ... "
        d=${f##*/}
        d="$d.tar.bz2"
    else
        echo "Error! $f No se ha encontrado."
        exit 1
    fi
    sudo tar -cjf "$backupCurrent/$d" -C / ${f:1}
    echo "Finalizado."
    sudo chown "$systemUser":"$systemUser" "$backupCurrent/$d"
done

rm -f "$temp"

echo "---------------------"
echo "Respaldo Completado!"
echo "---------------------"

exit 0
