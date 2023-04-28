<!-- // connect to database and retrieve data -->
<?php
$conn = mysqli_connect("localhost", "root", "", "selling");
$result = mysqli_query($conn, "SELECT Rewards FROM loggedin");
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row["Rewards"];
}

// generate HTML dropdown
echo "<select>";
foreach ($data as $value) {
  echo "<option value='$value'>$value</option>";
}

?>