<div class="conten">
    <div class="cards">
        <div class="card">
            <div>
                <h1><?= $pelanggan['total']; ?></h1>
                <span>Pelanggan</span>
            </div>
            <div>
                <span class="bx bx-md bx-user"></span>
            </div>
        </div>
        <div class="card">
            <div>
                <h1><?= $pemesanan['total']; ?></h1>
                <span>Pemesanan</span>
            </div>
            <div>
                <span class="bx bx-md bxs-receipt"></span>
            </div>
        </div>
        <div class="card">
            <div>
                <h1><?= $transaksi['total']; ?></h1>
                <span>Bukti Pembayaran</span>
            </div>
            <div>
                <span class="bx bx-md bx-transfer"></span>
            </div>
        </div>
        <div class="card">
            <div>
                <h1>15Jt</h1>
                <span>Pemasukan</span>
            </div>
            <div>
                <span class="bx bx-md bxs-badge-dollar"></span>
            </div>
        </div>
    </div>
    <div class="transaksi">
        <div class="last_transaksi">
            <div>
                <h4>Pesanan Terbaru</h4>
                <a href="<?= base_url('admin/admin/pemesanan') ?>">Lihat<i class='bx bx-right-arrow-alt'></i></a>
            </div>
            <div>
                <table cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Pemesan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($pesanan as $psn) : ?>
                            <tr>
                                <td><?= $psn['nama']; ?></td>
                                <td><?= $psn['tgl_booking']; ?></td>
                                <?php if ($psn['status'] == 'pending') : ?>
                                    <td class="newnof"><?= $psn['status']; ?></td>
                                <?php else : ?>
                                    <td class="newnoff"><?= $psn['status']; ?></td>
                                <?php endif; ?>
                                <th>
                                    <a href="<?= base_url('admin/edit/pemesanan/' . $psn['id_pelanggan']) ?>" class="dashlink">Lihat</a>
                                </th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>