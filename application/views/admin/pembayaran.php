<div class="conten">
    <div class="container">
        <div class="pelanggan">
            <h3><i class="bx bx-sm bx-transfer"></i>Data Pembayaran</h3>
            <div>
                <div class="table">
                    <table cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Bank</th>
                                <th>Atas Nama</th>
                                <th>No Rekening</th>
                                <th>Bukti</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($konfirmasi as $pmb) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $pmb['nama']; ?></td>
                                    <td><?= $pmb['bank']; ?></td>
                                    <td><?= $pmb['atas_nama']; ?></td>
                                    <td><?= $pmb['no_rek']; ?></td>
                                    <td>
                                        <img width="100px" src="<?= base_url('upload/') . $pmb['foto'] ?>" alt="">
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/tambah/hapus_pembayaran/') . $pmb['id_konfirmasi'] ?>"><i class='bx bxs-trash'></i></a>
                                        <a href="<?= base_url('admin/edit/pembayaran/') . $pmb['id_konfirmasi'] ?>"><i class='bx bx-edit'></i></a>
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