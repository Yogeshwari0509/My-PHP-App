<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: firstlogin.php");
    exit();
}
$username = htmlspecialchars($_SESSION['username']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container center">
        <h1>Hello, <?php echo $username; ?> 👋</h1>
        <p>Welcome to your dashboard!</p>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>
