<nav class="languages">
  <ul>
    <?php foreach($kirby->languages() as $language): ?>
    <li<?php e($kirby->language() == $language, ' class="active"') ?>>
      <a href="<?php echo $language->url() ?>" hreflang="<?php echo $language->code() ?>">
        <?php echo html($language->name()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
