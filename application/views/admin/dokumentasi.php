<div class="conten">
    <div class="container">
        <div class="data">
            <div class="head">
                <div>
                    <i class="bx bx-buildings"></i>
                    <h3>Data Dokumentasi</h3>
                </div>
            </div>
            <div class="isi">
                <div>
                    <a href="<?= base_url('admin/tambah/dokumentasi') ?>"><i class="bx bx-plus"></i>Dokumentasi</a>
                </div>
                <?= $this->session->flashdata('pesan'); ?>
                <table cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Nama Dokumentasi</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($dokumentasi as $gdg) : ?>
                            <tr>
                                <td><b><?= $i++; ?></b></td>
                                <td><img width=" 100px" src="<?= base_url('upload/') . $gdg['foto']; ?>" alt="">
                                </td>
                                <td><?= $gdg['nama_dokumentasi']; ?></td>
                                <td class="deskrip">
                                    <p><?= $gdg['deskripsi']; ?></p>
                                </td>
                                <td>Rp <?= number_format($gdg['harga_dokumentasi'], 0, '.', ','); ?></td>
                                <td>
                                    <a href="<?= base_url('admin/tambah/hapus_dokumentasi/') . $gdg['id_dokumentasi'] ?>"><i class='bx bxs-trash'></i></a>
                                    <a href="<?= base_url('admin/edit/dokumentasi/') . $gdg['id_dokumentasi'] ?>"><i class='bx bx-edit'></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>