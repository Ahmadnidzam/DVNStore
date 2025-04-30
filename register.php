<?php
require "../include/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - DVNStore</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../asset/css/login.css">
</head>
<body class="body-signup">
    <main class="dini">
        <section class="header-dini">
            <img src="../asset/image/logap.png" alt="DVNStore Logo">
            <h1>DVNStore</h1>
            <h2>Buat Akun Baru</h2>
        </section>
        <form method="POST">
            <section class="input-dini">
                <label for="name">Masukkan Nama</label>
                <section class="input-field">
                    <input name="name" type="text" placeholder="Enter your full name" required>
                    <i class="fas fa-user"></i>
                </section>
            </section>

            <section class="input-dini">
                <label for="email">Masukkan Email</label>
                <section class="input-field">
                    <input name="email" type="email" placeholder="Enter your email" required>
                    <i class="fas fa-envelope"></i>
                </section>
            </section>

            <section class="input-dini">
                <label for="pass">Masukkan Password</label>
                <section class="input-field">
                    <input name="pass" type="password" placeholder="Create a password" required>
                    <i class="fas fa-lock"></i>
                </section>
            </section>

            <section class="input-dini">
                <label for="konf_pass">Confirm Password</label>
                <section class="input-field">
                    <input name="konf_pass" type="password" placeholder="Confirm your password" required>
                    <i class="fas fa-lock"></i>
                </section>
            </section>

            <section class="input-dini">
                <label for="role">Pilih Role</label>
                <section class="input-field">
                    <select name="role" required style="width: 100%; padding: 12px 45px; border: 2px solid white; border-radius: 10px; font-size: 15px;">
                        <option value="">-- Pilih Role --</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                        <option value="dev_game">Developer Game</option>
                        <option value="dev_apps">Developer Apps</option>
                        <option value="sut_film">Sutradara Film</option>
                    </select>
                    <i class="fas fa-user-tag"></i>
                </section>
            </section>
            <section class="input-dini">
                <label for="kode_unik">Kode unik (Mengatasi lupa password)</label>
                <section class="input-field">
                    <input name="kode_unik" type="password" placeholder="Kode Unik Anda" required>
                    <i class="fas fa-user-tag"></i>
                </section>
            </section>

            <section class="dinii">
                <input type="checkbox" id="ceklis" class="ceklis" required>
                <label for="ceklis">I agree to the Terms of Service and Privacy Policy</label>
            </section>

            <button name="submit" type="submit" id="signIN" class="button-dini">Create Account</button>
        </form>

        <p class="login-link">Sudah memiliki akun? <a href="login.php">Log In</a></p>
    </main>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $role = $_POST['role'];
    $pass = $_POST['pass'];
    $konf_pass= $_POST['konf_pass'];
    $kode_unik = $_POST['kode_unik'];

    if ($pass == $konf_pass) {
        $password = password_hash($pass, PASSWORD_DEFAULT);
        $kode = password_hash($kode_unik,PASSWORD_DEFAULT);
        $stment = $conn->prepare('INSERT INTO users (name, role, email, password, kode_unik) VALUES (?, ?, ?, ?, ?)');
        $stment->bind_param("sssss", $name, $role, $email, $password, $kode);
        if ($stment->execute()) {
            echo "<script>
            alert('Berhasil Membuat akun');
            window.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>
            alert('Coba Lagi');
            </script>";
        }
    } else {
        echo "<script>
        alert('Password dan konfirmasi password tidak cocok');
        </script>";
    }
}
?>

