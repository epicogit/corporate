<div class="cookie-bar close" data-component="cookie">
		<div class="chocolate">
			<p>We use</p><a class="cookies" href="privacy-policy/index.html"><span>cookies</span></a> <a class="accept button border--radius-big small caps upper bold spaced" href="">ACCEPT</a> <a class="decline" href=""><span>Decline</span></a>
		</div>
</div>

<div class="row newsletter-block newsletter-popup newsletter-popup--beige center-xs middle-xs newsletter-block--home hide" data-component="newsletter-popup">
		<div class="newsletter-bg js-close"></div>
		<div class="newsletter-popup--inner grid--padding--double-top grid--padding--double-bottom" data-component="newsletter">
			<p class="h4">Join the inner circle</p>
			<div class="newsletter-block__messages">
				<p class="newsletter-block__message excerpt subtitle active">Stay updated with the latest news, stories and discounts</p>
				<p class="newsletter-block__message excerpt incorrect">Bummer... looks like your email address is not correct</p>
				<p class="newsletter-block__message excerpt correct">Looks good. Hit subscribe.</p>
				<p class="newsletter-block__message excerpt error">We couldn't sign you up right now. Please try again</p>
				<p class="newsletter-block__message excerpt success">Thanks for signing up!</p>
			</div>
			<form method="post" class="row form-row form-row--details col-xs-12  center-xs middle-xs">
				<div class="newsletter-block__fields row col-xs-12 center-xs middle-xs">
					<div class="col-xs-8 col-padding-right">
						<div class="input__container input__container--text  no-border  ">
							<div class="input__input input-theme--bordered">
								<input id="input-email_address" name="email_address" type="email" value="" class="input-text " required placeholder="Email address" style=" "><span class="check--svg"> <svg class="svg-icon" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
										<use x="0" y="0" xlink:href="#check" />
									</svg>
								</span>
								<div class="input__status input__status--error"></div>
								<div class="input__status input__status--valid"></div>
								<label for="input-email_address">Email address</label>
							</div>
						</div>
					</div>
					<div class="col-xs-4 col-padding-left">
						<button type="submit" class="button bordered"> Subscribe <span class="button-hover"><span>
									<span class="buy-msg">Subscribe</span>
									<span class="added-msg">Subscribing...</span>
									<span class="completed-msg">Subscribed</span>
								</span></span>
						</button></div>
				</div>
			</form>
		</div>
	</div>

<script type="text/template" id="tpl-name"></script>
<script>
	window.BIA = window.BIA || {};
	BIA.BASE_URL = 'http://epicocorpo:8888';
	BIA.IS_DEV = true;
	BIA.THEME_URL = 'http://epicocorpo:8888/wp-content/themes/status';
	BIA.AJAX_URL = 'http://epicocorpo:8888/wp-admin/admin-ajax.php';
	BIA.ROUTES = null;
	BIA.LANG = '';
	BIA.SIZECOMPARE = [{
		"url": "https:\/\/www.mendo.nl\/wp-content\/uploads\/2017\/03\/apple-1.png",
		"width": "65"
	}, {
		"url": "https:\/\/www.mendo.nl\/wp-content\/uploads\/2017\/04\/plug.png",
		"width": "40"
	}, {
		"url": "https:\/\/www.mendo.nl\/wp-content\/uploads\/2017\/03\/pizza-1.png",
		"width": "60"
	}, {
		"url": "https:\/\/www.mendo.nl\/wp-content\/uploads\/2017\/03\/tomato-1.png",
		"width": "50"
	}, {
		"url": "https:\/\/www.mendo.nl\/wp-content\/uploads\/2017\/04\/glasses.png",
		"width": "100"
	}, {
		"url": "https:\/\/www.mendo.nl\/wp-content\/uploads\/2017\/04\/Whisk.png",
		"width": "50"
	}, {
		"url": "https:\/\/www.mendo.nl\/wp-content\/uploads\/2017\/04\/egg.png",
		"width": "40"
	}];
	BIA.WP_USER = {
		is_logged_in: false,
		user_id: 0,
		name: ' ',
		email: '',
		user_hash: ''
	};
	BIA.I18N = {
		newsletter: {
			success: "You\x20have\x20been\x20successfully\x20added\x20to\x20the\x20list",
			invalid: "Your\x20email\x20is\x20not\x20valid",
			error: "There\x20was\x20an\x20error,\x20please\x20try\x20again\x20later",
			already: "This\x20email\x20is\x20already\x20registered"
		},
		outofstock: "Out\x20of\x20stock",
		facebookLogin: {
			unknown: "An\x20error\x20occured,\x20please\x20try\x20again.",
			no_email_granted: "We\x20need\x20access\x20to\x20your\x20email,\x20please\x20try\x20again."
		},
		left: "left",
		areyousure: "Are you sure?",
		errorcartupdate: "An error occured while updating your cart, please refresh the page and try again.",
		checkout: {
			error: {
				'terms': "You have to accept the terms and conditions to proceed"
			}
		}
	};
	BIA.CONFIG = {
		scroll: {
			smooth: true,
			ease: .1,
			vs: {
				mouseMultiplier: .5,
				firefoxMultiplier: 30
			}
		},
		newsletter: {
			show: 1,
			pages: 1,
			expire: 30,
			scrollOffset: 0.3,
			delay: 200
		}
	};
	BIA.searchSuggestions = [];
	BIA.featuredBooks = [];
	</script>

<?php themnific_foot(); ?>
<?php wp_footer(); ?>

</body>
</html>
