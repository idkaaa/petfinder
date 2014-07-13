/* 
 *Script that converts a street address to gps coordinates for using with 
 *Google Maps javascript api, must also include 
 * <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
 * in the html
 */

var geocoder = new google.maps.Geocoder();

function streetAddressToGPS(addressString){
    var m_address = addressString;
    geocoder.geocode({ 'address': m_address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK){
            document.getElementById("myLatitude").value = results[0].geometry.location.lat(); 
            document.getElementById("myLongitude").value = results[0].geometry.location.lng();
        } else{
            alert('Geocode did not work because: ' + status);
        }
    });
    
}


