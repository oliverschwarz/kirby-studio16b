<?php snippet('header') ?>

<?php snippet('languages') ?>

<?php snippet('navigation') ?>

<h1><?= $page->title() ?></h1>

<h2 class="introduction">
	<?= $page->intro()->kirbytext() ?>
</h2>

<main>
	<?= $page->text()->kirbytext() ?>
</main>


<?php snippet('siteinfo') ?>

<?php snippet('footer') ?>