<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="file.php" method="POST">
            <label>Username or Email:</label>
            <input type="text" name="username" required>

            <label>Password:</label>
            <input type="password" name="password" id="password" required>
            <label class="inline"><input type="checkbox" onclick="togglePassword()"> Show Password</label>

            <input type="submit" value="Login" class="btn">
        </form>
        <p class="text-right">
            <a href="register.php">New user? Register</a>
        </p>
    </div>
</body>
</html>
