<?php snippet('meta'); ?>

<?php snippet('header'); ?>

<main>

    <div id="highlight" class="light">
		<div class="stage">
            <h2>
                <?php echo $page->highlight(); ?>
            </h2>
		</div>
    </div>
    <figure class="featured">
        <?php echo $page->image(); ?>
    </figure>

    <div id="intro">
        <div class="stage">
            <p><?php echo $page->intro(); ?></p>
        </div>
    </div>

    <div id="content">
       <div class="stage">
            <?php echo $page->text()->kirbytext(); ?>
        </div>
    </div>

</main>

<?php snippet('footer'); ?>