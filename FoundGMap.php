<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
         <script src="StreetAddressToCoordinates.js"></script>
    </head>
    <body>
        Map of pet sightings near <?php echo htmlentities($_GET["address"])."<br/>";?>
        <?php
        require("SQLConnectionInfo.php");
        $SQLConnection = mysqli_connect($hostname, $username, $password, $database);
        if(!$SQLConnection) {
            exit('Ooops!, Cannot connect to database!, error: (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
        //set default client character set
        mysqli_set_charset($SQLConnection, 'utf-8');
        
        mysqli_select_db($SQLConnection, "pet");
        
        $streetAddress = mysqli_real_escape_string($SQLConnection, htmlentities($_GET["address"]));
        
        $matchingPets = mysqli_query($SQLConnection, "SELECT UUID FROM ")
        
        ?>
    </body>
</html>
