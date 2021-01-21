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
<section class="landing-section fill-red-2 space-50-top" id="landing-section" data-section-title="Landing Section" data-section-slug="landing-section">
	<div class="container">
		<div class="row">
			<div class="columns small-12 large-5">
				<div class="row">
					<div class="columns small-12 medium-4 space-25-top-bottom">
						<div class="logo"><img class="block" src="../media/wh-logo-large-dark.svg<?php echo $ver ?>"></div>
					</div>
					<div class="columns small-12 medium-10 large-12 space-50-top-bottom">
						<div class="h5 strong space-min-bottom">Curated rental-yielding assets, with</div>
						<div class="h1 strong">returns you cannot ignore.</div>
						<div class="h5 text-blue-4 space-50-top">Invest in rental-yielding real estate assets that are backed by a business model. Get the right returns, with managed volatility and capital protection.</div>
					</div>
				</div>
			</div>
			<div class="columns small-12 large-6 large-offset-1 space-25-bottom">
				<div class="char-image">
					<img class="block" src="../media/char-1.png<?php echo $ver ?>">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Landing Section -->


<!-- Benefits Section -->
<style type="text/css">

	.benefits-section .minimum-investment-amount,
	.benefits-section .emi,
	.benefits-section .lumpsum {
		perspective: 5000px;
		cursor: pointer;
	}
	.benefits-section .minimum-investment-amount:focus,
	.benefits-section .emi:focus,
	.benefits-section .lumpsum:focus {
		outline: none;
	}
	.benefits-section .front,
	.benefits-section .back {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		transition: transform 0.4s ease-out;
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;
	}
	.benefits-section .front {
		padding: var(--space-50);
		transform: rotateY( 0turn );
	}
	@media ( min-width: 1040px ) {
		.benefits-section .front {
			padding: var(--space-25);
		}
	}
	.benefits-section .back {
		display: flex;
		justify-content: center;
		align-items: center;
		transform: rotateY( 0.5turn );
	}

	.benefits-section :focus .front,
	.benefits-section :focus:focus-within .front,
	.benefits-section .flipped .front {
		transform: rotateY( 0.5turn );
	}
	.benefits-section :focus .back,
	.benefits-section :focus:focus-within .back,
	.benefits-section .flipped .back {
		transform: rotateY( 1turn );
	}

