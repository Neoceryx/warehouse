<?php

// Add Connection string
include 'Connection.php';

{ /* Region Get Warehouse */

  // Build the query or Call the store Procedure
  $Sql = "select Id, Name from WareHouse";

  // Query executes
  $Stmt= sqlsrv_query( $Conn, $Sql);

  // Handling errors
  if ( $Stmt == false ) {
    die(print_r(sqlsrv_errors(), true));
  }

  // Get DataBase Info
  while ($result = sqlsrv_fetch_array($Stmt) ) {

    // Display the info on the screen by Query position
    echo "
    <div class='col s12 m12 l4 js_WareHouse' data-id='".$result[0]."'>
      <div class='card blue-grey'>
        <div class='card-content white-text'>

          <span class='card-title'>".$result[1]."</span>

        </div>
      </div>
    </div>
    " ;
  }


} /* End Region */

 ?>
