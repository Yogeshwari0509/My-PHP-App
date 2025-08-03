<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <h2>Create Account</h2>
        <form action="registerauth.php" method="POST">
            <label>Username or Email:</label>
            <input type="text" name="username" required>

            <label>Password:</label>
            <input type="password" name="password" id="regpass" required>
            <label class="inline"><input type="checkbox" onclick="toggleRegPassword()"> Show Password</label>

            <input type="submit" value="Register" class="btn">
        </form>
        <p class="text-right"><a href="firstlogin.php">Already have an account? Login</a></p>
    </div>
</body>
</html>
