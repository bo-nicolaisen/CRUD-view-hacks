<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD view Hack</title>
    <meta name="description" content="DESCRIPTION">
   <link rel="stylesheet" href="../CSS/site.css">

    <!--[if lt IE 9]>
      <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<h1>Delete user</h1>
<?php

include "db.php";

if($pdo){

  // get id from

$id=$_GET["userID"];

$stmt = $pdo->query('SELECT * FROM users WHERE id='.$id);

$user = $stmt->fetch();
}


echo '<form action="edituser_commit.php" method="POST">User name:<br><input type="text" name="firstname" value="'.$user['username'].'"><br>
  email:<br><input type="text" name="email" value="'.$user['email'].'"><br>
  Password:<br><input type="text" name="password" value="'.$user['password'].'">
   <input type="hidden" id="userid" name="userID" value='.$user['id'].'">
    <input type="submit" value="Update">
    <a href="../index.php">Fortryd</a>
</form>';


 ?>


  </body>

  </html>
