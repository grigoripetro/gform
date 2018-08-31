<?php 
	/* Template Name: Gravity Form Template */ 
	get_header(); 

	$zipCode = '';
	$zipCode = $_REQUEST['zipCode'];
?>

	<div class="banner">
		<?php
			the_post_thumbnail( 'normal','style=width:100%;height:auto;');
		?>
	</div>
	<main role="main" class="main">
		<!-- left section -->
		<section class="column-left">

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /left section -->

		<!-- Gravity Form Section -->
		<section class="column-right">
			<h3>Are you one of these people? Do you feel like you’re paying too much for Health Insurance?</h3>
			<p>We’ve got the solution to your problem. Complete this form and start comparing different Health Insurance plans, to find the one that best suits your needs. </p>
			<!-- Gravity Form -->
			<form method="post" id="gform_1" action="#">
				<div class="input-wrap main-form">
					<div class="text-wrap">
						<input name="appname" id="appname" value="" aria-label="Applicant name" aria-required="true" aria-invalid="true" placeholder="Applicant name *" type="text" class="gravity-input-large" autocomplete="off"/>
					</div>
					<div class="text-wrap">
						<input name="gender" id="gender" value="" maxlength="5" placeholder="Gender *" aria-required="true" aria-invalid="false" type="text" class="gravity-input" autocomplete="off"/>
					</div>
					<div class="text-wrap">
						<input name="birthday" id="birthday" value="" placeholder="Date of Birth *" type="text" aria-required="true" class="gravity-input" autocomplete="off"/>
					</div>
					<div class="text-wrap">
						<input name="height" id="height" value="" placeholder="Height *" aria-required="true" aria-invalid="false" type="text" class="gravity-input" autocomplete="off"/>
					</div>
					<div class="text-wrap">
						<input name="weight" id="weight" value="" placeholder="Weight *" aria-required="true" aria-invalid="false" type="text" class="gravity-input" autocomplete="off"/>
					</div>
				</div>

				<div class="button-wrap">
					<div class="pretty p-default">
				        <input type="checkbox" id="healthplan" name="healthplan" />
				        <div class="state">
				            <label for="healthplan">I have Health Insurance Plan</label>
				        </div>
				    </div>
				    <div class="pretty p-default">
				        <input type="checkbox" id="smoker" name="smoker" />
				        <div class="state">
				            <label for="smoker">I'm a smoker</label>
				        </div>
				    </div>
				    <div class="pretty p-default">
				        <input type="checkbox" id="fiveyear" name="fiveyear" />
				        <div class="state">
				            <label for="fiveyear">Medical Treatment in the last 5 years</label>
				        </div>
				    </div>

				    <input type="button" id="spouse-btn" value="+ Spouse" class="gravity-btn" />
				    <input type="button" id="child-btn" value="+ Child" class="gravity-btn" />
				    <input type="submit" id="submit-btn" value="Submit" class="gsubmit-btn"/>
				</div>

				<!-- Spouse Area -->
				<div class="spouse-wrap">
					<div class="input-wrap">
						<input name="spousename" id="spousename" value="" aria-label="Spouse name" aria-required="true" aria-invalid="true" placeholder="Spouse name" type="text" class="gravity-input-large">
						<input name="sgender" id="sgender" value="" maxlength="5" placeholder="Gender" aria-required="true" aria-invalid="false" type="text" class="gravity-input">
						<input name="sbirthday" id="sbirthday" value="" placeholder="Date of Birth" type="text" aria-required="true" class="gravity-input">
						<input name="sheight" id="sheight" value="" placeholder="Height" aria-required="true" aria-invalid="false" type="text" class="gravity-input">
						<input name="sweight" id="sweight" value="" placeholder="Weight" aria-required="true" aria-invalid="false" type="text" class="gravity-input">
					</div>

					<div class="button-wrap">
					    <div class="pretty p-default">
					        <input type="checkbox" id="gsmoker" name="gsmoker" />
					        <div class="state">
					            <label for="gsmoker">Is your spouse a smoker?</label>
					        </div>
					    </div>
					    <input type="button" id="remove-btn" value="Remove" class="gsubmit-btn remove-btn"/>
					</div>
				</div>
				<!-- /Spouse Area -->

				<!-- Children Area -->
				<div class="child-wrap">
				</div>
				<!-- /Children Area -->

				<!-- Second Form -->
				<div class="second-form">
					<h2>About You</h2>
					<div class="text-wrap">
						<input name="firstname" id="firstname" value="" placeholder="First Name *" type="text" aria-required="true" class="gravity-input" style="margin-left:0">
					</div>
					<div class="text-wrap">
						<input name="lastname" id="lastname" value="" placeholder="Last Name *" type="text" aria-required="true" class="gravity-input">
					</div>
					<div class="text-wrap">
						<input name="address" id="address" value="" placeholder="Address *" type="text" aria-required="true" class="gravity-input">
					</div>
					<div class="text-wrap">
						<input name="city" id="city" value="" placeholder="City *" type="text" aria-required="true" class="gravity-input">
					</div>
					<div class="clear"></div>
					<div class="text-wrap">
						<select id="applicant_state_abbrv" name="applicant_state_abbrv" class="gravity-input" style="margin-left:0">
							<option>State *</option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="PR">Puerto Rico</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>
					<div class="text-wrap">
						<input name="zipCode" id="zipCode" placeholder="ZIP *" type="text" aria-required="true" class="gravity-input" value="<?=$zipCode?>">
					</div>
					<div class="text-wrap">
						<input name="phone" id="phone" placeholder="Day Phone *" type="text" aria-required="true" class="gravity-input">
					</div>
					<div class="text-wrap">
						<input name="email" id="email" placeholder="Email *" type="email" aria-required="true" class="gravity-input">
					</div>

					<div class="clear"></div>

					<div class="long-text-wrap">
						<input name="household" id="household" placeholder="How many people are in your household? *" type="email" aria-required="true" class="gravity-input" style="margin-left:0">
					</div>
					<div class="long-text-wrap">
						<select id="expected" name="expected" class="gravity-input">
							<option>What do you expect your household income to be in 2018? *</option>
							<option value="b16">Below $16,000</option>
							<option value="b47">Between $16,000 and $47,000</option>
							<option value="o47">Over $47,000</option>
							<option value="no">Don't know</option>
						</select>
					</div>
					<div class="clear"></div>
				</div>
				<!-- /Second Form -->

				<!-- Continue button -->
				<input type="submit" id="continue-btn" value="Continue" class="gsubmit-btn" />
			</form>
			<!-- /Gravity Form -->
		</section>
		<!-- /Gravity Form Section -->

		<div class="clear"></div>
	</main>
