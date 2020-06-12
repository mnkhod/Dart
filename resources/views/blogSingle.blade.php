@extends('layouts.main')
@section('link')
<style>
.c-blogsingle__left--title--name h2{
  font-size: 1em;
}
</style>
@endsection

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
                  <?php $curr = new DateTime($blog->created_at); ?>
									<img src="/img/New folder/scream1.png" alt="">
									<span>{{App\User::where('id',$blog->userID)->first()->name}}</span>
									<div class="blyad">
											{{App\User::where('id',$blog->userID)->first()->name}}
											<p>{{$curr->format('Y-m-d')}}</p>
									</div>
							</div>
							<div class="c-blogsingle__left--title--name">
									<h2>{{ $blog->name }}</h2>
									<span>{{$curr->format('Y-m-d')}}</span>
							</div>
					</div>
					<div class="c-blogsingle__left--content">
							<div class="c-blogsingle__left--content--img">
									<img src="{{ Voyager::image($blog->picture) }}" alt="">
									<div class="u-button_red">{{ App\BlogCategory::where('id',$blog->blogCategoryID)->first()->name }}</div>
							</div>
							<div class="c-blogsingle__left--content--name">
									<h2>Дартс гэж юу вэ?</h2>
							</div>
							<p>{{$blog->description}}</p>
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
						@foreach(App\Blog::all() as $b)
							<div class="c-blogsingle__right--card">
									@include('components.blogCard',['blog' => $b])
							</div>
						@endforeach
					</div>
			</div>
	</div>
</div>
@endsection

