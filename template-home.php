<?php /* Template Name: Homepage Template */ get_header('home'); ?>

	<main role="main" class="main">
		<h2>Are you paying too much for<br /> Health Insurance?</h2>

		<p>Start saving today by comparing a variety of cost effective Health Insurance Plans. Find a quality,<br /> affordable Health Insurance plan for as little as <strong>3$* per day!</strong></p>
		<form id="zip-form" method="post" action="<?php echo home_url(); ?>/apply">
			<div class="zip-wrap">
				<label for="zipCode">We can provide you with maximum coverage</label>
				<input type="text" id="zipCode" name="zipCode" class="zip-input" placeholder="Enter your ZIP code" />
				<input type="submit" id="zipSubmit" value="SUBMIT" class="zip-submit" />
			</div>
		</form>

		<span><strong>Protection is key.</strong> Make sure that you and your family are protected by finding the right Health Insurance Plan today.</span>

		<div class="clear"></div>
	</main>

<script>
jQuery(document).ready(function($) {
	$("#zipSubmit").on("click", function() {
		if( $("#zipCode").val() != '' ) {
			return true;
		} else {
			return false;
		}
	});
});
</script>

<?php get_footer('home'); ?>
