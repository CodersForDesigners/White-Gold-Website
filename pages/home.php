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
				<div class="logo space-100-bottom"><img class="block" src="../media/wg-logo-vertical-dark.svg<?php echo $ver ?>"></div>
				<div class="title h1 strong space-100-bottom">
					Turn your <br>
					Gold into <br>
					Money
				</div>
				<div class="link text-blue-2 space-50-bottom js_modal_trigger" data-mod-id="sample-form"><span class="h3 strong">Sell your gold</span></div>
				<div class="link text-blue-2 space-50-bottom js_modal_trigger" data-mod-id="sample-form"><span class="h3 strong">Release pledged gold</span></div>
				<div class="g-maps link text-blue-2">
					<span class="h4 strong">Find Nearest Branch</span><br>
					<span class="label">View on Google Maps</span>
				</div>
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
					<a class="phone-link fill-light text-blue-2 space-min-left-right" href="">
						<span class="h4 inline-middle"><span class="material-icons">phone_in_talk</span></span>
						<span class="h6 inline-middle">Call today</span>
						<span class="h6 inline-middle text-dark">+91 95907 04444</span>
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
		<div class="row">
		</div>
	</div>
</section>
<!-- END: Footer Section -->


<?php require_once __DIR__ . '/../inc/below.php'; ?>
