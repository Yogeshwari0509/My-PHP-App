<?php
session_start();

$conn = new mysqli("localhost", "root", "", "firstdb");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$username = trim($_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO logindata (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    $_SESSION['username'] = $username;
    header("Location: index.php");
    exit();
} else {
    echo "<script>alert('Username/email already exists.'); window.location.href='register.php';</script>";
}
