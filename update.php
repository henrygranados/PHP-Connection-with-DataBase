<?php
/**
 * Author: Henry Granados
 * This code updates data from DataBase
 */
include 'index.php';

$query = mysql_query("UPDATE people.clients
		SET name = 'Alex'
		WHERE name = 'Tyler' AND age = '20'");

?>