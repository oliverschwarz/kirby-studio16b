<?php snippet('meta'); ?>

<?php snippet('header'); ?>

<main>

    <div id="content">

        <figure class="featured">
            <?= $page->image(); ?>
        </figure>

        <div id="intro">
            <div class="stage">
                <p><?= $page->intro(); ?></p>
            </div>
        </div>

<?php foreach ($page->children()->listed() as $member): ?>
        <div class="stage">
            <h2><?= $member->title() ?></h2>
            <?= $member->image() ?>
            <h4><?= $member->intro() ?></h4>
            <p><?= $member->about()->kt() ?></p>
        </div>
<?php endforeach ?>

</main>

            <?= $page->text()->kirbytext(); ?>
        </div>
    </div>

</main>

<?php snippet('footer'); ?>