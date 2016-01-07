
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>parallax.js</title>

	<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Core Meta Data -->
	<meta name="author" content="Matthew Wagerfield">
	<meta name="description" content="Simple, lightweight Parallax Engine that reacts to the orientation of a smart device">
	<meta name="keywords" content="parallax,javascript,jquery,zepto,plugin">

	<!-- Open Graph Meta Data -->
	<meta property="og:description" content="Simple, lightweight Parallax Engine that reacts to the orientation of a smart device">
	<meta property="og:image" content="http://wagerfield.github.io/parallax/assets/images/thumbnail.png">
	<meta property="og:site_name" content="parallax.js">
	<meta property="og:title" content="parallax.js">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://wagerfield.github.io/parallax/index.html">

	<!-- Twitter Card Meta Data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="http://wagerfield.github.io/parallax/index.html">
	<meta name="twitter:creator" content="@wagerfield">
	<meta name="twitter:title" content="parallax.js">
	<meta name="twitter:description" content="Simple, lightweight Parallax Engine that reacts to the orientation of a smart device">
	<meta name="twitter:image" content="http://wagerfield.github.io/parallax/assets/images/thumbnail.png">

	<!-- Humans -->
	<link rel="author" href="humans.txt" />

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="assets/styles/css/styles.css"/>

	<!-- Favicon -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/favicon.png" type="image/png">
	<link rel="shortcut icon" href="http://wagerfield.github.io/parallax/favicon.png" type="image/png">

	<!-- Apple Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57-precomposed.png">

	<!-- Apple Startup Images -->
	<link rel="apple-touch-startup-image" href="apple-touch-startup-image-320x460.png" media="(device-width: 320px)">
	<link rel="apple-touch-startup-image" href="apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)">
	<link rel="apple-touch-startup-image" href="apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)">
	<link rel="apple-touch-startup-image" href="apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and (orientation: landscape)">
	<link rel="apple-touch-startup-image" href="apple-touch-startup-image-1536x2008.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)">
	<link rel="apple-touch-startup-image" href="apple-touch-startup-image-2048x1496.png" media="(device-width: 1536px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)">

	<!-- Google Analytics -->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-39594063-4', 'wagerfield.github.io');
	ga('send', 'pageview');
	</script>

