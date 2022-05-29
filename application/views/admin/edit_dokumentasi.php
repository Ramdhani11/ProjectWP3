<div class="conten">
    <div class="container">
        <div class="data">
            <a class="close" style="position: absolute;" href="<?= base_url('admin/admin/dokumentasi') ?>"><i class='bx bx-x'></i></a>
            <div class="head">
                <div>
                    <h3><?= $judul; ?></h3>
                </div>
            </div>
            <div class="inputt">
                <div class="box">
                    <div>
                        <img src="<?= base_url('upload/' . $dokumentasi['foto']) ?>" alt="">
                        <div class="nama_foto"><?= $dokumentasi['foto']; ?></div>
                        <form action="<?= base_url('admin/edit/editfoto_dokumentasi/' . $dokumentasi['id_dokumentasi']) ?>" method="post" enctype="multipart/form-data">
                            <input type="file" name="foto" class="editinput">
                            <button class="buton" type="submit">Ganti Foto</button>
                        </form>
                        <!-- <a class="textta" href="<?= base_url('admin/edit/editfoto_dokumentasi/' . $dokumentasi['id_dokumentasi']) ?>">
                            <div class="buton">Ganti Foto</div>
                        </a> -->
                    </div>
                    <form action="<?= base_url('admin/edit/edit_dokumentasi/' . $dokumentasi['id_dokumentasi']) ?>" method="post" enctype="multipart/form-data">
                        <div>
                            <div><label for="rias">Nama dokumentasi</label></div>
                            <input type="text" name="nama_dokumentasi" id="rias" value="<?= $dokumentasi['nama_dokumentasi'] ?>">
                        </div>
                        <div>
                            <div><label for="Harga">Harga</label></div>
                            <input type="number" name="harga" id="Harga" value="<?= $dokumentasi['harga_dokumentasi'] ?>">
                        </div>
                        <div>
                            <div><label for="deskripsi">Deskripsi</label></div>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"><?= $dokumentasi['deskripsi']; ?></textarea>
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