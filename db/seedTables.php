<?php

$seedCommands = [
  "regions"=> [
    "North America",
    "South America",
    "Europe",
    "Asia",
    "Austrailia",
    "Africa"
  ],
]

$stmt = $db->prepare("INSERT INTO Regions (name) VALUES (?)");
foreach ($seedCommands["regions"] as $countryName){
  echo $countryName;
}
?>
