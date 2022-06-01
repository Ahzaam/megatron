<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include '../con.php';
        $query = "SELECT * FROM home WHERE `item-id` = " . $_REQUEST['id'] ;
        $result = $conn->query($query);
        $pass = "";
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            $path = $row['image'];
            ?>
            <div class="item ">
             <div class="card border-0">
               <img src="../<?php echo $path ?>" alt="<?php echo $path?>" class="card-img-top">

               <div class="card-body">
                <div class="owl-details">
                   <p><?php echo $row['name']; ?> <br><?php echo $row['model']; ?></p>
                </div>
                <div class="owl-price">
                   <?php echo $row['price']; ?>LKR <del><?php $dis = $row['discount']; echo ($row['discount'])== "0"? "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp": $dis."LKR" ; ?></del>
                </div>
               </div>
               <p><?php echo $row['description']  ?></p>
             </div>
           </div>
            <?php
          }
          echo $pass;
      } else {
        echo "0 results";

      }
      $conn->close();

    ?>

  </body>
</html>
