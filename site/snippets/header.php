<header class="home">
  <div class="stage">

    <div id="logo">
      <img src="/assets/logo-studio16b.svg">
    </div>

    <nav class="main-nav">
      <div class="stage">
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
        <?php foreach ($site->children()->listed() as $item): ?>
          <li><?php echo $item->title()->link(); ?></li>
        <?php endforeach; ?>
        </ul>
      </div>
    </nav>

  </div>

  <!-- Commitment -->
  <div class="commitment">
    <div class="stage">
      <h1><?= $page->headline() ?></h1>
    </div>
  </div>

</header>