<script>
jQuery(document).ready(function($) {
	var childCount = 0;     // children count
	var spouseFlag = false; // spouse flag
	var submitFlag = true;  // check submit button status
	var secondStep = false; // is enabled second step

	// Add Spouse
	$("#spouse-btn").on("click", function() {
		$(".spouse-wrap").fadeIn();
		$(this).attr("disabled", "disabled");
		$("#submit-btn").fadeOut("fast");
		$("#continue-btn").fadeIn();
		spouseFlag = true;
		submitFlag = false;
	});

	// Remove Spouse
	$("#remove-btn").on("click", function() {
		$(".spouse-wrap").fadeOut("fast");
		$("#spouse-btn").removeAttr("disabled");
		spouseFlag = false;
		if( childCount == 0 ) {
			submitFlag = true;
			$("#submit-btn").fadeIn();
			$("#continue-btn").fadeOut("fast");
		}
	});

	// Add Child
	$("#child-btn").on("click", function() {
		childCount ++;
		if( submitFlag == true ) {
			$("#submit-btn").fadeOut("fast");
			$("#continue-btn").fadeIn();
		}
		$("#submit-btn").fadeOut("fast");
		$("#continue-btn").fadeIn();
		var curChild = 'input-wrap_' + childCount;
		var childHTML = '<div class="input-wrap" id="input-wrap_' + childCount + '" style="display:none;">' +
						'<input name="childname_' + childCount + '" id="childname_' + childCount + '" value="" aria-label="Child name" aria-required="true" aria-invalid="true" placeholder="Child name" type="text" class="gravity-input-large">' +
						'<input name="gender_' + childCount + '" id="gender_' + childCount + '" value="" maxlength="5" placeholder="Gender" aria-required="true" aria-invalid="false" type="text" class="gravity-input">' +
						'<input name="birthday_' + childCount + '" id="birthday_' + childCount + '" value="" placeholder="Date of Birth" type="text" aria-required="true" class="gravity-input">' +
						'<input name="height_' + childCount + '" id="height_' + childCount + '" value="" placeholder="Height" aria-required="true" aria-invalid="false" type="text" class="gravity-input">' +
						'<input name="weight_' + childCount + '" id="weight_' + childCount + '" value="" placeholder="Weight" aria-required="true" aria-invalid="false" type="text" class="gravity-input">' +
						'<a href="#this" class="close_btn">X</a>' +
					'</div>';
		$(".child-wrap").append(childHTML);
		$("#" + curChild).fadeIn();
	});

	// Remove Child
	$(document).on("click", ".close_btn", function() {
		childCount --;
		$(this).parent().remove();
		if( childCount == 0 && spouseFlag == false ) {
			submitFlag = true;
			$("#submit-btn").fadeIn();
			$("#continue-btn").fadeOut("fast");
		}
	});

	// Submit button
	$("#submit-btn").on("click", function() {
		$("#gform_1").validate({ // initialize the plugin
	        rules: {
	            appname: {
	                required: true
	            },
	            gender: {
	                required: true
	            },
	            birthday: {
	            	required: true,
	            	date: true
	            },
	            height: {
	            	required: true,
	            	number: true
	            },
	            weight: {
	            	required: true,
	            	number: true
	            }
	        },
	        submitHandler: function (form) { 
	            form.submit();
	        }
	    });
	});

	// Continue button process
	$("#continue-btn").on("click", function() {
		if( secondStep == false ) {
			$("#gform_1").validate({ // initialize the plugin
		        rules: {
		            appname: "required",
		            gender: "required",
		            birthday: {
		            	required: true,
		            	date: true
		            },
		            height: {
		            	required: true,
		            	number: true
		            },
		            weight: {
		            	required: true,
		            	number: true
		            },
		            firstname: "required",
		            lastname: "required",
		            address: {
		            	required: true,
		            	address: true
		            },
		            city: "required",
		            applicant_state_abbrv: {
		            	required: true
		            },
		            phone: "required",
		            email: {
		            	required: true,
		            	email: true
		            },
		            household: "required",
		            expected: {
		            	required: true
		            }
		        },
		        submitHandler: function (form) {
		            $(".second-form").fadeIn();
		            secondStep = true;
		            return false;
		        }
		    });
		} else {
			$("#gform_1").validate({ // initialize the plugin
		        rules: {
		            firstname: "required",
		            lastname: "required",
		            address: {
		            	required: true,
		            	address: true
		            },
		            city: "required",
		            applicant_state_abbrv: {
		            	required: true
		            },
		            phone: "required",
		            email: {
		            	required: true,
		            	email: true
		            },
		            household: "required",
		            expected: {
		            	required: true
		            }
		        },
		        submitHandler: function (form) {
		            alert("Success!");
		            form.submit();
		        }
		    });
		}
	});

	$(".main-form input").on("keydown", function() {
		if( $(this).hasClass("error") )
			$(this).removeClass("error");
	});
});
</script>
<?php get_footer(); ?>
