<?php
/**
 * Author: Henry Granados
 * write-------------"SELECT `name ` " to select ONLY the Column name.
 * write -------------WHERE nombre = 'Henry' to select ONLY the name of an specific user.
 * write--------------ORDER BY nombre ASC to order the database (Ascending)
 * write--------------ORDER BY nombre DESC to order the database(Descending)
 * write--------------Example LIMIT 1 to limit the numer of people
 */
include 'index.php';

$query = mysql_query("SELECT * FROM personas.clientes ");

while($fila = mysql_fetch_assoc($query))
{
	echo '<strong>ID:</strong> '.$fila['id']. '<br/> ' . 'Name: '.$fila['name']. '<br/> '.'Age: '. $fila['age'].'<br/>';
	
	echo '------------------'.'<br/>';
}
?>