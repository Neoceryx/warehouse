<?php

// Nombre de la instancia del servidor
$Servername ="DAN\NEO";

// Connection string
$ConnInfo = array( "Database"=>"Warehouse", "UID"=>"", "PWD"=>"" );

$Conn = sqlsrv_connect($Servername, $ConnInfo);

// Handling erros
if( $Conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

{ /* Region Get articles */

  // Build the query or Call the store Procedure
  $Sql = "SELECT * FROM Articles";

  // Query executes
  $Stmt= sqlsrv_query( $Conn, $Sql);

  // Handling errors
  if ( $Stmt == false ) {
    die(print_r(sqlsrv_errors(), true));
  }

  // Get DataBase Info
  while ($result = sqlsrv_fetch_array($Stmt) ) {
    echo $result[0]." : ".$result[1]."<br>" ;
  }


} /* End Region */

 ?>
