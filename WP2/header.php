<?php
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$segments = explode('/', $uri);
$first_segment = isset($segments[2]) ? $segments[2] : '';
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$basePath = $protocol . "://$host/endrio_24006003/WP2";
?>

<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Berbasis Website</title>
    <link rel="stylesheet" href="<?= $basePath ?>/css/style.css">
    <?php if ($first_segment === 'module5'): ?>
        <link rel="stylesheet" href="<?= $basePath ?>/css/styleModule5.css">
    <?php elseif ($first_segment === 'module6'): ?>
        <link rel="stylesheet" href="<?= $basePath ?>/css/styleModule6.css">
        <link rel="stylesheet" href="<?= $basePath ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $basePath ?>/css/dataTables.bootstrap5.min.css">
    <?php endif; ?>
</head>
