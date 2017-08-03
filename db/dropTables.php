<?php


  $sql = "DROP TABLE IF EXISTS Records";
  if ($db->query($sql)) {
    console_log('Records table dropped!');
  } else {
    console_log(print_r($db->errorInfo()));
  }

  $sql = "DROP TABLE IF EXISTS Fruits";
  if ($db->query($sql)) {
    console_log('Fruits table dropped!');
  } else {
    console_log(print_r($db->errorInfo()));
  }

  $sql = "DROP TABLE IF EXISTS Countries";
  if ($db->query($sql)) {
    console_log('Countries table dropped!');
  } else {
    console_log(print_r($db->errorInfo()));
  }

  $sql = "DROP TABLE IF EXISTS Regions";
  if ($db->query($sql)) {
    console_log('Regions table dropped!');
  } else {
    console_log(print_r($db->errorInfo()));
  }

?>
