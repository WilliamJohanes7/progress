<!DOCTYPE html>
<html>
<head> AROUND US </head><br>
<body>
<image width=100 height=100 src="https://icons.wxug.com/i/c/v4/mostlycloudy.svg" ><br>
<?php 
$json_string = file_get_contents("http://api.wunderground.com/api/ec4ddf94bcbbe9dd/geolookup/conditions/q/ID/Mugassari.json"); 
$parsed_json = json_decode($json_string); 
$location = $parsed_json->{'location'}->{'city'}; 
$weather = $parsed_json->{'current_observation'}->{'weather'};
$wind_mph = $parsed_json->{'current_observation'}->{'wind_mph'};
$temp_c = $parsed_json->{'current_observation'}->{'temp_c'};
$visibility_km= $parsed_json->{'current_observation'}->{'visibility_km'};
echo "Saat ini sedang berada di ${location}\n";
echo "<br>";
echo "Cuaca : ${weather}\n";
echo "<br>";
echo "Suhu : ${temp_c} celcius\n";
echo "<br>";
echo "Kecepatan : ${wind_mph} mph \n";
echo "<br>";
echo "Jarak pandang : ${visibility_km} km\n";
echo"<br>";



?>

</body>
</html>