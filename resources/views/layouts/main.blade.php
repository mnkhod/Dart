<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/yolo.css">
	<link rel="stylesheet" href="/css/header.css">
	<link rel="stylesheet" href="/css/countdown.css">

	<!-- Slider -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/css/swiper.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script defer src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
			  window.addEventListener("scroll", function(){
				  var header = document.querySelector("header");
				  header.classList.toggle("sticky", window.scrollY > 0);
			  })
			</script>
		
	@yield('link')
    <title>Darts</title>
</head>
<body>

	<header class="other-header">
			<div class="c-header u-flex_between a-relative">
					<!-- PC Header -->
					<div class="c-header__left u-flex_between">
							<img src="/img/dats.png" alt="Company Logo">
							<ul class="c-header__left--menu u-flex_between black">
									<li class="u-hover_main home-dropdown">
										<a>Нүүр</a>
										<div class="home-dropdown__tab">
											<ol>
												<li>
													<a href="">
														Naachin chi hugshuun
													</a>
												</li>
												<li>
													<a href="">
														Bawaltsah bandi bnu
													</a>
												</li>
												<li>
													<a href="">
														Chinii durtai awga ah
													</a>
												</li>
											</ol>
										</div>
									</li>
									<li class="u-hover_main a-slow"><a>Бүтээгдэхүүн</a></li>
									<li class="u-hover_main"><a>Блог</a></li>
									<li class="u-hover_main"><a>Тоглогчид</a></li>
							</ul>
					</div>

					<div class="c-header__mobile">

							<!-- Mobile Header -->
							<div class="c-header__mobile--wrapper u__flex-container">
									<div id="mobile-toggle" class="c-header__mobile--wrapper--tabs">
											<i class="lnr lnr-menu black"></i>
									</div>
							</div>


							<!-- Mobile click navigation -->
							<div class="c-header__mobile--nav">
									<div id="mobile-nav" class="c-header__mobile--nav--tab">

											<!-- Nav Logo -->
											<div class="c-header__mobile--nav--tab--top">
													<i id="mobile-remove" class="lnr lnr-cross"></i>
											</div>

											<!-- Nav list -->
											<div class="c-header__mobile--nav--tab--list">
													<ul>
															<li><a href="/">Нүүр</a></li>
															<li><a href="/products">Бүтээгдэхүүн</a></li>
															<li><a href="/products">Блог</a></li>
															<li><a href="/products">Тамирчид</a></li>
													</ul>
											</div>
											<div class="c-footer__content--quarter">
													<h3>Холбоотой байх</h3>
													<form action="">
															<input type="text" placeholder="Email оруулна уу">
															<a><img src="/img/do-arrow2.png" alt=""></a>
													</form>
													<h3>Биднийг дагах</h3>
													<div class="u-flex_between">
															<a class="u-hover_icon">
																	<img src="/img/fb-red.png" alt="">
																	<img class="u-hover_icon--alt" src="/img/fb-alt.png" alt="">
															</a>
															<a class="u-hover_icon">
																	<img src="/img/twitter-red.png" alt="">
																	<img class="u-hover_icon--alt" src="/img/logo2-1.png" alt="">
															</a>
															<a class="u-hover_icon">
																	<img src="/img/instagram-red.png" alt="">
																	<img class="u-hover_icon--alt" src="/img/logo3-1.png" alt="">
															</a>
															<a class="u-hover_icon">
																	<img src="/img/youtube-red.png" alt="">
																	<img class="u-hover_icon--alt" src="/img/logo4-1.png" alt="">
															</a>
													</div>
											</div>
									</div>
							</div>
					</div>


					<div class="c-header__right u-flex_between">
							<form action="" class="u-search u-flex_between">
									<img src="/img/search-white.png" alt="Search Icon">
									<input class="black" type="text" placeholder="Хайх зүйлээ оруулна уу...">
							</form>
							<div class="icon-with-hover">
								<img src="/img/shopping-bag-53.png" alt="">
								<div class="bag-hover-container">
									<h3>Таны сагсанд байгаа бараанууд</h3>

									<div class="inner-bag-hover">
										<h4>Хэрэглэгчийн нэр</h4>
									<nav class="able-to-scroll">	
										<ul>
											<li><img src="/img/shopping-bag-53.png" alt="">
												<div class="inner-bag-hover-product ">
													<h6>Барааны нэр</h6>
													<div class="c-single__info--quan quantity">
														<input type="number" min="0" max="99" step="1" value="1">
														<div class="c-single__info--quan_i">
															<i class="fas fa-plus-square"></i>
															<i class="fas fa-minus-square"></i>
														</div>
													</div>
												</div>
												<p>150'000</p>	
												<button type="button" class="u-button_red-c">Хасах</button>
											</li>
											<li><img src="/img/shopping-bag-53.png" alt="">
												<div class="inner-bag-hover-product ">
													<h6>Барааны нэр</h6>
													<div class="c-single__info--quan quantity">
														<input type="number" min="0" max="99" step="1" value="1">
														<div class="c-single__info--quan_i">
															<i class="fas fa-plus-square"></i>
															<i class="fas fa-minus-square"></i>
														</div>
													</div>
												</div>
												<p>150'000</p>	
												<button type="button" class="u-button_red-c">Хасах</button>
											</li>
											<li><img src="/img/shopping-bag-53.png" alt="">
												<div class="inner-bag-hover-product ">
													<h6>Барааны нэр</h6>
													<div class="c-single__info--quan quantity">
														<input type="number" min="0" max="99" step="1" value="1">
														<div class="c-single__info--quan_i">
															<i class="fas fa-plus-square"></i>
															<i class="fas fa-minus-square"></i>
														</div>
													</div>
												</div>
												<p>150'000</p>	
												<button type="button" class="u-button_red-c">Хасах</button>
											</li>
											<li><img src="/img/shopping-bag-53.png" alt="">
												<div class="inner-bag-hover-product ">
													<h6>Барааны нэр</h6>
													<div class="c-single__info--quan quantity">
														<input type="number" min="0" max="99" step="1" value="1">
														<div class="c-single__info--quan_i">
															<i class="fas fa-plus-square"></i>
															<i class="fas fa-minus-square"></i>
														</div>
													</div>
												</div>
												<p>150'000</p>	
												<button type="button" class="u-button_red-c">Хасах</button>
											</li>
										</ul>
									</nav>	
										<div class="inner-bag-hover-tprice">Нийт дүн:300'000</div>
										<div class="purchase-section">
											<div class="u-button">Сагс руу очих</div>
											<div class="u-button_red">Сагс хоослох</div>
										</div>
									</div>

								</div>
							</div>
							<div class="icon-with-hover1">
								<img src="/img/account2.png" alt="">
								<div class="bag-hover-container1">
									<h3>Нэвтрэх</h3>
									<div class="inner-bag-hover1">
										<form action="/action_page.php" method="post">

											<div class="login-container">

												<input type="text" placeholder="Хэрэглэгчийн нэр" name="uname" required>
												<input type="password" placeholder="Нууц үг" name="psw" required>
												<div class="in-one-row"> 
													<label><input type="checkbox" checked="checked" name="remember"> Намайг сана</label>
													<span class="psw"><a href="#">Нууц үг мартсан</a></span>
												</div>
											<button class="u-button_red-login" type="submit">Нэвтрэх</button>									
											</div>
										</form>

									</div>
								</div>
							</div>
					</div>
			</div>
	</header>

