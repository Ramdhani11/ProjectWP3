<div class="conten">
    <div class="container">
        <div class="data">
            <a class="close" style="position: absolute;" href="<?= base_url('admin/admin/rias') ?>"><i class='bx bx-x'></i></a>
            <div class="head">
                <div>
                    <h3><?= $judul; ?></h3>
                </div>
            </div>
            <div class="inputt">
                <div class="box">
                    <div>
                        <img class="rias" src="<?= base_url('upload/' . $rias['foto']) ?>" alt="">
                        <div class="nama_foto rias"><?= $rias['foto']; ?></div>
                        <form action="<?= base_url('admin/edit/editfoto_rias/' . $rias['id_rias']) ?>" method="post" enctype="multipart/form-data">
                            <input type="file" name="foto" class="editinput">
                            <button class="buton" type="submit">Ganti Foto</button>
                        </form>
                    </div>
                    <form action="<?= base_url('admin/edit/edit_rias/' . $rias['id_rias']) ?>" method="post" enctype="multipart/form-data">
                        <div>
                            <div><label for="rias">Nama Rias</label></div>
                            <input type="text" name="nama_rias" id="rias" value="<?= $rias['nama_rias'] ?>">
                        </div>
                        <div>
                            <div><label for="Harga">Harga</label></div>
                            <input type="number" name="harga" id="Harga" value="<?= $rias['harga_rias'] ?>">
                        </div>
                        <div>
                            <div><label for="deskripsi">Deskripsi</label></div>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"><?= $rias['deskripsi']; ?></textarea>
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