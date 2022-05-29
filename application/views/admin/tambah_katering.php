<div class="conten">
    <div class="container">
        <div class="data">
            <a class="close" style="position: absolute;" href="<?= base_url('admin/admin/katering') ?>"><i class='bx bx-x'></i></a>
            <div class="head">
                <div>
                    <h3><?= $judul; ?></h3>
                </div>
            </div>
            <div class="inputt">
                <div class="box">
                    <form action="<?= base_url('admin/tambah/tambah_katering') ?>" method="post" enctype="multipart/form-data">
                        <?php if ($this->session->flashdata()) : ?>
                            <div class="error"><?= $this->session->flashdata('pesan'); ?></div>
                        <?php endif; ?>
                        <div>
                            <div><label for="rias">Nama Katering</label></div>
                            <input type="text" name="nama_katering" id="rias">
                        </div>
                        <div class="katering">
                            <div><label for="Harga">Harga</label></div>
                            <input type="number" name="harga" id="Harga">
                        </div>
                        <div class="kate">
                            <div><label for="jumlah">Jumlah Katering</label></div>
                            <input type="number" name="jumlah" id="jumlah">
                        </div>
                        <div class="neew">
                            <div><label for="deskripsi">Deskripsi</label></div>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                            <!-- <input type="text" name="deskripsi" id="deskripsi"> -->
                        </div>
                        <div class="neew">
                            <span style="color:rgb(148, 148, 148) ;">Upload Foto</span>
                            <span><input type="file" name="foto" id=""></span>
                            <span><button type="submit">Tambah</button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>