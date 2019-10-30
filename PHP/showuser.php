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
<h1>Edit user</h1>
<?php



include "db.php";

if($pdo){

  // get id from

$id=$_GET["userID"];

$stmt = $pdo->query('SELECT * FROM users WHERE id='.$id);

$user = $stmt->fetch();
}
echo "<table><tr>";
echo "<th>".$user['username']."</th>"."<th>" .$user['email']."</th>"." <th>".$user['password']."</th>";
echo "</tr></table>";
 ?>


  </body>

  </html>
