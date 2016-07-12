<?php
$config["sitename"] = "국토교통부 통계누리";
$config["mode"] = "front";
$config["isDev"] = false;
$config["cssTableMinWidth"] = 640;
$config["cssDesktopMinWidth"] = 1024;
$config["cssLargeDesktopMinWidth"] = 1280;
$config["imageFolder"] = ($config['isDev'] === true && (isset($config['isBuild']) && !$config['isBuild'] || !isset($config['isBuild']))) ? "/resources-dev/" . $config["mode"] . "/images" : "/resources/" . $config["mode"] . "/images";
?><!DOCTYPE html>
<html lang="ko-KR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?php echo $config["sitename"]; ?> 홈페이지 입니다." />
<title><?php echo $config["sitename"]; ?></title>
<link rel="apple-touch-icon" sizes="57x57" href="/resources/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/resources/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/resources/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/resources/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/resources/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/resources/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/resources/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/resources/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/resources/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/resources/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/resources/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/resources/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/resources/favicon/favicon-16x16.png">
<link rel="shortcut icon" href="/resources/favicon/favicon.ico">
<link rel="manifest" href="/resources/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/resources/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<?php if($config['isDev'] === true && (isset($config['isBuild']) && !$config['isBuild'] || !isset($config['isBuild']))){ ?>
<link rel="stylesheet/less" href="/resources-dev/<?php echo $config["mode"]; ?>/less/style.less" />
<link rel="stylesheet" href="/resources/<?php echo $config["mode"]; ?>-legacy/css/legacy-style.css" />
<script src="/resources-dev/<?php echo $config["mode"]; ?>/etc/less.min.js"></script>
<?php }else{ ?>
<link rel="stylesheet" href="/resources/<?php echo $config["mode"]; ?>/css/style.min.css" />
<link rel="stylesheet" href="/resources/<?php echo $config["mode"]; ?>-legacy/css/legacy-style.css" />
<?php } ?>
<?php if($config['isDev'] === true && (isset($config['isBuild']) && !$config['isBuild'] || !isset($config['isBuild']))){ ?>
<!--[if lt IE 9]><script src="/resources-dev/<?php echo $config["mode"]; ?>/jsvendor/jquery-1.12.2.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="/resources-dev/<?php echo $config["mode"]; ?>/jsvendor-dev-only/jquery.js"></script><![endif]-->
<?php echoJsInPath('/resources-dev/' . $config["mode"] . '/jspack/'); ?>
<?php } else { ?>
<!--[if lt IE 9]><script src="/resources/<?php echo $config["mode"]; ?>/js/vendor/jquery-1.12.2.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="/resources/<?php echo $config["mode"]; ?>/js/vendor/jquery.min.js"></script><![endif]-->
<script src="/resources/<?php echo $config["mode"]; ?>/js/script.min.js"></script>
<?php } ?>
</head>
<body class="<?php echo getBodyClass($bodyClass); ?>">
