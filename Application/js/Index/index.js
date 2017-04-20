$(document).ready(function () {

  // Get WareHouses
  $.ajax({
    type:"POST",
    url:"DataAccess/GetWarehoues.php",
    data:{},
    success: function (data) {

      // Display DataBase info on the document
      $(".js_WareHouseResult").html(data)

    },
    error: function () {
      alert("An error Ocurred");
    }

  });
  // End ajax

});
// End Scope
