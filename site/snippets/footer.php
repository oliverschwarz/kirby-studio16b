<footer>
	<div class="stage">
        <figure class="sticker">
            <img src="<?php echo $site->url(false); ?>/assets/logo-mini.svg">
        </figure>
    </div>
    <div class="direct-contact stage">

        <address>
                <strong>Studio16b</strong><br>
                Weegener Str. 16b<br>
                53797 Lohmar
        </address>

        <p>
            +49 1579 2347346<br>
            <a href="mailto:hallo@studio16b.com">hallo@studio16b.com</a>
        </p>

        <div class="social">
            <h3>Folgen Sie uns auf LinkedIn</h3>
            <ul>
                <li class="linkedin"><a href="">Janina Pakusch</a></li>
                <li class="linkedin"><a href="">Oliver Schwarz</a></li>
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