</style>
<section class="benefits-section fill-red-2 space-25-top space-75-bottom" id="benefits-section" data-section-title="Benefits Section" data-section-slug="benefits-section">
	<div class="container">
		<div class="row">
			<div class="columns small-12 tile-grid">
				<div class="tile t-1 fill-blue-4">
					<!-- (1.) -->
					<div class="h4 strong space-50-bottom">Why not invest in a 3BHK flat and get a 7% return on this investment?</div>
					<div class="h6 strong space-50-bottom clearfix">
						<img class="icon float-left" src="../media/icon/icon-right-arrow-box-red.svg<?php echo $ver ?>">
						The return is better than a fixed deposit.
					</div>
					<div class="hn strong text-red-2">7%</div>
				</div>
				<div class="tile t-2">
					<!-- (2.) -->
					<div class="hn strong text-uppercase line-height-small">Invest</div>
				</div>
				<div class="tile t-3 outline-red-2 hide-small">
					<!-- (3.) -->
					<div class="h6 strong">own an apartment with <br>a business model</div>
				</div>
				<div class="tile t-4 minimum-investment-amount" tabindex="-1">
					<div class="front fill-blue-4">
						<!-- (4.) -->
						<div class="h6 strong space-25-bottom"><span class="text-red-2">minimum</span> investment <br>amount</div>
						<div class="hn strong text-red-2">₹14 Lakhs</div>
					</div>
					<div class="back fill-blue-4">
						<div>
							<a class="label block text-lowercase" href="/lumpsum">Read More <span class="material-icons">subject</span></a>
							<a class="label inline text-lowercase js_modal_trigger" data-mod-id="share" href="">Share <span class="material-icons" style="transform: scaleX(-1);">reply</span></a>
						</div>
					</div>
				</div>
				<div class="tile t-5 fill-red-3 hide-small">
					<!-- (5.) -->
					<div class="h6 strong line-height-xlarge">Bangalore <br>Delhi <br>Pune</div>
				</div>
				<div class="tile t-6 fill-red-3 hide-small">
					<!-- (6.) -->
					<div class="h6 strong">walking distance from SEZs, tech parks & schools</div>
				</div>
				<div class="tile t-7 emi" tabindex="-1">
					<div class="front fill-dark">
						<!-- (7.) -->
						<div class="h5 strong space-min-bottom">EMI</div>
						<div class="label strong">Invest only the down payment and <span class="text-red-2">let us fund your EMIs.</span></div>
					</div>
					<div class="back fill-dark">
						<div>
							<a class="label block text-lowercase" href="/lumpsum">Read More <span class="material-icons">subject</span></a>
							<a class="label inline text-lowercase js_modal_trigger" data-mod-id="share" href="">Share <span class="material-icons" style="transform: scaleX(-1);">reply</span></a>
						</div>
					</div>
				</div>
				<div class="tile t-8" style="background-image: url('../media/char-4.png<?php echo $ver ?>'); background-size: cover; background-position: center center;">
					<!-- (8.) -->
				</div>
				<div class="tile t-9 lumpsum" tabindex="-1">
					<div class="front fill-dark">
						<!-- (9.) -->
						<div class="h5 strong space-min-bottom">Lumpsum</div>
						<!-- <div class="label strong">Make a <span class="text-red-2">one-time investment</span> <br>and enjoy a monthly fixed <br>rental income.</div> -->
						<div class="label strong">Get a monthly fixed income, <br>on a <span class="text-red-2">one-time investment.</span></div>
					</div>
					<div class="back fill-dark">
						<div>
							<a class="label block text-lowercase" href="/lumpsum">Read More <span class="material-icons">subject</span></a>
							<a class="label inline text-lowercase js_modal_trigger" data-mod-id="share" href="">Share <span class="material-icons" style="transform: scaleX(-1);">reply</span></a>
						</div>
					</div>
				</div>
				<div class="tile t-10">
					<!-- (10.) -->
					<div class="hn strong text-uppercase line-height-small">Earn</div>
				</div>
				<div class="tile t-11 outline-red-2">
					<!-- (11.) -->
					<div class="h3 strong">9+9 Years</div>
					<div class="h5 strong">Rental Agreement</div>
				</div>
				<div class="tile t-12 fill-blue-4">
					<!-- (12.) -->
					<div class="h5 strong">fixed <span class="text-red-2">monthly income</span></div>
					<div class="hn strong text-red-2">6% to 7.5%</div>
				</div>
				<div class="tile t-13 fill-red-3 hide-small">
					<!-- (13.) -->
					<div class="h6 strong">10% Increment at the end of 9 years</div>
				</div>
				<div class="tile t-14">
					<!-- (14.) -->
					<div class="hn strong text-uppercase line-height-small">Gain</div>
				</div>
				<div class="tile t-15 outline-red-2">
					<!-- (15.) -->
					<div class="h5 strong space-25-bottom line-height-small clearfix">
						<img class="icon float-left" src="../media/icon/icon-bar-red.svg<?php echo $ver ?>">
						capital <br>appreciation
					</div>
					<div class="h5 strong line-height-small clearfix">
						<img class="icon float-left" src="../media/icon/icon-bar-red.svg<?php echo $ver ?>">
						+ fixed <br>rental income
					</div>
				</div>
				<div class="tile t-16 fill-blue-4">
					<!-- (16.) -->
					<div class="h5 strong">you invest the down payment</div>
					<div class="hn strong text-red-2">we fund your EMI</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Benefits Section -->


