<div class="conten">
    <div class="container">
        <div class="data">
            <a class="close" style="position: absolute;" href="<?= base_url('admin/admin/dekorasi') ?>"><i class='bx bx-x'></i></a>
            <div class="head">
                <div>
                    <h3><?= $judul; ?></h3>
                </div>
            </div>
            <div class="inputt">
                <div class="box">
                    <div>
                        <img src="<?= base_url('upload/' . $dekorasi['foto']) ?>" alt="">
                        <div class="nama_foto"><?= $dekorasi['foto']; ?></div>
                        <form action="<?= base_url('admin/edit/editfoto_dekorasi/' . $dekorasi['id_dekorasi']) ?>" method="post" enctype="multipart/form-data">
                            <input type="file" name="foto" class="editinput">
                            <button class="buton" type="submit">Ganti Foto</button>
                        </form>
                        <!-- <a class="textta" href="<?= base_url('admin/edit/editfoto_dekorasi/' . $dekorasi['id_dekorasi']) ?>">
                            <div class="buton">Ganti Foto</div>
                        </a> -->
                    </div>
                    <form action="<?= base_url('admin/edit/edit_dekorasi/' . $dekorasi['id_dekorasi']) ?>" method="post" enctype="multipart/form-data">
                        <div>
                            <div><label for="rias">Nama Dekorasi</label></div>
                            <input type="text" name="nama_dekorasi" id="rias" value="<?= $dekorasi['nama_dekorasi'] ?>">
                        </div>
                        <div>
                            <div><label for="Harga">Harga</label></div>
                            <input type="number" name="harga" id="Harga" value="<?= $dekorasi['harga_dekorasi'] ?>">
                        </div>
                        <div>
                            <div><label for="deskripsi">Deskripsi</label></div>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"><?= $dekorasi['deskripsi']; ?></textarea>
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