<main class="mt-100">
@yield('content')
</main>

<footer>
	<div class="sticky-filter-mphone">Filter</div>
	<div class="sticky-filter-hover u-none">
		<h3>Он /Сар/ Өдөр</h3>	
		<nav class="sticky-filter-nav">
			<ul class="sticky-filter-list">
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
			</ul>
		</nav>
	</div>
    <div class="c-footer u-container">
	<div class="c-footer__content u-flex_wrap">
	    <div class="c-footer__content--quarter">
		<h3>Холбоосууд</h3>
		<ul>
		    <li>Нүүр</li>
		    <li>Бүтээгдэхүүн</li>
		    <li>Блог</li>
		    <li>Тоглогчид</li>
		    <li>Бидний тухай</li>
		    <li>Миний аккаунт</li>
		</ul>
	    </div>
	    <div class="c-footer__content--quarter">
		<h3>Ангилал</h3>
		<ul>
		    <li>Дартс</li>
		    <li>Дартс самбар</li>
		    <li>Хувцас</li>
		    <li>Гоёл чимэглэл</li>
		    <li>Хэрэгсэл</li>
		</ul>
	    </div>
	    <div class="c-footer__content--quarter">
		<h3>Холбоо барих</h3>
		<ul>
		    <li>
			<img class="img-home" src="/img/New folder/home.png" alt="" width="30" height="30">
			<span>Манай хаяг</span>
		    </li>
		    <li>
			<img src="/img/New folder/phone.png" alt="" width="40" height="40">
			<span>95959595</span>
		    </li>
		    <li>
			<img class="img-email" src="/img/email.png" alt="" width="20" height="20">
			<span>darts.mn@gmail.com</span>
		    </li>
		</ul>
	    </div>
	    <div class="c-footer__content--quarter">
		<h3>Холбоотой байх</h3>
		<form action="">
		    <input type="text" placeholder="Email оруулна уу">
		    <a><img src="/img/do-arrow2.png" alt=""></a>
		</form>
		<h3>Биднийг дагах</h3>
		<div class="u-flex_between">
		    <a class="u-hover_icon">
			<img src="/img/fb-red.png" alt="">
			<img class="u-hover_icon--alt" src="/img/fb-alt.png" alt="">
		    </a>
		    <a class="u-hover_icon">
			<img src="/img/twitter-red.png" alt="">
			<img class="u-hover_icon--alt" src="/img/logo2-1.png" alt="">
		    </a>
		    <a class="u-hover_icon">
			<img src="/img/instagram-red.png" alt="">
			<img class="u-hover_icon--alt" src="/img/logo3-1.png" alt="">
		    </a>
		    <a class="u-hover_icon">
			<img src="/img/youtube-red.png" alt="">
			<img class="u-hover_icon--alt" src="/img/logo4-1.png" alt="">
		    </a>
		</div>
	    </div>
	</div>
	<div class="c-footer__copyright">
	    <a href="">Үйлчилгээний нөхцөл</a>
	    ©2020 Darts.mn
	</div>
    </div>
