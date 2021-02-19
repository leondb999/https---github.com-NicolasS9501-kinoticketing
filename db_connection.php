<?php 

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "Select * from kinoticketing.film";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
    echo "<br> name: " . $row["Name"]. "<br>";
  }
} else {
  echo "0 results";
}
//$conn->close();
?>