<!-- Investment Section -->
<section class="investment-section fill-blue-4 space-75-top-bottom js_section_investment" id="investments-section" data-section-title="Investments Section" data-section-slug="investments-section">
	<div class="row">
		<div class="container">
			<div class="columns small-12 space-50-bottom">
				<div class="h2 strong">Pick an investment</div>
			</div>
			<div class="filtration columns small-12 js_filtration">
				<div class="filters space-50-bottom">
				</div>
				<div class="h4 line-height-large filtration-feedback js_filtration_feedback hidden">No investment options were found for the selected filters.</div>
			</div>
			<div class="columns small-12 tile-grid js_investment_card_container">
				<div class="tile banner">
					<div class="row">
						<div class="sub-tile columns small-12 medium-6 large-7">
							<div class="card fill-blue-3 space-25">
								<div class="h4 strong" style="padding-bottom: calc(var(--space-min)/2)">Didn’t find a suitable investment?</div>
								<div class="h6 space-25-bottom">Tell us what you are looking for.</div>
								<a href="" class="link inline">
									<span class="h5 strong-underline blue-4 strong text-blue-4 line-height-large">Feedback</span>
									<img class="icon inline-middle" src="../media/icon/icon-right-arrow-strong-blue-4.svg<?php echo $ver ?>">
								</a>
							</div>
						</div>
						<div class="sub-tile columns small-12 medium-6 large-5">
							<div class="card fill-blue-3 space-25">
								<div class="h5 strong space-25-bottom">Get a sneak peak at upcoming investment opportunities.</div>
								<a href="" class="link inline">
									<span class="h5 strong-underline blue-4 strong text-blue-4 line-height-large">Register</span>
									<img class="icon inline-middle" src="../media/icon/icon-right-arrow-strong-blue-4.svg<?php echo $ver ?>">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Investment Section -->


<!-- How Section -->
<section class="how-section fill-dark space-75-top-bottom" id="how-section" data-section-title="How Section" data-section-slug="how-section">
	<div class="container">
		<div class="row">
			<div class="columns small-12 large-2 space-50-bottom">
				<div class="h2 strong">How does it work?</div>
			</div>
			<div class="lumpsum columns small-11 small-offset-1 medium-5 large-4 space-50-bottom">
				<div class="h3 strong text-yellow-2 space-25-bottom">Lumpsum</div>
				<div class="table">
					<div class="table-row h6">
						Invest in any of the listed residential properties.
					</div>
					<div class="table-row h6">
							The property is transferred to you via an absolute sale deed.
							<div class="tag label text-yellow-2">Invest</div>
						</div>
					<div class="table-row h6">
						Sign a 9-year rental agreement.
					</div>
					<div class="table-row h6">
							Get a fixed yearly rental income for 9 years.
							<div class="tag label text-yellow-2">Earn</div>
						</div>
					<div class="table-row h6">
							Get the benefit of capital appreciation plus fixed income.
							<div class="tag label text-yellow-2">Gain</div>
						</div>
				</div>
			</div>
			<div class="emi columns small-11 small-offset-1 medium-5 large-4">
				<div class="h3 strong text-green-2 space-25-bottom">EMI</div>
				<div class="table">
					<div class="table-row h6">
						Get a home loan approval for any of the listed residential properties.
					</div>
					<div class="table-row h6">
						Pay the ‘Minimum Investment Amount’ as the downpayment for the home loan.
					</div>
					<div class="table-row h6">
							Complete the home loan paperwork and formalities.
							<div class="tag label text-green-2">Invest</div>
						</div>
					<div class="table-row h6">
						Sign a 9-year rental agreement.
					</div>
					<div class="table-row h6">
							Get a fixed yearly rental income for 9 years.
							<div class="tag label text-green-2">Earn</div>
						</div>
					<div class="table-row h6">
						The rental income services your monthly EMI’s.
					</div>
					<div class="table-row h6">
							Build an appreciating asset without paying EMI.
							<div class="tag label text-green-2">Gain</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<div class="character row hide-small hide-medium">
		<div class="container">
			<div class="columns small-12 medium-8 large-4">
				<div class="char-image">
					<img class="block" src="../media/char-2.png<?php echo $ver ?>">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: How Section -->


