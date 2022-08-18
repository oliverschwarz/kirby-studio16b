<footer>
	<div class="stage">
        <figure class="sticker">
            <img src="<?php echo $site->url(false); ?>/assets/logo-mini.svg">
        </figure>
        <div id="direct-contact">
            <address>
                    <strong><?= $site->companyname() ?></strong><br>
                    <?= $site->address()->kt() ?>
            </address>
            <p>
                <?= $site->phone() ?><br>
                <a href="mailto:<?= $site->email() ?>"><?= $site->email() ?></a>
            </p>
        </div>
    </div>
    <div class="stage">
        <div class="social">
            <h3>Folgen Sie uns auf LinkedIn</h3>
            <ul>
            <?php foreach($site->find('about')->children()->listed() as $person): ?>
                <li class="linkedin"><a href="<?= $person->linkedinlink() ?>"><?= $person->Title() ?></a></li>
            <?php endforeach; ?>
            </ul>
            <aside>
                <?php echo $site->LinkedInText(); ?>
            </aside>
        </div>

        <nav class="standards">
            <ul>
        <?php foreach ($site->find('info')->children()->listed() as $item): ?>
                <li><?php echo $item->title()->link(); ?></li>
        <?php endforeach; ?>
            </ul>
        </nav>

    </div>

</footer>