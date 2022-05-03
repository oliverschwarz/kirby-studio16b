<nav>
  <ul>
<?php foreach ($site->find('info')->children()->listed() as $item): ?>
    <li><?php echo $item->title()->link(); ?></li>
<?php endforeach; ?>
  </ul>
</nav>