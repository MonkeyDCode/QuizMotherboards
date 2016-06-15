<?php
	error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
	$link=mysql_connect("localhost", "root", "");
	mysql_select_db("arqui",$link) OR DIE ("Error: No es posible establecer la conexión");
	
	function cierra()
	{
		return $link;
	}

?>