<?php
  echo 'Creating Countries...<br>';

  $sql = "DROP TABLE IF EXISTS Countries";
  if ($db->query($sql)) {
    echo 'Countries table dropped! <br>';
  } else {
    print_r($db->errorInfo());
  }

  $sql = "CREATE TABLE IF NOT EXISTS Countries (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name TEXT NOT NULL,
    region_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (REGION_ID) references Regions(id)
  )";

  if ($db->query($sql)) {
    echo 'Countries created! <br>';
  } else {
    print_r($db->errorInfo());
  }
 ?>
