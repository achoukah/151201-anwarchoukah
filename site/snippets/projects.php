<h2>Projects</h2>


<ul class="teaser">
  <?php foreach(page('projects')->children()->visible()->limit(16) as $project): ?>
  <li>
    <a href="<?php echo $project->url() ?>">
      <h3><?php echo $project->title()->html() ?></h3>
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
      <span class="project-thumb">
        <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
      </span>
      <?php endif ?>
    </a>
  </li>
  <?php endforeach ?>


</ul>
