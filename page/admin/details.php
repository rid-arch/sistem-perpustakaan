<?php
include '../../config.php'; // Include your database connection

// Get user ID from URL
$id = $_GET['id'];

// Fetch user details from the database
$stmt = $mysqli->prepare("SELECT * FROM tb_user WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
    <link rel="stylesheet" href="../../assets/css/styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="container">
        <h2>User Details</h2>
        <p><strong>ID:</strong> <?= $user['id']; ?></p>
        <p><strong>Username:</strong> <?= $user['username']; ?></p>
        <p><strong>Nama:</strong> <?= $user['nama']; ?></p>
        <p><strong>Level:</strong> <?= $user['level']; ?></p>
        <a href="admin.php">Back to User List</a>
    </div>
</body>
</html>