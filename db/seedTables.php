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
    "schema"=>["name", "region_id", "id"],
    "rows"=>[
      ["USA", 1, 1],
      ["Canada", 1, 2],
      ["Mexico", 2, 3],
      ["Chile", 2, 4],
      ["Columbia", 2, 5],
      ["Belgium", 3, 6],
      ["Germany", 3, 7],
      ["Italy", 3, 8],
      ["South Africa", 4, 9],
      ["Liberia", 4, 10],
      ["Cote D'Ivoire", 4, 11],
      ["China", 5, 12],
      ["Japan", 5, 13],
      ["Thailand", 5, 14],
      ["Austrailia", 6, 15]
    ]
  ],
  "Fruits"=>[
    "schema"=>["name", "classification", "month_of_cultivation", "id"],
    "rows"=>[
      ["Blueberries", "Berries", "April", 1],
      ["Cranberries", "Berries", "April", 2],
      ["Grapes", "Berries", "March", 3],
      ["Raspberries", "Berries", "April", 4],
      ["Pineapples", "Citrus", "May", 5],
      ["Watermelons", "Melons", "June", 6],
      ["Oranges", "Citrus", "July", 7],
      ["Lemons", "Citrus", "August", 8],
      ["Apples", "Drupes", "September", 9],
      ["Plums", "Drupes", "October", 10],
      ["Melons", "Melons", "June", 11]
    ]
  ],
  "Records"=>[
    "schema"=>["year", "quantity", "total_cost", "total_revenue", "country_id", "fruit_id"],
    "rows"=>[
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 1, 1 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 1, 2 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 2, 4 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 2, 2 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 3, 9 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 3, 11 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 4, 5 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 4, 7 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 5, 7 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 5, 8 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 6, 9 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 6, 10 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 7, 9 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 7, 1 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 8, 3 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 8, 6 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 9, 11 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 9, 6 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 10, 11 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 10, 3 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 11, 3 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 11, 8 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 12, 10 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 12, 7 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 13, 8 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 13, 9 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 14, 3 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 14, 2 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 15, 4 ],
      [2005, rand(0, 20), rand(99, 599), rand(320, 999), 15, 6 ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 1, 1  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 1, 2  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 2, 4  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 2, 2  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 3, 9  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 3, 11 ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 4, 5  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 4, 7  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 5, 7  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 5, 8  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 6, 9  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 6, 10 ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 7, 9  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 7, 1  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 8, 3  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 8, 6  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 9, 11 ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 9, 6  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 10, 11 ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 10, 3  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 11, 3  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 11, 8  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 12, 10 ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 12, 7  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 13, 8  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 13, 9  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 14, 3  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 14, 2  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 15, 4  ],
      [2010, rand(0, 20), rand(99, 599), rand(400, 999), 15, 6  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 1, 1  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 1, 2  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 2, 4  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 2, 2  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 3, 9  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 3, 11 ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 4, 5  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 4, 7  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 5, 7  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 5, 8  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 6, 9  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 6, 10 ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 7, 9  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 7, 1  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 8, 3  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 8, 6  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 9, 11 ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 9, 6  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 10, 11 ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 10, 3  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 11, 3  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 11, 8  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 12, 10 ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 12, 7  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 13, 8  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 13, 9  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 14, 3  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 14, 2  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 15, 4  ],
      [2015, rand(0, 20), rand(99, 599), rand(400, 999), 15, 6  ]
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

  //TODO: Set profit_loss to be an automated generated column?
  //https://dba.stackexchange.com/questions/74823/how-to-subtract-fields-and-insert-the-value-in-other-field-automatically
  $sql = "UPDATE Records
    SET profit_loss = (total_revenue - total_cost);
  )";
  $db->query($sql);
}

?>
