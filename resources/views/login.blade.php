<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="hi7csikz6DK0JDbigkyPVwS1MX6IzdtEGopR5M5R">
	<link rel="icon" href="/favicon.ico">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-195601220-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-195601220-1');
	</script>

	<!-- Bootstrap CSS -->

	<link href="/css/app.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<link href="/css/games-view.css" rel="stylesheet">

	<title>UID Game Showcase</title>
	<meta description="UID Games Showcase">

	<!-- OG -->

</head>

<body>
	<div class="container">
		<div class="row justify-content-end">
			<div class="col-3">

				<a href="/logout" button type="button" class="btn btn-default btn-sm">
					{{ Auth::user()->name }}
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<span class="glyphicon glyphicon-log-out"></span> LOGOUT
					</button>
				</a>
				</form>
			</div>
		</div>
		<div class="logo-container">
			<img class="uid-logo" alt="UID logo" src="/logo.png" />
		</div>

		<div class="row justify-content-center">
			<div class="col-md-4 col-12 pb-3" align="center">
				<h1>Games Showcase</h1>
			</div>
		</div>

		<div class="row games-container">
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://berg.uid-testing.space/gamelist/maxiscny/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="Maxis | Catch that Health" data-game="2" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/E3VsdODPuZgtjytruzJL.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="2" data-game-name="Maxis | Catch that Health" href="https://berg.uid-testing.space/gamelist/maxiscny/" target="_blank"> Maxis | Catch that Health </a></p>
				<p class="game-description"> Web Game - Collect &#039;Em All </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://berg.uid-testing.space/gamelist/pepperlunch/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="PepperLunch | Spot 15 Differences" data-game="4" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/Dt9wGUsk539ZtPDpEWGr.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="4" data-game-name="PepperLunch | Spot 15 Differences" href="https://berg.uid-testing.space/gamelist/pepperlunch/" target="_blank"> PepperLunch | Spot 15 Differences </a></p>
				<p class="game-description"> Web Game - Spot the Difference </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://berg.uid-testing.space/gamelist/tsubaki/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="Tsubaki | Forget Me Knot" data-game="5" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/X9Y1zrM7tjIhMrbSnZIm.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="5" data-game-name="Tsubaki | Forget Me Knot" href="https://berg.uid-testing.space/gamelist/tsubaki/" target="_blank"> Tsubaki | Forget Me Knot </a></p>
				<p class="game-description"> Web Game - Flip &amp; Match </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://berg.uid-testing.space/gamelist/dprogram/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="d program by Shiseido Group | Gentle Cleansing Solution" data-game="6" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/ueal8OaUnsrevgd5BQJe.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="6" data-game-name="d program by Shiseido Group | Gentle Cleansing Solution" href="https://berg.uid-testing.space/gamelist/dprogram/" target="_blank"> d program by Shiseido Group | Gentle Cleansing Solution </a></p>
				<p class="game-description"> Web Game - Tap &amp; Drag </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://berg.uid-testing.space/gamelist/bleedstopper/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="Johnson &amp; Johnson | Bleed Stopper" data-game="7" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/tM1JBAmw2uBvB8UacPcK.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="7" data-game-name="Johnson &amp; Johnson | Bleed Stopper" href="https://berg.uid-testing.space/gamelist/bleedstopper/" target="_blank"> Johnson &amp; Johnson | Bleed Stopper </a></p>
				<p class="game-description"> Web Game - Shooter </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://berg.uid-testing.space/gamelist/compressionsensation/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="Johnson &amp; Johnson | Compression Sensation" data-game="8" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/XnIjm9rV31sXjXpHb863.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="8" data-game-name="Johnson &amp; Johnson | Compression Sensation" href="https://berg.uid-testing.space/gamelist/compressionsensation/" target="_blank"> Johnson &amp; Johnson | Compression Sensation </a></p>
				<p class="game-description"> Web Game - Compression Sensation </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://berg.uid-testing.space/gamelist/setiacitymall/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="Setia City Mall | Catch The Lucky Orange Game" data-game="9" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/h3CBIlzySp7ZUWFuS0fW.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="9" data-game-name="Setia City Mall | Catch The Lucky Orange Game" href="https://berg.uid-testing.space/gamelist/setiacitymall/" target="_blank"> Setia City Mall | Catch The Lucky Orange Game </a></p>
				<p class="game-description"> Web Game - Collect &#039;Em All </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://www.instagram.com/ar/3580349065524618/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="Ho Yan Hor | Huat Moo-ment" data-game="10" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/TV9DrecTxY7Yyy7uVft3.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="10" data-game-name="Ho Yan Hor | Huat Moo-ment" href="https://www.instagram.com/ar/3580349065524618/" target="_blank"> Ho Yan Hor | Huat Moo-ment </a></p>
				<p class="game-description"> SparkAR - Collect &#039;Em All </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://www.instagram.com/ar/221196302982453/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="Red Eagle | 镇家之宝 米其林3星" data-game="11" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/XPn9Qmb4yOlFNLahjabi.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="11" data-game-name="Red Eagle | 镇家之宝 米其林3星" href="https://www.instagram.com/ar/221196302982453/" target="_blank"> Red Eagle | 镇家之宝 米其林3星 </a></p>
				<p class="game-description"> SparkAR - Filter </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://www.instagram.com/ar/1869548256526851/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="Red Eagle | 镇家之宝 厨神" data-game="12" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/Jo0JNBc1FfznSEKog38A.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="12" data-game-name="Red Eagle | 镇家之宝 厨神" href="https://www.instagram.com/ar/1869548256526851/" target="_blank"> Red Eagle | 镇家之宝 厨神 </a></p>
				<p class="game-description"> SparkAR - Immersive </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://jvf.zappar.io/2092925128499313711/2.0.0/index.html" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="UID | Jump Jump! Space Ranger" data-game="13" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/bXk9lUCg6PijcuQkH2l8.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="13" data-game-name="UID | Jump Jump! Space Ranger" href="https://jvf.zappar.io/2092925128499313711/2.0.0/index.html" target="_blank"> UID | Jump Jump! Space Ranger </a></p>
				<p class="game-description"> WebAR - Jump Shot </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://jvf.zappar.io/3386367925969838988/2.0.0/index.html" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="UID | AR Spot the Difference" data-game="14" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/4KW4oKIUdUkYbcOf5YIe.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="14" data-game-name="UID | AR Spot the Difference" href="https://jvf.zappar.io/3386367925969838988/2.0.0/index.html" target="_blank"> UID | AR Spot the Difference </a></p>
				<p class="game-description"> WebAR - Spot the Difference </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://playcanv.as/b/Mldq5TQ0/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="UID | Epic Dunk Fun" data-game="15" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/nFaT52TL6FqUAIzxZeW8.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="15" data-game-name="UID | Epic Dunk Fun" href="https://playcanv.as/b/Mldq5TQ0/" target="_blank"> UID | Epic Dunk Fun </a></p>
				<p class="game-description"> WebAR - Aim &amp; Shoot </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://jvf.zappar.io/2518416787964324795/3.0.1/index.html" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="UID | Game On Survey" data-game="16" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/cC66UuulhloKMoejCQ7m.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="16" data-game-name="UID | Game On Survey" href="https://jvf.zappar.io/2518416787964324795/3.0.1/index.html" target="_blank"> UID | Game On Survey </a></p>
				<p class="game-description"> WebAR - Survey </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://jvf.zappar.io/5513409516596199215/1.0.8/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="Nestlé Professional | God of Prosperity" data-game="17" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/jO5bJWL7HecGVxN6gu1m.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="17" data-game-name="Nestlé Professional | God of Prosperity" href="https://jvf.zappar.io/5513409516596199215/1.0.8/" target="_blank"> Nestlé Professional | God of Prosperity </a></p>
				<p class="game-description"> WebAR - Surface Tracking </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://skin-analysis-2021.uid-testing.space/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="UID | Virtual Skin Analysis" data-game="18" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/OE3rOqxLIIBCTPyqYqEb.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="18" data-game-name="UID | Virtual Skin Analysis" href="https://skin-analysis-2021.uid-testing.space/" target="_blank"> UID | Virtual Skin Analysis </a></p>
				<p class="game-description"> Face Analysis </p>
			</div>
			<div class="col-lg-3 col-md-4 col-12 col-xs-6" align="center">
				<p class="game-img-container"> <a href="https://www.facebook.com/fbcameraeffects/tryit/954019472071651/" target="_blank"><img data-ga-action="game-link-img-click" class="game-img" data-game-name="Nestlé Professional | RIUH RAYA BY NESTLÉ" data-game="19" src='https://gamesshowcase.uid-testing.space/storage/games-lists/May2021/uV30YQWynkCtx01KOzS8.jpg' height="300px"></a> </p>
				<p class="game-title"> <a data-ga-action="game-link-title-click" data-game="19" data-game-name="Nestlé Professional | RIUH RAYA BY NESTLÉ" href="https://www.facebook.com/fbcameraeffects/tryit/954019472071651/" target="_blank"> Nestlé Professional | RIUH RAYA BY NESTLÉ </a></p>
				<p class="game-description"> SparkAR - Filter </p>
			</div>
		</div>
		<div class="absolute">
			<video autoplay loop muted id="myVideo">
				<source src="Home.mp4" type="video/mp4">
			</video>
		</div>
		<div id="footer" style="text-align: left;">Unicom Interactive Digital Sdn Bhd (1241800-T)

			Address: B-2-6, Pacific Place Commercial Center, Ara Damansara, 47301 Petaling Jaya, Selangor
		</div>
	</div>


	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

	<script src="/js/app.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(`[data-ga-action]`).on('click', function(e) {
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
					}
				});
				var clickData = {
					title: $(this)[0].dataset.gameName,
					game: $(this)[0].dataset.game
				};
				$.ajax({
					type: 'POST',
					url: '/games-click',
					data: clickData,
					dataType: 'json',
					success: function(data) {
						console.log(data);
					},
					error: function(data) {
						console.log(data);
					}
				});
			});
		});
	</script>
	<script src="/js/gtagButton.js"></script>
</body>

</html>