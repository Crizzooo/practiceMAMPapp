<?php
  console_log('Creating Regions...');

  // TODO: Cleanup these notes
  // NOTE: As part of this seed file, I was going to Drop all the tables, recreate them, and then reinstantiate the rows every time.
  // However for Parent tables such as Region, I'd first have to check if it exists. Then if it exists, Id need to alter it to drop the foreign keys. Then finally, I could run the drop table query.

  // For development, I may leave the tables in every time permanently, but instead empty all the rows and repopulate them on every run of the 'seed' file.
  $sql = "CREATE TABLE IF NOT EXISTS Regions (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name TEXT NOT NULL,
    PRIMARY KEY (ID)
  )";

  $db->query($sql);
  console_log('Regions created!');
 ?>
