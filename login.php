<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <section class="container">
        <div class="logo"></div>
        <h1>Sign In</h1>
        <form action="proses/proses_login.php" method="POST" class="inputData">
            <label for="username">Username</label>
            <br>
            <div class="user"></div>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="password">Password</label>
            <br>
            <div class="pass"></div>
            <input type="password" name="password" id="password" required>
            <br><br>
            <button class="btn" type="submit" name="login">Login</button>
            <button class="btn" type="submit" onclick="redirectToPage()">Register</button>
        </form>
        <section class="checkbox">
            <input type="checkbox" id="checkbox">
            <label for="checkbox">Remember me</label>
            <a href="#" class="FP">Forgot Password</a>
        </section>
    </section>
    <script>
        function redirectToPage() {
            document.location.href = "register.php";
        }
    </script>
</body>

</html>