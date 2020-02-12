<?php 
        require 'backend.php';
        $edu = new Artikim();
        $coll = $edu->getCollegesBlanLatLng();
        $coll = json_encode($coll,JSON_UNESCAPED_UNICODE);
        $all = $edu->getAllColleges();
        $all = json_encode($all,JSON_UNESCAPED_UNICODE);
        ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

  

<script> let allData = <?php print_r($all);?>;</script> 
<script> let fromDb = <?php print_r($coll);?>;</script>
   
<div class="container ">
<h3>My Google Maps Demo</h3>
<div id="map"></div>
<div class="text-center border border-light p-5 col-md-5"  >
<p class="h4 mb-4">Add shop</p>
<input type="text" id="address" class="form-control mb-4" placeholder="הכנס כתובת, לדוגמה:רוטשילד 38, תל אביב">
<input type="text" id="shopName" class="form-control mb-4" placeholder="הכנס את שם החנות">
<button class="btn btn-info btn-block my-4" onclick="AddLocation()" type="submit">Add Address</button>
</div>
      </div>
   <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyB3_8yCT6vuqIzMv9XslBHG--OLtbewBEg&callback=initMap">
    </script>
    <script src="index.js"></script>
  </body>
</html>