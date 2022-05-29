<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url('assets/fix/logo.png') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/dash.css') ?>">
    <title><?= $judul; ?></title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div>
                <img src="<?= base_url('assets/fix/logo.png') ?>" alt="">
                <span>Wise Wedding</span>
            </div>
            <ul>
                <?php foreach ($link as $lk) : ?>
                    <?php if ($lk['link'] == $header) : ?>
                        <li class="active">
                        <?php else : ?>
                        <li>
                        <?php endif; ?>
                        <i class='<?= $lk['icon'] ?>'></i>
                        <a href="<?= base_url($lk['url']) ?>"><?= $lk['link']; ?></a>
                        </li>
                    <?php endforeach; ?>
                    <a class="outt" href="<?= base_url('user/logout') ?>">
                        <li>
                            <i class="bx bx-log-out"></i>
                            Keluar
                        </li>
                    </a>
            </ul>
        </div>
        <div class="container_2">
            <div class="header">
                <div><?= $header; ?></div>
                <div>
                    <div style="margin-right:5px;"><img style="border-radius:50%;" src="<?= base_url('upload/profil.jpg') ?>" alt="" width="30px" height="30px"></div>
                    <div>
                        <span>Anwar Ramdhani</span>
                        <small>Super Admin</small>
                    </div>
                </div>
                <!-- <ul>
                    <li>Dashboard</li>
                    <li>
                        <span>Anwar Ramdhani</span>
                        <small>Super Admin</small>
                    </li>
                </ul> -->
            </div>