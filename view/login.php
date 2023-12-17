<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Login</title>
</head>
<body>
    <div class="login flex">
        
        <div class="login-section">
            <form action="../logic/loginHandlle.php" method="post">
                <h2>Login</h2>
                <div class="username">
                    <input type="text" name="username" placeholder="username" id = "username" >
                </div>
                <div class="password">
                    <input type="password" name="password" id="password" placeholder="password">
                </div>
                <div class="connection-button">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>