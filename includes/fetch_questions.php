<?php
$servername = "localhost"; // Change if necessary
$username = "root";
$password = "root";
$dbname = "gce_prep";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch questions
$sql = "SELECT * FROM past_questions";
$result = $conn->query($sql);

$questions = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $questions[] = $row;
    }
}
$conn->close();

echo json_encode($questions);
?>
