<!-- header stage: logo, navigation -->
<header class="home">

  <div class="stage cf">

        <div id="logo">
            <a href="<?= $site->url(false); ?>"><img src="<?= $site->url(false); ?>/assets/logo.svg"></a>
        </div>

        <nav id="nav-main">
          <ul class="menu">
          <?php foreach ($site->children()->listed() as $item): ?>
            <li<?php if($item->isActive()): ?> class="selected"<?php endif; ?>><?= $item->title()->link(); ?></li>
          <?php endforeach; ?>
          
          <?php foreach($kirby->languages() as $language): if ($kirby->language() != $language): ?>
            <li class="language-icon <?= $language->code() ?>"><a href="<?= $language->url() ?>" hreflang="<?= $language->code() ?>"><img src="/assets/<?= $language->code() ?>.svg" width="16" height="16"></a></li>
          <?php endif; endforeach; ?>

          </ul>
        </nav>

  </div>
</header>