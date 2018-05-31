<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?php echo $page->title()->html() ?></h1>

    <ul class="meta cf">
      <li><b>Year:</b> <time><?php echo $page->year() ?></time></li>
      <li><b>Tags:</b> <?php echo $page->tags() ?></li>
    </ul>

    <div class="text">
      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>

      <?php endforeach ?>
      <?php echo $page->text()->kirbytext() ?>


    </div>

    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>

  </main>

<?php snippet('footer') ?>