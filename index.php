<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pet Finder</title>
       <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
       <script src="StreetAddressToCoordinates.js"></script>
    </head>
    <body>
        <form name="FoundGMapGeneration" action="FoundGMap.php">
            Enter Address:  <input type="text" name="address" value="" 
                                   id="streetAddress" onchange ="streetAddressToGPS(this.value)" />
            <input type="hidden" name="lat" value="" id="myLatitude">
            <input type="hidden" name="lng" value="" id="myLongitude">
            Pick Search Radius:
            <select name="searchRadius">
                <option>1</option>
                <option>3</option>
                <option>5</option>
                <option>10</option>
                <option>25</option>
            </select>
            <input type="submit" value="Show Found Pets" />
        </form>
    </body>
</html>
