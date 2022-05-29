<section>
    <h5>Selamat Datang</h5>
    <p>
        Wise Wedding,<span class="iten">Wedding Planner</span>.Kami adalah solusi untuk anda yang sedang pusing untuk recana pernikahan.Kami ada untuk anda dengan team kami yang sudah profesional,Percayakan acara pernikahan anda kepada kami.
    </p>
    <h5>Kontak Kami</h5>
    <div class="contact">
        <form action="<?= base_url('user') ?>" method="post">
            <div>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div>
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="telp">No Telpon</label>
                <input type="number" name="no_telp" id="telp">
            </div>
            <label for="req">Request</label>
            <textarea name="pertm" id="req" cols="30" rows="10"></textarea>
            <button type="submit">
                Kirim
            </button>
        </form>
    </div>
</section>
<section class="rupe">
    <div class="imgg">
        <img src="<?= base_url('assets/fix/img/pexels-edward-eyer-1045541.jpg') ?>" alt="">
    </div>
    <div class="imgg">
        <img src="<?= base_url('assets/fix/img/pexels-rene-asmussen-1345574.jpg') ?>" alt="">
    </div>
    <div class="imgg">
        <img src="<?= base_url('assets/fix/img/pexels-terje-sollie-313707.jpg') ?>" alt="">
    </div>

</section>