</head>
<body>

	<div id="fb-root"></div>

	<div id="container" class="wrapper">
		<ul id="scene" class="scene unselectable"
			data-friction-x="0.1"
			data-friction-y="0.1"
			data-scalar-x="25"
			data-scalar-y="15">
			<li class="layer" data-depth="0.00"></li>
			<li class="layer" data-depth="0.10"><div class="background"></div></li>
			<li class="layer" data-depth="0.10"><div class="light orange b phase-4"></div></li>
			<li class="layer" data-depth="0.10"><div class="light purple c phase-5"></div></li>
			<li class="layer" data-depth="0.10"><div class="light orange d phase-3"></div></li>
			<li class="layer" data-depth="0.15">
				<ul class="rope depth-10">
					<li><img src="assets/images/rope.png" alt="Rope"></li>
					<li class="hanger position-2">
						<div class="board cloud-2 swing-1"></div>
					</li>
					<li class="hanger position-4">
						<div class="board cloud-1 swing-3"></div>
					</li>
					<li class="hanger position-8">
						<div class="board birds swing-5"></div>
					</li>
				</ul>
			</li>
			<li class="layer" data-depth="0.20"><h1 class="title">parallax<em>.js</em></h1></li>
			<li class="layer" data-depth="0.30">
				<ul class="rope depth-30">
					<li><img src="assets/images/rope.png" alt="Rope"></li>
					<li class="hanger position-1">
						<div class="board cloud-1 swing-3"></div>
					</li>
					<li class="hanger position-5">
						<div class="board cloud-4 swing-1"></div>
					</li>
				</ul>
			</li>
			<li class="layer" data-depth="0.30"><div class="wave paint depth-30"></div></li>
			<li class="layer" data-depth="0.40"><div class="wave plain depth-40"></div></li>
			<li class="layer" data-depth="0.50"><div class="wave paint depth-50"></div></li>
			<li class="layer" data-depth="0.60"><div class="lighthouse depth-60"></div></li>
			<li class="layer" data-depth="0.60">
				<ul class="rope depth-60">
					<li><img src="assets/images/rope.png" alt="Rope"></li>
					<li class="hanger position-3">
						<div class="board birds swing-5"></div>
					</li>
					<li class="hanger position-6">
						<div class="board cloud-2 swing-2"></div>
					</li>
					<li class="hanger position-8">
						<div class="board cloud-3 swing-4"></div>
					</li>
				</ul>
			</li>
			<li class="layer" data-depth="0.60"><div class="wave plain depth-60"></div></li>
			<li class="layer" data-depth="0.80"><div class="wave plain depth-80"></div></li>
			<li class="layer" data-depth="1.00"><div class="wave paint depth-100"></div></li>
		</ul>
		<section id="about" class="wrapper about hide accelerate">
			<div class="cell accelerate">
				<div class="cables center accelerate">
					<div class="panel accelerate">
						<header>
							<h1>parallax<em>.js</em></h1>
						</header>
						<p>WOW, that's deep man! <strong>parallax.js</strong> reacts to the orientation of your smart device, offsetting layers depending on their depth within a scene... Oh, you don't have a smart device? No worries, if no gyroscope or motion detection hardware is available, <strong>parallax.js</strong> uses the position of your cursor instead. Radical.</p>
						<p>This project is a collaboration between<br><a href="http://matthew.wagerfield.com" target="_blank">Matthew Wagerfield</a> &amp; <a href="http://cargocollective.com/whydontwetry" target="_blank">Claudio Guglieri</a>.</p>
						<div class="social">
							<a href="https://twitter.com/wagerfield" class="twitter-follow-button" data-show-count="false">Follow <span class="handle">@wagerfield</span></a>
							<a href="https://twitter.com/claudioguglieri" class="twitter-follow-button" data-show-count="false">Follow <span class="handle">@claudioguglieri</span></a>
						</div>
						<ul class="links">
							<li><a class="download" href="https://github.com/wagerfield/parallax/archive/master.zip">Download</a></li>
							<li><a class="github" target="_blank" href="https://github.com/wagerfield/parallax">GitHub</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<button id="toggle" class="toggle i">
			<div class="cross">
				<div class="x"></div>
				<div class="y"></div>
			</div>
		</button>
		<div id="prompt" class="wrapper prompt hide accelerate">
			<div class="cell accelerate">
				<div class="panel center unselectable accelerate">
					<button id="dismiss" class="dismiss">
						<div class="cross">
							<div class="x"></div>
							<div class="y"></div>
						</div>
					</button>
					<div class="tilt-scene">
						<img class="tilt" src="assets/images/tilt.png">
					</div>
					<h2>Tilting is fun!</h2>
					<p>For the best experience, check out this site on a mobile or tablet equipped with a gyroscope</p>
					<p>(iPads are the coolest)</p>
				</div>
			</div>
		</div>
		<footer>
			<div class="fb-like" data-href="http://wagerfield.github.io/parallax/" data-width="400" data-layout="button_count" data-show-faces="false" data-send="false"></div>
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://wagerfield.github.io/parallax/" data-text="Tilting is fun! Check out #parallax.js by @wagerfield & @claudioguglieri �">Tweet</a>
		</footer>
	</div>

	<!-- Awwwards -->
	<div id="awwwards" class="left white">
		<a href="http://www.awwwards.com" target="_blank">best websites of the world</a>
	</div>

	<!-- Scripts -->
	<script src="assets/scripts/js/libraries.min.js"></script>
	<script src="deploy/jquery.parallax.js"></script>
	<script>

	// jQuery Selections
	var $html = $('html'),
			$container = $('#container'),
			$prompt = $('#prompt'),
			$toggle = $('#toggle'),
			$about = $('#about'),
			$scene = $('#scene');

	// Hide browser menu.
	(function() {
		setTimeout(function(){window.scrollTo(0,0);},0);
	})();

	// Setup FastClick.
	FastClick.attach(document.body);

	// Add touch functionality.
	if (Hammer.HAS_TOUCHEVENTS) {
		$container.hammer({drag_lock_to_axis: true});
		_.tap($html, 'a,button,[data-tap]');
	}

	// Add touch or mouse class to html element.
	$html.addClass(Hammer.HAS_TOUCHEVENTS ? 'touch' : 'mouse');

	// Resize handler.
	(resize = function() {
		$scene[0].style.width = window.innerWidth + 'px';
		$scene[0].style.height = window.innerHeight + 'px';
		if (!$prompt.hasClass('hide')) {
			if (window.innerWidth < 600) {
				$toggle.addClass('hide');
			} else {
				$toggle.removeClass('hide');
			}
		}
	})();

	// Attach window listeners.
	window.onresize = _.debounce(resize, 200);
	window.onscroll = _.debounce(resize, 200);

	function showDetails() {
		$about.removeClass('hide');
		$toggle.removeClass('i');
	}

	function hideDetails() {
		$about.addClass('hide');
		$toggle.addClass('i');
	}

	// Listen for toggle click event.
	$toggle.on('click', function(event) {
		$toggle.hasClass('i') ? showDetails() : hideDetails();
	});

	// Pretty simple huh?
	$scene.parallax();

	// Check for orientation support.
	setTimeout(function() {
		if ($scene.data('mode') === 'cursor') {
			$prompt.removeClass('hide');
			if (window.innerWidth < 600) $toggle.addClass('hide');
			$prompt.on('click', function(event) {
				$prompt.addClass('hide');
				if (window.innerWidth < 600) {
					setTimeout(function() {
						$toggle.removeClass('hide');
					},1200);
				}
			});
		}
	},1000);

	// Twitter stuff.
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

	// Facebook stuff.
	(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=709933052350821";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

</body>
</html>
