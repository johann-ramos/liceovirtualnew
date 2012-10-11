liceovirtualnew
===============

Liceo Virtual New - versión final

Proyecto de título
Modificación de moodle para aplicarlo a Enseñanza básica o media de Chile.
DuocUC - Viña del Mar.

Instalación
===========

1. Instalar de forma normal Moodle 2.2 (http://download.moodle.org/).
2. Descargar los archivos del repositorio git y reemplazarlos por los archivos de moodle.
3. Ejecuta el script que addMdlUser.sh de la carpeta bash_scripts o ejecuta las siguientes sentencias:
  * USE moodle_database;
  * ALTER TABLE mdl_user ADD COLUMN rut VARCHAR(13) NOT NULL;
  * ALTER TABLE mdl_user ADD COLUMN middlename VARCHAR(100) NOT NULL;
  * ALTER TABLE mdl_user ADD COLUMN secondlastname VARCHAR(100) NOT NULL;
4. Listo para utilizar


