<?php
include "../connect/koneksi.php";
if (isset($_POST["button"])) {
    $nik = $_POST["nik"];
    $nama_user = $_POST["nama_user"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $gender = $_POST["gender"];
    $agama = $_POST["agama"];
    $alamat = $_POST["alamat"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($nik and $nama_user and $tempat_lahir and $tanggal_lahir and $gender and $agama and $alamat and $username and $password) {
        $insert = mysqli_query($koneksi, "INSERT INTO tb_user (nik, nama_user, tempat_lahir, tanggal_lahir, gender, agama, alamat, username, password) VALUES ('$nik', '$nama_user', '$tempat_lahir', '$tanggal_lahir', '$gender', '$agama', '$alamat', '$username', '$password')");

        if ($insert) {?>
            <script>location.href="login.php"</script>
        <?php } else {
            header("location: register.php");
        }
    } else?>
    <div style="color: red; margin: 5px;"><i><?= "Inputan Tidak Boleh Kosong"; ?></i></div>
<?php } ?>