<div class="kontak">
    <div class="konhed">
        <div class="sub">
            <span class="head">Kasih tau apa yang kamu inginkan!</span>
            <span class="subhead">
                Kami tau,Kamu pasti meninginkan pesta pernikahan yang mengaggumkan,tapi ada banyak beberapa pertimbangan,dan itu mengapa kami ada disini untuk membantu mu!
            </span>
            <span class="fotkon">Kami tidak sabar menunggu anda!</span>
        </div>
        <div class="kon-img">
        </div>
        <div class="acces">
        </div>
    </div>
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
</div>