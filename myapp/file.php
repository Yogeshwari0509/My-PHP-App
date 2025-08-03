<?php
session_start();

$conn = new mysqli("localhost", "root", "", "firstdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$input = trim($_POST['username']); // can be a username or email (stored in 'username' column)
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM logindata WHERE username = ?");
$stmt->bind_param("s", $input);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Incorrect password'); window.location.href='firstlogin.php';</script>";
    }
} else {
    echo "<script>alert('User not found'); window.location.href='firstlogin.php';</script>";
}

$stmt->close();
$conn->close();
?>
