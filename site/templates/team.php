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
        <?= $member->image() ?>
            <h3><?= $member->title() ?></h3>
            <h4><?= $member->intro() ?></h4>
            <p><?= $member->about() ?></p>
        </div>
<?php endforeach ?>

</main>

            <?= $page->text()->kirbytext(); ?>
        </div>
    </div>

</main>

<?php snippet('footer'); ?>