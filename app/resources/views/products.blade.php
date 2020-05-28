@extends('layouts.main')


@section('content')
        <!-- Wrapper -->
				<div class="c-rapper2 a-article">
		        <div class="c-rapper2__info">
		            <h2>Зуны шинэ коллекц</h2>
		            <h3>Үүнээс илүү бэлэг үгүй</h3>
		            <button class="u-button">Дэлгэрэнгүй</button>
		        </div>
		    </div>

		    <div class="u-container u-flex_wrap">
		        <div class="c-filter">
		            <div class="u-filter">
		                <!-- Sidebar  -->
		                <nav id="sidebar">
		                    <div class="sidebar-header">
		                        <h3>Dacor Sidebar</h3>
		                    </div>

		                    <ul class="list-unstyled components">
		                        <p>Dummy Heading</p>
		                        <li class="active">
		                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
		                            <ul class="collapse list-unstyled" id="homeSubmenu">
		                                <li>
		                                    <a href="#">Home 1</a>
		                                </li>
		                                <li>
		                                    <a href="#">Home 2</a>
		                                </li>
		                                <li>
		                                    <a href="#">Home 3</a>
		                                </li>
		                            </ul>
		                        </li>
		                        <li>
		                            <a href="#">About</a>
		                        </li>
		                        <li>
		                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
		                            <ul class="collapse list-unstyled" id="pageSubmenu">
		                                <li>
		                                    <a href="#">Page 1</a>
		                                </li>
		                                <li>
		                                    <a href="#">Page 2</a>
		                                </li>
		                                <li>
		                                    <a href="#">Page 3</a>
		                                </li>
		                            </ul>
		                        </li>
		                        <li>
		                            <a href="#">Portfolio</a>
		                        </li>
		                        <li>
		                            <a href="#">Contact</a>
		                        </li>
		                    </ul>

		                    <ul class="list-unstyled CTAs">
		                        <li>
		                            <a href="#" class="download">Download source</a>
		                        </li>
		                        <li>
		                            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
		                        </li>
		                    </ul>
		                </nav>
		            </div>
		        </div>
		        <div class="c-products">
		            <div class="c-products__filter u-flex_center u-flex_wrap">
		                <div class="u-button3">
		                    <a>Бага Үнэ</a>
		                </div>
		                <div class="u-button3">
		                    <a>Их үнэ</a>
		                </div>
		                <div class="u-button3">
		                    <a>Шинэ</a>
		                </div>
		                <div class="u-button3">
		                    <a>Хуучин</a>
		                </div>
		                <div class="c-products__filter--index">
		                    Нийт <span>60</span> илэрцээс <span>16</span> нь харуулж байна.
		                </div>
		            </div>
		            <div class="c-products__items u-flex_wrap">
										@for ($i=0;$i<16;$i++)
											@include('components.productCard',['p' => $products ])
										@endfor
		            </div>
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
