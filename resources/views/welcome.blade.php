<!doctype html>
<!-- beautify code/format shift+alt+f>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="yqacfMeL8AkB6t7m8Za37iyC6Y4AlXFkCN6th17J">
    <link rel="icon" href="/favicon.ico">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-195601220-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-195601220-1');
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link href="/css/home.css" rel="stylesheet">

    <title>UID Game Showcase</title>
    <meta description="UID Games Showcase">

    <!-- OG -->
  </head>
  <body>
  <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
  </div>
  
    <div class="container-fluid">
	<div class="logo-container">
		<img class="uid-logo" alt="UID logo" src="/logo.png" />
	</div>
	<video autoplay loop muted id="myVideo">
  <source src="Home.mp4" type="video/mp4">
 </video>
  
	
	<div class="signup-text-container">
		<img class="signup-text" alt="Signup for a free account to access our library of web games." src="/signup-text.png" />
	</div>
	<div class="row">
		<div class="col-12 col-md-4">
			<div class="carousel-container">
				
				
				<div class="carousel">
					<div class="owl-carousel">
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/E3VsdODPuZgtjytruzJL.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/Dt9wGUsk539ZtPDpEWGr.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/X9Y1zrM7tjIhMrbSnZIm.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/ueal8OaUnsrevgd5BQJe.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/tM1JBAmw2uBvB8UacPcK.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/XnIjm9rV31sXjXpHb863.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/h3CBIlzySp7ZUWFuS0fW.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/TV9DrecTxY7Yyy7uVft3.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/XPn9Qmb4yOlFNLahjabi.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/Jo0JNBc1FfznSEKog38A.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/bXk9lUCg6PijcuQkH2l8.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/4KW4oKIUdUkYbcOf5YIe.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/nFaT52TL6FqUAIzxZeW8.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/cC66UuulhloKMoejCQ7m.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/jO5bJWL7HecGVxN6gu1m.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/OE3rOqxLIIBCTPyqYqEb.jpg'>
						</div>
												<div class="game-image-container">
							<img class="game-image" src ='/games-lists/May2021/uV30YQWynkCtx01KOzS8.jpg'>
						</div>
											</div>
				</div>
				
			</div>
		</div>
		<div class="col-12 col-lg-4">
			<div id="signup-signin-form" class="frame">
		        <div class="nav">
		            <ul class="links">
		            			            	<li class="signin-active"><a class="btn">Existing User</a></li>
		                <li class="signup-inactive"><a class="btn">New User</a></li>
		            			            </ul>
		        </div>
		        <div>
				<form class="form-signin" action="{{ route('login.post') }}" method="post" name="form">
				       <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
						<label class="label" for="Email">Email</label>
						<input class="form-styling form-control" id="email" type="email" name="email" placeholder="Email" />
						<label class="label" for="password">Password</label>
						<input class="form-styling form-control" id="password" type="password" name="password" placeholder="Password" />
								                <div class="btn-animate">
							<button class="btn-signin" type="submit">LOGIN</button>
						</div>
								            </form>
		            	<form class="form-signup" action="{{ route('register.post') }}" method="post" name="form">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<label class="label" for="name">Name</label>
						<input class="form-styling form-control" id="name" type="text" name="name" placeholder="Name" />
						<label class="label" for="username">Username</label>
						<input class="form-styling form-control" id="username" type="text" name="username" placeholder="Username" />
						<label class="label" for="email">Email</label>
			            <input class="form-styling form-control" id="email" type="email" name="email" placeholder="Email" />
						<label class="label" for="password">Password</label>
						<input class="form-styling form-control" id="password" type="password" name="password" placeholder="Password" />
												<button class="btn-signup" type="submit">
							REGISTER
						</button>
											</form>
		        </div>
		        
		        
		    </div>
		</div>
	</div>
	
	<div id="footer">Unicom Interactive Digital Sdn Bhd (1241800-T)
		             
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
	$(document).ready(function(){
	  	var owl = $('.owl-carousel');
		owl.owlCarousel({
		    items:1,
		    loop:true,
		    margin:0,
		    autoplay:true,
		    dots: false,
		    autoplayTimeout:3000,
		    autoplayHoverPause:true
		});

		$('.signup-text').click(function() {
			if($(window).width() < 949) {
				$('html, body').animate({
			        scrollTop: $("#signup-signin-form").offset().top
			    }, 1000);
			}
		});
	});
</script>
    <script src="/js/gtagButton.js"></script>
  </body>
</html>