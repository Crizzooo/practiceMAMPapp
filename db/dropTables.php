<?php


  $sql = "DROP TABLE IF EXISTS Records";
  if ($db->query($sql)) {
    echo 'Records table dropped! <br>';
  } else {
    print_r($db->errorInfo());
  }

  $sql = "DROP TABLE IF EXISTS Fruits";
  if ($db->query($sql)) {
    echo 'Fruits table dropped! <br>';
  } else {
    print_r($db->errorInfo());
  }

  $sql = "DROP TABLE IF EXISTS Countries";
  if ($db->query($sql)) {
    echo 'Countries table dropped! <br>';
  } else {
    print_r($db->errorInfo());
  }

  $sql = "DROP TABLE IF EXISTS Regions";
  if ($db->query($sql)) {
    echo 'Regions table dropped! <br>';
  } else {
    print_r($db->errorInfo());
  }

?>
