<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?= bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>

<body>

    <header class="header ">
        <div class="logo">
            <a href="<?=site_url('/')?>">
                <img src="<?= get_theme_file_uri('img/logo.png') ?>" alt="">
            </a>
        </div>

        <div class="menu">
            <ul>
                <li><a class="primary-color " href="<?=site_url('agenda')?>">Agenda</a></li>
                <!-- <li>Notas</li> -->
            </ul>
        </div>
    </header>