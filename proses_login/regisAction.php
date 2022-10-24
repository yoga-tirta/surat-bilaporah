<?php
include "../connect/koneksi.php";
if (isset($_POST["button"])) {
    $nik = $_POST["nik"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $cek_user = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE nik='$nik' and username is null");

    if (mysqli_num_rows($cek_user)) {
        if ($username and $password) {
            $insert = mysqli_query($koneksi, "UPDATE tb_user SET username = '$username', password = '$password' where tb_user.nik = '$nik'");
            if ($insert) {
                header("location: login.php");
            } else {
                header("location: register.php");
            }
        } else { ?>
            <div style="color: red; margin: 5px;"><i><?= "Username Atau Password atau NIK Tidak Boleh Kosong"; ?></i></div>
    <?php }
    } else ?>
    <div style="color: red; margin: 5px;"><i><?= "NIK tidak di temukan"; ?></i></div>
<?php } ?>