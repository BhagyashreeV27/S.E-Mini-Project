<?php
//include "login.html";

$btnId = $_POST['btnId'];
//echo "btnId: " . $btnId . "<br>";


$pdo = new PDO("mysql:host=localhost;dbname=selling", "root", "");



// prepare the SQL statement

$sql = "UPDATE register SET Rewards = Rewards+(SELECT Amount FROM seller WHERE id=?) WHERE Username=(SELECT Username FROM seller WHERE id=?)";
$stmt = $pdo->prepare($sql);

// bind the parameter value
$stmt->bindValue(1, $btnId);
$stmt->bindValue(2, $btnId);

// execute the statement
$stmt->execute();

$sql2 = "UPDATE register SET Rewards= Rewards-(SELECT Amount FROM seller WHERE id=$btnId) WHERE Username=(SELECT Username FROM loggedin WHERE id='1')";
$stmt2 = $pdo->prepare($sql2);

// bind the parameter value
//$stmt2->bindValue(1 ,$btnId);
//$stmt2->bindValue(2, $Username);

// execute the statement
$stmt2->execute();

$sql3 = "DELETE Username FROM seller WHERE id ='1' ";
$stmt3 = $pdo->prepare($sql3);

//$stmt3->bindValue(1, $btnId);
// bind the parameter value
//$stmt2->bindValue(1 ,$btnId);
//$stmt2->bindValue(2, $Username);

// execute the statement
$stmt3->execute();





    
    //$query2 = "UPDATE seller SET Amount='0' WHERE id=:btnId";
//$query2_run = mysqli_query($connection, $query2);


?>
