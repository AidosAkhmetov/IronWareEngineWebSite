<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ironware";

/*if(!$con = pg_connect($dbhost,$dbuser,$dbpass,$dbname))*/
if(!$con = pg_connect("host='18.198.121.46' port='5432' dbname='postgres' user='postgres' password='123'"))
{
	die("failed to connect!");
}
