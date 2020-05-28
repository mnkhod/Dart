@extends('layouts.main')

@section('content')
	<!-- Wrapper -->
	<div class="c-rapper a-article" style="height: 350px;background-image: url(/img/photo-1565073624497-7144969d0a07.jpg);">
		<div class="c-rapper__info2">
				<h1>Түгээмэл асуултууд</h1>
				<form action="" class="u-search u-flex_between">
						<img src="/img/search-white.png" alt="Search Icon">
						<input type="text" placeholder="Асуултаа оруулна уу...">
				</form>
		</div>
	</div>

	<div class="c-quest">
		<div class="u-container">
				<div class="c-quest__list">
						<ul>
								<h2>Асуултууд</h2>
								<li>
										<div class="u-flex_between">
												<span>Асуулт бла Postitis  бла Postitisбла Postббла Postitisла Postitisitis</span>
												<i class="fas fa-plus-circle"></i>
										</div>
										<p>Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь</p>
								</li>
								<li>
										<div class="u-flex_between">
												<span>Асуулт бла Postitis  бла Postitisбла Postббла Postitisла Postitisitis</span>
												<i class="fas fa-plus-circle"></i>
										</div>
										<p>Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь</p>
								</li>
								<li>
										<div class="u-flex_between">
												<span>Асуулт бла Postitis  бла Postitisбла Postббла Postitisла Postitisitis</span>
												<i class="fas fa-plus-circle"></i>
										</div>
										<p>Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь</p>
								</li>
								<li>
										<div class="u-flex_between">
												<span>Асуулт бла Postitis  бла Postitisбла Postббла Postitisла Postitisitis</span>
												<i class="fas fa-plus-circle"></i>
										</div>
										<p>Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь</p>
								</li>
								<li>
										<div class="u-flex_between">
												<span>Асуулт бла Postitis  бла Postitisбла Postббла Postitisла Postitisitis</span>
												<i class="fas fa-plus-circle"></i>
										</div>
										<p>Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь</p>
								</li>
								<li>
										<div class="u-flex_between">
												<span>Асуулт бла Postitis  бла Postitisбла Postббла Postitisла Postitisitis</span>
												<i class="fas fa-plus-circle"></i>
										</div>
										<p>Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь Хариулт аа ав пэтка минь</p>
								</li>
						</ul>
						<div class="c-content">
								<div class="c-content__nav full">
										<div class="c-content__nav--navigation">
												<span class="material-icons">
														chevron_left
												</span>
												<a href="">1</a>
												<a href="">2</a>
												<a href="">3</a>
												<a href="">4</a>
												<span class="material-icons">
														chevron_right
												</span>
										</div>
								</div>
						</div>
				</div>
		</div>
	</div>
@endsection

@section('js')
	<!-- Collapsible -->
	<script>
			var x = document.querySelectorAll('p');
			var y = document.querySelectorAll('.fa-plus-circle');
			for(i=0; i<x.length; i++){
					let a = i;
					y[a].addEventListener('click', function(){
							x[a].classList.toggle("active");
							y[a].classList.toggle("active");
					});
			}
	</script>

	<!-- Script -->
	<script src="/script.js"></script>

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
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<script type="text/javascript">
			$(document).ready(function () {
					$('#sidebarCollapse').on('click', function () {
							$('#sidebar').toggleClass('active');
					});
			});
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
@endsection
