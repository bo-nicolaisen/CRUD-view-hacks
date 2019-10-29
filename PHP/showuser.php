<?php

include "db.php";

if($pdo){
$id=1;
$stmt = $pdo->query('SELECT * FROM users WHERE id='.$id);

$user = $stmt->fetch();
}
echo "<table><tr>";
echo "<th>".$user['username']."</th>"."<th>" .$user['email']."</th>"." <th>".$user['password']."</th>";
echo "</tr></table>";
 ?>
