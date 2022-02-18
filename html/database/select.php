<?php

include "conn.php";

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  $row;
  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
}

$conn->close();

?>
