	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="{{'storage/'.$logo->logo}}" alt="">
				<p>{!! App\Helpers\ColorChanger::color(($independant->banniere_text))!!}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($bannieres as $banniere)
				<div class="item  hero-item" data-bg="{{asset('storage/'.$banniere->img)}}"></div>
			@endforeach
		</div>
	</div>
	<!-- Intro Section -->