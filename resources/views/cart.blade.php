@extends('layouts.main')

@section('content')
	<div class="c-cart u-container2">
			<div class="u-flex_end c-cart__rap">
					<div class="u-button_red">Сагс хоослох</div>
			</div>
			<div class="c-cart__items">
					<span class="c-cart__items--title">Бүтээгдэхүүн</span>
					<span class="c-cart__items--title"> </span>
					<span class="c-cart__items--title">Тайлбар</span>
					<span class="c-cart__items--title">Ширхэг</span>
					<span class="c-cart__items--title">Үнэ</span>
					<span class="c-cart__items--title">Нийт үнэ</span>
					<span class="c-cart__items--title"> </span>
					<img src="/img/New folder/baraa-2.png" alt="">
					<h4>Барааны нэр</h4>
					<p>Lorem ipsum dolor sit endus, est facilis dolor minima laudantium, fugit at voluptates adipisci officiis nostrum praesentium dolorem numquam hic ex!</p>
					<div class="c-single__info--quan quantity">
							<i class="fa fa-close"></i>
							<input type="number" min="0" max="99" step="1" value="1">
							<div class="c-single__info--quan_i">
									<i class="fas fa-plus-square"></i>
									<i class="fas fa-minus-square"></i>
							</div>
					</div>
					<span class="item-price">150'000$</span>
					<span class="item-price">300'000$</span>
					<i class="fa fa-close hide"></i>
					<img src="/img/New folder/baraa-2.png" alt="">
					<h4>Барааны нэр</h4>
					<p>Lorem ipsum dolor sit endus, est facilis dolor minima laudantium, fugit at voluptates adipisci officiis nostrum praesentium dolorem numquam hic ex!</p>
					<div class="c-single__info--quan quantity">
							<i class="fa fa-close"></i>
							<input type="number" min="0" max="99" step="1" value="1">
							<div class="c-single__info--quan_i">
									<i class="fas fa-plus-square"></i>
									<i class="fas fa-minus-square"></i>
							</div>
					</div>
					<span class="item-price">150'000$</span>
					<span class="item-price">300'000$</span>
					<i class="fa fa-close hide"></i>
					<img src="/img/New folder/baraa-2.png" alt="">
					<h4>Барааны нэр</h4>
					<p>Lorem ipsum dolor sit endus, est facilis dolor minima laudantium, fugit at voluptates adipisci officiis nostrum praesentium dolorem numquam hic ex!</p>
					<div class="c-single__info--quan quantity">
							<i class="fa fa-close"></i>
							<input type="number" min="0" max="99" step="1" value="1">
							<div class="c-single__info--quan_i">
									<i class="fas fa-plus-square"></i>
									<i class="fas fa-minus-square"></i>
							</div>
					</div>
					<span class="item-price">150'000$</span>
					<span class="item-price">300'000$</span>
					<i class="fa fa-close hide"></i>
			</div>
			<div class="c-cart__billing">
					<div class="c-cart__billing--info">
							<i class="fas fa-map-marker-alt"></i>
							<span class="blabla">Хүргүүлэх хаяг:</span>
							<div class="c-cart__billing--info--location">
									<div class="c-cart__billing--info--location--quarter">
											<input type="text" name="" id="" placeholder="Аймаг">
									</div>
									<div class="c-cart__billing--info--location--quarter">
											<input type="text" name="" id="" placeholder="Сум/Дүүрэг">
									</div>
									<div class="c-cart__billing--info--location--quarter">
											<input type="text" name="" id="" placeholder="Хороо">
									</div>
									<div class="c-cart__billing--info--location--quarter">
											<input type="text" name="" id="" placeholder="Байр болон тоот">
									</div>
							</div>
							<i class="far fa-credit-card"></i>
							<span class="blabla">Картны мэдээллээ оруулна уу:</span>
							<div class="c-cart__billing--info--location">
									<h3>Карт эзэмшигчийн нэр</h3>
									<div class="c-cart__billing--info--location--name">
											<input type="text" name="" id="">
											<i class="fas fa-check"></i>
									</div>
									<h3>Картны дугаар</h3>
									<div class="naming-classes-suck">
											<div class="card-number">
													<div class="c-cart__billing--info--location--name">
															<input type="number" name="" id="" min="1000" max="9999">
													</div>
													<span>--</span>
													<div class="c-cart__billing--info--location--name">
															<input type="number" name="" id="" min="1000" max="9999">
													</div>
													<span>--</span>
													<div class="c-cart__billing--info--location--name">
															<input type="number" name="" id="" min="1000" max="9999">
													</div>
													<span>--</span>
													<div class="c-cart__billing--info--location--name">
															<input type="number" name="" id="" min="1000" max="9999">
													</div>
											</div>
											<i class="fas fa-check"></i>
									</div>
									<h3>Дуусах хугацаа</h3>
									<div class="c-cart__billing--info--location--half">
											<input type="text" name="" id="" placeholder="">
											<i class="fas fa-check"></i>
									</div>
									<div class="c-cart__billing--info--location--half">
											<input type="text" name="" id="" placeholder="">
											<i class="fas fa-check"></i>
									</div>
									<h3 class="weird-title">CVV дугаар</h3>
									<h3 class="weird-title2">Е-Пин</h3>
									<div class="c-cart__billing--info--location--half">
											<input type="text" name="" id="" placeholder="">
											<i class="fas fa-check"></i>
									</div>
									<div class="c-cart__billing--info--location--half">
											<input type="text" name="" id="" placeholder="">
											<i class="fas fa-check"></i>
									</div>
							</div>
					</div>
					<div class="c-cart__billing--purchase">
							<div class="c-cart__billing--purchase--price">
									Үндсэн үнэ:
									<span>380'000$</span>
							</div>
							<div class="c-cart__billing--purchase--price">
									Хүргэлтийн үнэ:
									<span>20'000$</span>
							</div>
							<div class="c-cart__billing--purchase--price">
									Урамшуулал:
									<span>0$</span>
							</div>
							<div class="vl"></div>
							<div class="c-cart__billing--purchase--price">
									Эцсийн дүн:
									<span>400'000$</span>
							</div>
							<div class="u-button">Худалдан авах</div>
					</div>
			</div>
	</div>
@endsection
