<?php
include "../connect/koneksi.php";
$tb_pengajuan = mysqli_query($koneksi, "SELECT * FROM tb_user INNER JOIN tb_pengajuan USING(nik) INNER JOIN tb_surat USING(kode_surat)");
while ($row = mysqli_fetch_assoc($tb_pengajuan)) :
    if ($row["status_pengajuan"] == "Di Tolak") { ?>
        <tr>
            <td><?= $row["nik"] ?></td>
            <td><?= $row["nama_user"] ?></td>
            <td><?= $row["kode_surat"] ?></td>
            <td><?= $row["jenis_surat"] ?></td>
            <td><?= $row["tgl_pengajuan"] ?></td>
            <td><?= $row["keperluan"] ?></td>
        </tr>
<?php
    }
endwhile;
?>