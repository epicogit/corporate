<div class="cookie-bar close" data-component="cookie">
		<div class="chocolate">
			<p>We use</p><a class="cookies" href="privacy-policy/index.html"><span>cookies</span></a> <a class="accept button border--radius-big small caps upper bold spaced" href="">ACCEPT</a> <a class="decline" href=""><span>Decline</span></a>
		</div>
</div>

<?php get_template_part('/includes/newsletter'); ?>

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
