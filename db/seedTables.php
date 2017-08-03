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
];

$stmt = $db->prepare("INSERT INTO Regions (name) VALUES (:name)");
$stmt->bindParam(':name', $countryName);
foreach ($seedCommands["regions"] as $countryName){
  $stmt->execute();
}
?>
