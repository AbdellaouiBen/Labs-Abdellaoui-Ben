	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					@foreach ($servicesRapides as $servicesRapide)
						
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card" style="height: 380px">
							<div class="icon">
								<i class="{{$servicesRapide->icon}}"></i>
							</div>
							<h2>{{$servicesRapide->titre}}</h2>
							<p>{{$servicesRapide->description}}</p>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</div>
		<!-- card section end-->