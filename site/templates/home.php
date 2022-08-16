<?php snippet('meta'); ?>

<header class="home cf">

	<div id="logo">
		<img src="/assets/logo-studio16b.svg" alt="Studio16b Logo">
	</div>

	<nav id="site-nav">
	  	<ul class="menu">
			<?php foreach ($site->children()->listed() as $item): ?>
				<li><?php echo $item->title()->link(); ?></li>
			<?php endforeach; ?>
	  	</ul>
	</nav>

</header>

<main>

    <figure class="wallpaper">
        <img src="assets/resilient-wall-c.jpg" alt="An old partly painted wall with the bricks shining through in bright colors">
    </figure>

	<h1><?= $page->headline() ?></h1>

</main>

<?php snippet('footer'); ?>