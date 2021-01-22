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
			<div class="intro columns small-12 space-100-top-bottom">
				<div class="logo space-75-bottom"><img class="inline" src="../media/wg-logo-vertical-dark.svg<?php echo $ver ?>"></div>
				<div class="title h1 strong space-75-bottom">
					<span class="inline space-min-top-bottom">
						Turn your <br>
						Gold into <br>
						Money
					</span>
				</div>
				<div class="info link cursor-pointer text-blue-2 space-25-bottom js_modal_trigger" data-mod-id="sell-your-gold">
					<span class="inline h3 strong space-min-top-bottom">
						Sell your gold
						<img class="icon inline" style="width: .75em;" src="../media/icon/icon-box-arrow-right-blue.svg<?php echo $ver ?>">
					</span>
				</div>
				<div class="info link cursor-pointer text-blue-2 space-75-bottom js_modal_trigger" data-mod-id="release-pledged-gold">
					<span class="inline h3 strong space-min-top-bottom">
						Release pledged gold
						<img class="icon inline" style="width: .75em;" src="../media/icon/icon-box-arrow-right-blue.svg<?php echo $ver ?>">
					</span>
				</div>
				<a class="gmaps inline link cursor-pointer text-blue-2" id="js_find_on_maps" target="_blank" href="https://www.google.com/maps/search/white+gold/">
					<span class="inline clearfix space-min-top-bottom">
						<img class="icon inline float-left" src="../media/icon/icon-box-gmaps-blue.svg<?php echo $ver ?>">
						<span class="h4 strong">Find Nearest Branch</span><br>
						<span class="label">View on Google Maps</span>
					</span>
				</a>
			</div>
			<div class="action columns small-12 space-100-top-bottom">
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
<section class="footer-section fill-dark space-100-top-bottom" id="footer-section" data-section-title="Footer Section" data-section-slug="footer-section">
	<div class="container">
		<div class="location row">
			<div class="h5 strong space-min-bottom">60+ Branches</div>
			<div class="h5 strong space-50-bottom">
				<span>Tamil Nadu</span>
				 - 
				<span>Karnataka</span>
				 - 
				<span>Kerala</span>
			</div>
		</div>
		<div class="about row">
			<div class="logo space-min-bottom"><img class="inline" src="../media/wg-logo-small-light.svg<?php echo $ver ?>"></div>
			<div class="h6">White Gold is a venture of the White Group. <br>
			Registered entity, Aadhya Gold Pvt Ltd.</div>
		</div>
	</div>
</section>
<!-- END: Footer Section -->


<?php require_once __DIR__ . '/../inc/below.php'; ?>
