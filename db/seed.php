<?php
  console_log('Seeding Database...');

  $res = $db->query("SHOW TABLES");
  $tableCount = $res->rowCount();
  if ($tableCount > 0) {
    console_log('Dropping Tables...');
    include 'dropTables.php';
    console_log('Dropping Complete...');
  }
  console_log('Creating Tables...');
  include 'createTables/index.php';
  console_log('Creating Complete...');

  console_log('Seeding Tables...');
  include 'seedTables.php';

  console_log('Seeding Complete...');
  console_log('Seed Script Completed!');
?>
