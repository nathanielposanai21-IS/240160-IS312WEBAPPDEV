<?php
/*
Author: Nathaniel POSANAI
Date: 19th March 2026
Unit: IS312 Web Application Development
*/

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FRU10";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$programCode = $_POST['programCode'];
$programName = $_POST['programName'];
$duration = $_POST['duration'];

$sql = "INSERT INTO Program (ProgramCode, ProgramName, Duration) VALUES ('$programCode', '$programName', '$duration')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="message success">New program added successfully!</div>';
} else {
    echo '<div class="message error">Error: ' . $conn->error . '</div>';
}

echo '<div style="text-align:center;"><a href="new-program.html" class="nav-button">Add Another Program</a>
<a href="index.php" class="nav-button">Home</a></div>';

$conn->close();
?>