</footer>

<!-- Script -->
<script src="/js/script.js"></script>
<script src="/js/swiper.min.js"></script>

<!-- Header sticky -->
<script type="text/javascript">
			  window.addEventListener("scroll", function(){
				  var header = document.querySelector("header");
				  header.classList.toggle("sticky", window.scrollY > 0);
			  })
        </script>

<!-- Initialize Swiper -->
<script>
        var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
  </script>

<!-- Collapsible -->
<script>
		var x = document.querySelectorAll('.answer');
		var y = document.querySelectorAll('.fa-plus-circle');
		for(i=0; i<x.length; i++){
				let a = i;
				y[a].addEventListener('click', function(){
						x[a].classList.toggle("active");
						y[a].classList.toggle("active");
				});
		}
</script>

<script>
		// Initialize and add the map
		function initMap() {
			// The location of Uluru
			var uluru = {lat: -25.344, lng: 131.036};
			// The map, centered at Uluru
			var map = new google.maps.Map(
					document.getElementById('map'), {zoom: 4, center: uluru});
			// The marker, positioned at Uluru
			var marker = new google.maps.Marker({position: uluru, map: map});
		}
				</script>
				<!--Load the API from the specified URL
				* The async attribute allows the browser to render the page while the API loads
				* The key parameter will contain your own API key (which is not needed for this tutorial)
				* The callback parameter executes the initMap() function
				-->
				<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
				</script>


<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

<script type="text/javascript">
		$(document).ready(function () {
				$('#sidebarCollapse').on('click', function () {
						$('#sidebar').toggleClass('active');
				});
		});
</script>
<script type="text/javascript">
			  window.addEventListener("scroll", function(){
				  var header = document.querySelector("header");
				  header.classList.toggle("sticky", window.scrollY > 0);
			  })
			</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
@yield('js')


</body>
</html>
