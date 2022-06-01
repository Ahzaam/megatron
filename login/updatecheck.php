<?php
$isp = "SLT-Mobitel";
$country_name = "Sri Lanka";
$country_code = "+94";
$region_code = "1002";
$region_name = "Nuwara Eliya";
$city = "Nawalapitiya";
$zip_code = "20600";
$latitude = "94.1231";
$longitude = "0.23423";
$time_zone = "Srilanka/Colombo";
$accid = 1;
while($accid <= 6){

  $sql =  "UPDATE `unauthrized_access` SET `isp`='$isp',`CountryName`='$country_name',`CountryCode`='$country_code',
  `RegionCode`='$region_code',`RegionName`='$region_name',`City`='$city',`ZIPCode`='$zip_code',
  `Latitude`='$latitude',`Longitude`='$longitude',`TimeZone`='$time_zone' WHERE  `acc-id` = '$accid'";


  include "../con.php";
  echo $sql;
  echo "<br>";
  if ($conn->query($sql) === TRUE) {
    echo "Added successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  $accid++;
}



 ?>
