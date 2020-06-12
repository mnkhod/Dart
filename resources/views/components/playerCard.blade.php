<div class="u-pcard2 a-silver">
	<div class="u-pcard2__img">
		<img src="{{ Voyager::image($p->image) }}" alt="">
		<div class="u-pcard2__img--hover">
			<p>Nickname: {{$p->nickname}}</p>
			<p>Dart Style: {{$p->dartStyle}}</p>
			<p>Throwing Style: {{$p->throwingStyle}}</p>
			<p>Best Match: {{$p->bestMatch}}</p>
		</div>
	</div>
	<span id="player_name">{{$p->name}}</span>
	<span id="player_role">{{$p->rankTitle}}</span>
</div>  
