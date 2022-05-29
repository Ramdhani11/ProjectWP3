<div class="conten">
    <div class="container">
        <div class="data">
            <div class="head">
                <div>
                    <i class="bx bx-buildings"></i>
                    <h3>Data Katering</h3>
                </div>
            </div>
            <div class="isi">
                <div>
                    <a href="<?= base_url('admin/tambah/katering') ?>"><i class="bx bx-plus"></i>Katering</a>
                </div>
                <?= $this->session->flashdata('pesan'); ?>
                <table cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Nama Katering</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($katering as $gdg) : ?>
                            <tr>
                                <td><b><?= $i++; ?></b></td>
                                <td><img width=" 100px" src="<?= base_url('upload/') . $gdg['foto']; ?>" alt="">
                                </td>
                                <td><?= $gdg['nama_katering']; ?></td>
                                <td class="deskrip">
                                    <p><?= $gdg['deskripsi']; ?></p>
                                </td>
                                <td>Rp <?= number_format($gdg['harga_katering'], 0, '.', ','); ?></td>
                                <td>
                                    <a href="<?= base_url('admin/tambah/hapus_katering/') . $gdg['id_katering'] ?>"><i class='bx bxs-trash'></i></a>
                                    <a href="<?= base_url('admin/edit/katering/') . $gdg['id_katering'] ?>"><i class='bx bx-edit'></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>