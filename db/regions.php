<?php
  echo 'Creating Regions...<br>';

  //TODO: Drop Table if Exists for seeding
  $sql = "CREATE TABLE IF NOT EXISTS Regions (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name TEXT NOT NULL,
    PRIMARY KEY (ID)
  )";

  $db->query($sql);
  echo 'Regions created! <br>'
 ?>
