<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html()?> | <?php echo $page->title()->html()?></title>
  <meta name="description" content="<?php echo $site->description()->html()?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html()?>">

  <link href='https://fonts.googleapis.com/css?family=Rubik:300,400,500,300italic,500italic|Roboto+Mono:300' rel='stylesheet' type='text/css'>

<?php echo css('assets/css/main.css')?>

<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffb300">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffb300">

</head>
<body>

  <header class="header cf" role="banner">
    <a class="logo" href="<?php echo url()?>">
      <!-- <img src="<?php echo url('assets/images/logo.svg')?>" alt="<?php echo $site->title()->html()?>" /> -->
      <div class="site-title"><?php echo $site->title()->html()?></div>
    </a>
<?php snippet('menu')?>
  </header>