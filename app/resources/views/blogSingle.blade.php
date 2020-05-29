@extends('layouts.main')

@section('content')
<div class="c-rapper2 a-article">
	<div class="c-rapper2__info">
			<h2>Зуны шинэ коллекц</h2>
			<h3>Үүнээс илүү бэлэг үгүй</h3>
			<button class="u-button">Дэлгэрэнгүй</button>
	</div>
</div>

<div class="u-container">
	<div class="c-blogsingle u-flex_wrap">
			<div class="c-blogsingle__left">
					<div class="c-blogsingle__left--title">
							<div class="c-blogsingle__left--title--author">
									<img src="/img/New folder/scream1.png" alt="">
									<span>Админ</span>
									<div class="blyad">
											Админ
											<p>2020.20.20</p>
									</div>
							</div>
							<div class="c-blogsingle__left--title--name">
									<h2>Дартс гэж юу вэ?</h2>
									<span>2020.20.20</span>
							</div>
					</div>
					<div class="c-blogsingle__left--content">
							<div class="c-blogsingle__left--content--img">
									<img src="/img/darts-wallpaper-hd-57876-59641-hd-wallpapers.jpg.jpg" alt="">
									<div class="u-button_red">Нийтлэл</div>
							</div>
							<div class="c-blogsingle__left--content--name">
									<h2>Дартс гэж юу вэ?</h2>
							</div>
							<h4>Эхний хэсэг</h4>
							<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nemo labore libero nostrum, deleniti qui? Aut a earum in ullam mollitia quibusdam ut repellendus inventore beatae, quae tenetur nobis velit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nemo labore libero nostrum, deleniti qui? Aut a earum in ullam mollitia quibusdam ut repellendus inventore beatae, quae tenetur nobis velit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nemo labore libero nostrum, deleniti qui? Aut a earum in ullam mollitia quibusdam ut repellendus inventore beatae, quae tenetur nobis velit!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nemo labore libero nostrum, deleniti qui? Aut a earum in ullam mollitia quibusdam ut repellendus inventore beatae, quae tenetur nobis velit!</p>
							<h4>Хоер дахь хэсэг</h4>
							<p>Lorem ipsum, dolor  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nemo labore libero nostrum, deleniti qui? Aut a earum in ullam mollitia quibusdam ut repellendus inventore beatae, quae teLorem ipsum dolor sit amet consectetur adipisicing elit. Quis nemo labore libero nostrum, deleniti qui? Aut a earum in ullam mollitia quibusdam ut repellendus inventore beatae, quae Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nemo labore libero nostrum, deleniti qui? Aut a earum in ullam mollitia quibusdam ut repellendus inventore beatae, quae tenetur nobis velit! tenetur nobis velit!netur nobis velit!sit amet consectetur adipisicing elit. In earum aperiam repellendus, adipisci odit repudiandae quidem officiis cumque quisquam voluptate, sunt nam velit repellat ex, dolor voluptas assumenda maxime consequatur!</p>
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
			<div class="c-blogsingle__right">
					<div class="c-blogsingle__right--title">
							<h3>Бусад нийтлэлүүд</h3>
					</div>
					<div class="u-flex_wrap" style="width: 100%;">
						@for($i=0; $i<4; $i++)
							<div class="c-blogsingle__right--card">
									@include('blogCard')
							</div>
						@endfor
					</div>
			</div>
	</div>
</div>
@endsection

