<?php
	/**
	 * Author: Henry Granados
	 * Variables that will store localhost, user and password values.
	 */
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	/**
	 *variable that stores the table that we are using from our DataBase.
	 */
	$mysql_db = 'personas';
	
	/**
	 * connection with MySql DataBase using localhost, user and password.
	 */
	@mysql_connect($mysql_host , $mysql_user , $mysql_pass) or die('cannot connect');
	@mysql_select_db($mysql_db) or die('No se pudo conectar');
	
	echo 'Connected to Database'.'<br/><br/>';
?>