<!-- Webinar Section -->
<section class="webinar-section fill-blue-4 js_section_webinar" id="webinar-section" data-section-title="Webinar Section" data-section-slug="webinar-section">
	<div class="webinar-image" style="background-image: url('../media/char-5.png<?php echo $ver ?>');"></div>
	<div class="container">
		<div class="row">
			<div class="webinar-form columns small-12 medium-6 medium-offset-6 space-75-top-bottom xlarge-5">
				<div class="h3 strong text-red-2 space-25-bottom">Register for the next webinar</div>
				<div class="h5 space-min-bottom">Webinar date</div>
				<div class="p opacity-75 space-50-bottom">Join our investment manager for a 30 minute presentation and 30 minutes of Q&A.</div>
				<div class="p opacity-75 space-50-bottom js_post_registration_message" style="display: none">
					Registration successful.
					You will receive an invite in your email ({{ emailAddress }}) inbox shortly.
					<br>
					See you on the date of the webinar event.
				</div>
				<div class="forms-container">
					<form class="form form-dark phone-form js_phone_form" onsubmit="event.preventDefault()">
						<div class="form-row space-min-bottom">
							<label for="webinar-form-name">
								<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">Name</span><br>
								<input class="block fill-dark" name="name" type="text" id="webinar-form-name">
							</label>
						</div>
						<div class="form-row space-min-bottom">
							<label for="webinar-form-email">
								<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">Email</span><br>
								<input class="block fill-dark" type="text" name="email-address" id="webinar-form-email">
							</label>
						</div>
						<div class="form-row space-min-bottom">
							<label for="webinar-form-phone-number">
								<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">Phone</span><br>
								<div style="position: relative; display: flex">
									<select class="js_phone_country_code" style="position: absolute; top: 0; left: 0; background-color: transparent; color: transparent; width: 26%;">
										<?php include __DIR__ . '/../inc/phone-country-codes.php' ?>
									</select>
									<input type="text" class="no-pointer js_phone_country_code_label" value="+91" tabindex="-1" readonly style="width: 26%">
									<input class="block fill-dark" type="text" name="phone-number" id="webinar-form-phone-number">
								</div>
							</label>
						</div>
						<div class="form-row space-min-bottom">
							<label for="">
								<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">Submit</span><br>
								<button class="button fill-red-2" type="submit">Register Today</button>
							</label>
						</div>
					</form>
					<form class="form form-dark otp-form js_otp_form" onsubmit="event.preventDefault()">
						<div class="form-row space-min-bottom">
							<label for="webinar-form-otp">
								<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">We've sent you an OTP. Kindly provide it below.</span><br>
								<input class="block fill-dark" type="text" name="otp" id="webinar-form-otp">
							</label>
							<span class="small text-uppercase line-height-small opacity-50 cursor-pointer js_resend_otp hidden">Re-send OTP</span>
							<span class="small text-uppercase line-height-small opacity-50 cursor-pointer js_try_different_number hidden">Try a different number</span>
						</div>
						<div class="form-row space-min-bottom">
							<label for="">
								<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">Submit</span><br>
								<button class="button fill-red-2" type="submit">Verify OTP</button>
							</label>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Webinar Section -->


<!-- FAQs Section -->
<section class="faqs-section fill-neutral-1 space-75-top js_section_faqs" id="faqs-section" data-section-title="FAQs Section" data-section-slug="faqs-section">
	<div class="container">
		<div class="row text-blue-4">
			<div class="columns small-12 large-3">
				<div class="h2 strong space-50-bottom">FAQs</div>
			</div>
			<div class="columns small-12 large-9 xlarge-8">
				<div class="faqs space-75-bottom">
					<a class="inline big-link h4 strong" tabindex="-1">
						<span>Help Center</span>
					</a>
				</div>
				<!--  -->
				<div class="brochures hidden">
					<div class="row">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: FAQs Section -->


