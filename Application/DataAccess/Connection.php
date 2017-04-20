<?php

// Nombre de la instancia del servidor
$Servername ="DAN\NEO";

// Connection string
$ConnInfo = array( "Database"=>"Warehouse", "UID"=>"", "PWD"=>"" );

$Conn = sqlsrv_connect($Servername, $ConnInfo);

// Handling erros
if( $Conn ) {
    //  echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
 ?>
