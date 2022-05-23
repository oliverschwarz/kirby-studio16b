<footer class="cf">
	<div class="stage">

		<div class="sticker">
			<img src="/assets/logo-s16b.svg">
		</div>

		<div class="direct-contact">

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
				<h3>Follow us</h3>
				<ul>
					<li class="linkedin"><a href="https://linkedin.com/in/janina.pakusch">Janina Pakusch</a></li>
					<li class="linkedin"><a href="https://linkedin.com/in/-oschwarz">Oliver Schwarz</a></li>
				</ul>
			</div>

			<nav class="site-nav">
				<ul>
		<?php foreach ($site->find('info')->children()->listed() as $item): ?>
					<li><?php echo $item->title()->link(); ?></li>
		<?php endforeach; ?>
				</ul>
			</nav>

		</div>

	</div>
</footer>

</body>
</html>