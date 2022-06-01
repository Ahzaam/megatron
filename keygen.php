<?php



    
    $sql = "UPDATE registeration SET password= '". $newencrypt ."' WHERE name = '" . $row["name"] . "' AND " . "email = '" . $row["email"] . "';";

    if ($conn->query($sql) === TRUE) {
      echo "UPDATE registeration SET password= '". $newencrypt ."' WHERE name = '" . $row["name"] . "' AND " . "email = '" . $row["email"] . "';";
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }


    // $stmt = $conn->prepare("UPDATE registeration SET password= ". $newkey ." WHERE name = " . $row["name"] . " AND " . "email = " . $row["email"] . ";");
    // $stmt->execute();

    echo "<h1> registeration successful </h1>";

  }
}
  $conn->close();

 ?>
