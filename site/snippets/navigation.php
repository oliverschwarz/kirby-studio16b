<nav>
  <ul>
<?php foreach ($site->children()->listed() as $item): ?>
    <li><?php echo $item->title()->link(); ?></li>
<?php endforeach; ?>
  </ul>
</nav>