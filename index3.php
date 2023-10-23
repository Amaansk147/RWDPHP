<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo2";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $newPassword = $_POST['new_password'];

    $sql = "UPDATE register SET password = ? WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $newPassword, $username);
        if (mysqli_stmt_execute($stmt)) {
            echo "Password updated successfully.";
        } else {
            echo "Error updating password: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>
