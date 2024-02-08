<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="../main/process_login.php" method="post">
            <label for="username">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="checkbox" id="save" name="save" value="1"  checked>
            <label for="save">Save login</label>

            <input type="submit" value="Login">
            <a href="../components/register.php" class="create-acc">create an account</a>
        </form>
    </div>

</body>
</html>
