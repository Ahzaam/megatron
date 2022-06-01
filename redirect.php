<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $path = 'D:\xampp\htdocs\websites\megatron\bg-images\ ';
    $files = scandir($path);
    $files = array_diff(scandir($path), array('.', '..'));
    echo "<pre>";
    foreach($files as $file){

    echo "<img src='\".""$file' alt='$path \ $file'>";
    }
     ?>

  </body>
</html>