<!-- Testimonials Section -->
<section class="testimonials-section fill-light space-75-top space-25-bottom" id="testimonials-section" data-section-title="Testimonials Section" data-section-slug="testimonials-section">
	<div class="container">
		<div class="row">
			<div class="columns small-12">
				<div class="h2 strong text-neutral-2">Testimonials</div>
			</div>
		</div>
	</div>
	<div class="row testimonials carousel js_carousel_container">
		<div class="carousel-list js_carousel_content">
		</div>
		<div class="scroll-controls">
			<div class="row">
				<div class="container">
					<div class="columns small-6">
						<div class="scroll-button left scroll-left unselectable js_pager" data-dir="left" tabindex="-1"><img class="block" src="../media/icon/icon-left-arrow-red.svg<?php echo $ver ?>"></div>
					</div>
					<div class="columns small-6 text-right">
						<div class="scroll-button right scroll-right unselectable js_pager" data-dir="right" tabindex="-1"><img class="block" src="../media/icon/icon-right-arrow-red.svg<?php echo $ver ?>"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Testimonials Section -->


<!-- Templates Section -->
<section class="js_section_templates hidden">
	<!-- TEMPLATE: Back of Investment Card -->
	<template class="js_template" data-name="investment-card-back">
		<div>
			<div class="close js_investment_card_unflip" tabindex="-1"><img class="icon block" src="../media/icon/icon-close-red.svg<?php echo $ver ?>"></div>
			<div class="title h4 strong text-red-2 space-25-bottom js_message">Get access to a detailed offer document now.</div>
			<form class="form form-dark js_phone_form" onsubmit="event.preventDefault()">
				<div class="form-row space-min-bottom">
					<label for="investment-form-phone-number">
						<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">Phone</span>
						<div style="position: relative; display: flex">
							<select class="js_phone_country_code" style="position: absolute; top: 0; left: 0; background-color: transparent; color: transparent; width: 26%;">
								<?php include __DIR__ . '/../inc/phone-country-codes.php' ?>
							</select>
							<input type="text" class="no-pointer js_phone_country_code_label" value="+91" tabindex="-1" readonly style="width: 26%">
							<input class="block" type="text" name="phone-number" id="investment-form-phone-number">
						</div>
					</label>
				</div>
				<div class="form-row space-min-bottom">
					<label for="">
						<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">Submit</span>
						<button class="button block fill-red-2" type="submit">Get Details</button>
					</label>
				</div>
			</form>
			<form class="form form-dark js_otp_form" style="display: none" onsubmit="event.preventDefault()">
				<div class="form-row space-min-bottom">
					<label for="investment-form-otp">
						<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">We've sent you an OTP. Kindly provide it below.</span><br>
						<input class="block fill-dark" type="text" name="otp" id="investment-form-otp">
					</label>
					<span class="small text-uppercase line-height-small opacity-50 cursor-pointer js_resend_otp hidden">Re-send OTP</span>
					<span class="small text-uppercase line-height-small opacity-50 cursor-pointer js_try_different_number hidden">Try a different number</span>
				</div>
				<div class="form-row space-min-bottom">
					<label for="">
						<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">Submit</span><br>
						<button class="button block fill-red-2" type="submit">Verify OTP</button>
					</label>
				</div>
			</form>
			<div class="or-separator"><span class="label">OR</span><hr class="dashed red-2"></div>
			<div class="h5 text-neutral-2 line-height-xlarge">Webinar date</div>
			<div class="label space-25-bottom">Join our investment manager for a 30min presentation and 30min of Q&A.</div>
			<a href="#webinar-section" class="button fill-dark" style="box-shadow: inset 0px 0px 0px 1px var(--red-3)">Register for Webinar</a>
		</div>
	</template>
	<!-- END: TEMPLATE: Back of Investment Card -->
</section>
<!-- END: Templates Section -->







<?php require_once __DIR__ . '/../inc/below.php'; ?>
