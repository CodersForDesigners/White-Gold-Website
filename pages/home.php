<?php
/*
 *
 * This is a sample page you can copy and use as boilerplate for any new page.
 *
 */

require_once __DIR__ . '/../inc/above.php';

// Page-specific preparatory code goes here.

?>



<!-- Sample Section -->
<section class="sample-section">
	<div class="container">
		<div class="row">
			<div class="columns small-12">
			</div>
		</div>
	</div>
</section>
<!-- END: Sample Section -->


<!-- Landing Section -->
<section class="landing-section" id="landing-section" data-section-title="Landing Section" data-section-slug="landing-section">
	<div class="container">
		<div class="row">
			<div class="intro columns small-12 large-6 space-75-top-bottom">
				<div class="logo space-50-bottom"><img class="inline" src="../media/wg-logo-vertical-dark.svg<?php echo $ver ?>"></div>
				<div class="title clip h1 strong space-50-bottom scroll-reveal">
					<span class="edge space-min-top-bottom">
						<span class="thing">
							<span>Turn your </span><br>
							<span>Gold into </span><br>
							<span>Money</span>
						</span>
					</span>
				</div>
				<div class="info clip clip-blue-2 link cursor-pointer text-blue-2 space-25-bottom js_modal_trigger scroll-reveal" data-mod-id="sell-your-gold">
					<span class="edge h3 strong space-min-top-bottom">
						<span class="thing">
							<span>Sell your gold</span>
							<span><img class="icon inline" style="width: .75em;" src="../media/icon/icon-box-arrow-right-blue.svg<?php echo $ver ?>"></span>
						</span>
					</span>
				</div>
				<div class="info clip clip-blue-2 link cursor-pointer text-blue-2 space-50-bottom js_modal_trigger scroll-reveal" data-mod-id="release-pledged-gold">
					<span class="edge h3 strong space-min-top-bottom">
						<span class="thing">
							<span>Release pledged gold</span>
							<span><img class="icon inline" style="width: .75em;" src="../media/icon/icon-box-arrow-right-blue.svg<?php echo $ver ?>"></span>
						</span>
					</span>
				</div>
				<a class="gmaps clip clip-blue-2 inline link cursor-pointer text-blue-2 scroll-reveal" id="js_find_on_maps" target="_blank" href="https://www.google.com/maps/search/white+gold/">
					<span class="edge space-min-top-bottom">
						<span class="thing clearfix">
							<span class="float-left"><img class="icon inline" src="../media/icon/icon-box-gmaps-blue.svg<?php echo $ver ?>"></span>
							<span class="h4 strong">Find Nearest Branch</span><br>
							<span class="label">View on Google Maps</span>
						</span>
					</span>
				</a>
			</div>
			<div class="action columns small-12 large-6 space-75-top-bottom">
				<div class="background-gradient"></div>
				<div class="layer-1"><img class="char block" src="../media/char-1.png<?php echo $ver ?>"></div>
				<div class="layer-2">
					<div class="title h2 strong text-light">
						<span class="inline">
							Get the best <br>
							daily gold price.
						</span>
					</div>
					<a class="phone-link fill-light text-blue-2 space-min-left-right" id="js_contact_number_url" href="tel:+919590704444">
						<span class="h4 inline-middle"><span class="material-icons">phone_in_talk</span></span>
						<span class="h6 inline-middle">Call today</span>
						<span class="h6 inline-middle text-dark" id="js_contact_number_text">+91 95907 04444</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Landing Section -->


<!-- Footer Section -->
<section class="footer-section fill-dark space-75-top-bottom" id="footer-section" data-section-title="Footer Section" data-section-slug="footer-section">
	<div class="container">
		<div class="row">
			<div class="location columns small-12">
				<span class="h5 strong inline space-min-bottom space-25-right">60+ Branches</span><br class="hide-large hide-xlarge">
				<span class="h5 strong inline space-50-bottom">
					<span>Tamil Nadu</span>
					 - 
					<span>Karnataka</span>
					 - 
					<span>Kerala</span>
				</span>
			</div>
			<div class="about columns small-12">
				<span class="logo inline-middle space-min-bottom space-25-right"><img class="inline" src="../media/wg-logo-small-light.svg<?php echo $ver ?>"></span><br class="hide-large hide-xlarge">
				<span class="h6 inline-middle">White Gold is a venture of the White Group. <br>
				Registered entity, Aadhya Gold Pvt Ltd.</span>
			</div>
		</div>
	</div>
</section>
<!-- END: Footer Section -->


<?php require_once __DIR__ . '/../inc/below.php'; ?>
