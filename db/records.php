<?php
  echo 'Creating Records...<br>';

  //TODO: Set up Many to Many relationship with Countries

  $sql = "CREATE TABLE IF NOT EXISTS Records (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    year TEXT NOT NULL,
    quantity INT NOT NULL,
    total_cost INT NOT NULL,
    total_revenue INT NOT NULL,
    country_id INT UNSIGNED NOT NULL,
    fruit_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (ID)
  )";

  $db->query($sql);
  echo 'Records created! <br>'
 ?>
