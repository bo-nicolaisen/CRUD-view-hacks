 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>CRUD view Hack</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="CSS/site.css">

     <!--[if lt IE 9]>
       <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
 </head>

 <body>
<h1>User management module</h1>

<?php
include "PHP/db.php";

if($pdo){

$stmt = $pdo->query('SELECT * FROM users');
$data = $stmt->fetchAll();
}

if($data){

echo "<table>";

foreach ($data as $row) {
echo "<tr>";
echo "<th>".$row['username']."</th>"."<th>" .$row['email']."</th>"." <th>".$row['password'].

"</th>"."<th><a href='PHP/edituser.php?userID=".$row['id']."'>Edit</a><a href='PHP/deleteuser.php?userID=".$row['id']."'>Delete</a></th>";
echo "</tr>";
}
echo "</table>";
}
else {
  echo "database error";
}


?>


 </body>

 </html>
