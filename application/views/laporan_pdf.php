<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
</head>

<body>
    <div class="detail">
        <h2>Detail Pemesanan</h2>
        <div><?= $this->session->flashdata('pesan'); ?></div>
        <table class="informasi" cellspacing="0">
            <tr>
                <td>Nama</td>
                <td>: </td>
                <td> <?= $detail['nama']; ?></td>
            </tr>
            <tr>
                <td>Tanggal Booking</td>
                <td>: </td>
                <td> <?= $detail['tgl_booking']; ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: </td>
                <td> <?= $detail['status']; ?></td>
            </tr>
        </table>
        <table class="main" cellspacing="0">
            <thead>
                <tr>
                    <th>Jenis</th>
                    <th>Pilihan</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dekorasi</td>
                    <td><?= $detail['nama_dekorasi']; ?></td>
                    <td>Rp <?= number_format($detail['harga_dekorasi'], 0, '.', ','); ?></td>
                </tr>
                <tr>
                    <td>Rias</td>
                    <td><?= $detail['nama_rias']; ?></td>
                    <td>Rp <?= number_format($detail['harga_rias'], 0, '.', ','); ?></td>
                </tr>
                <tr>
                    <td>Dokumentasi</td>
                    <td><?= $detail['nama_dokumentasi']; ?></td>
                    <td>Rp <?= number_format($detail['harga_dokumentasi'], 0, '.', ','); ?></td>
                </tr>
                <tr>
                    <td>Katering</td>
                    <td><?= $detail['nama_katering']; ?></td>
                    <td>Rp <?= number_format($detail['harga_katering'], 0, '.', ','); ?></td>
                </tr>
                <tr>
                    <td>Gedung</td>
                    <td><?= $detail['nama_gedung']; ?></td>
                    <td>Rp <?= number_format($detail['harga_gedung'], 0, '.', ','); ?></td>
                </tr>
                <tr>
                    <td colspan="2"><b>Total :</b></td>
                    <td><?php $total = $detail['harga_dekorasi'] + $detail['harga_rias'] + $detail['harga_gedung'] + $detail['harga_katering'] + $detail['harga_dokumentasi'] ?>
                        Rp <?= number_format($total, 0, '.', '.'); ?></td>
                </tr>
            </tbody>
        </table>
        <div class="detbut">
            <a href="<?= base_url('dashboard') ?>">Kembali</a>
            <a href="<?= base_url('konfirmasi') ?>">Konfirmasi</a>
        </div>
    </div>
</body>

</html>