<div class="conten">
    <div class="container">
        <div class="pelanggan">
            <h3><i class="bx bx-sm bxs-receipt"></i>Data Pemesanan</h3>
            <div>
                <div class="table">
                    <table cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal Booking</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($pemesanan as $pms) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $pms['nama']; ?></td>
                                    <td><?= $pms['tgl_booking']; ?></td>
                                    <?php if ($pms['status'] == 'pending') : ?>
                                        <td class="notpen"><?= $pms['status']; ?></td>
                                    <?php else : ?>
                                        <td class="notak"><?= $pms['status']; ?></td>
                                    <?php endif; ?>
                                    <td>
                                        <a href="<?= base_url('admin/tambah/hapus_pemesanan/') . $pms['id_pemesanan'] ?>"><i class='bx bxs-trash'></i></a>
                                        <a href="<?= base_url('admin/edit/pemesanan/') . $pms['id_pelanggan'] ?>"><i class='bx bx-edit'></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>