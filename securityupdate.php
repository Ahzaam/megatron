<?php
include 'con.php';
include 'admin/crypt.php';

$decrypt = "shrfa";
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



echo $newencrypt;
 ?>
