#!/bin/bash
# -*- ENCODING: UTF-8 -*-
# Script que agrega las tablas necesarias por liceovirtualnew
# Johann Ramos - johann.ramos.r@gmail.com
#
# Datos requerido de MySQL:
mysqlUser=""
mysqlPass=""
database=""

if !(mysql -u $mysqlUser -p$mysqlPass -e "USE $database"); then
    echo "No existe la base de datos, verifique el nombre."
else
    echo -e "Agregando tablas de rut, middlename y secondlastname a bd:$database ...\n";
    mysql -u $mysqlUser -p$mysqlPass -D$database << EOF
    ALTER TABLE mdl_user ADD COLUMN rut VARCHAR(13) NOT NULL;
    ALTER TABLE mdl_user ADD COLUMN middlename VARCHAR(100) NOT NULL;
    ALTER TABLE mdl_user ADD COLUMN secondlastname VARCHAR(100) NOT NULL;
EOF
        echo -e "Finalizado!\n";
fi

exit
