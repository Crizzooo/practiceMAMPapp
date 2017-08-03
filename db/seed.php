<?php
  echo 'Seeding Database...<br>';

  $res = $db->query("SHOW TABLES");
  $tableCount = $res->rowCount();
  if ($tableCount > 0) {
    echo 'Dropping Tables...<br>';
    include 'dropTables.php';
    echo 'Dropping Complete...';
  }
  echo 'Creating Tables...<br>';
  include 'createTables/index.php';
  echo 'Creating Complete...';

  echo 'Seeding Tables...<br>';
  include 'seedTables.php';

  echo 'Seeding Complete...';
  echo 'Seed Script Completed!<br>';
?>
