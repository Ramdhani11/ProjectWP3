<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>
    <link rel="shortcut icon" href="<?= base_url('assets/fix/logo.png') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fix/head.css') ?>">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <nav>
            <ul>
                <?php foreach ($link as $lik) : ?>
                    <?php if ($judul == $lik['judul']) : ?>
                        <li class="active"><a href="<?= base_url($lik['url']) ?>"><?= $lik['link']; ?></a></li>
                    <?php else : ?>
                        <li><a href="<?= base_url($lik['url']) ?>"><?= $lik['link']; ?></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>
                <!-- <li><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li><a href="">Konfirmasi Pembayaran</a></li> -->
                <li><a href="<?= base_url('user/logout') ?>">Keluar</a></li>
            </ul>
            <!-- <a href="">Keluar</a> -->
        </nav>