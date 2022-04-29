<?php
include('db_setup.php');

$results = array();

$result = $conn->query("SELECT * FROM board");
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
  $results[] = $row;
}
header('Content-type: application/json');
echo json_encode($results);

$conn->close();
?>