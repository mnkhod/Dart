@extends('layouts.main')


@section('content')
	<div class="c-rapper2 a-article">
	        <div class="c-rapper2__info">
	            <h2>Зуны шинэ коллекц</h2>
	            <h3>Үүнээс илүү бэлэг үгүй</h3>
	            <button class="u-button">Дэлгэрэнгүй</button>
	        </div>
	</div>
	<div class="c-nav">
        <div class="c-nav__items">
            <div class="u-button2">
                <a>Нийтлэл</a>
            </div>
            <div class="u-button2">
                <a>Мэдээ</a>
            </div>
        </div>
        <div class="c-nav__date">
            <div class="u-button2">
                <span class="material-icons">
                    filter_list
                    </span>
                <a>
                    2020 оны 6 сар
                </a>
            </div>
        </div>
    </div>
		<div class="c-content pt-0">
            @foreach($blogs as $blog)
                <div class="c-content__blogs">
                    <img class="a-imgshadow a-left" src="{{ Voyager::image($blog->picture) }}" alt="">
                    <div class="c-content__blogs--img a-left">
                        <img class="scale-image a-left" src="/img/darts-wallpaper-hd-57876-59641-hd-wallpapers.jpg.jpg" alt="">
                    </div>
                    <div class="c-content__blogs--info a-right">
                        <div class="a-relative">
                            <h4>{{ App\BlogCategory::where('id',$blog->blogCategoryID)->first()->name }}</h4>
                            <a href="{{ route('blogSingle',$blog->id) }}"><h2>{{Str::limit($blog->name,15)}}</h2></a>
                            <p>{{Str::limit($blog->description,70)}}</p>
                            <div class="c-content__blogs--info--admin u-flex_wrap">
                                <div class="c-content__blogs--info--admin_info">
                                    <img src="{{ Voyager::image(App\User::where('id',$blog->userID)->first()->avatar) }}" alt="">
                                    <div>
                                      <span>{{App\User::where('id',$blog->userID)->first()->name}}</span></br>
                                      <?php $curr = new DateTime($blog->created_at); ?>
                                      <p>{{$curr->format('Y-m-d')}}</p>
                                    </div>
                                </div>
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
            @endforeach

            <!-- Apparently, this is a fucking mobile versioun of blogs, which makes me lose my shit and do double the work -->
            @for($i=0; $i<4; $i++)
                <div class="c-content__blogs2">
                    <div class="c-content__blogs2--single">
                        <img class="c-content__blogs2--single--img" src="/img/darts-wallpaper-hd-57876-59641-hd-wallpapers.jpg.jpg" alt="">
                        <div class="c-content__blogs2--single--info">
                            <div class="u-flex_between">
                                <h4>Мэдээ</h4>
                                <span>2020.20.20</span>
                            </div>
                            <h3>Дартс гэж юу вэ?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <div class="c-content__blogs2--single--info--social u-flex_between">
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
                        <img class="c-content__blogs2--single--author" src="/img/New folder/scream1.png" alt="">
                        <p class="c-content__blogs2--single--name">Овог Админ</p>
                    </div>
                </div>
            @endfor
        </div>
		<div class="c-content">
            <div class="c-content__nav">
                <div class="c-content__nav--navigation">
                </div>
            </div>
        </div>

@endsection

