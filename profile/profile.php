<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .container{

        width: 100%;
        text-align: center;
        align-items: center;
      }
      .wrapper{
          width: 30%;
          background-color: rgb(232, 251, 255);
          margin:auto;
          padding-bottom:100px;
      }
      button[type="button"]{
        width: 100px;
        height: 30px;
        background-color: rgb(255, 77, 77);
        border:none !important;
        color:white;
        cursor: pointer !important;
      }

      img{max-width:500px;height:auto}


    </style>
  </head>
  <body>

    <div class="container">
      <div class="wrapper">
        <img src="<?php echo $_SESSION['profile']?>" alt="<?php echo $_SESSION['profile'] ?>">


        <h2><?php echo $_SESSION['uname'] ?></h2>
        <h2><?php echo $_SESSION['email'] ?></h2>



        <a href="../Login/logout.php?page=../home.php"><button type="button" name="button">Logout</button></a>

      </div>
    </div>

  </body>
</html>
