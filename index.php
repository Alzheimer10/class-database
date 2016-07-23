<?php 
	/*Incluimos el fichero de la clase Db*/
	require 'class/db-class/db.class.php';
	/*Creamos la instancia del objeto. Ya estamos conectados*/
	$bd=db::getInstance();
	/*Creamos una query sencilla*/
	$sql='SELECT * FROM productos';
	/*Ejecutamos la query*/
	$stmt=$bd->ejecutar($sql);
	/*Realizamos un bucle para ir obteniendo los resultados*/
	while ($x=$bd->obtener_fila($stmt,0)){
		echo '<p>'.$x['nomb_prod'].'</p>';
	}
	$conf_db=conf_db::getInstance();
	echo "<br> DB:: HOST -> ".$conf_db->getHostDB();
	echo "<br> DB:: NAME -> ".$conf_db->getDB();
	echo "<br> DB:: USER -> ".$conf_db->getUserDB();
	echo "<br> DB:: PASS -> ".$conf_db->getPassDB();
?>