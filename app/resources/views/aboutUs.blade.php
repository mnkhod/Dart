@extends('layouts.main')

@section('content')
        <!-- Wrapper -->
    <div class="c-rapper a-article">
        <div class="c-rapper__info2">
            <h2>Бидний тухай</h2>
            <h3>Бидний тухай тэдэн онд ингээд тэгээд онд ингээд тэгээд онд ингээд тэгээд онд ингээд тэгээд</h3>
        </div>
    </div>
    <div class="c-rapper a-article" style="background-image: url(/img/4.jpg);">
        <div class="c-rapper__info2">
            <h3>Бидний тухай тэдэн онд ингээд тэгээд онд ингээд тэгээд онд ингээд тэгээд онд ингээд тэгээд</h3>
        </div>
    </div>
    <div class="c-rapper a-article" style="background-image: url(/img/DqT52R.jpg);">
        <div class="c-rapper__info2">
            <h3>Бидний тухай тэдэн онд ингээд тэгээд онд ингээд тэгээд онд ингээд тэгээд онд ингээд тэгээд</h3>
        </div>
    </div>
    <div class="c-rapper a-article" style="background-image: url(/img/photo-1565073624497-7144969d0a07.jpg);">
        <div class="c-rapper__info2">
            <h2>Холбоо барих</h2>
            <span>
                <i class="fa fa-phone-volume"></i>
                95959595
            </span>
            <span>
                <i class="fas fa-envelope"></i>
                darts.mn@email.com
            </span>
        </div>
    </div>

    <div class="c-about">
        <div class="u-container u-flex_wrap">
            <div class="c-about__left">
                <h2>Манай байршил</h2>
                <div id="map"></div>
            </div>
            <div class="c-about__right">
                <p>Lorem ipsum dolor sit Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum nulla aut doloribus distinctio eveniet id eos perspiciatis neque voluptas perferendis, fugiat cum similique reiciendis officiis excepturi architecto autem consequatur provident! inctio enim perferendis qui?</p>
                <form action="" class="u-footerform">
                    <input type="text" placeholder="Нэрээ оруулна уу">
                </form>
                <form action="" class="u-footerform">
                    <input type="text" placeholder="Email оруулна уу">
                    <a><img src="/img/do-arrow2.png" alt=""></a>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('js')
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
