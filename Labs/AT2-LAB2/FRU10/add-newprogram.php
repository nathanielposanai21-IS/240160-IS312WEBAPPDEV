<?php
// Author: Nathaniel. POSANAI

$conn = new mysqli("localhost", "root", "", "FRU10");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$code = $_POST['programCode'];
$name = $_POST['programName'];

$sql = "INSERT INTO Program (ProgramCode, ProgramName)
        VALUES ('$code', '$name')";

if ($conn->query($sql) === TRUE) {
    echo "Program added successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>