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

        console.log(WareHouseId);

      });
      // End click

    },
    error: function () {
      alert("An error Ocurred");
    }

  });
  // End ajax



});
// End Scope
