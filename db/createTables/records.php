<?php
  echo 'Creating Records...<br>';

  //TODO: Set up Many to Many relationship with Countries

  $sql = "CREATE TABLE IF NOT EXISTS Records (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    year TEXT NOT NULL,
    quantity INT NOT NULL,
    total_cost INT NOT NULL,
    total_revenue INT NOT NULL,
    profit_loss INT NULL,
    country_id INT UNSIGNED NOT NULL,
    fruit_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (ID)
  )";

  $db->query($sql);

  //TODO: Set profit_loss to be an automated generated column?
  //https://dba.stackexchange.com/questions/74823/how-to-subtract-fields-and-insert-the-value-in-other-field-automatically
  $sql = "UPDATE Records
    SET profit_loss = (total_revenue - total_cost);
  )";
  $db->query($sql);

  echo 'Records created! <br>'
 ?>
