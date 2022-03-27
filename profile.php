<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/profile.css">
    <title>Profile | Pengelolaan Keuangan</title>
</head>
<body>
    <nav>
        <div class="navbar-left">
            <h4>Financial Management</h4>
        </div>
        <div class="navbar-right">
            <a href="./home.php">Home</a>
            <a href="./profile.php">Profile</a>
            <a href="./welcome.php">Logout</a>
        </div>
    </nav>

    <div class="main">
        <div class="profile">
            <h1>Profile</h1><br><br>
            <p></p>
                <div class="profile-container">
                    <div class="profile-left">
                        <div class="profile-items">
                            <label for="namaDepan">Nama Depan</label><br>
                            <?php print "<p>".$_SESSION['namaDepan']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="tempatLahir">Tempat Lahir</label><br>
                            <?php print "<p>".$_SESSION['tempatLahir']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="wargaNegara">Warga Negara</label><br>
                            <?php print "<p>".$_SESSION['wargaNegara']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="username">Username</label><br>
                            <?php print "<p>".$_SESSION['username']."<p>" ?>
                        </div>
                    </div>
    
                    <div class="profile-middle">
                        <div class="profile-items">
                            <label for="namaTengah">Nama Tengah</label><br>
                            <?php print "<p>".$_SESSION['namaTengah']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="tglLahir">Tgl Lahir</label><br>
                            <?php print "<p>".$_SESSION['tglLahir']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="email">Email</label><br>
                            <?php print "<p>".$_SESSION['email']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="password1">Password 1</label><br>
                            <?php print "<p>".$_SESSION['password1']."<p>" ?>
                        </div> 
                    </div>
        
                    <div class="profile-right">
                        <div class="profile-items">
                            <label for="namaBelakang">Nama Belakang</label><br>
                            <?php print "<p>".$_SESSION['namaBelakang']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="nik">NIK</label><br>
                            <?php print "<p>".$_SESSION['nik']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="noHp">No HP</label><br>
                            <?php print "<p>".$_SESSION['noHp']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="password2">Password 2</label><br>
                            <?php print "<p>".$_SESSION['password2']."<p>" ?>
                        </div>
                    </div>
                </div>
        
                <div class="profile-container-2">
                    <div class="profile-2-left">
                        <label for="alamat">Alamat</label><br>
                        <?php print "<p>".$_SESSION['alamat']."<p>" ?>
                    </div>
                    <div class="profile-2-right">
                        <div class="register-items">
                            <label for="kodePos">Kode Pos</label><br>
                            <?php print "<p>".$_SESSION['kodePos']."<p>" ?>
                        </div>
                        <div class="profile-items">
                            <label for="fotoProfil">Foto Profil</label><br>
                            <?php print '<img src="'.$_SESSION['namaDepan'].'">' ?>
                        </div>
                    </div>
                </div>
        </div>

    </div>

</body>
</html>