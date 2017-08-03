<?php
  echo 'Creating Fruits...<br>';

  //TODO: Set up Many to Many relationship with Countries
  $sql = "CREATE TABLE IF NOT EXISTS Fruits (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name TEXT NOT NULL,
    classification TEXT NOT NULL,
    month_of_cultivation TEXT NOT NULL,
    PRIMARY KEY (ID)
  )";

  $db->query($sql);
  echo 'Fruits created! <br>'
 ?>
