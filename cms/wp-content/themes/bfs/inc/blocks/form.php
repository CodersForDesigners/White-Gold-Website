<?php

$fields = get_field( 'form_fields' );
foreach ( $fields as &$field ) {
	$field[ 'type' ] = $field[ 'acf_fc_layout' ];
	if ( $field[ 'type' ] == 'select' )
		$field[ 'options' ] = explode( "\r\n", $field[ 'options' ] );
}
unset( $field );

?>
<?php if ( $is_preview ) : ?>
	<h4>(A form will be placed here.)</h4>
<?php else : ?>
<style type="text/css">

	.forms-container {
		/*min-height: 250px;*/
	}
	.primary-form {
		transition: opacity 0.25s ease-out;
	}
	.phone-form,
	.otp-form {
		position: absolute;
		top: 50%;
		transform: translateY( -50% );
		width: 100%;
		opacity: 0;
		transition: opacity 0.25s ease-out;
	}

</style>
<div class="forms-container position-relative">
	<form class="form primary-form js_primary_form" onsubmit="event.preventDefault()">
		<?php foreach ( $fields as $index => $field ) : ?>
		<div class="form-row space-min-bottom">
			<label for="form-field-<?= $index ?>">
				<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer"><?= $field[ 'label' ] ?></span><br>
				<?php if ( $field[ 'type' ] === 'text' ) : ?>
					<input class="block fill-dark" name="form-field-<?= $index ?>" type="text" id="form-field-<?= $index ?>">
				<?php elseif ( $field[ 'type' ] === 'textarea' ) : ?>
					<textarea class="block fill-dark" name="form-field-<?= $index ?>" id="form-field-<?= $index ?>"></textarea>
				<?php elseif ( $field[ 'type' ] === 'select' ) : ?>
					<select class="block fill-dark" name="form-field-<?= $index ?>" id="form-field-<?= $index ?>">
						<?php foreach ( $field[ 'options' ] as $option ) : ?>
							<option><?= $option ?></option>
						<?php endforeach; ?>
					</select>
				<?php endif; ?>
			</label>
		</div>
		<?php endforeach; ?>
		<div class="form-row space-min-bottom">
			<label for="form-field-submit">
				<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">Submit</span><br>
				<button class="button fill-red-2" type="submit" id="form-field-submit">Submit</button>
			</label>
		</div>
	</form>
	<form class="form phone-form js_phone_form" onsubmit="event.preventDefault()">
		<div class="form-row space-min-bottom">
			<label for="form-name">
				<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">Name</span><br>
				<input class="block fill-dark" name="name" type="text" id="form-name">
			</label>
		</div>
		<div class="form-row space-min-bottom">
			<label for="form-email">
				<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">Email</span><br>
				<input class="block fill-dark" type="text" name="email-address" id="form-email">
			</label>
		</div>
		<div class="form-row space-min-bottom">
			<label for="form-phone-number">
				<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">Phone</span><br>
				<div style="position: relative; display: flex">
					<select class="js_phone_country_code" style="position: absolute; top: 0; left: 0; background-color: transparent; color: transparent; width: 26%;">
						<?php include __DIR__ . '/../inc/phone-country-codes.php' ?>
					</select>
					<input type="text" class="no-pointer js_phone_country_code_label" value="+91" tabindex="-1" readonly style="width: 26%">
					<input class="block fill-dark" type="text" name="phone-number" id="form-phone-number">
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
	<form class="form otp-form js_otp_form" onsubmit="event.preventDefault()">
		<div class="form-row space-min-bottom">
			<label for="form-otp">
				<span class="small text-uppercase line-height-xlarge opacity-50 cursor-pointer">We've sent you an OTP. Kindly provide it below.</span><br>
				<input class="block fill-dark" type="text" name="otp" id="form-otp">
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
<?php endif; ?>
