<?php
require "../include/koneksi.php";
session_start();
if(!isset($_SESSION['forget'])){
    header("Location:../pages/login.php");
}
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
            <h2>Ubah Password Anda</h2>
        </section>
        <form method="POST"></form>
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
            <button name="submit" type="submit" id="signIN" class="button-dini">Create Account</button>
        </form>
        <p class="login-link">Sudah memiliki akun? <a href="login.php">Log In</a></p>
        </main>
</body>
</html>
<?php
if (isset($_POST["submit"])){
    $pass = $_POST['pass'];
    $konf = $_POST['konf_pass'];
    if ($pass == $konf){
        $stment = $conn->prepare(' UPDATE users  SET password = ? WHERE email= ?');
        $stment ->bind_param("ss",$pass,$_SESSION['forget_user']);
        if ($stment->execute()) {
            echo "<script>
            alert('Berhasil Mengganti password);
            window.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>
            alert('Coba Lagi');
            </script>";
        }
    }else{
        echo "<script>
        alert('Password dan konfirmasi password tidak cocok');
        </script>";
    }
}
?>