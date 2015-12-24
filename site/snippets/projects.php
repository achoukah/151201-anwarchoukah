<h2>Latest projects</h2>

<ul class="teaser">
  <?php foreach(page('projects')->children()->visible()->limit(16) as $project): ?>
  <li>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>" class="project-thumb">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
    <p><?php echo $project->text()->excerpt(140) ?></p>
    <p><a class="read-more" href="<?php echo $project->url() ?>">Read More</a></p>

  </li>
  <?php endforeach ?>


</ul>
