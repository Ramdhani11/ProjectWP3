<div class="conten">
    <div class="container">
        <div class="pelanggan">
            <h3><i class="bx bx-sm bx-user"></i>Data Pelanggan</h3>
            <div>
                <div class="table">
                    <table cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>No Telpon</th>
                                <th>Alamat</th>
                                <th>Request</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($pelanggan as $plg) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $plg['nama']; ?></td>
                                    <td><?= $plg['email']; ?></td>
                                    <td><?= $plg['password']; ?></td>
                                    <td><?= $plg['no_telpon']; ?></td>
                                    <td><?= $plg['alamat']; ?></td>
                                    <td><?= $plg['request']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/tambah/hapus_pelanggan/') . $plg['id'] ?>"><i class='bx bxs-trash'></i></a>
                                        <a href=""><i class='bx bx-edit'></i></a>
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