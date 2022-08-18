<!-- header stage: logo, navigation -->
<header class="home">

  <div class="stage">

        <div id="logo">
            <a href="<?= $site->url(false); ?>"><img src="<?= $site->url(false); ?>/assets/logo.svg"></a>
        </div>

        <nav id="nav-main">
          <ul class="menu">
          <?php foreach ($site->children()->listed() as $item): ?>
            <li><?= $item->title()->link(); ?></li>
          <?php endforeach; ?>
          
          <?php foreach($kirby->languages() as $language): if ($kirby->language() != $language): ?>
            <!-- <li><a href="<?= $language->url() ?>" hreflang="<?= $language->code() ?>"><?= html($language->code()) ?></a></li> -->
          <?php endif; endforeach; ?>

          </ul>
        </nav>

  </div>
</header>