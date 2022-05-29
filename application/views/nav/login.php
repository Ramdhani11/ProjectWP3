<div class="contact">
    <div class="login">
        <div class="header">
            <h3>Login Page</h3>
        </div>
        <form class="form" action="<?= base_url('user/login') ?>" method="post">
            <?= $this->session->flashdata('pesan'); ?>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php set_value('email') ?>">
                <small style="color: red;"><?= form_error('email'); ?></small>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <small style="color: red;"><?= form_error('password'); ?></small>
            </div>
            <button type="submit">
                Login
            </button>
        </form>
    </div>
</div>