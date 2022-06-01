<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    tr{
      border-bottom: 1px solid #ddd;
    }

      th{
        text-align: left;
        padding-bottom:10px;
      }
      tr:hover {background-color: #b8ffff;}

      *{
        font-size:12px;
        font-family: sans-serif;
      }
      .container{

        width: 100%;
      }
      .wrapper{

        margin: 0 auto;
      }

      a{
        link-style:none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <?php
      include '../con.php';


        $query = "SELECT * FROM unauthrized_access ";
        $result = $conn->query($query);
        $pass = "";

        if ($result->num_rows > 0) {

          echo "<table style='width:100%'>";


          echo "<tr>
                    <th>Accesed Name</th>
                    <th>Entered Passwords</th>
                    <th>IP</th>
                    <th>Event</th>
                    <th>ISP</th>
                    <th>Date  & Time(Local Time in New York, New York, USA)</th>
                    <th> Country Name</th>
                    <th>Country Code</th>
                    <th>Region Code</th>
                    <th>Region Name</th>
                    <th> City </th>
                    <th>Zip Code</th>
                    <th> Latitude</th>
                    <th>Longitude</th>
                    <th>Time Zone</th>
                </tr>";
          while($row = $result->fetch_assoc()){


            echo "
            <tr>
               <td>" . $row['acc-name']     . " </td>
               <td>" . $row['ent-pass']     . " </td>
               <td>" . $row['ip']           . " </td>
               <td>" . $row['log']          . " </td>
               <td>" . $row['isp']          . " </td>
               <td>" . $row['date-time']    . " </td>
               <td>" . $row['CountryCode']  . " </td>
               <th>" . $row['CountryName']  . " </th>
               <td>" . $row['RegionCode']   . " </td>
               <td>" . $row['RegionName']   . " </td>
               <td>" . $row['City']         . " </td>
               <td>" . $row['ZIPCode']      . " </td>
               <td>" . $row['Latitude']     . " </td>
               <td>" . $row['Longitude']    . " </td>
               <td>" . $row['TimeZone']     . " </td>
            </tr>
             ";


          }
          echo "</table>";
      } else {
        echo "0 results";

      }
      $conn->close();

    ?>
      </div>
    </div>
  </body>
</html>
