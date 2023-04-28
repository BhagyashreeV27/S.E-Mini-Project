<?php
//$btnId = $_POST['btnId'];
//echo "btnId: " . $btnId . "<br>";


$pdo = new PDO("mysql:host=localhost;dbname=selling", "root", "");

session_start();

session_unset();
session_destroy();

$sql3 = "TRUNCATE TABLE loggedin";
$stmt3 = $pdo->prepare($sql3);

//$stmt3->bindValue(1, $btnId);
// bind the parameter value
//$stmt2->bindValue(1 ,$btnId);
//$stmt2->bindValue(2, $Username);

// execute the statement
$stmt3->execute();



header("location: login.html");
exit;
?>