<div class="conten">
    <div class="container">
        <div class="data">
            <a class="close" style="position: absolute;" href="<?= base_url('admin/admin/gedung') ?>"><i class='bx bx-x'></i></a>
            <div class="head">
                <div>
                    <h3><?= $judul; ?></h3>
                </div>
            </div>
            <div class="inputt">
                <div class="box">
                    <div>
                        <img src="<?= base_url('upload/' . $gedung['foto']) ?>" alt="">
                        <div class="nama_foto"><?= $gedung['foto']; ?></div>
                        <form action="<?= base_url('admin/edit/editfoto_gedung/' . $gedung['id_gedung']) ?>" method="post" enctype="multipart/form-data">
                            <input type="file" name="foto" class="editinput">
                            <button class="buton" type="submit">Ganti Foto</button>
                        </form>
                        <!-- <a class="textta" href="<?= base_url('admin/edit/editfoto_gedung/' . $gedung['id_gedung']) ?>">
                            <div class="buton">Ganti Foto</div>
                        </a> -->
                    </div>
                    <form action="<?= base_url('admin/edit/edit_gedung/' . $gedung['id_gedung']) ?>" method="post" enctype="multipart/form-data">
                        <div>
                            <div><label for="rias">Nama Gedung</label></div>
                            <input type="text" name="nama_gedung" id="rias" value="<?= $gedung['nama_gedung'] ?>">
                        </div>
                        <div>
                            <div><label for="Harga">Harga</label></div>
                            <input type="number" name="harga" id="Harga" value="<?= $gedung['harga_gedung'] ?>">
                        </div>
                        <div>
                            <div><label for="deskripsi">Deskripsi</label></div>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"><?= $gedung['deskripsi']; ?></textarea>
                            <!-- <input type="text" name="deskripsi" id="deskripsi"> -->
                        </div>
                        <div class="editbut">
                            <button class="edit" type="submit">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var button = document.querySelector('.buton');
    var ganti = document.querySelector('.ganti');
    button.addEventListener(onclick, function() {
        ganti.classList.add('active');
    });
</script>