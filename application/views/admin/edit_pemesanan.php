    <div class="conten">
        <div class="container">
            <div class="pelanggan">
                <a href="<?= base_url('admin/admin/pemesanan') ?>" class="close_new">x</a>
                <h3><i class="bx bx-sm bxs-receipt"></i><?= $judul; ?></h3>
                <div class="table">
                    <table class="informasi" cellspacing="0">
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td> <?= $pemesanan['nama']; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Booking</td>
                            <td>: </td>
                            <td> <?= $pemesanan['tgl_booking']; ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>: </td>
                            <td> <?= $pemesanan['status']; ?></td>
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
                                <td><?= $pemesanan['nama_dekorasi']; ?></td>
                                <td>Rp <?= number_format($pemesanan['harga_dekorasi'], 0, '.', ','); ?></td>
                            </tr>
                            <tr>
                                <td>Rias</td>
                                <td><?= $pemesanan['nama_rias']; ?></td>
                                <td>Rp <?= number_format($pemesanan['harga_rias'], 0, '.', ','); ?></td>
                            </tr>
                            <tr>
                                <td>Dokumentasi</td>
                                <td><?= $pemesanan['nama_dokumentasi']; ?></td>
                                <td>Rp <?= number_format($pemesanan['harga_dokumentasi'], 0, '.', ','); ?></td>
                            </tr>
                            <tr>
                                <td>Katering</td>
                                <td><?= $pemesanan['nama_katering']; ?></td>
                                <td>Rp <?= number_format($pemesanan['harga_katering'], 0, '.', ','); ?></td>
                            </tr>
                            <tr>
                                <td>Gedung</td>
                                <td><?= $pemesanan['nama_gedung']; ?></td>
                                <td>Rp <?= number_format($pemesanan['harga_gedung'], 0, '.', ','); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>Total :</b></td>
                                <td><?php $total = $pemesanan['harga_dekorasi'] + $pemesanan['harga_rias'] + $pemesanan['harga_gedung'] + $pemesanan['harga_katering'] + $pemesanan['harga_dokumentasi'] ?>
                                    Rp <?= number_format($total, 0, '.', '.'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php if ($pemesanan['status'] !== 'aktif') : ?>
                        <div class="aktif_button">
                            <?php if (!empty($konfirmasi)) : ?>
                                <a href="<?= base_url('admin/edit/pembayaran/' . $konfirmasi['id_konfirmasi']) ?>">Pembayaran</a>
                                <!-- <form class="edit_pemesanan" action="<?= base_url('admin/edit/edit_pemesanan/' . $pemesanan['id_pemesanan']) ?>" method="post">
                                    <input type="text" name="status" id="" value="aktif">
                                    <button type="submit">Aktif</button>
                                </form> -->
                                <form action="<?= base_url('admin/edit/edit_pemesanan/' . $pemesanan['tgl_booking']) ?>" class="edit_pemesanan" method="POST">
                                    <input type="text" name="status" id="" value="aktif">
                                    <button type="submit">Aktif</button>
                                </form>
                            <?php else : ?>
                                <p>Costumer belum melakukan transfer</p>
                            <?php endif; ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>