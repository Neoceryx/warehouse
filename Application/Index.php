<!DOCTYPE html>
  <html>

    <head>
      <?php include 'Web-Parts\NavBar.php'; ?>

      <title>Warehouse</title>

    </head>

    <body>

      <div class="row">

        <div class="col s12 m4 l3 ">

          <div>
            <b>Articles total</b>
            <div class="chip" id="js_Summary">Jane Doe</div>
          </div>

        </div>

        <div class="col s12 m8 l9 ">

          <form class="">
            <div class="row">

              <label>Browser Select</label>
              <select class="browser-default" id="js_warehouses">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Jaula 1</option>
                <option value="2">Jaula 2</option>
                <option value="3">Jaula 3</option>
              </select>

            </div>
          </form>


          <!-- Display DataBase info From Ajax call -->
          <div class="js_WareHouseResult row"></div>

        </div>

      </div>


    </body>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <!-- Aditional js files -->
    <script type="text/javascript" src="js\Index\index.js"></script>

  </html>
