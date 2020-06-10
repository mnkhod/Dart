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
	<div class="c-products c-player">
			<div class="c-products__filter u-flex_center u-flex_wrap">
					<div class="u-button3">
							<a>Нийт</a>
					</div>
					<div class="u-button3">
							<a>Алт</a>
					</div>
					<div class="u-button3">
							<a>Мөнгө</a>
					</div>
					<div class="u-button3">
							<a>Хүрэл</a>
					</div>
					<div class="c-products__filter--index">
							Нийт <span>60</span> илэрцээс <span>16</span> нь харуулж байна.
					</div>
			</div>
			<div class="c-products__items u-flex_wrap mt-2">
				@for($i=0; $i<8; $i++)
					<div class="c-products__items--item">
						@include('components.playerCard')
					</div>
				@endfor
			</div>
			<div class="c-content">
					<div class="c-content__nav full">
							<div class="c-content__nav--navigation">
							</div>
					</div>
			</div>
	</div>
</div>
@endsection

