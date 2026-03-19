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

$code = $_POST['programCode'];
$name = $_POST['programName'];

$sql = "INSERT INTO Program (ProgramCode, ProgramName)
        VALUES ('$code', '$name')";

$success = false;
$message = "";

if ($conn->query($sql) === TRUE) {
    $success = true;
    $message = "Program added successfully!";
} else {
    $message = "Error: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f4f6f8;
            text-align: center;
            padding-top: 100px;
        }

        .box {
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }

        .success {
            color: green;
            font-size: 20px;
        }

        .error {
            color: red;
            font-size: 20px;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>

<div class="box">
    <p class="<?php echo $success ? 'success' : 'error'; ?>">
        <?php echo $message; ?>
    </p>

    <a href="index.html" class="btn">🏠 Back to Home</a>
</div>

</body>
</html>