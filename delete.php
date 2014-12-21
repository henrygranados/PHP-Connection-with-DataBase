<?php
/**
 * Author: Henry Granados
 * This code deletes data from DataBase
 */
include 'index.php';

$query = mysql_query("DELETE FROM people.clients WHERE name = 'Lupe'");

?>