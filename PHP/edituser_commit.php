
<?php

include "db.php";

if($pdo){

  // get id from

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {

$id=$_POST["userID"];
$username=$_POST["firstname"];
$userEmail=$_POST["email"];
$userpassword=$_POST["password"];

$sql="UPDATE users SET username='$username', email='$userEmail',password='$userpassword' WHERE id=1";
$stmt = $pdo->query($sql);

//$user = $stmt->fetch();
echo '<a href="../index.php">ok</a>';
}

}

 ?>
