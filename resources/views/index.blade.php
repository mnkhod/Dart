@extends('layouts.home')
@section('content')
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(./img/4.jpg)">
                <div class="u-container slider-info">
                    <h2>Шинэ бараа ирлээ</h2>
                    <h1>Хоёрыг авбал нэг үнэгүй онцгой урамшуулал</h1>
                    <span>Энэ сарыг дуустал</span>
                    <button class="u-button">Очиж үзэх</button>
                </div>
            </div>
            <div class="swiper-slide" style="background-image:url(./img/photo-1582172958571-208b55ba4bab.jpg)">
                <div class="u-container slider-info">
                    <h2>Шlor sit amet consect</h2>
                    <h1>Lorem ipsum dololium tempore!</h1>
                    <span>Эlor sit amet consectл</span>
                    <button class="u-button">Очиж үзэх</button>
                </div>
            </div>
            <div class="swiper-slide" style="background-image:url(./img/photo-1563941811030-aecd7b37eb66.jpg)">
                <div class="u-container slider-info">
                    <h2>Шинэ бараа ирлээ</h2>
                    <h1>Хоёрыг авбал нэг үнэгүй онцгой урамшуулал</h1>
                    <span>Энэ сарыг дуустал</span>
                    <button class="u-button">Очиж үзэх</button>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>

    <!-- Items Content -->
    <div class="c-content">
        <div class="u-container">
            <h2>Онцлох
                <span class="u-semititle">Бүтээгдэхүүн</span>
            </h2>
            <h3>Танд санал болгох манай бүтээгдэхүүн</h3>
            <div class="c-content__items">

	      @for ($i=0;$i<8;$i++)
                <div class="c-content__items--item">
                    @include('components.productCard')
                </div>
	      @endfor

            </div>
            <button class="u-button">Бүх бүтээгдэхүүн харах</button>
        </div>
    </div>

    <!-- Wrapper -->
    <div class="c-rapper" style="background-image: ">
            <div class="c-rapper__info">
                <h2>Ирж буй тэмцээн</h2>
                <h3>Ирэх сарын 15-наас 17-ны хооронд тэмцээн болно.</h3>
                <button class="u-button">Дэлгэрэнгүй</button>
            </div>
    </div>

    <!-- Player Content -->
    <div class="c-content">
        <div class="u-container">
            <h2>
                Онцлох
                <span class="u-semititle">Тамирчин</span>
            </h2>
            <div class="c-content__items">
                @for($i=0; $i<4; $i++)
                    <div class="c-content__items--item">
                        @include('components.playerCard')
                    </div>
                @endfor
            </div>
            <button class="u-button">Бүх тоглогчид харах</button>
        </div>
    </div>

    <!-- Blog Content -->
    <div class="c-content">
        <div>
            <h2 class="mb-5">
                Онцлох
                <span class="u-semititle">
                    Нийтлэл
                </span>
            </h2>
            <div class="c-content__blogs">
                <img class="a-imgshadow a-left" src="/img/darts-wallpaper-hd-57876-59641-hd-wallpapers.jpg.jpg" alt="">
                <div class="c-content__blogs--img a-left">
                    <img class="scale-image a-left" src="/img/darts-wallpaper-hd-57876-59641-hd-wallpapers.jpg.jpg" alt="">
                </div>
                <div class="c-content__blogs--info a-right">
                    <div class="a-relative">
                        <h4>Мэдээ</h4>
                        <h2>Дартс гэж юу вэ?</h2>
                        <p>sit impedit aliquid animi. Ea ipsa deleniti ut nulla commodi veritatis.</p>
                        <div class="c-content__blogs--info--admin u-flex_wrap">
                            <div class="c-content__blogs--info--admin_info">
                                <img src="/img/New folder/scream1.png" alt="">
                                <div>
                                    <span>Админ</span></br>
                                    <p>2020.02.02</p>
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
            <div class="c-content__blogs">
                <img class="a-imgshadow a-right" src="/img/darts-wallpaper-hd-57876-59641-hd-wallpapers.jpg.jpg" alt="">
                <div class="c-content__blogs--img a-right">
                    <img class="scale-image a-right" src="/img/darts-wallpaper-hd-57876-59641-hd-wallpapers.jpg.jpg" alt="">
                </div>
                <div class="c-content__blogs--info a-left">
                    <div class="a-relative">
                        <h4>Мэдээ</h4>
                        <h2>Дартс гэж юу вэ?</h2>
                        <p>sit impedit aliquid animi. Ea ipsa deleniti ut nulla commodi veritatis.</p>
                        <div class="c-content__blogs--info--admin u-flex_wrap">
                            <div class="c-content__blogs--info--admin_info">
                                <img src="/img/New folder/scream1.png" alt="">
                                <div>
                                    <span>Админ</span></br>
                                    <p>2020.02.02</p>
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
        </div>
    </div>

    <!-- Quote -->
    <div class="c-content">
        <div class="c-content__quote">
            <p>Lorem ipsum dolor sit amet consectetur, adt nobis. sectetur, adt   ipsum dolor sit amet consectetur, adsectetur, adt</p>
            <div class="u-flex_center">
                <img src="/img/New folder/scream1.png" alt="">
                <div class="c-content__quote--info">
                    <h5>Чиний дуртай авга ах</h5>
                    <span>Ийм тийм газрын ийм псда</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Brands -->
    <div class="c-content">
        <div class="c-content__brand">
            <div class="c-content__brand--image">
                <img src="/img/Winmau Logo B.jpg" alt="">
                <img class="alt-image" src="/img/Winmau Logo B.jpg">
            </div>
            <div class="c-content__brand--image">
                <img src="/img/brand1.png" alt="">
                <img class="alt-image" src="/img/brand1.png" alt="">
            </div>
            <div class="c-content__brand--image">
                <img src="/img/brand2.png" alt="">
                <img class="alt-image" src="/img/brand2.png" alt="">
            </div>
            <div class="c-content__brand--image">
                <img src="/img/brand3.png" alt="">
                <img class="alt-image" src="/img/brand3.png" alt="">
            </div>
            <div class="c-content__brand--image">
                <img src="/img/brand2.png" alt="">
                <img class="alt-image" src="/img/brand2.png" alt="">
            </div>
        </div>
    </div>

        <!-- Wrapper -->
    <div class="c-rapper2">
        <div class="c-rapper2__info">
            <h2>Зуны шинэ коллекц</h2>
            <h3>Үүнээс илүү бэлэг үгүй</h3>
            <button class="u-button">Дэлгэрэнгүй</button>
        </div>
    </div>

@endsection
