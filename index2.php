<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo2";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $contact = $_POST['number'];

    $sql = "INSERT INTO register (username, password, contact, email) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $username, $password, $contact, $email);

        if (mysqli_stmt_execute($stmt)) {
            header('Location: login.html');
            
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);

?>
