<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

	<?php $this->inc('elements/header.php'); ?>

		<?php  if ($c->isEditMode()) { ?>
			<div style="min-height: 80px"/>
		<?php  } ?>

			<div id="wrapper">

				<aside>
					<div id = "logo"></div>

					<?php
						$service_box = new Area('Services');
						$service_box->display($c);
					?>
					<h1>Contact</h1>
					<?php
						$contact_box = new Area('Contact');
						$contact_box->display($c);
					?>
					<div id= "social">
						<?php
							$social = new Area('Social');
							$social->display($c);
						?>
					</div>

				</aside>

				<section>
					<h1>Accueil</h1>
					<?php
						$accueil = new Area('Accueil');
						$accueil -> display($c);
					?>
					<h1>Derni&egrave;res nouvelles</h1>
					<?php
						$news = new Area('News');
						$news -> display($c);
					?>
					<h1>Photos</h1>
					<?php
						$photos = new Area('Photos');
						$photos -> display($c);
					?>
				</section>

				<?php $this->inc('elements/footer.php'); ?>
			</div>

			</body>
</html>

