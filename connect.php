<?php
/**
 * Author: Henry Granados
 * write-------------"SELECT `name ` " to select ONLY the Column name.
 * write -------------WHERE name = 'Henry' to select ONLY the name of an specific user.
 * write--------------ORDER BY name ASC to order the database (Ascending)
 * write--------------ORDER BY name DESC to order the database(Descending)
 * write--------------Example LIMIT 1 to limit the number of people
 */
include 'index.php';

$query = mysql_query("SELECT * FROM people.clients ");

while($fila = mysql_fetch_assoc($query))
{
	echo '<strong>ID:</strong> '.$fila['id']. '<br/> ' . 'Name: '.$fila['name']. '<br/> '.'Age: '. $fila['age'].'<br/>';
	
	echo '------------------'.'<br/>';
}
?>