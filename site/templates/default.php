<?php snippet('meta'); ?>

<?php snippet('header'); ?>

<main>
	<div class="stage">
		<h1><?= $page->title() ?></h1>
		<?= $page->text()->kirbytext() ?>
	</div>
</main>

<?php snippet('footer'); ?>