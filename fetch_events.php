<?php
include 'config.php';

$fetch_query = "SELECT * FROM events ORDER BY date ASC";
$result = $conn->query($fetch_query);

$events = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
}
$conn->close();

echo json_encode($events);
?>
