<nav class="languages">
  <div class="stage">
    <ul>
      <?php foreach($kirby->languages() as $language): ?>
      <li<?php e($kirby->language() == $language, ' class="active"') ?>>
        <a href="<?= $language->url() ?>" hreflang="<?= $language->code() ?>">
          <?= html($language->name()) ?>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
  </div>
</nav>
