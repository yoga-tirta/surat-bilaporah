<?php
if (isset($_POST["button"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_user.username, tb_user.password, tb_user.role_user, tb_user.nik FROM tb_user WHERE tb_user.username = '$username' AND tb_user.password='$password'"));
    if ($username and $password) {
        if ($data) {
            if ($data['role_user'] == "Admin") {
                $_SESSION["username"] = $username;
                header("location: ../admin/page_admin.php");
            } else {
                $_SESSION["nik"] = $data['nik'];
                $_SESSION["username"] = $username;
                header("location: ../user/home.php");
            }
        } else { ?>
            <div style="color: red; margin: 5px;"><i><?= "Username atau Password tidak sesuai"; ?></i></div>
        <?php }
    } else { ?>
        <div style="color: red; margin: 5px;"><i><?= "Username Atau Password Tidak Boleh Kosong"; ?></i></div>
<?php }
} ?>