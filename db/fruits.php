<?php
  echo 'Creating Fruits...<br>';

  //TODO: Drop Table if Exists for seeding
  //TODO: Set up Many to Many relationship with Countries
  $sql = "CREATE TABLE IF NOT EXISTS Fruits (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name TEXT NOT NULL,
    classification TEXT NOT NULL,
    month_of_circulation TEXT NOT NULL,
    region_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (REGION_ID) references Regions(id)
  )";

  $db->query($sql);
  echo 'Fruits created! <br>'
 ?>
