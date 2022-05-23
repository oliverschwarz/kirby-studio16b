<?php snippet('meta'); ?>

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

	<!-- Startpage home.php wallpaper -->
	<figure class="wallpaper">
			<img src="assets/resilient-wall-c.jpg" alt="An old partly painted wall with the bricks shining through in bright colors">
	</figure>

	<!-- Commitment -->
	<div class="commitment">
		<div class="stage">
			<h1><?= $page->headline() ?></h1>
		</div>
	</div>

</header>

<main>
	<div class="stage">
		<h2 class="introduction">
			<?= $page->intro()->kirbytext() ?>
		</h2>
		<div class="main-content">
			<?= $page->text()->kirbytext() ?>
		</div>
	</div>
</main>

<?php snippet('footer'); ?>