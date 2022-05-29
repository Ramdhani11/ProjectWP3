<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>
    <link rel="shortcut icon" href="<?= base_url('assets/fix/logo.png') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fix/style.css') ?>">
</head>

<body>
    <header>
        <nav>
            <div class="logo"><img src="<?= base_url('assets/fix/neww/logo.svg') ?>" alt=""></div>
            <div class="nav">
                <ul>
                    <?php foreach ($link as $li) : ?>
                        <li>
                            <?php if ($judul == $li['judul']) : ?>
                                <a class="active" href="<?= base_url($li['url']) ?>"><?= $li['link']; ?></a>
                            <?php else : ?>
                                <a href="<?= base_url($li['url']) ?>"><?= $li['link']; ?></a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </nav>
        <div class="hedd">
            <?php foreach ($link as $li) : ?>
                <?php if ($judul == $li['judul']) : ?>
                    <img src="<?= base_url('assets/fix/neww/') . $li['image'] ?>" alt="">
                <?php else : ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </header>