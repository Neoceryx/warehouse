$(document).ready(function () {

  // Get WareHouses
  $.ajax({
    type:"POST",
    url:"DataAccess/GetWarehoues.php",
    data:{},
    success: function (data) {

      // Display DataBase info on the document
      $(".js_WareHouseResult").html(data);


      // Get Warehouse Id
      $(".js_WareHouse").click(function () {

        // Get the warehouse id clicked
        var WareHouseId = $(this).data("id");

        alert(WareHouseId);

      });
      // End click

    },
    error: function () {
      alert("An error Ocurred");
    }

  });
  // End ajax


  // Warehouses
  $("#js_warehouses").change(function () {

    var WareHouseId=$(this).val();

    $.ajax({
      type:"POST",
      url:"DataAccess/GetWareHouseSummary.php",
      data:{WRHOUSID:WareHouseId},
      success:function (data) {

        // Display DataBase Info On the DOM
        $("#js_Summary").html(data);

      },
      error:function () {
        alert("An Error Ocurred");
      }

    });
    // End ajax

  });

});
// End Scope
