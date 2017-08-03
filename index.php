<!DOCTYPE html>
<html>
   <head>
    <title>PHP Test</title>
   </head>
   <body>
      <div id="app">

      </div>
     <?php
      /*
        mysql:host=localhost;dbname=test;port=3306;charset=utf8
      driver^^ colon    ^param=value pair         ^semicolon

      */
      $dsn = 'mysql:host=localhost';
      $user = 'root';
      $password ='root';

      function console_log($string){
         echo'<script>console_log("'.$string.'");</script>';
      }
      console_log('hello there!');

      $dbName = "FruitAnalysis";
      try {
        $db = new PDO($dsn, $user, $password);
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
        $db->exec($sql);
        if ($db->query("use $dbName")) {
          console_log("PDO connection to $dbName is successful!");
        }
      } catch (PDOException $e) {
        console_log('Connection failed: '.$e->getMessage());
      }


      // Seed Database
      include './db/seed.php';

      console_log('connection closed.');

     ?>
     <script type="text/javascript" src="client/dist/bundle.js"></script>
   </body>
</html>
