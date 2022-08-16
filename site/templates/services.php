<?php snippet('meta'); ?>

<?php snippet('header'); ?>

<main>

    <div id="content">

        <div id="highlight">
            <div class="stage">
                <h2><?php echo $page->highlight(); ?></h2>
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

<?php foreach ($page->children()->listed() as $service): ?>
        <div class="stage">
        <?= $service->images()->findBy("template", "cover") ?>
            <h3><?= $service->title() ?></h3>
            <p><?= $service->text() ?></p>
        </div>
<?php endforeach ?>

</main>

            <?php echo $page->text()->kirbytext(); ?>
        </div>
    </div>

</main>

<?php snippet('footer'); ?>