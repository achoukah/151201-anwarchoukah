<?php snippet('header')?>

<main class="main" role="main">

  <div class="text">
    <h1><?php echo $page->title()->html()?></h1>
    <?php echo $page->text()->kirbytext()?>
  </div>

  <hr>

  <?php snippet('projects')?>

  <hr>

  <?php snippet('contactform') ?>


</main>

<?php snippet('footer')?>