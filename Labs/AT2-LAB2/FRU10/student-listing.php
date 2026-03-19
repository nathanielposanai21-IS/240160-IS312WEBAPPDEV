<?php
/*
Author: Nathaniel. POSANAI
Date: 19th March 2025
Unit: IS312 Web Application Development
*/

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
    <title>Student Listing</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f4f6f8;
            text-align: center;
        }

        h2 {
            margin-top: 30px;
        }

        table {
            margin: 30px auto;
            border-collapse: collapse;
            width: 80%;
            background: white;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }

        th {
            background-color: #007BFF;
            color: white;
            padding: 12px;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .back-btn:hover {
            background: #1e7e34;
        }
    </style>
</head>

<body>

<h2>Student Listing</h2>

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
        <td>".$row["StudentNo"]."</td>
        <td>".$row["Firstname"]."</td>
        <td>".$row["Lastname"]."</td>
        <td>".$row["Gender"]."</td>
        <td>".$row["ContactNo"]."</td>
        <td>".$row["ProgramCode"]."</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No records found</td></tr>";
}
?>

</table>

<a href="index.html" class="back-btn">⬅ Back to Home</a>

</body>
</html>

<?php $conn->close(); ?>