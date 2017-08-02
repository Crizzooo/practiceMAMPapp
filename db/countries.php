<?php
  echo 'Creating Countries...<br>';

  //TODO: Drop Table if Exists for seeding
  $sql = "CREATE TABLE IF NOT EXISTS Countries (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name TEXT NOT NULL,
    region_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (REGION_ID) references Regions(id)
  )";

  $db->query($sql);
  echo 'Countries created! <br>'
 ?>
