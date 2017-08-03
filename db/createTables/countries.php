<?php
  console_log('Creating Countries..');

  $sql = "DROP TABLE IF EXISTS Countries";
  if ($db->query($sql)) {
    console_log('Countries table dropped!');
  } else {
    console_log(print_r($db->errorInfo()));
  }

  $sql = "CREATE TABLE IF NOT EXISTS Countries (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name TEXT NOT NULL,
    region_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (REGION_ID) references Regions(id)
  )";

  if ($db->query($sql)) {
    console_log('Countries created!');
  } else {
    console_log(print_r($db->errorInfo()));
  }
 ?>
