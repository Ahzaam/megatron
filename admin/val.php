<?php
session_start();

$name = $_POST['uname'];
$decrypt = $_POST['pword'];
$password = $_POST['pword'];
include "../con.php";

$query = "SELECT * FROM registeration WHERE name ='admin'";

$result = $conn->query($query);

$pass = "";
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  include "crypt.php";
  $pass = $row["password"];
      if(strlen($decrypt) < 16){
        $cou = floor(16 / strlen($decrypt));
        $remain = 16 - ($cou * strlen($decrypt));
        $i = 0;
        $remainstr = substr($remstr,0, $remain);
        $newkey = "";

        while($i < $cou){
          $newkey = $newkey . $decrypt;
          $i++;
        }

        $newkey = $newkey . $remainstr;

      }else{
        $newkey = substr($decrypt,0, 15);
      }
      $newencrypt = openssl_encrypt($decrypt, $ciphering ,  $encryption_iv, $options, $newkey);

  $email = $row["email"];

  echo $pass;
} else {
echo "0 results";

}
$conn->close();
if($name == 'admin' & $pass == $newencrypt){
  $_SESSION['dbpassalloc'] =$pass;
  $_SESSION['dbpasscode'] = 'secure';



header("Location: admin.php?pass=$pass");

}else{

  header("Location:index.php?pass=$password");
}
 ?>
