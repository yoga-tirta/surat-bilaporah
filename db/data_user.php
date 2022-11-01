<?php
include "../connect/koneksi.php";
$tb_user = mysqli_query($koneksi, "SELECT * FROM tb_user where tb_user.username is NOT null");

while ($row = mysqli_fetch_assoc($tb_user)) :
    if ($row["role_user"] != 'Admin') { ?>
        <tr>
            <td><?= $row["nik"] ?></td>
            <td><?= $row["username"] ?></td>
            <td><?= $row["nama_user"] ?></td>
            <td><?= $row["tempat_lahir"] ?></td>
            <td><?= $row["tanggal_lahir"] ?></td>
            <td><?= $row["jenis_kelamin"] ?></td>
            <td><?= $row["alamat"] ?></td>
            <td>
                <a href="../edit_data/edit_user.php?nik=<?= $row["nik"] ?>"><button type="button" class="btn btn-primary">Edit</button></a>
                <a href="../hapus_data/hapus_user.php?nik=<?= $row["nik"] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
            </td>
        </tr>
    <?php } ?>
<?php
endwhile;
?>