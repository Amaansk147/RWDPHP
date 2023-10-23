<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo2";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['delete'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "DELETE FROM register WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        if (mysqli_stmt_execute($stmt)) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>
