<?php include('Pengguna/server.php') ;

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Transaksi.xls");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<table>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Asal Instansi</th>
                    <th>Fasilitas yang Dipesan</th>
                    <th>Tanggal Pemakaian</th>
                    <th>Jam Awal Pemakaian</th>
                    <th>Jam Selesai Pemakaian</th>
                    <th>Status Pembayaran</th>
                    <th>Pilihan Pembayaran</th>
                    <th>Status Pemesanan</th>
                </tr>

                <?php
                    $sqlTabel = "SELECT anggota.Nama , anggota.Asal_Instansi , fasilitas.Nama_Fasilitas , memesan.Tanggal_Pemakaian,
                    memesan.Jam_Awal_Pemakaian, memesan.Jam_Selesai_Pemakaian , memesan.Status_Pembayaran , memesan.Jenis_Pembayaran,memesan.Status_Pemesanan FROM
                    anggota INNER JOIN memesan ON anggota.ID_Anggota = memesan.ID_Anggota INNER JOIN fasilitas ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas
                    ORDER BY memesan.Tanggal_Pemakaian ASC";
                    $restabel = mysqli_query($db, $sqlTabel) or die( mysqli_error($db));
                    $check = mysqli_num_rows($restabel);
                    while($row = mysqli_fetch_array($restabel)){
                ?>
                <tr>
                        <td><?php echo $row['Nama'] ?></td>
                        <td><?php echo $row['Asal_Instansi'] ?></td>
                        <td><?php echo $row['Nama_Fasilitas'] ?></td>
                        <td><?php echo $row['Tanggal_Pemakaian'] ?></td>
                        <td><?php echo $row['Jam_Awal_Pemakaian'] ?></td>
                        <td><?php echo $row['Jam_Selesai_Pemakaian'] ?></td>
                        <td><?php echo $row['Status_Pembayaran'] ?></td>
                        <td><?php echo $row['Jenis_Pembayaran'] ?></td>
                        <td><?php echo $row['Status_Pemesanan'] ?></td>
                </tr>

                <?php 
                }
                ?>
            </table>
</body>
</html>
