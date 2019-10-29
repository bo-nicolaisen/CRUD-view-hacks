 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>CRUD view Hack</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="PATH">

     <!--[if lt IE 9]>
       <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
 </head>

 <body>


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
echo "<th>".$row['username']."</th>"."<th>" .$row['email']."</th>"." <th>".$row['password']."</th>"."<th><a href='PHP/showuser.php?usereID=".$row['id']."'>show user</a></th>";
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

<!--
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>
*/
-->
