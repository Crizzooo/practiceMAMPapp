<?php

include 'tableData/index.php';

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
