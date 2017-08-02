<?php
  echo 'Creating Countries...<br>';

  $sql = "CREATE TABLE IF NOT EXISTS Regions (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name TEXT NOT NULL,
    PRIMARY KEY (ID)
  )";

  $db->query($sql);
  echo 'Countries created! <br>'
 ?>
