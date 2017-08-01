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
    echo "Database created succesffully<br>";
  } catch (PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
  }

  echo 'Connected successfully.';
 ?>
</html>
