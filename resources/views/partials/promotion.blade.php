	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>{!! App\Helpers\ColorChanger::color(($independant->promotion_titre))!!}</h2>
					<p>{{$independant->promotion_text}}</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="#form" class="site-btn btn-2">Browse</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->