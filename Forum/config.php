<?php
/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que le
forum puisse fonctionner correctement
rdtfyghujkdtrfghbknj******************************************************/

//On se connecte a la base de donnee
mysql_connect('localhost', 'root', '123456');
mysql_select_db('database_name');

//Nom dutilisateur de ladministrateur
$admin='wassila_hamila';

/******************************************************
----------------Configuration Optionelle---------------
******************************************************/

//Nom du fichier de laccueil
$url_home = 'index.php';

//Nom du design
$design = 'default';


/******************************************************
----------------------Initialisation-------------------
******************************************************/
include('init.php');
?>
