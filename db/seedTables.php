<?php

// NOTE: I learned that I can specify Id's here, but then if I add a record without specifying an id, it will start with the last one and auto increment. If I drop the auto increment, I wonder what default behavior is? Looks like it will start with the highest ID and increment it. If I leave Africa at 11 but something else at 15, the next record will be 16.
// TODO: Make note in quiver notebook on this
$Tables = [
  "Regions"=> [
    "schema"=>["name", "id"],
    "rows"=>[
      ["North America", 1],
      ["South America", 2],
      ["Europe", 3],
      ["Africa", 4],
      ["Asia", 5],
      ["Austrailia", 6]
    ]
  ],
  "Countries"=>[
    "schema"=>["name", "region_id"],
    "rows"=>[
      ["USA", 1],
      ["Canada", 1],
      ["Mexico", 2],
      ["Chile", 2],
      ["Columbia", 2],
      ["Belgium", 3],
      ["Germany", 3],
      ["Italy", 3],
      ["Africa", 4],
      ["South Africa", 4],
      ["Liberia", 4],
      ["Cote D'Ivoire", 4],
      ["China", 5],
      ["Japan", 5],
      ["Thailand", 5],
      ["Austrailia", 6]
    ]
  ],
  "Fruits"=>[
    "schema"=>["name", "classification", "month_of_cultivation"],
    "rows"=>[

    ]
  ]
];

function addColon($v){
  return ':'.$v;
}
//NOTE: I wanted to create a dynamic way to seed the table, so that you only need to update the data in the above $Tables data structure, and it will seed itself correctly. How does BBG usually seed?
foreach ($Tables as $TableName=>$TableInfo){
  $sql = "INSERT INTO ".$TableName;

  $next = " (".join($TableInfo["schema"], ", ");
  $next .= ")";

  $final =" VALUES (".join(array_map("addColon", $TableInfo["schema"]), ", ");
  $final .=")";

  $sql.=$next.$final;
  echo $sql."<br>";

  $stmt = $db->prepare($sql);
  foreach ($TableInfo["rows"] as $row){
    foreach( $row as $index=>$data){
      $columnName = $TableInfo["schema"][$index];
      echo 'binding: '."':'".$columnName.$data."<br>";
      //NOTE: Because bindParam() binds a PHP Variable to a correspodning placement as a reference, and will only be evaluated at the time execute() is called, I need to refer to the exact data point with $row[$index] reference, rather than creating a new variable each time such as $data = $row[$index], and using the $data variable
      // TODO: Make quiver notebook note on this
      $stmt->bindParam(':'.$columnName, $row[$index]);
    }
    $stmt->execute();
  }
}

?>
