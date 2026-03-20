<?php
// Author: Nathaniel. POSANAI

$conn = new mysqli("localhost", "root", "", "FRU10");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Student";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h1>Student Listing</h1>

<table>
<tr>
    <th>StudentNo</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Gender</th>
    <th>ContactNo</th>
    <th>ProgramCode</th>
</tr>

<?php
if ($result->num_rows > 0) {
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
}
?>

</table>
</div>

</body>
</html>