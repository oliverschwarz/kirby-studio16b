<?php snippet('meta'); ?>

<?php snippet('header'); ?>

<main>

    <div id="highlight" class="light">
		<div class="stage">
            <h2>
                <?= $page->highlight(); ?>
            </h2>
		</div>
    </div>
    <figure class="featured">
        <div class="stage">
            <?= $page->image(); ?>
        </div>
    </figure>

    <div id="intro">
        <div class="stage">
            <p><strong><?= $page->intro(); ?></strong></p>
        </div>
    </div>

    <div id="content">
       <div class="stage">
            <?= $page->text()->kirbytext(); ?>
        </div>
    </div>

    <div id="testimonials">
        <div class="stage">
        <h2><?= $site->find('testimonials')->title() ?></h2>
        <?php foreach ($site->find('testimonials')->children()->listed() as $item): ?>
            <article class="cf">
                <figure>
                    <?= $item->image() ?>
                </figure>
                <?= $item->text()->kirbytext(); ?>
                <p><a href="<?= $item->link() ?>"><?= $item->author(); ?> (<?= $item->company() ?>)</a></p>
            </article>
        <?php endforeach; ?>

        </div>
    </div>

</main>

<?php snippet('footer'); ?>