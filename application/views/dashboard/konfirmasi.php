<div class="konfirmasi">
    <h2>Konfirmasi</h2>

    <table class="informasi">
        <tr>
            <td>Atas Nama</td>
            <td>:</td>
            <td>Wise Wedding</td>
        </tr>
        <tr>
            <td>Bank</td>
            <td>:</td>
            <td>BRI</td>
        </tr>
        <tr>
            <td>No Rek</td>
            <td>:</td>
            <td>4029-653-021-02</td>
        </tr>
    </table>
    <form action="<?= base_url('konfirmasi/confirm') ?>" method="post" enctype="multipart/form-data">
        <table class="user_form">
            <tr>
                <td colspan="2">
                    <span>Bukti Pengiriman</span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="text" name="nama" id="" placeholder="Atas Nama" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="text" name="bank" id="" placeholder="Bank" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="number" name="no_rek" id="" placeholder="No Rekening" required>
                </td>
            </tr>

            <tr class="bukti">
                <td>
                    <span>Bukti Pembayaran</span>
                </td>
                <td>
                    <input type="file" id="foto" name="foto" accept="image/*" required>
                    <label for="foto">Pilih</label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Kirim</button>
                </td>
            </tr>
        </table>
    </form>
</div>
</header>