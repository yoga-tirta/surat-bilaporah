<?php
include "../connect/koneksi.php";
$surat_masuk = mysqli_query($koneksi, "SELECT tb_surat_masuk.nomor_surat, tb_surat_masuk.jenis_surat, tb_surat_masuk.tgl_surat_masuk, tb_surat_masuk.file_surat FROM tb_surat_masuk");
while ($row = mysqli_fetch_assoc($surat_masuk)) : ?>
    <tr>
        <td><?= $row["nomor_surat"] ?></td>
        <td><?= $row["jenis_surat"] ?></td>
        <td><?= $row["tgl_surat_masuk"] ?></td>
        <td>
            <a href="../surat_masuk/<?= $row['file_surat'] ?>"><button type="button" class="btn btn-primary">Download</button></a>
        </td>
    </tr>
<?php
endwhile;
?>