<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $conn->real_escape_string($_POST['id']);
    $title = $conn->real_escape_string($_POST['title']);
    $date = $conn->real_escape_string($_POST['date']);
    $description = $conn->real_escape_string($_POST['description']);

    $update_query = "UPDATE events SET title='$title', date='$date', description='$description' WHERE id=$id";
    
    if ($conn->query($update_query) === TRUE) {
        echo "Event updated successfully";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
