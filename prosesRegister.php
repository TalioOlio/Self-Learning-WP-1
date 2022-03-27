<?php
    session_start();
    if(isset($_POST['submit'])) {
        // Validation
        if(!preg_match("'/^[a-zA-Z]*$/'", $_POST['namaDepan'])) {
            print "<p>Nama wajib dalam bentuk karakter.</p>";
        } else{
            $namaDepan = $_POST['namaDepan'];
        }

        if (!preg_match("'/^[a-zA-Z]*$/'", $_POST['namaTengah'])) {
            print "<p>Nama wajib dalam bentuk karakter.</p>";
        } else {
            $namaTengah = $_POST['namaTengah'];
        }

        if (!preg_match("'/^[a-zA-Z]*$/'", $_POST['namaBelakang'])) {
            print "<p>Nama wajib dalam bentuk karakter.</p>";
        } else {
            $namaBelakang = $_POST['namaBelakang'];
        }

        if (!preg_match("'/^[a-zA-Z]*$/'", $_POST['tempatLahir'])) {
            print "<p>Tempat lahir wajib dalam bentuk karakter.</p>";
        } else {
            $tempatLahir = $_POST['tempatLahir'];
        }

        if (($_POST['tglLahir']) > date_default_timezone_get) {
            print "<p>Tanggal lahir tidak valid.</p>";
        } else {
            $tglLahir = $_POST['tglLahir'];
        }
        if (strlen($_POST['nik']) != 16) {
            print "<p>nomor NIK tidak valid.</p>";
        } else {
            $nik = $_POST['nik'];
        }

        if (!preg_match("'/^[a-zA-Z]*$/'", $_POST['wargaNegara'])) {
            print "<p>Nama negara wajib dalam bentuk karakter.</p>";
        } else {
            $wargaNegara = $_POST['wargaNegara'];
        }

        $email = $_POST['email'];

        if (strlen($_POST['noHp']) != 11 && strlen($_POST['noHp']) != 12) {
            print "<p>No HP wajib terdiri dari 11 - 12 digit.</p>";
        } else {
            $noHp = $_POST['noHp'];
        }

        if (strlen($_POST['username']) < 6) {
            print "<p>username minimal terdiri dari 6 karakter.</p>";
        } else {
            $username = $_POST['username'];
        }

        if (strlen($_POST['password1']) < 8) {
            print "<p>Password minimal terdiri dari 8 karakter</p>";
        } else {
            $password1 = $_POST['password1'];
        }

        if ($_POST['password2'] == $_POST['password1'] ) {
            print "<p>Password 2 wajib sama dengan password 1</p>";
        } else if (strlen($_POST['password2']) < 8){
            print "<p>Password minimal terdiri dari 8 karakter</p>";
        } else {
            $password2 = $_POST['password2'];
        }

        $alamat = $_POST['alamat'];

        if (strlen($_POST['kodePos']) == 5) {
            print "<p>Kode pos tidak valid.</p>";
        } else {
            $kodePos = $_POST['kodePos'];
        }

        $fotoProfil = $_POST['fotoProfil'];

        //to session
        $_SESSION['namaDepan'] = $namaDepan;
        $_SESSION['namaTengah'] = $namaTengah;
        $_SESSION['namaBelakang'] = $namaBelakang;
        $_SESSION['tempatLahir'] = $tempatLahir;
        $_SESSION['tglLahir'] = $tglLahir;
        $_SESSION['nik'] = $nik;
        $_SESSION['wargaNegara'] = $wargaNegara;
        $_SESSION['email'] = $email;
        $_SESSION['noHp'] = $noHp;
        $_SESSION['usernameRegister'] = $username;
        $_SESSION['password1Register'] = $password1;
        $_SESSION['password2'] = $password2;
        $_SESSION['alamat'] = $alamat;
        $_SESSION['kodePos'] = $kodePos;
        $_SESSION['fotoProfil'] = $fotoProfil;

        header("Location: home.php");
    }
?>