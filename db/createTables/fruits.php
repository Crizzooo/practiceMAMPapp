<?php
  echo 'Creating Fruits...<br>';

  //TODO: Set up Many to Many relationship with Countries
  $sql = "CREATE TABLE IF NOT EXISTS Fruits (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name TEXT NOT NULL,
    classification TEXT NOT NULL,
    month_of_cultivation TEXT NOT NULL,
    region_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (REGION_ID) references Regions(id)
  )";

  $db->query($sql);
  echo 'Fruits created! <br>'
 ?>
