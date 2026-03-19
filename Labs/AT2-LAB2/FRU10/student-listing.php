<?php
/*
Author: Nathaniel POSANAI
Date: 19th March 2026
Unit: IS312 Web Application Development
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FRU10";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

echo '<h2>Student Listing</h2>';

if ($result->num_rows > 0) {
    echo '<table border="1">';
    echo '<tr><th>StudentNo</th><th>Firstname</th><th>Lastname</th><th>Gender</th><th>ContactNo</th><th>ProgramCode</th></tr>';
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['StudentNo']}</td>
                <td>{$row['Firstname']}</td>
                <td>{$row['Lastname']}</td>
                <td>{$row['Gender']}</td>
                <td>{$row['ContactNo']}</td>
                <td>{$row['ProgramCode']}</td>
              </tr>";
    }
    echo '</table>';
} else {
    echo '<div class="message error">No student records found.</div>';
}

$conn->close();
?>