<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $date = $conn->real_escape_string($_POST['date']);
    $description = $conn->real_escape_string($_POST['description']);

    $insert_query = "INSERT INTO events (title, date, description) VALUES ('$title', '$date', '$description')";
    
    if ($conn->query($insert_query) === TRUE) {
        echo "Event added successfully";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
