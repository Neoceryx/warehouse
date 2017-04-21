<?php

// Add Connection string
include 'Connection.php';

// Validate value recibed from index.js
if (isset($_POST["WRHOUSID"]) ) {

  // Get WareHouseId
  $WareHouseId= $_POST["WRHOUSID"];

  // echo $WareHouseId;

  { /* Region */

    // Build the Query. Get Articles Qntity by Id
    $Query = "SELECT COUNT(*) FROM WarehouseLocations
    INNER JOIN WareHouse ON (WareHouse_Id = WareHouse.Id)
    Where (WareHouse_Id = $WareHouseId)";

    // Executes the Query
    $Stmt = sqlsrv_query($Conn, $Query);

    // Handling errors
    if ( $Stmt == false  ) {
      die(print_r( sqlsrv_errors(), true ));
    }

    // Get DataBase Info
    while ($result = sqlsrv_fetch_array($Stmt)  ) {
      echo $result[0];
    }

  } /* End Region */

}

 ?>
