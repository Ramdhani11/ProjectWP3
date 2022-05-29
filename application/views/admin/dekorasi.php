<div class="conten">
    <div class="container">
        <div class="data">
            <div class="head">
                <div>
                    <i class="bx bx-buildings"></i>
                    <h3>Data Dekorasi</h3>
                </div>
            </div>
            <div class="isi">
                <div>
                    <a href="<?= base_url('admin/tambah/dekorasi') ?>"><i class="bx bx-plus"></i>Dekorasi</a>
                </div>
                <?= $this->session->flashdata('pesan'); ?>
                <table cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Nama Dekorasi</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($dekorasi as $gdg) : ?>
                            <tr>
                                <td><b><?= $i++; ?></b></td>
                                <td><img width=" 100px" src="<?= base_url('upload/') . $gdg['foto']; ?>" alt="">
                                </td>
                                <td><?= $gdg['nama_dekorasi']; ?></td>
                                <td class="deskrip">
                                    <p><?= $gdg['deskripsi']; ?></p>
                                </td>
                                <td>Rp <?= number_format($gdg['harga_dekorasi'], 0, '.', ','); ?></td>
                                <td>
                                    <a href="<?= base_url('admin/tambah/hapus_dekorasi/') . $gdg['id_dekorasi'] ?>"><i class='bx bxs-trash'></i></a>
                                    <a href="<?= base_url('admin/edit/dekorasi/') . $gdg['id_dekorasi'] ?>"><i class='bx bx-edit'></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>