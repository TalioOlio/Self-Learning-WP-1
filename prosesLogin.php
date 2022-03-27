<?php
    session_start();
    if(isset($_POST['submit'])) {
        if(isset($_SESSION)) {
            if(($_POST['usernameLogin'] == $_SESSION['usernameRegister']) && ($_POST['password1Login'] == $_SESSION['password1Register'])) {
                print "<p>Login berhasil! Anda kan diarahkan ke halaman utama.</p>";
                header('Location: home.php');
            } else {
                print "<p>Silahkan cek kembali username dan password anda.</p>";
            }
        } else {
            print "<p>Silahkan lakukan registrasi terlebih dahulu untuk dapat melakukan login.</p>";
            header('Location: welcome.php');
        }
    }
?>