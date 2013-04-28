<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
	<div id="footer">
			<?php echo t('ES-Animation - Tous droits réservés')?>
			<?php
			$u = new User();
			if ($u->isRegistered()) { ?>
				<?php
				if (Config::get("ENABLE_USER_PROFILES")) {
					$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
				} else {
					$userName = $u->getUserName();
				}
				?>
				<span class="sign-in"><?php echo t(' // Identifié .', $userName)?> <a href="<?php echo $this->url('/login', 'logout')?>"><?php echo t('Sign Out')?></a></span>
			<?php  } ?>
	</div>

<?php  Loader::element('footer_required'); ?>


