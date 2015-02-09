<?php
ini_set('mssql.charset', 'UTF-8');
$myServer = "172.16.128.21";
$myUser = "php";
$myPass = "microdata";
$myDB = "CORPORATIVO"; //PRODUCAO
//$myDB = "CORPORATIVO_PROTOTIPO"; //homologacao
//connection to the database
$dbhandle = mssql_connect($myServer, $myUser, $myPass) or die("Couldn't connect to SQL Server on $myServer");
//select a database to work with
$selected = mssql_select_db($myDB, $dbhandle) or die("Couldn't open database $myDB");
//close the connection
mssql_close($dbhandle);
?> 

