		<div class="u-card">
				<div class="u-card__content">
						<div class="u-card__content--img">
							<img class="u-card__content--img_pri" src="{{ Voyager::image(json_decode($p->pictures)[0]) }}" alt="">
							<img class="u-card__content--img_sec" src="{{ Voyager::image(json_decode($p->pictures)[1]) }}" alt="">
<!--
							<->get()->first()img class="sale-countdown" src="/img/countdown.png" alt="">
                            <div class="sale-information">
                                <h5>Хямдрал дуусахад:</h5>
                                <span>00X</span>
                                <span id="days">@hour</span>
                                <span id="hour">00</span>
                                <span id="minute">00</span>
                                <span id="seconds">00</span>
                            </div>
-->
						</div>
						<div class="u-card__content--img--hover">
								<div class="u-card__content--img--hover_box">
                  <a href="{{ route('productSingle',$p->id) }}">
										<img class="u-card__content--img--hover_box-pri" src="/img/New folder/search1.png" alt="">
										<img class="u-card__content--img--hover_box-sec" src="/img/New folder/search5.png" alt="">
                  </a>
								</div>
								<div class="u-card__content--img--hover_box">
										<img class="u-card__content--img--hover_box-pri" src="/img/New folder/heart1.png" alt="">
										<img class="u-card__content--img--hover_box-sec" src="/img/heart5.png" alt="">
								</div>
								<div class="u-card__content--img--hover_box">
										<img class="u-card__content--img--hover_box-pri" src="/img/New folder/compare1.png" alt="">
										<img class="u-card__content--img--hover_box-sec" src="/img/compare3.png" alt="">
								</div>
						</div>
						<div class="u-card__content--info">
								<div class="u-card__content--info_rating">
                    @for ($i=0;$i<5;$i++)
                      @if ($p->rating > $i)
                        <i class="fa fa-star rating1" aria-hidden="true"></i>
                      @else
                        <i class="fa fa-star rating3" aria-hidden="true"></i>
                      @endif
                    @endfor
								</div>
								<h4>{{$p->name}}</h4>
								<span id="p-type">{{App\Category::where('id',$p->categoryID)->first()->name}}</span></br>
								<div class="">
										<span id="p-price">{{$p->price}}$</span>
<!--
										<span id="p-price_old">230,000$</span>
-->
								</div>
						</div>
						<button class="u-card__content--button" formaction="{{ route('cart') }}">Сагсанд хийх <span>+</span></button>
				</div>
		</div>
