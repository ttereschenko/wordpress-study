<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <?php wp_nav_menu([
            'theme_location' => 'top-menu',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'menu_class' => 'nav navbar-text',
        ]); ?>
    </div>
</nav>
<main class="container">
    <div class="row">
        <div class="col-8">
