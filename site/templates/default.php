<?php snippet('meta'); ?>

<?php snippet('header'); ?>

<main>
	<div class="stage">
		<h2 class="introduction">
			<?= $page->intro()->kirbytext() ?>
		</h2>
		<?= $page->text()->kirbytext() ?>
	</div>
</main>

<?php snippet('footer'); ?>