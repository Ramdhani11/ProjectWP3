<div class="head">
    <h3>Selamat datang <?= $user['nama']; ?></h3>
</div>
</header>
<?php $date = @$_REQUEST['date']; ?>

<?php if (validation_errors()) : ?>
    <div class="errors"><span><?= validation_errors() ?></span></div>
<?php endif; ?>
<div class="informasi">
    <div class="akun">
        <h3>Informasi akun anda</h3>
        <table>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?= $user['email']; ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><?= $user['password']; ?></td>
            </tr>
        </table>
        <div class="pemesanan">
            <?php if ($pemesanan) : ?>
                <div><b>Pesanan Anda :</b> <a href="<?= base_url('detail/pemesanan/') . $user['id'] ?>"> Anda Memiliki Pesanan</a></div>
            <?php else : ?>
                <div><b>Pesanan Anda :</b> Anda belum Punya pesanan</div>
            <?php endif; ?>
        </div>
    </div>
    <form class="datee" action="<?= base_url() . 'dashboard?tanggal=' . $date; ?>" method="get">

        <div>
            <ul>
                <li>Pilih jadwal acara Anda dan klik tombol lihat untuk melihat ketersediaan pelayanan kami pada tanggal tersebut</li>
                <li>Pemesanan dapat dilakukan minimal 10 hari dari tanggal sekarang.</li>
            </ul>
        </div>
        <div>
            <div>
                <input type="date" name="date" class="form-control" value="<?= isset($date) ? $date : '' ?>" placeholder="Tanggal acara Anda">
                <button type="submit">Lihat</button>
            </div>
        </div>
    </form>
</div>
<div class="pilihan">
    <?php if (isset($date) && $date != '') : ?>

        <span>Silahkan Pilih Paket Anda</span>
        <form action="<?= base_url('dashboard') ?>" method="post">
            <input style="opacity: 0;" type="text" name="tanggal" value="<?= $date ?>">
            <div class="body-header">
                <i class='bx bx-sm bx-diamond'></i>
                <h3>Rias</h3>
            </div>
            <div class="flex">
                <?php foreach ($rias as $gdg) : ?>
                    <div class="conten">
                        <div class="fotorias">
                            <img src="<?= base_url() . 'upload/' . $gdg['foto'] ?>" alt="">
                        </div>
                        <h4><?= $gdg['nama_rias']; ?></h4>
                        <label class="radio-btn">
                            <input type="radio" name="rias" id="<?= $gdg['id_rias'] ?>" value="<?= $gdg['id_rias'] ?>">
                            <span class="check"></span>
                            <span class="pil">Pilih</span>
                        </label>
                        <p class="fotdes"><?= $gdg['deskripsi']; ?></p>
                        <p class="harga">Rp <?= number_format($gdg['harga_rias'], 0, '.', ',') ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="body-header">
                <i class='bx bx-sm bx-diamond'></i>
                <h3>Dekorasi</h3>
            </div>
            <div class="flex">
                <?php foreach ($dekorasi as $dkr) : ?>
                    <div class="conten">
                        <div class="fotodekorasi">
                            <img src="<?= base_url() . 'upload/' . $dkr['foto'] ?>" alt="">
                        </div>
                        <h4><?= $dkr['nama_dekorasi']; ?></h4>
                        <label class="radio-btn">
                            <input type="radio" name="dekorasi" id="<?= $dkr['id_dekorasi'] ?>" value="<?= $dkr['id_dekorasi'] ?>">
                            <span class="check"></span>
                            <span class="pil">Pilih</span>
                        </label>
                        <p class="fotdes"><?= $dkr['deskripsi']; ?></p>
                        <p class="harga">Rp <?= number_format($dkr['harga_dekorasi'], 0, '.', ',') ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="body-header">
                <i class='bx bx-sm bxs-bowl-rice'></i>
                <h3>Katering</h3>
            </div>
            <div class="flex">
                <?php foreach ($katering as $ktr) : ?>
                    <div class="conten">
                        <div class="fotokatering">
                            <img src="<?= base_url() . 'upload/' . $ktr['foto'] ?>" alt="">
                        </div>
                        <h4><?= $ktr['nama_katering']; ?></h4>
                        <label class="radio-btn">
                            <input type="radio" name="katering" id="<?= $ktr['id_katering'] ?>" value="<?= $ktr['id_katering'] ?>">
                            <span class="check"></span>
                            <span class="pil">Pilih</span>
                        </label>
                        <p class="fotdes"><?= $ktr['deskripsi']; ?></p>
                        <p class="harga">Rp <?= number_format($ktr['harga_katering'], 0, '.', ',') ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="body-header">
                <i class='bx bx-sm bxs-camera'></i>
                <h3>Dekumentasi</h3>
            </div>
            <div class="flex">
                <?php foreach ($dokumentasi as $dok) : ?>
                    <div class="conten">
                        <div class="fotodok">
                            <img src="<?= base_url() . 'upload/' . $dok['foto'] ?>" alt="">
                        </div>
                        <h4><?= $dok['nama_dokumentasi']; ?></h4>
                        <label class="radio-btn">
                            <input type="radio" name="dokumentasi" id="<?= $dok['id_dokumentasi'] ?>" value="<?= $dok['id_dokumentasi'] ?>">
                            <span class="check"></span>
                            <span class="pil">Pilih</span>
                        </label>
                        <p class="fotdes"><?= $dok['deskripsi']; ?></p>
                        <p class="harga">Rp <?= number_format($dok['harga_dokumentasi'], 0, '.', ',') ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="body-header">
                <i class='bx bx-sm bx-buildings'></i>
                <h3>Gedung</h3>
            </div>
            <div class="flex">
                <?php foreach ($gedung as $dung) : ?>
                    <div class="conten">
                        <div class="fotodok">
                            <img src="<?= base_url() . 'upload/' . $dung['foto'] ?>" alt="">
                        </div>
                        <h4><?= $dung['nama_gedung']; ?></h4>
                        <label class="radio-btn">
                            <input type="radio" name="gedung" id="<?= $dung['id_gedung'] ?>" value="<?= $dung['id_gedung'] ?>">
                            <span class="check"></span>
                            <span class="pil">Pilih</span>
                        </label>
                        <p class="fotdes"><?= $dung['deskripsi']; ?></p>
                        <p class="harga">Rp <?= number_format($dung['harga_gedung'], 0, '.', ',') ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="subb">
                <p>Pastikan semua yang anda pilih sesuai!</p>
                <button type="submit" name="submit">KIRIM!</button>
            </div>
        </form>
    <?php endif; ?>
</div>