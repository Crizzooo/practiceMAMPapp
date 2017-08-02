<html>
 <head>
  <title>PHP Test</title>
 </head>
 <?php
  /*
    mysql:host=localhost;dbname=test;port=3306;charset=utf8
  driver^^ colon    ^param=value pair         ^semicolon

  */
  $dsn = 'mysql:host=localhost';
  $user = 'root';
  $password ='root';

  $dbName = "FruitAnalysis";
  try {
    $db = new PDO($dsn, $user, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
    $db->exec($sql);
    if ($db->query("use $dbName")) {
      echo "PDO connection to $dbName is successful!  <br>";
    }
  } catch (PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
  }


  // Start checking to seed the database
  // If tables are less than 4 or the tables have no rows, lets run a seed
  $res = $db->query("SHOW TABLES");
  $tableCount = $res->rowCount();
  if ($tableCount < 4){
    echo 'We need to create the tables!<br>';
    include './db/index.php';
  } else {
    echo 'No Seed needed!<br>';
  }

  echo '...connection closed.';

 ?>
</html>
