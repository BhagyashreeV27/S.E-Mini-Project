<?php
$pdo = new PDO("mysql:host=localhost;dbname=selling", "root", "");
$conn = mysqli_connect("localhost", "root", "", "selling");

//$login = $_POST['login'];


$sql2 = "UPDATE loggedin SET Rewards= (SELECT Rewards FROM register WHERE register.Username=loggedin.Username) WHERE Username=(SELECT Username FROM loggedin WHERE id='1')";
$stmt2 = $pdo->prepare($sql2);

$stmt2->execute();

$sel = "SELECT * FROM loggedin";
    $query = mysqli_query($conn,$sel);
    $result = mysqli_fetch_assoc($query);

//echo "</select>";
//$result = mysqli_query($conn, "SELECT Username FROM loggedin");
//while ($row = mysqli_fetch_assoc($result)) {
  //  $data[] = $row["Username"];
 // }
  
//$result1 = mysqli_query($conn, "SELECT Rewards FROM loggedin");
//while ($row = mysqli_fetch_assoc($result1)) {
 //   $data[] = $row["Rewards"];
  //}
 
//echo "<select>";
//foreach ($data as $value) {
 // echo "<option value='$value'>$value</option>";
//}
//echo "</select>";

?>