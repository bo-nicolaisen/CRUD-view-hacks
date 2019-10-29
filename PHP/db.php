
<?php
// PDO connection Config  data der hjælper med at connecte til database

// database info
$host="localhost";
$dbName="bob";
$user = "root";
$passwd = "";


//error trapping var
$pdo=false;


// byg DSN data source name  Driver (database type) database navn  og evt. port=3306;charset=utf8mb4
$dsn = "mysql:host=".$host.";dbname=".$dbName;


// options til PDO object her de mest almindelige
$options = [PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=> false,];

try {
  // prøv om du kan connecte
    $pdo = new PDO($dsn, $user, $passwd,$options);
//echo "database connect succesful"; // for debugging

} catch (PDOException $e) {
  //catch exception
  echo "der gik noget galt<br>";
  echo "Error message:  ".$e->getMessage();
}





?>
