<div class="conten">
    <div class="container">
        <div class="pelanggan">
            <a href="<?= base_url('admin/admin/pembayaran') ?>" class="close_new">x</a>
            <h3><i class="bx bx-sm bx-transfer"></i>Bukti Pembayaran</h3>
            <div class="pembayaran">
                <div class="fotoheader">
                    <img src="<?= base_url('upload/') . $pembayaran['foto'] ?>" alt="">
                </div>
                <table>
                    <tr>
                        <td>Nama Pengirim</td>
                        <td>:</td>
                        <td><?= $pembayaran['atas_nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Bank</td>
                        <td>:</td>
                        <td><?= $pembayaran['bank']; ?></td>
                    </tr>
                    <tr>
                        <td>No Rekening</td>
                        <td>:</td>
                        <td><?= $pembayaran['no_rek']; ?></td>
                    </tr>
                </table>
                <a href="<?= base_url('admin/edit/pemesanan/') . $pembayaran['id_pelanggan'] ?>">Kembali Ke Pemesanan</a>
            </div>
        </div>
    </div>
</div>