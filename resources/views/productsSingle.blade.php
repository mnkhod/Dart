@extends('layouts.main')

@section('content')
	<!-- Spacing -->
	<div class="a-redspacing"></div>

	<!-- Product Information -->
	<div class="c-single">
			<div class="u-container2 u-flex_wrap">
					<div class="c-single__images">
							<div class="c-single__images--big">
									<img src="{{ Voyager::image(json_decode($product->pictures)[0]) }}" alt="">
							</div>
							<div class="c-single__images--slider">
										<!-- Swiper -->
											<div class="swiper-container">
													<div class="swiper-wrapper">
                          @foreach(json_decode($product->pictures) as $i)
													<div class="swiper-slide"><img src="{{ Voyager::image($i) }}" alt=""></div>
                          @endforeach
													</div>
													<!-- Add Arrows -->
													<div class="swiper-button-next theme-red"></div>
													<div class="swiper-button-prev theme-red"></div>
											</div>
							</div>
					</div>
					<div class="c-single__info">
							<div class="c-single__info--path">
                  <?php 
                    $cat = App\Category::where('id',$product->categoryID)->first();
                    $topCat = App\TopCategory::where('id',$cat->top_category_id)->first();
                  ?>
									<span id="">{{ $topCat->name }}</span>
									<span class="dot">·</span>
									<span>{{ $cat->name }}</span>
							</div>
							<h2>{{ $product->name }}</h2>
							<div class="u-card__content--info_rating">
                  @for($i=0;$i<$product->rating;$i++)
									<i class="fa fa-star rating1" aria-hidden="true"></i>
                  @endfor
							</div>
							<div class="u-hline"></div>
							<span id="p-price">{{$product->price}}$</span>
							<p>{{$product->description}}</p>
							<div class="u-flex_between">
									<div class="c-single__info--quan quantity">
											<input type="number" min="0" max="99" step="1" value="1">
											<div class="c-single__info--quan_i">
													<i class="fas fa-plus-square"></i>
													<i class="fas fa-minus-square"></i>
											</div>
									</div>
									<div class="u-button">
											<a>Сагсанд хийх</a>
									</div>
									<div class="u-button_red">
											<a>Худалдаж авах</a>
									</div>
							</div>
							<div class="u-flex_between c-single__info--social">
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
			<div class="u-container2 c-single__tabs">
					<div class="tabs">
							<nav role='navigation' class="transformer-tabs">
								<ul>
									<li><a  class="hoes active">Product Information</a></li>
									<li><a  class="hoes">Darts Technical Specification</a></li>
									<li><a  class="hoes">Darts Profile</a></li>
									<li><a  class="hoes">Darts Grip Characteristics</a></li>
									<li><a  class="hoes">Darts Finish</a></li>
									<li><a  class="hoes">General Information</a></li>
								</ul>
							</nav>

							<div id="tab-1" class="active hoes2">
									<table style="width:100%">
											<tr>
												<th>Darts</th>
												<td>x3 Darts per set</td>
											</tr>
											<tr>
												<th>Packaging</th>
												<td>Premium, Winmau Aluminum Point Protector</td>
											</tr>
											<tr>
												<th>Flights</th>
												<td>x1 Prism Alpha standard extra thick</td>
											</tr>
											<tr>
													<th>Shafts</th>
													<td>x1 Prism Force medium 7020.204</td>
												</tr>
									</table>
							</div>
							<div id="tab-2" class="hoes2">
									<table style="width:100%">
											<tr>
												<th>Tab 2</th>
												<td>x3 Darts per set</td>
											</tr>
											<tr>
												<th>Packaging</th>
												<td>Premium, Winmau Aluminum Point Protector</td>
											</tr>
											<tr>
												<th>Flights</th>
												<td>x1 Prism Alpha standard extra thick</td>
											</tr>
											<tr>
													<th>Shafts</th>
													<td>x1 Prism Force medium 7020.204</td>
												</tr>
									</table>
							</div>
							<div id="tab-3" class="hoes2">
									<table style="width:100%">
											<tr>
												<th>Tab 3</th>
												<td>x3 Darts per set</td>
											</tr>
											<tr>
												<th>Packaging</th>
												<td>Premium, Winmau Aluminum Point Protector</td>
											</tr>
											<tr>
												<th>Flights</th>
												<td>x1 Prism Alpha standard extra thick</td>
											</tr>
											<tr>
													<th>Shafts</th>
													<td>x1 Prism Force medium 7020.204</td>
												</tr>
									</table>
							</div>
							<div id="tab-4" class="hoes2">
									<table style="width:100%">
											<tr>
												<th>Tab 4</th>
												<td>x3 Darts per set</td>
											</tr>
											<tr>
												<th>Packaging</th>
												<td>Premium, Winmau Aluminum Point Protector</td>
											</tr>
											<tr>
												<th>Flights</th>
												<td>x1 Prism Alpha standard extra thick</td>
											</tr>
											<tr>
													<th>Shafts</th>
													<td>x1 Prism Force medium 7020.204</td>
												</tr>
									</table>
							</div>
							<div id="tab-5" class="hoes2">
									<table style="width:100%">
											<tr>
												<th>Tab 5</th>
												<td>x3 Darts per set</td>
											</tr>
											<tr>
												<th>Packaging</th>
												<td>Premium, Winmau Aluminum Point Protector</td>
											</tr>
											<tr>
												<th>Flights</th>
												<td>x1 Prism Alpha standard extra thick</td>
											</tr>
											<tr>
													<th>Shafts</th>
													<td>x1 Prism Force medium 7020.204</td>
												</tr>
									</table>
							</div>
							<div id="tab-6" class="hoes2">
									<table style="width:100%">
											<tr>
												<th>Tab 6</th>
												<td>x3 Darts per set</td>
											</tr>
											<tr>
												<th>Packaging</th>
												<td>Premium, Winmau Aluminum Point Protector</td>
											</tr>
											<tr>
												<th>Flights</th>
												<td>x1 Prism Alpha standard extra thick</td>
											</tr>
											<tr>
													<th>Shafts</th>
													<td>x1 Prism Force medium 7020.204</td>
												</tr>
									</table>
							</div>
					</div>
			</div>
			<div class="u-container2 c-single__video">
					<iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
					</iframe>
			</div>
			<div class="u-container2 c-single__items">
					<h5>Төстэй бараанууд</h5>
					<div class="c-content__items">
	            @foreach(App\Product::all() as $p)
							<div class="c-content__items--item">
								@include('components.productCard',['p'=> $p])
							</div>
              @endforeach
					</div>
			</div>
			<div class="u-container2 c-single__comments">
					<h4>Барааны нэрэнд нийт 3 сэтгэгдэл байна.</h4>
					<div class="c-single__comments--all">
							<div class="c-single__comments--all--one">
									<div class="c-single__comments--all--one_info">
											<img src="/img/New folder/scream1.png" alt="">
											<div>
													<span>Чиний дуртай авга ах</span>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus harum sequi cumque animi eum illum labore distinctio excepturi! Laboriosam aut neque illo, corrupti perferendis quisquam placeat aspernatur sequi quam dolorum.</p>
											</div>
									</div>
									<div class="c-single__comments--all--one_rating">
											<div class="u-card__content--info_rating">
													<i class="fa fa-star rating1" aria-hidden="true"></i>
													<i class="fa fa-star rating2" aria-hidden="true"></i>
													<i class="fa fa-star rating3" aria-hidden="true"></i>
													<i class="fa fa-star rating4" aria-hidden="true"></i>
													<i class="fa fa-star rating5" aria-hidden="true"></i>
											</div>
											<span>2019/12/23</span>
									</div>
							</div>
							<div class="c-single__comments--all--one">
									<div class="c-single__comments--all--one_info">
											<img src="/img/New folder/scream1.png" alt="">
											<div>
													<span>Чиний дуртай авга ах</span>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus harum sequi cumque animi eum illum labore distinctio excepturi! Laboriosam aut neque illo, corrupti perferendis quisquam placeat aspernatur sequi quam dolorum.</p>
											</div>
									</div>
									<div class="c-single__comments--all--one_rating">
											<div class="u-card__content--info_rating">
													<i class="fa fa-star rating1" aria-hidden="true"></i>
													<i class="fa fa-star rating2" aria-hidden="true"></i>
													<i class="fa fa-star rating3" aria-hidden="true"></i>
													<i class="fa fa-star rating4" aria-hidden="true"></i>
													<i class="fa fa-star rating5" aria-hidden="true"></i>
											</div>
											<span>2019/12/23</span>
									</div>
							</div>
							<div class="c-single__comments--all--one">
									<div class="c-single__comments--all--one_info">
											<img src="/img/New folder/scream1.png" alt="">
											<div>
													<span>Чиний дуртай авга ах</span>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus harum sequi cumque animi eum illum labore distinctio excepturi! Laboriosam aut neque illo, corrupti perferendis quisquam placeat aspernatur sequi quam dolorum.</p>
											</div>
									</div>
									<div class="c-single__comments--all--one_rating">
											<div class="u-card__content--info_rating">
													<i class="fa fa-star rating1" aria-hidden="true"></i>
													<i class="fa fa-star rating2" aria-hidden="true"></i>
													<i class="fa fa-star rating3" aria-hidden="true"></i>
													<i class="fa fa-star rating4" aria-hidden="true"></i>
													<i class="fa fa-star rating5" aria-hidden="true"></i>
											</div>
											<span>2019/12/23</span>
									</div>
							</div>
					</div>
			</div>
			<div class="u-container2 c-single__inputs">
					<h4>Сэтгэгдэл үлдээх</h4>
					<span>Таны өгөх үнэлгээ</span>
					<div class="u-card__content--info_rating">
							<i class="fa fa-star rating1" aria-hidden="true"></i>
							<i class="fa fa-star rating2" aria-hidden="true"></i>
							<i class="fa fa-star rating3" aria-hidden="true"></i>
							<i class="fa fa-star rating4" aria-hidden="true"></i>
							<i class="fa fa-star rating5" aria-hidden="true"></i>
					</div>
					<span>Таны сэтгэгдэл</span>
					<textarea name="" id="" cols="30" rows="10"></textarea>
					<span>Таны нэр *</span>
					<input type="text" name="" id="">
					<span>Таны email*</span>
					<input type="text" name="" id="">
					<div class="u-button2">Илгээх</div>
			</div>
	</div>

@endsection

@section('js')
<script src="/js/mytabs.js"></script>
@endsection

