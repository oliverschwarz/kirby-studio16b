<?php snippet('meta'); ?>

<header class="home">
	<div class="stage">

		<div id="logo">
			<img src="/assets/logo-studio16b.svg">
		</div>

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