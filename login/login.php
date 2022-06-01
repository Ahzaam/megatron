<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../files/css/bootstrap.css">
    <link rel="stylesheet" href="baby-corner/body.css">
    <link rel="stylesheet" href="style.css"> <!--load all styles -->
    <script type="text/javascript" src="../files/js/bootstrap.bundle.js">
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../files/icon_css/all.css">
    <script defer src="../files/icon_js/all.js"></script>

    <script defer src="validation.js"></script>

  </head>
  <body onoffline="online()">
    <script type="text/javascript">
      function online(){
        alert('Your Offline');
      }
    </script>
    <div class="section-top col-sm-12  py-sm-5  col-bg-3">

      <div class="in my-lg-5 py-lg-5">
        <a href="<?php echo $_REQUEST['page'] ?>"><i style="  position: absolute; transform: translate(0, 0);top: 0;  left: 0; margin:10px;color:white; cursor:pointer;" type="arrow" class="fa fa-arrow-left"></i></a>
        <form class="login_form" action="validate.php?page=<?php echo $_REQUEST['page']; ?>"   method="post" name="form" id="form">
          <h1>LOGIN</h1>

          <br><br>

          <label for="uname" style="margin-right:105px;">Email/Username</label><br>
          <input type="text" name="uname" id="uname" value=""
          class="from-control" required autofocus>
          <?php if(isset($_GET['pass'])){ echo $_GET['pass'];} ?>
          <div style="height:10px;text-align:left;margin-left: 80px;<?php if(isset($_GET['pas'])){ echo ($_GET['pas']==0)?'display:block;': 'display:none;';}else{ echo 'display:none;';} ?>" >
            <label type="error"  style="font-size:13px; width:200px;color:red;" >Username or password Incorrect</label>
          </div>

          <br />


          <label for="pword" style="margin-right:105px;">Password</label><br>
          <input style="color:white;" type="password" name="pword" id="pword" class="text-white" value="" required ><br />

          <br>
          <br>


          <button type="submit" class="btn btn-primary" onclick="validate()"style="height: 40px; width:260px">Login</button>
          <img src="../bg-images/social.PNG" style="cursor: pointer;" class="mt-5" alt="sdghwrsjsj">

        </form>
        <p style='color:white;'>Dont have a acount ? <a href="register.php?page=<?php echo $_REQUEST['page']; ?>    ">Register</a></p>
      </div>
    </div>
  </body>
</html>
