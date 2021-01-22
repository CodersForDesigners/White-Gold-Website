<?php

$footerNavigationMenuItems = \BFS\CMS::getNavigation( 'Footer', '/' );

?>
			<!-- ~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/ -->
			<!-- Page-specific content goes here. -->
			<!-- ~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/ -->


		</div> <!-- END : Page Content -->


		<!-- Lazaro Signature -->
		<?php lazaro_signature(); ?>
		<!-- END : Lazaro Signature -->

	</div><!-- END : Page Wrapper -->

	<?php //require_once 'navigation.php'; ?>

	<?php require_once 'modals.php' ?>

	<!--  ☠  MARKUP ENDS HERE  ☠  -->

	<?php if ( ! BFS_ENV_PRODUCTION ) : ?>
		<?php lazaro_disclaimer(); ?>
	<?php endif; ?>









	<!-- JS Modules -->
	<?php /* <script type="text/javascript" src="/plugins/base64/js-base64-v3.6.0.min.js"></script> */ ?>
	<script type="text/javascript" src="/js/modules/utils.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/navigation.js<?= $ver ?>"></script>
	<?php /* <script type="text/javascript" src="/js/modules/video_embed.js<?= $ver ?>"></script> */ ?>
	<script type="text/javascript" src="/js/modules/modal_box.js<?= $ver ?>"></script>
	<?php if ( ! BFS_ENV_PRODUCTION ) : ?>
		<script type="text/javascript" src="/js/modules/disclaimer.js<?= $ver ?>"></script>
	<?php endif; ?>
	<?php /* <script type="text/javascript" src="/js/modules/phone-country-code.js<?= $ver ?>"></script> */ ?>
	<?php /* <script type="text/javascript" src="/js/modules/cupid/utils.js<?= $ver ?>"></script> */ ?>
	<?php /* <script type="text/javascript" src="/js/modules/cupid/user.js<?= $ver ?>"></script> */ ?>
	<?php /* <script type="text/javascript" src="/js/modules/forms.js<?= $ver ?>"></script> */ ?>
	<?php /* <script type="text/javascript" src="/plugins/goodshare/goodshare-v6.1.5.min.js"></script> */ ?>
	<?php /* <script type="text/javascript" src="/js/modules/sharing.js<?= $ver ?>"></script> */ ?>

	<?php /* <script type="text/javascript" src="/js/modules/carousel.js<?= $ver ?>"></script> */ ?>

	<!-- Other Modules -->
	<?php // require __DIR__ . '/inc/can-user-hover.php' ?>


	<?= getContent( '', 'arbitrary_code -> before_body_closing' ); ?>

	<?php /* Query Monitor CMS plugin */ ?>
	<?php if ( CMS_ENABLED and is_user_logged_in() ) : ?>
		<script type="text/javascript" src="cms/wp-content/plugins/query-monitor/assets/query-monitor.js<?= $ver ?>"></script>
	<?php endif; ?>


</body>

</html>
