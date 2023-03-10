<!-- header stage: logo, navigation -->
<header class="home">

  <div class="stage cf">

        <div id="logo">
            <a href="<?= $site->url(false); ?>"><img src="<?= $site->url(false); ?>/assets/logo.svg"></a>
        </div>

        <nav id="nav-main">
          <ul class="menu">
          <?php if (!$page->isHomeOrErrorPage()): ?>
            <li><a href="<?= $site->url() ?>">Home</a></li>
          <?php endif; ?>
          <?php foreach ($site->children()->listed() as $item): ?>
            <li<?php if($item->isActive()): ?> class="selected"<?php endif; ?>><?= $item->title()->link(); ?></li>
          <?php endforeach; ?>
          
          <?php foreach($kirby->languages() as $language): if ($kirby->language() != $language): ?>
            <li class="language-icon <?= $language->code() ?>"><a href="<?= $language->url() ?>" hreflang="<?= $language->code() ?>"><img src="/assets/<?= $language->code() ?>.svg" width="20" height="20" alt="<?= $language->code() ?>"></a></li>
          <?php endif; endforeach; ?>

          </ul>
        </nav>

  </div>
</header>