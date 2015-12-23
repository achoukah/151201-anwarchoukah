<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>

    <?php snippet('projects') ?>

  </main>

<?php snippet('footer') ?>tBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>" class="project-thumb">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
    <p><?php echo $project->text()->excerpt(80) ?></p>
    <p><a class="read-more" href="<?php echo $project->url() ?>">Read More</a></p>

  </li>
  <?php endforeach ?>
</ul>
