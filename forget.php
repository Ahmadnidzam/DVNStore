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
                <label for="password">Masukkan Kode Unik anda</label>
                <section class="input-field">
                    <input name="kode_unik" type="password" placeholder="Kode_unik">
                    <i class="fas fa-envelope"></i>
                </section>
            </section>
            <button name= "submit" type="submit" id="login" class="button-dini">Kirim</button>
        </form>
        <p class="login-link">sudah memiliki akun ? <a href="login.php">Log in</a></p>
    </main>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $kode_unik = $_POST['kode_unik'];
    $stment = $conn->prepare('SELECT * FROM users WHERE email = ?');
    $stment->bind_param("s", $email);
    $stment->execute();
    $hasil = $stment->get_result();
    $user = $hasil->fetch_assoc();

    if ($user) {
        if ($kode_unik === $user['kode_unik']) {
            $_SESSION['forget'] = true;
            $_SESSION['forget_user']=$user['email'];
            header("Location: forget_true.php");
            exit();
        } else {
            echo "<script>alert('Kode unik tidak sesuai');</script>";
        }
    } else {
        echo "<script>alert('Email tidak terdaftar');</script>";
    }
}

?>