<?php
include "../connect/koneksi.php";
$tb_pengajuan = mysqli_query($koneksi, "SELECT * FROM tb_user INNER JOIN tb_pengajuan USING(nik) INNER JOIN tb_surat USING(kode_surat)");
while ($row = mysqli_fetch_assoc($tb_pengajuan)) :
    $id_pengajuan = $row['id_pengajuan'];
    $data_arsip =
        mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tb_arsip_surat.file_surat, tb_arsip_surat.nomor_surat FROM tb_arsip_surat INNER JOIN tb_pengajuan USING(id_pengajuan) WHERE tb_arsip_surat.id_pengajuan='$id_pengajuan'"));
    if ($row['status_pengajuan'] == 'Di Terima' and $data_arsip["file_surat"] == '') { ?>
        <tr>
            <td><?= $row["nik"] ?></td>
            <td><?= $row["nama_user"] ?></td>
            <td><?= $row["kode_surat"] ?></td>
            <td><?= $row["jenis_surat"] ?></td>
            <td><?= $row["tgl_pengajuan"] ?></td>
            <td><?= $row["keperluan"] ?></td>
            <td><?= $data_arsip["nomor_surat"] ?></td>
            <?php
            if ($row["kode_surat"] == "SKTM") { ?>
                <td>
                    <a href="../data_input/data_sktm.php?id_pengajuan=<?= $row['id_pengajuan'] ?>">View Data</a>
                </td>
            <?php } elseif ($row["kode_surat"] == "SKK") { ?>
                <td>
                    <a href="../data_input/data_skk.php?id_pengajuan=<?= $row['id_pengajuan'] ?>">View Data</a>
                </td>
            <?php } elseif ($row["kode_surat"] == "SKM") { ?>
                <td>
                    <a href="../data_input/data_skm.php?id_pengajuan=<?= $row['id_pengajuan'] ?>">View Data</a>
                </td>
            <?php } elseif ($row["kode_surat"] == "SL") { ?>
                <td>
                    <a href="../data_input/data_sl.php?id_pengajuan=<?= $row['id_pengajuan'] ?>">View Data</a>
                </td>
            <?php } elseif ($row["kode_surat"] == "SPA") { ?>
                <td>
                    <a href="../data_input/data_spa.php?id_pengajuan=<?= $row['id_pengajuan'] ?>">View Data</a>
                </td>
            <?php } elseif ($row["kode_surat"] == "SPK") { ?>
                <td>
                    <a href="../data_input/data_spk.php?id_pengajuan=<?= $row['id_pengajuan'] ?>">View Data</a>
                </td>
            <?php } ?>
            <td>
                <a href="../admin/uplod.php?id_pengajuan=<?= $row["id_pengajuan"] ?>&jenis_surat=<?= $row['jenis_surat'] ?>&nama=<?= $row["nama_user"] ?>&kode_surat=<?= $row['kode_surat'] ?>"><button type="button" class="btn btn-primary">Upload</button></a>
            </td>
        </tr>
<?php
    }
endwhile;
?>