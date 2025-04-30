<?php
require "../include/koneksi.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - DVNStore</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../asset/css/login.css">
</head>
<body class="body-login">
    <main class="dini">
        <section class="header-dini">
            <img src="../asset/image/logap.png" alt="DVNStore Logo">
            <h1>DVNStore</h1>
        </section>
        <form method="POST">
            <section class="input-dini">
                <label for="email">Masukkan Email</label>
                <section class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input name="email" type="email" placeholder="Email">
            </section>  
            <section class="input-dini">
                <label for="password">Masukkan Password</label>
                <section class="input-field">
                    <input name="pass" type="password" placeholder="Password">
                    <i class="fas fa-envelope"></i>
                </section>
                <p class="forget"><a href="forget.php">Lupa Password</a></p>
            </section>
            <section class="dinii">
                <input type="checkbox" id="ceklis" class="ceklis">
                <label for="ceklis">I agree to the Terms of Service and Privacy Policy</label>
            </section>
            <button name= "submit" type="submit" id="login" class="button-dini">Login</button>
        </form>
        <p class="login-link">Belum memiliki akun ? <a href="register.php">Sign up</a></p>
    </main>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $pass = $_POST['pass'];
    $email = $_POST['email'];

    $query = $conn->query("SELECT * FROM users WHERE email='$email'");
    $user = $query->fetch_assoc();
    if ($user) {
        // Artinya email ditemukan
        if (password_verify($pass, $user['password'])) {
            // Password cocok
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['login'] = true;

            echo "
            <script>
            alert('Anda Berhasil Login');
            window.location.href = 'Dashboard.php';
            </script>";
        } else {
            // Password salah
            echo "
            <script>
            alert('Password salah !!');
            </script>";
        }
    } else {
        // Email tidak ditemukan
        echo "
        <script>
        alert('Email tidak ditemukan !!');
        </script>";
    }
}
?>
