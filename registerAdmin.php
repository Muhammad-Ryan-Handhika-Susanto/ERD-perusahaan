<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/registerAdmin.css">
</head>

<body>
    <section class="container">
        <div class="logo"></div>
        <h1>Sign Up</h1>
        <form action="proses/proses_register_admin.php" method="POST" class="inputData">
            <label for="nama">Nama</label>
            <br>
            <div class="user1"></div>
            <input required type="nama" name="nama" id="nama">
            <br>
            <label for="username">Username</label>
            <br>
            <div class="user2"></div>
            <input required type="username" name="username" id="username">
            <br>
            <label for="password">Password</label>
            <br>
            <div class="pass"></div>
            <input required type="password" name="password" id="password">
            <br>
            <label for="telepon">Telepon</label>
            <br>
            <div class="telp"></div>
            <input required type="telepon" name="telp" id="telepon">
            <br><br>
            <button class="btn" type="button" name="login" onclick="redirectToPage()">Login</button>
            <button class="btn" type="submit" name="register">Register</button>
        </form>
    </section>
    <script>
        function redirectToPage() {
            document.location.href = "loginAdmin.php";
        }
    </script>
</body>

</html>