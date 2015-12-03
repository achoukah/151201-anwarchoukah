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

</head>
<body>

  <header class="header cf" role="banner">
    <a class="logo" href="<?php echo url()?>">
      <!-- <img src="<?php echo url('assets/images/logo.svg')?>" alt="<?php echo $site->title()->html()?>" /> -->
      <div class="site-title"><?php echo $site->title()->html()?></div>
    </a>
<?php snippet('menu')?>
  </header>