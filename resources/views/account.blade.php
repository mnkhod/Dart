@extends('layouts.main')

@section('content')

<div class="c-accheader">
    <div class="c-accheader__main">
        <img src="/img/account1.png" alt="">
        <a>Үндсэн Хэсэг</a>
    </div>
    <div class="c-accheader__pass">
        <img src="/img/filter.png" alt="">
        <a>Password</a>
    </div>
    <div class="c-accheader__cart">
        <img src="/img/shopping-bag-52.png" alt="">
        <a>Миний сагс</a>
    </div>
    <div class="c-accheader__queue">
        <img src="/img/shopping-bag-52.png" alt="">
        <a>Захиалга</a>
    </div>
</div>

<div class="c-wrapper2 mb-5" style="background-image: url(/img/darts-wallpaper-hd-57876-59641-hd-wallpapers.jpg.jpg);">
        <div class="c-wrapper2__login">
            <img src="/img/New folder/scream1.png" alt="Login Image">
            <div class="c-wrapper2__login--box u-flex_wrap">
                <div class="c-wrapper2__login--box--full u-flex_wrap">
                    <h3>Нэр</h3>
                    <h3>Овог</h3>
                    <div class="login-input">
                        <input type="text">
                    </div>
                    <div class="login-input">
                        <input type="text">
                    </div>
                </div>
                <div class="c-wrapper2__login--box--full u-flex_wrap">
                    <h3 class="full">Хаяг</h3>
                    <div class="login-input">
                        <input type="text">
                    </div>
                    <div class="login-input">
                        <input type="text">
                    </div>
                    <div class="login-input">
                        <input type="text">
                    </div>
                    <div class="login-input">
                        <input type="text">
                    </div>
                </div>
                <div class="c-wrapper2__login--box--full u-flex_wrap">
                    <h3>Утасны дугаар</h3>
                    <h3>Цахим шуудан</h3>
                    <div class="login-input">
                        <input type="text">
                    </div>
                    <div class="login-input">
                        <input type="text">
                    </div>
                </div>
                <div class="c-wrapper2__login--button u-flex_wrap">
                    <div class="u-button">Хадгалах</div>
                    <div class="u-button_red">Гарах</div>
                </div>
            </div>
        </div>
</div>

<div class="u-container2 pt-5">
        <h5 class="some-title">Сүүлд хийсэн худалдан авалтууд</h5>
        <div class="c-content__items mt-4 mb-4">
            @for($i=0; $i<4; $i++)
                <div class="c-content__items--item">
                    @include('components.productCard')
                </div>
            @endfor
        </div>
</div>
@endsection