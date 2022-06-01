<script type="text/javascript">


  alert('Your details have been saved, such as your IP, ISP, Country etc... \nNote that details are saved just for educational purpose');
</script>
<?php

session_start();


  $_SESSION['uname'] = "";
  $_SESSION['password'] = "";
  $_SESSION['login'] =false;
  $_SESSION['email'] = "";
  $_SESSION['dbpasscode'] = "unsecure" ;

  $name = "user";
  $email = "user";
  $decrypt = "user-access";
  include "login/record.php";

  record($name,$email, $decrypt,"VISIT");

    header('Location:home.php');
   ?>
