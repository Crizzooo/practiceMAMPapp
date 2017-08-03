<?php
  echo 'Seeding Database...<br>';


  $res = $db->query("SHOW TABLES");
  $tableCount = $res->rowCount();
  if ($tableCount > 0) {
    echo 'we need to drop previous tables!<br>';
    include './db/dropTables.php';
  }
  echo 'We need to create the tables!<br>';
  include 'regions.php';
  include 'countries.php';
  include 'fruits.php';
  include 'records.php';

  echo 'Seed completed!<br>';
?>
