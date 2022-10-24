<?php
include "../connect/koneksi.php";
$tb_pengajuan = mysqli_query($koneksi, "SELECT * FROM tb_user INNER JOIN tb_pengajuan USING(nik) INNER JOIN tb_surat USING(kode_surat)");
while ($row = mysqli_fetch_assoc($tb_pengajuan)) :
    $id_pengajuan = $row['id_pengajuan'];
    $data_arsip =
        mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_arsip_surat.file_surat, tb_arsip_surat.nomor_surat FROM tb_arsip_surat INNER JOIN tb_pengajuan USING(id_pengajuan) WHERE tb_arsip_surat.id_pengajuan='$id_pengajuan'"));
    if ($row['status_pengajuan'] == 'Di Terima' and $data_arsip["file_surat"] != '') { ?>
        <tr>
            <td><?= $data_arsip["nomor_surat"] ?></td>
            <td><?= $row["nama_user"] ?></td>
            <td><?= $row["nik"] ?></td>
            <td><?= $row["kode_surat"] ?></td>
            <td><?= $row["jenis_surat"] ?></td>
            <td>
                <a href="../surat_keluar/<?= $data_arsip['file_surat'] ?>"><button type="button" class="btn btn-primary">Download</button></a>
            </td>
        </tr>
<?php
    }
endwhile;
?>