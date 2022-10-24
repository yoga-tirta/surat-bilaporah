<?php
include "../connect/koneksi.php";
$tb_user = mysqli_query($koneksi, "SELECT * FROM tb_user");
while ($row = mysqli_fetch_assoc($tb_user)) :
    if ($row["role_user"] != 'Admin') { ?>
        <tr>
            <td><?= $row["nik"] ?></td>
            <td><?= $row["nama_user"] ?></td>
            <td><?= $row["rt"] ?></td>
            <td><?= $row["rt"] ?></td>
        </tr>
    <?php } ?>
<?php
endwhile;
?>