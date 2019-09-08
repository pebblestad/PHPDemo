<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="/template/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrap">

    <header>
        <div class="title">
        <h1><?php site_name(); ?></h1>
        </div>
        <nav class="menu">
            <?php nav_menu(); ?>
        </nav>
    </header>

    <article>
        
        <h2 id="subtitle"><?php page_title(); ?></h2>
        <?php page_content(); ?>
    </article>

    <footer>
        <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?></small>
    </footer>
</div>
</body>
</html>