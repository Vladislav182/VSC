<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="login-forum">
        <div class="container">
            <form class="register-email" action="./loginProcess.php">
                <p class="register-text">Register</p>
                <div class="input-group">
                    <input type="username" placeholder="Username" require>
                </div>
                <div class="input-group">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <input class="btn" type="submit" value="Register"></input>
                </div>
                <div class="login-register-text">
                    <p class="p-text">You have an account?<br><a class="href-link" href="nov.php">Login here</a></p>
                </div>
            </form>
        </div>
    </section>
</body>
</html>